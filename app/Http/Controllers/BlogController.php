<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreBlogRequest;
use App\Http\Requests\UpdateBlogRequest;
use App\Models\Bcatergory;
use App\Models\Blog;
use App\Models\Btag;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Session;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $data['blogs'] = Blog::orderBy('id','desc')->get();
        return view('backend.pages.posts.show-posts',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        $data['categories'] = Bcatergory::orderBy('id','desc')->get();
        $data['tags'] = Btag::orderBy('id','desc')->get();
        return view('backend.pages.posts.create-post',$data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param StoreBlogRequest $request
     * @return Response
     */
    public function store(StoreBlogRequest $request)
    {
        $blog_id = $request->blog_id;

        $codename =  $this->clean($request->title_fr);

        $blog   =   Blog::updateOrCreate(['id' => $blog_id],
            [
                'codename' => $codename,

                'type' => $request->type,

                'youtube_code' => $request->youtube_code,

                'read_time' => $request->read_time,

                'status' => false,

                'comment_status' => false,

                'meta_keywords' => $request->meta_keywords,

                'visibility' => $request->visibility,

                'meta_description' => $request->meta_description,

                'views' => '0',

                'bcatergory_id' => $request->category_id,

                'author' => $request->author,


                'description' => [
                    'en' => $request->description_en,
                    'fr' => $request->description_fr
                ],
                'title' => [
                    'en' => $request->title_en,
                    'fr' => $request->title_fr
                ],
                'short_description' => [
                    'en' => $request->short_description_en,
                    'fr' => $request->short_description_fr
                ],


            ]);

        if ($request->image_path) {
            $fileName = time().'_img.'.$request->image_path->extension();
            $request->image_path->move(public_path('storage/posts/blogs/' . $blog->id . '/blog-images/'), $fileName);
            $blog->image_path = 'storage/posts/blogs/' . $blog->id . '/blog-images/' . $fileName;
            $blog->save();
        }
        if ($request->tags) {
            foreach ($request->tags as $tag_id) {
                $blog->tags()->attach($tag_id);
                $blog->save();
            }
        }
        Session::flash('message', 'Votre article a été enregistré!');
        Session::flash('title', "Merci d'utiliser LNFOOT");
        Session::flash('alert-type', 'success');


        // dd(\session());


        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param Blog $blog
     * @return Response
     */
    public function show($lang, Blog $blog)
    {
        $data['categories'] = Bcatergory::orderBy('id','desc')->get();
        $data['tags'] = Btag::orderBy('id','desc')->get();
        $data['blog'] = $blog;
        return view('backend.pages.posts.show-post',$data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Blog $blog
     * @return Response
     */
    public function edit($lang, Blog $blog)
    {
        $data['categories'] = Bcatergory::orderBy('id','desc')->get();
        $data['tags'] = Btag::orderBy('id','desc')->get();
        $data['blog'] = $blog;
        return view('backend.pages.posts.edit-post',$data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param UpdateBlogRequest $request
     * @param Blog $blog
     * @return Response
     */
    public function update(UpdateBlogRequest $request, $lang, Blog $blog)
    {
        $blog_id = $blog->id;

        $blog   =   Blog::updateOrCreate(['id' => $blog_id],
            [
                'type' => $request->type,

                'status' => false,

                'comment_status' => false,

                'youtube_code' => $request->youtube_code,

                'read_time' => $request->read_time,

                'visibility' => $request->visibility,

                'bcatergory_id' => $request->category_id,

                'author' => $request->author,

                'description' => [
                    'en' => $request->description_en,
                    'fr' => $request->description_fr
                ],
                'title' => [
                    'en' => $request->title_en,
                    'fr' => $request->title_fr
                ],
                'short_description' => [
                    'en' => $request->short_description_en,
                    'fr' => $request->short_description_fr
                ],


            ]);

        if ($request->image_path) {
            $fileName = time().'_img.'.$request->image_path->extension();
            $request->image_path->move(public_path('storage/posts/blogs/'.$blog->id.'/blog-images/'), $fileName);
            $blog->image_path = 'storage/posts/blogs/'.$blog->id.'/blog-images/'.$fileName;
            $blog->save();
        }

        return redirect()->route('blogs.index',app()->getLocale())->with('success','Blog has been added successfully');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Blog $blog
     * @return Response
     */
    public function destroy(Blog $blog)
    {
        //
    }
}
