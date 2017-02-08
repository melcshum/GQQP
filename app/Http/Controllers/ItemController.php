<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use DB;
use App\Item;

class ItemController extends Controller
{

    public function __construct()
    {
        $this->item = Item::all();
    }

    public function index()
    {
        $items = DB::table('items')->get();
        //dd($items[0]);
        return view('shop', compact('items'));

    }

    public function exchangeItem(Request $request){
        $item_id = $request->input('itemID');

        dd($item_id);
    }
}
