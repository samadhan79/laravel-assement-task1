<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    function Dashboard(Request $request){
        if($request->session()->has('user')){
            $s = $request->session()->get('user');
        }
        return view('Dashboard',compact('s'));
    }
}
