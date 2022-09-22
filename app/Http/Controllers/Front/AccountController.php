<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;

class AccountController extends Controller
{
    public function login(){
        return view('front.menu.login');
    }
}
