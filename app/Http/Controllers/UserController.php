<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    //
    function welcome(){
        return view('user.welcome');
    }
    function register(){
        return view('user.registration');
    }
    function registerAction(Request $req){
        $this->validate($req,
            [
                "name"=>"required|max:20|min:3|regex:/^[a-z ,.'-]+$/i",
                "email"=>"required|",
                "password"=>"required|min:8|regex:/^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!@$ %^&*-]).{8,}+$/i",
                "conf_password"=>"required|min:8|same:password"
            ],
            [
                "name.required"=>"Provide your name",
                "name.regex"=>"Provide valid name",
                "password.regex"=>"Password must contain upper case,lower case,number and special characters",
                "conf_password.required"=>"Confirm your password",
                "conf_password.same"=>"Confirm password and password don't match"
            ]
        );
        $user=new User();
        $user ->name = $req->name;
        $user ->email =$req->email;
        $user ->password =$req->password;
        $user->save();

        return redirect()->route('welcome');
    }
    function login(){
        return view('user.login');
    }
    function loginAction(Request $req){
        $this->validate($req,
        [
            "email"=>"required",
            "password"=>"required"
        ]);
        $users= User::where('email','=',$req->email)
        ->where('password','=',$req->password)->first();
        //return $user;
        if($users){
            return redirect()->route('user.dashboard');
        }
        else
            return redirect()->route('user.register');
    }
    function dashboard(){
        $users=User::all();
        //return $users;
        return view('user.dashboard')->with('users',$users);
    }
    function details($id){
        $users = User::where('id',$id)->get();
        return view('user.details')->with('users',$users);
         //return "details $id $users";
    }
}
