<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('frontend.pages.index');
    }
    public function about_us()
    {
        return view('frontend.pages.about');
    }
    public function contact_us()
    {
        return view('frontend.pages.contact');
    }
    public function all_events()
    {
        return view('frontend.pages.all_events');
    }
    public function news_articles()
    {
        return view('frontend.pages.all_news');
    }
    public function privacy()
    {
        return view('frontend.pages.privacy');
    }
    public function terms_conditions()
    {
        return view('frontend.pages.terms_conditions');
    }
    public function donate_proyash()
    {
        return view('frontend.pages.donate_proyash');
    }
    public function faculties()
    {
        return view('frontend.pages.faculties');
    }
}
