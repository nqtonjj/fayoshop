<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    //
    public function index(){
        return view('front-end.page.index');
    }

    public function contact(){
        return view('front-end.page.contact');
    }

    public function blog(){
        return view('front-end.page.blog');
    }

    public function products(){
        return view('front-end.page.products');
    }

    public function detail(){
        return view('front-end.page.details');
    }

    public function register(){
        return view('front-end.page.register');
    }

    public function login(){
        return view('front-end.page.login');
    }
}
