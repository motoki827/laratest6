<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyPageController extends Controller
{
    //
    public function myPage(){

        $user = \Auth::user();
        //dd($user);
        return view('myPage',compact('user'));
    }
}
