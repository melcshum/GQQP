<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use DB;
use App\Item;

class ItemController extends Controller
{

    public function show()
    {
        $items = DB::table('items')->get();
        return view ('shop', ['items' => $items]);
    }

    public function exchangeItem(Request $request){
        $rules = [
            'mypassword' => 'required',
            'password' => 'required|confirmed|min:6|max:18'
        ];
        $messages = [
            'mypassword.required' => 'Password is required',
            'password.required' => 'Password is required',
            //  'password.confirmed' => 'Password do not match',
            'password.min' => 'Password at least has 6 characters',
            'password.max' => 'Password cannot be more than 18 characters',
        ];

        $validator = Validator::make($request-> all(), $rules, $messages);

        if($validator -> fails()){
            return redirect('/changeInfor') -> withErrors($validator);
        }
        else {
            if (Hash::check($request->mypassword, Auth::user()->password)) {
                $user = new User;
                $user->where('email', '=', Auth::user()->email)
                    ->update(['password' => bcrypt($request->password)]);
                return redirect('/config')->with('message', 'Password has been updated');
            } else {
                return redirect('/changeInfor')->with('message', 'Current password is not correct');
            }
        }
    }
}
