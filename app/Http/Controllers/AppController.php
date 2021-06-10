<?php

namespace App\Http\Controllers;

use App\App;
use Illuminate\Http\Request;

class AppController extends Controller
{
    public function index(){
        $apps=App::paginate(5);
        return view('apps.index', compact('apps'));
    }


    public function view(int $id){

        $app=App::find($id);
        return view('apps.view', compact('app'));
    }
}
