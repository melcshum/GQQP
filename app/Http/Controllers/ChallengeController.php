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
    public function challenge (Request $request){
        $playNumber = $request->input('question_num');
        $mc = Mcquestion::all();
        if($playNumber>=count($mc)) {
            return view ('gotoFill');
        }
        if(Input::get('next')){
            $mc = Mcquestion::all();
            $UserTime = $request->input('qtime');
            $QuestionTime = $request->input('time');
            if(!($UserTime==$QuestionTime)){
            $totalgold = $request->input('totalgold');
            $totalknowledge = $request->input('totalknowledge');
                $playNumber = $request->input('question_num')-1;
            $playAns = $request->input('ans');
            $trueAns = $request->input('trueAns');
            if($this->checkTureFlase($playAns,$trueAns )) {
                $gold = ($mc[$playNumber]['attributes']['gold']);
                $knowledge = ($mc[$playNumber]['attributes']['knowledge']);
                $totalgold = $totalgold + $gold;
                $totalknowledge = $totalknowledge + $knowledge;
                $totalquestiondetail[$playNumber] = ['Question' => $playNumber + 1, 'Result' => 'True', 'Gold' => $gold, 'Knowledge' => $knowledge, 'Finish Time' => $UserTime];
                Session::push('challenge', $totalquestiondetail);
            }else{

            }
                $playNumber++;

            }
                else{
                    $gold = 0;
                    $knowledge = 0;
                    $totalgold = $request->input('totalgold');
                    $totalknowledge = $request->input('totalknowledge');
                    $totalgold += $gold;
                    $totalknowledge += $knowledge;
                    $playNumber = $request->input('question_num')-1;
                    $totalquestiondetail[$playNumber]=['Question' => $playNumber+1 ,'Result' => 'False','Gold' =>$gold,'Knowledge'=>$knowledge,'Finish Time' =>$UserTime];
                    Session::push('challenge',$totalquestiondetail);
                    $playNumber++;
                }

        }elseif(Input::get('skip')){
            $playAns = 'skip';
            $gold = 0;
            $knowledge = 0;
            $totalgold = $request->input('totalgold');
            $totalknowledge = $request->input('totalknowledge');
            $totalgold += $gold;
            $totalknowledge += $knowledge;
            $playNumber = $request->input('question_num')-1;
            $totalquestiondetail[$playNumber]=['Question' => $playNumber+1 ,'Result' => '<i>skip</i>','Gold' =>$gold,'Knowledge'=>$knowledge,'Finish Time' =>0];
            Session::push('challenge',$totalquestiondetail);
            $playNumber++;
        }
        return view('challengemode', compact('mc','totalgold','totalknowledge','playNumber'));
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
