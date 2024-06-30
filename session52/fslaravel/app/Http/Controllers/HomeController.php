<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware("auth");
        // $this->middleware("admin",["except"=>["index","user"]]);
    }
    public function index()
    {
        echo 'hello';
    }

    public function user()
    {
        echo 'user';
    }

    public function Superadmin()
    {
        echo 'admin';
    }
}
