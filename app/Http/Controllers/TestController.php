<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Mcquestion;
use DB;
use Auth;
use Illuminate\Support\Facades\Input;

$mc = Mcquestion::all();
class TestController extends Controller
{
    private $mc;
    private $totalgold;
    private $totalquestion;
    public function __construct()
    {
        $this->mc = Mcquestion::all();
        $this->totalgold = 0;
        $this->totalquestion;
    }

    public function index(){
        //$totalquestion = [1,2,3,4,5];
       // $arrayList[0] = $totalquestion;
        //$arrayList[1] = $totalquestion;
        //dd($arrayList);
        $playQuestionNum = 0;
        $mc = $this->mc;
        $totalgold = $this->totalgold;
        return view('gameTest1', compact('mc','playQuestionNum','totalgold'));
    }

    public function result(Request $request){
        $mc = $this->mc;
        $mc_num = count($mc);
        $playQuestionNum = $request->input('question_num');
        if(Input::get('Next_question')){
            if(($playQuestionNum>=$mc_num)){
                $this->totalgold= $this->totalgold+$request->input('totalgold');
                $totalgold = $this->totalgold;
                return $this->finish( $totalgold);
            }
        $playQuestionNum = $request->input('question_num');//get the number of now do question number
        $this->totalgold= $this->totalgold+$request->input('totalgold');
        $totalgold = $this->totalgold;
        $mc = $this->mc;
        $questionResult = [['']];
        return view('gameTest1',compact('mc','playQuestionNum','totalgold'));
        }

        $mc = $this->mc;
        //dd(Auth::user()->id);
        $time = $request->input('time');
        $playQuestionNum = $request->input('question_num')-1;//which questionNum
        $tureAns = $this->getDbAns(($mc[$playQuestionNum]['attributes']['question_ans']), $playQuestionNum);//the mc ans
        if (Input::get('skip')) {
            $this->totalgold= $this->totalgold+$request->input('totalgold');
            $totalgold = $this->totalgold;
            $playAns = 'Null';//player choose ans
            $ans = "you skip the question";
            $gold = 0;
            $time = 0;
            return view('gameResult', compact('playAns', 'playQuestionNum', 'mc', 'ans', 'tureAns', 'gold','time','totalgold'));
        } elseif (Input::get('next')) {
            $playAns = $request->input('ans');//player choose ans
            $this->totalgold= $this->totalgold+$request->input('totalgold');
            $totalgold = $this->totalgold;
            if ($playAns == $mc[$playQuestionNum]['attributes']['question_ans']) {
                $gold = ($mc[$playQuestionNum]['attributes']['gold']);
            } else {
                $gold = 0;
            }
            if ($playAns == 'a') {
                $ans = ($mc[$playQuestionNum]['attributes']['mc_ans1']);
                return view('gameResult', compact('playAns', 'playQuestionNum', 'mc', 'ans', 'tureAns', 'gold','time','totalgold'));
            } elseif ($playAns == 'b') {
                $ans = ($mc[$playQuestionNum]['attributes']['mc_ans2']);
                return view('gameResult', compact('playAns', 'playQuestionNum', 'mc', 'ans', 'tureAns', 'gold','time','totalgold'));
            } elseif ($playAns == 'c') {
                $ans = ($mc[$playQuestionNum]['attributes']['mc_ans3']);
                return view('gameResult', compact('playAns', 'playQuestionNum', 'mc', 'ans', 'tureAns', 'gold','time','totalgold'));
            } elseif ($playAns == 'd') {
                $ans = ($mc[$playQuestionNum]['attributes']['mc_ans4']);
                return view('gameResult', compact('playAns', 'playQuestionNum', 'mc', 'ans', 'tureAns', 'gold','time','totalgold'));
            }
            //if(Input::get('ship')) {
            //    return "Yes";
            //}else{
            //    return "No";
            //    }

            //if($mc[$playQuestionNum-1]['attributes']['question_ans']==$playAns){
            //    return "nice";
            //}else{
            //    return "no";
            //}
            //dd(($mc[$playQuestionNum-1]['attributes']['question_ans']));
            //dd($playQuestionNum);
        }
    }

    public function getDbAns($answer,$num){
        $mc = $this->mc;
        if($answer=='a'){
            $qAns=($mc[$num]['attributes']['mc_ans1']);
        }elseif ($answer=='b'){
            $qAns=($mc[$num]['attributes']['mc_ans2']);
        }elseif($answer=='c'){
            $qAns=($mc[$num]['attributes']['mc_ans3']);
        }elseif($answer=='d'){
            $qAns=($mc[$num]['attributes']['mc_ans4']);
        }
        return $qAns;
    }

    public function finish($totalgold){
        return $totalgold;
    }
}
