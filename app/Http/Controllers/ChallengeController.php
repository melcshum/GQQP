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
        $playNumber = $request->input('question_num');
        $mc = Mcquestion::all();
        if ($playNumber >= count($mc)) {
            dd(Session::get('challenge'));
        }

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
                $totalquestiondetail[$playNumber-1] = ['Question' => $playNumber, 'Result' => 'True', 'Gold' => $gold, 'Knowledge' => $knowledge, 'Finish Time' => $UserTime];
                Session::push('challenge', $totalquestiondetail);
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
//        if(Input::get('skip')){
//            $playAns = 'skip';
//            $gold = 0;
//            $knowledge = 0;
//            $totalgold = $request->input('totalgold');
//            $totalknowledge = $request->input('totalknowledge');
//            $totalgold += $gold;
//            $totalknowledge += $knowledge;
//            $playNumber = $request->input('question_num')-1;
//            $totalquestiondetail[$playNumber -1]=['Question' => 4 ,'Result' => '<i>skip</i>','Gold' =>$gold,'Knowledge'=>$knowledge,'Finish Time' =>0];
//            Session::push('challenge',$totalquestiondetail);
//        }


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
}
