<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function index(){
        return view('index');
    }

    public function about_us(){
        return view('about_us');
    }

    public function login(){
        return view('login');
    }

    public function register(){
        return view('register');
    }

    public function user_update()
    {
        return view('user_update');
    }

    public function privacy_policy()
    {
        return view('privacy_policy');
    }
}
