<?php
//part8-50
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class testController extends Controller
{
    public function index(){
        
        // return view('test');
        $users = DB::table('users')->get();
        // var_dump($users);die;
        // dd($users);

        return view('test',['data'=>'maher','users'=>$users]);
    }
}
