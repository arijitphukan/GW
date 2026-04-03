<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    function userregistration(Request $request){
        $request->validate([
            'first_name'=>'required',
            'last_name'=>'required',
            'email'=>'required|email',
            'password'=>'required|min:8|max:16',
            'confirm_password'=>'required|same:password',
            'account_type'=>'required'
        ]);
        $user = new User();
        $user->f_name = $request->first_name;
        $user->l_name = $request->last_name;
        $user->email = $request->email;
        $user->password = $request->password;
        $user->account_type = $request->account_type;
        if($user->save()){
            return redirect(route('login'))->with('success','Account created successfully');
        }
        return redirect(route('register'))->with('error','Failed to create account.');
    }

    function userlogin(Request $request){
        $request->validate([
            'email'=>'required',
            'password'=>'required|min:8|max:16'
        ]);
        $credentials = $request->only("email","password");

        if(Auth::attempt($credentials)){
            session(['user'=>Auth::user()]);
            return redirect(route('homepage'))->with('success',"Login successful.");
        }
        return redirect(route('login'))->with('error','Failed to login.');
    }
}
