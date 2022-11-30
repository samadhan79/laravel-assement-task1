<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;
class HomeController extends Controller
{
    function Dashboard(Request $request){
        if($request->session()->has('user')){
           $s = $request->session()->get('user');

       }else{
        return redirect()->route('login');
    }
    if($s->gender == 'female'){
        $user = User::where('gender','male')->get();
   }else{
       $user = User::where('gender','female')->get();
   }


   
   return view('Dashboard',compact('s','user'));
}
}
