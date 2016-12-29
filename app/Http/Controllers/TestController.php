<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Mcquestion;
use DB;

class TestController extends Controller
{


    public function index(){
        $playQuestionNum = 0;
        $mc = Mcquestion::all();
        return view('gameTest1', compact('mc'));
    }

}
