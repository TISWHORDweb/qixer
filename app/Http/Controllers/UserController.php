<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        return view('index');
    }
    public function about()
    {
        return view('about');
    }
    public function blog()
    {
        return view('blog');
    }
    public function category()
    {
        return view('category');
    }
    public function contact()
    {
        return view('contact');
    }
    public function service()
    {
        return view('service');
    }
    public function service_details()
    {
        return view('service-details');
    }
    public function blog_details()
    {
        return view('blog-details');
    }
    public function faq()
    {
        return view('f&q');
    }
    public function dashboard()
    {
        return view('dashboard');
    }
    public function profile()
    {
        return view('profile');
    }
}
