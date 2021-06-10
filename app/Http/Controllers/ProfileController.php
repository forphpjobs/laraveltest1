<?php

namespace App\Http\Controllers;

use App\User;
use DateTime;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    //
    public function index(){

        $user=User::find(Auth::id());
        $time=$user->created_at;
        $date=new DateTime($time);
        $date=$date->format('d-m-Y');
        return view('profile.index', compact(['user', 'date']));
    }
}
