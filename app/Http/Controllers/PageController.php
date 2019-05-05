<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        return view('frontend.index');
    }

    public function home()
    {
        return view('frontend.home_detail');
    }

    public function about()
    {
        return view('frontend.about');
    }

    public function blogs()
    {
        return view('frontend.blog');
    }

    public function blog()
    {
        return view('frontend.blog_detail');
    }

    public function contact()
    {
        return view('frontend.contact');
    }

    public function detail()
    {
        return view('frontend.detail');
    }
}
