<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class AuthController extends Controller
{
    public function login()
    {
    return view('login');
    }

    public function admin()
    {
    return view('admin');
    }

    public function register()
    {
    return view('register');
    }

    //public function find()
    //{//検索
        //return view('admin', ['input' => '']);

    //}

    //public function search(Request $request){
        //Contactモデルで性別検索
        //$item = Contact::where('gender', 'LIKE',"%{$request->input}%")->first();
        //$param = [
            //'input' => $request->input,
            //'item' => $item
       // ];
       // return view('admin', $param);
    //}
}

