<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;


class userController extends Controller
{
    //
    function login(Request $req){
        // return $req->input();
        $mail=$req->email;
        // return User::where(['email'=>$mail])->first();
        $user=User::where(['email'=>$mail])->first();
        if ( !$user || !Hash::check($req->password,$user->password)){
            return view('login');
        }else{
            $req->session()->put('user',$user);
            return redirect('/');
        }
    }

    function logout(){
        Session::forget('user');
        return redirect('/login'); 
    }

    function register(Request $req){
        $req->validate([
            'username'=>'required',
            'email'=>'required',
            'password'=>'required'
        ]);

        $user=new user;
        $user->name=$req->username;
        $user->email=$req->email;
        $user->password=HASH::make($req->password);

        $user->save();

        return redirect('/login'); 

    }
}
