<?php

namespace App\Http\Controllers;

use App\Models\categoryModel;
use Illuminate\Http\Request;

class categoryController extends Controller
{
    public function index()
    {
        $data = categoryModel::all();
        dd($data);
    }
}
