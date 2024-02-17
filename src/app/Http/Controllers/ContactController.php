<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use App\Http\Requests\ContactRequest;


class ContactController extends Controller
{
    //お問い合わせフォーム入力ページ
    public function index()
    {
    return view('index');
    }

    public function confirm(Request $request)
{   //$contact = (['tel' => $request->tel1 . $request->tel2 .$request->tel3])+(['name' => $request->last_name + "." + $request->first_name])+$request->only(['gender','email', 'tel','gender','address','building','detail','content']);
$contact = [
    'tel' => $request->tel1 . $request->tel2 . $request->tel3,
    'last_name'=> $request->last_name, 
    'first_name'=>$request->first_name,
    'gender' => $request->gender,
    'email' => $request->email,
    'address' => $request->address,
    'building' => $request->building,
    'detail' => $request->detail,
    'content' => $request->content];
    return view('confirm', compact('contact'));
    //取得した入力情報を変数\$contactに格納し、その値を return
}

    public function store(Request $request)
    {$contact = $request->only(['last_name', 'first_name','gender','email', 'tel','address','building','detail','content']);
    Contact::create($contact);
    return view('thanks');
    }

    
}

    



    //お問い合わせフォーム確認ページ /confirm 
    //サンクスページ /thanks
    //管理画面 /admin
    //ユーザ登録ページ /register
    //ログインページ /login

