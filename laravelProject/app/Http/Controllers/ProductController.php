<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function __construct()
    {
        $this->middleware("auth");
    }

    public function index()
    {
        // echo 'product index';
        return view('dashboard.product.index');
    }

    public function add()
    {
        return view('dashboard.product.add');
    }

}
