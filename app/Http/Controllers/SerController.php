<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SerController extends Controller
{
    public function create(){

       return view('register.create');
    }

    public function store(Request $request){

    }
}
