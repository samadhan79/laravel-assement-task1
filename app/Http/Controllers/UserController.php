<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Exception;
use Laravel\Sanctum\HasApiTokens;

class UserController extends Controller
{
    function redirectToGoogle(Request $request)
    {
        return Socialite::driver('google')->redirect();
    }
    function handleGoogleCallback(Request $request)
    {
     try {
        $user = Socialite::driver('google')->stateless()->user();

        $finduser = User::where('google_id', $user->id)->first();
        
        if($finduser){
            Auth::login($finduser);
            return redirect()->intended('dashboard');
        }else{
            $newUser = User::create([
                'name' => $user->name,
                'email' => $user->email,
                'google_id'=> $user->id,
                'password' => encrypt('123456dummy')
            ]);

            Auth::login($newUser);

            return redirect()->intended('dashboard');
        }

    } catch (Exception $e) {
        dd($e->getMessage());
    }
}

function Signup (Request $request)
{
    if($request->input('signup')){
        $user = new User;
        $user->fname = $request->input('fname');
        $user->lname = $request->input('lname');
        $user->email = $request->input('email');
        $user->password = $request->input('password');
        $user->dob = $request->input('dob');
        $user->income = $request->input('income');
        $user->gender = $request->input('gender');
        $user->job = $request->input('job');
        $user->familytype = $request->input('familytype');
        $user->mangilik = $request->input('manglik');
        $user->role_id = 1;
        $user->save();

    }
    
    return view('Signup');
}



}
