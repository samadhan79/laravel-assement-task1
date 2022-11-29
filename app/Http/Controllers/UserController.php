<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Exception;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Support\Facades\Hash;

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
            $request->session()->put('user',$finduser);
            return redirect()->intended('dashboard');
        }else{


            $newUser = User::create([
                'fname' => $user->name,
                'email' => $user->email,
                'google_id'=> $user->id,
                'role_id'=> 2,
                'password' => Hash::make('123')
            ]);

            Auth::login($newUser);
            $request->session()->put('user',$newUser);
            return redirect()->intended('dashboard');
        }

    } catch (Exception $e) {
        dd($e->getMessage());
    }
}


function Login(Request $request){

    if($request->input('login')){
        $email = $request->input('email');
        $password = $request->input('password');
        $user = User::where('email',$email)->first();
        if($user){
            if(Hash::check($request->password, $user->password)){
                if($user->role_id == 2){
                    $request->session()->put('user',$user);
                    return redirect()->route('dashboard');    
                }
                
            }
        }

    }   
    return view('Login');
}
function Signup (Request $request)
{
    if($request->input('signup')){

     $validated = $request->validate([
        'fname' => 'required',
        'lname' => 'required',
        'email' => 'required|unique:users|max:255',
        'password' => 'required',
        'dob' => 'required',
        'income' => 'required',
        'gender' => 'required',
        'job' => 'required',
        'familytype' => 'required',
    ]);

     $user = new User;
     $user->fname = $request->input('fname');
     $user->lname = $request->input('lname');
     $user->email = $request->input('email');
     $user->password = Hash::make($request->input('password'));
     $user->dob = $request->input('dob');
     $user->income = $request->input('income');
     $user->gender = $request->input('gender');
     $user->job = $request->input('job');
     $user->familytype = $request->input('familytype');
     $user->mangilik = $request->input('manglik');
     $user->role_id = 2;
     $user->save();
     $request->session()->put('user',$user);
     return redirect()->route('dashboard');
 }

 return view('Signup');
}
function Logout(Request $request){
   if($request->session()->has('user')){

    Auth::logout();
    $request->session()->invalidate();
    $request->session()->forget('user');
    $request->session()->regenerateToken();
    $request->session()->flush();
    return redirect()->route('login');
}
}



}
