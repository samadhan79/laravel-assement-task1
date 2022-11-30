<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class AdminController extends Controller
{
    function Home (Request $request){
        return view('Admin.Home');
    }
    function Users (Request $request){
        $user = User::all();
        return view('Admin.UserList',compact('user'));   
    }
}
