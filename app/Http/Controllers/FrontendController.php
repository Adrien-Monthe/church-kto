<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Prayer;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index()
    {
        return view('frontend.pages.home');
    }

    public function prayers()
    {
        $data['prayers'] = Prayer::orderBy('id', 'desc')->get();
        return view('frontend.pages.prayers.prayers', $data);
    }

    public function single_prayer()
    {
        return view('frontend.pages.prayers.single-prayer');
    }

    public function contact()
    {
        return view('frontend.pages.contact');
    }

    public function blog()
    {
        $data['blogs'] = Blog::orderBy('id', 'desc')->get();
        return view('frontend.pages.blog.blogs', $data);
    }
}
