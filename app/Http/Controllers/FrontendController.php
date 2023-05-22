<?php

namespace App\Http\Controllers;

use App\Models\Bcategory;
use App\Models\Bcatergory;
use App\Models\Blog;
use App\Models\Btag;
use App\Models\Prayer;
use Illuminate\Http\Request;

class FrontendController extends Controller
{

    public function index()
    {
        $data = $this->getData();


        return view('frontend.pages.home', $data);
    }

    public function prayers()
    {
        $data = $this->getData();
        $data['prayers'] = Prayer::orderBy('id', 'desc')->get();
        return view('frontend.pages.prayers.prayers', $data);
    }

    public function single_prayer()
    {
        $data = $this->getData();
        return view('frontend.pages.prayers.single-prayer',$data);
    }

    public function contact()
    {
        $data = $this->getData();
        return view('frontend.pages.contact',$data);
    }

    public function blog()
    {
        $data = $this->getData();
        $data['blogs'] = Blog::orderBy('id', 'desc')->get();

        return view('frontend.pages.blog.blogs', $data);
    }

    public function blog_category(Bcategory $category)
    {
        $data = $this->getData();
        $data['category'] = $category;
        return view('frontend.pages.blog.blog-category', $data);
    }

    public function blog_tag(Btag $tag)
    {
        $data = $this->getData();
        $data['tag'] = $tag;
        return view('frontend.pages.blog.blog-tag', $data);
    }

    public function single_blog_page( $blog)
    {
        $data = $this->getData();

        $data['blog'] = Blog::where('codename', $blog)->first();
        if (!$data['blog']) {
            $data['blog'] = Blog::find($blog);
        }
        if (!$data['blog']) {
            return redirect()->route('home', app()->getLocale());
        }
        $data['blog']->views = $data['blog']->views + 1;
        $data['blog']->save();
        $data['tags'] = Btag::inRandomOrder()->limit(5)->get();
        $data['next_blog'] = Blog::orderBy('id', 'desc')->where('id', '!=', $data['blog']->id)->first();
        $data['prec_blog'] = Blog::orderBy('id', 'desc')->where('id', '!=', $data['blog']->id)->where('id', '!=', $data['next_blog']->id)->first();

        return view('frontend.pages.blog.single-blog', $data);
    }

    public function getData(){
        $data['recent_blogs'] = Blog::orderBy('id', 'desc')->limit(3)->get();
        $data['categories'] = Bcategory::inRandomOrder()->limit(8)->get();
        return $data;
    }
}
