<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session ;


class UserController extends Controller
{
    public function login()
    {
        return view('dashboard.login');
    }

    public function postlogin(Request $request)
    {
        // dd($request);
        $val = $request->validate([
            "email"=>"required|email",
            "password"=>"required"
        ]);

        $data = $request->only("email","password");
        if(Auth::attempt($data))
        {
            return redirect("product/index");
        }else{
            Session::flash('message','user not register');
            return redirect('/login');
        }

    }

    public function register()
    {
        return view("dashboard.register");
    }

    public function postregister(Request $request)
    {
        // dd($request);
        $val = $request->validate([
            "username"=>"required",
            "email"=>"required|email",
            "password"=>"required|confirmed"
        ]);

        // dd($request->only("username","email","password"));

        $user = new User();
        $user->name =$request->username;
        $user->email =$request->email;
        $user->password =Hash::make($request->password);
        if($user->save())
        {
            // echo 'true';
            Session::flash('message','User created Successfully');

        }else{

            // echo 'false';
            Session::flash('message','User Not created');
        }
        return redirect('/register');
    }


    public function logout()
    {
        Auth::logout();
        return redirect("/login");
    }
}
