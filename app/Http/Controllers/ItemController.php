<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use DB;
use App\Item;
use Illuminate\Support\Facades\Input;

class ItemController extends Controller
{
    public function __construct()
    {
        $this->item = Item::all();
    }

    public function index()
    {
        $items = DB::table('items')->get();
        return view('shop', compact('items'));

    }

    public function exchangeItem(Request $request){
        var_dump($request->get('item_id'));

    }
}
