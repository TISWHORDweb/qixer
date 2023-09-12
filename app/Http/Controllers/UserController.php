<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        return view('index');
    }
    public function user()
    {
        return view('user');
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
    public function service_list()
    {
        return view('service-list');
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
        return view('faq');
    }
}