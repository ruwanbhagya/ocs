<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;


class welcomecontroller extends Controller
{
    public function welcome(){
        return view('welcome');
    }
}