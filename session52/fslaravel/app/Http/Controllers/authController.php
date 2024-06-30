<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;
use RealRashid\SweetAlert\Facades\Alert as Alert;

class authController extends Controller
{
    public function register()
    {
        return view('register');
    
    }
    public function postregister(Request $re)
    {
        // dd($re);
        $val = $re->validate([
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required',
        ]);
        // dd($val);
        //save data in db by orm
        // $user = User::create($val);

        //another orm way
        $user = new User();

        $user->name =$re->name;
        $user->email =$re->email;
        $user->password =Hash::make($re->password);

        $user->save();

        //query biuldin way
        // DB::table('users')->insert([
        //     'name' => $re->name,
        //     'email' => $re->email,
        //     'password' => $re->password
        // ]);
        if($user)
        {
            Alert::success('Success', 'User inserted');
        }

        return Redirect('/register');

    }
    public function login()
    {
        return view("login");
    }
    public function postlogin(Request $re)
    {
        // dd($re);
        $r = $re->only("email","password");
        // dd($r); 
        if(Auth::attempt($r))
        {
            return redirect('home');
        }else
        {
            return redirect('login');
        }
    }

    public function logout()
    {
        Auth::logout();
        return redirect('login');
    }

}
