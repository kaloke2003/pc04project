<?php

namespace App\Controllers;

class Frontend extends BaseController
{
    public function home()
    {
        return view('header').view('home').view('footer');
    }
    public function blog()
    {
        return view('header').view('blog').view('footer');
    }
    public function shop()
    {
        return view('header').view('shop').view('footer');
    }
    public function about()
    {
        return view('header').view('about').view('footer');
    }
    public function contact()
    {
        return view('header').view('contact').view('footer');
    }
    public function login()
    {
        return view('header').view('login').view('footer');
    }
    public function checkout()
    {
        return view('header').view('checkout').view('footer');
    }
    public function wishlist()
    {
        return view('header').view('wishlist').view('footer');
    }
    public function account()
    {
        return view('header').view('account').view('footer');
    }
}
