<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Mcquestion;
use App\Fullquestion;
use DB;
use Auth;
use Illuminate\Support\Facades\Input;
use Session;

class ChallengeController extends Controller
{
    private $mc;
    public function __construct()
    {
        $this->mc = McQuestion::all();

    }
    public function index(){
        $playNumber = 0;
        $mc = Mcquestion::all();
        $fill = Fullquestion::all();//
        $totalgold = 0;
        $totalknowledge = 0;
        $totalquestion2 = count($fill) + count($mc);
        Session::forget('challenge');
        return view('challengemode',compact('totalgold', 'totalknowledge','playNumber','mc','fill','totalquestion2'));
    }
    public function challenge (Request $request)
    {
        $playNumber = $request->input('question_num') + 1;
        $mc = Mcquestion::all();


        if (Input::get('next')) {
            $mc = Mcquestion::all();//get MCquestion database
            $UserTime = $request->input('qtime');//User finish Time
            $QuestionTime = $request->input('time');//Question finish Time
            $totalgold = $request->input('totalgold');//get the totalgold in all Challenge
            $totalknowledge = $request->input('totalknowledge');//get the totalknowledge in all Challenge
            $playNumber = $request->input('question_num');//get now finish question no.
            $playAns = $request->input('ans');//get User play Ans
            $trueAns = $request->input('trueAns');
            if ($this->checkTureFlase($playAns, $trueAns)) {
                $gold = ($mc[$playNumber]['attributes']['gold']);
                $knowledge = ($mc[$playNumber]['attributes']['knowledge']);
                $totalgold = $totalgold + $gold;
                $totalknowledge = $totalknowledge + $knowledge;
                $totalquestiondetail[$playNumber] = ['Question' => $playNumber + 1, 'Result' => 'True', 'Gold' => $gold, 'Knowledge' => $knowledge, 'Finish Time' => $UserTime];
                Session::push('challenge', $totalquestiondetail);
                $playNumber++;
                if ($this->checkEnd($playNumber)) {
                    return view($this->goPage());
                }
                return view('challengemode', compact('mc', 'totalgold', 'totalknowledge', 'playNumber'));

            } else {
                $gold = ($mc[$playNumber]['attributes']['gold']);
                $knowledge = ($mc[$playNumber]['attributes']['knowledge']);
                $totalgold = $totalgold + $gold;
                $totalquestiondetail[$playNumber] = ['Question' => $playNumber + 1, 'Result' => 'False', 'Gold' => $gold, 'Knowledge' => $knowledge, 'Finish Time' => $UserTime];
                Session::push('challenge', $totalquestiondetail);
                $playNumber++;
                if ($this->checkEnd($playNumber)) {
                    return view($this->goPage());
                }
                return view('challengemode', compact('mc', 'totalgold', 'totalknowledge', 'playNumber'));
            }


//            else{
//                $gold = 0;
//                $knowledge = 0;
//                $totalgold = $request->input('totalgold');
//                $totalknowledge = $request->input('totalknowledge');
//                $totalgold += $gold;
//                $totalknowledge += $knowledge;
//                $playNumber = $request->input('question_num')-1;
//                $totalquestiondetail[$playNumber -1]=['Question' => 3 ,'Result' => 'False','Gold' =>$gold,'Knowledge'=>$knowledge,'Finish Time' =>$UserTime];
//                Session::push('challenge',$totalquestiondetail);
//            }

        }
        if (Input::get('skip')) {
            $playAns = 'skip';
            $gold = 0;
            $knowledge = 0;
            $totalgold = $request->input('totalgold');
            $totalknowledge = $request->input('totalknowledge');
            $totalgold += $gold;
            $totalknowledge += $knowledge;
            $playNumber = $request->input('question_num');
            $totalquestiondetail[$playNumber] = ['Question' => $playNumber + 1, 'Result' => '<i>skip</i>', 'Gold' => $gold, 'Knowledge' => $knowledge, 'Finish Time' => 0];
            Session::push('challenge', $totalquestiondetail);
            $playNumber++;
            if ($this->checkEnd($playNumber)) {
                return view($this->goPage());
            }
            return view('challengemode', compact('mc', 'totalgold', 'totalknowledge', 'playNumber'));
        }
        if ($request->input('qtime') <= 0) {
            $gold = 0;
            $knowledge = 0;
            $totalgold = $request->input('totalgold');
            $totalknowledge = $request->input('totalknowledge');
            $totalgold += $gold;
            $totalknowledge += $knowledge;
            $playNumber = $request->input('question_num');
            $totalquestiondetail[$playNumber] = ['Question' => $playNumber + 1, 'Result' => '<i>time out</i>', 'Gold' => $gold, 'Knowledge' => $knowledge, 'Finish Time' => 0];
            Session::push('challenge', $totalquestiondetail);
            $playNumber++;
            if ($this->checkEnd($playNumber)) {
                return view($this->goPage());
            }

            return view('challengemode', compact('mc', 'totalgold', 'totalknowledge', 'playNumber'));

        }
    }

    public function checkTureFlase($playAns, $trueAns){
        $bool = "";
        if($playAns==$trueAns){
            $bool = True;
        }else{
            $bool = False;
        }
        return $bool;
    }
    public function checkEnd($playNumber){
        $End = "";
        $mc = Mcquestion::all();
        if ($playNumber >= count($mc)) {
            $End = True;
        }else {
            $End = False;
        }
//
        return $End;
        }

    public function goPage(){
        return ("gotoFill");
    }


    public function checkAjax(Request $request){
//       return "abc";
        $mc = $this->mc;
        return ($mc[1]);
//        $semester = Input::get('sem');
//
//        return json_encode($semester);

    }
}
