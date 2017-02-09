<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Mcquestion;
use App\Fullquestion;

class ChallengeController extends Controller
{
    public function index(){
        $playNumber = 0;
        $mc = Mcquestion::all();
        $fill = Fullquestion::all();
        $totalgold = 0;
        $totalknowledge = 0;
        return view('');
    }
}
