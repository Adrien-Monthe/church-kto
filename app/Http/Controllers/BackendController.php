<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Player;
use App\Models\Portfolio;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BackendController extends Controller
{
    public function index()
    {
        $data['blogs'] = Blog::orderBy('id', 'desc')->get();
        $data['products'] = Product::orderBy('id', 'desc')->get();
        return view('backend.pages.home', $data);
    }

    public function contact()
    {

        return view('backend.pages.contact');
    }
}
