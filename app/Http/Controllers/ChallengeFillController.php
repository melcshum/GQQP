<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use  App\Fullquestion;
use DB;
use Auth;
use Illuminate\Support\Facades\Input;
use Session;

class ChallengeFillController extends Controller
{
    public function index(){
        $fill = Fullquestion::all();
        $playnum = 0;
        $totalgold = 0;
        $totalknowledge = 0;
        return view('challengefill',compact('totalgold', 'totalknowledge','playnum','fill'));
    }

    public function challenge(Request $request){
        $fill = Fullquestion::all();
        $ans1 =$request->input('ans1');
        $ans2 =$request->input('ans2');
        $ans3 =$request->input('ans3');
        $ans4 =$request->input('ans4');
        $ans5 =$request->input('ans5');
        dd($ans1);
        return "asd";
    }
}
