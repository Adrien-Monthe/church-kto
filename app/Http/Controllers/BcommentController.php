<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreBcommentRequest;
use App\Http\Requests\UpdateBcommentRequest;
use App\Models\Bcomment;
use App\Models\Blog;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Session;

class BcommentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $data['bcomments'] = Bcomment::orderBy('id','desc')->get();
        return view('backend.pages.posts.comments.show-comments',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        $data['blogs'] = Blog::orderBy('id','desc')->get();
        return view('backend.pages.posts.comments.create-comment',$data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param StoreBcommentRequest $request
     * @return Response
     */
    public function store(StoreBcommentRequest $request)
    {
        $comment_id = $request->comment_id;

        $comment   =   Bcomment::updateOrCreate(['id' => $comment_id],
            [
                'name' => $request->name,

                'email' => $request->email,

                'comment' => $request->comment,

                'blog_id' => $request->blog_id,

            ]);


        return redirect()->route('bcomments.index',app()->getLocale())->with('success','Comment has been added successfully');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param StoreBcommentRequest $request
     * @return Response
     */
    public function store_comment(StoreBcommentRequest $request)
    {
        $comment_id = $request->comment_id;

        $comment   =   Bcomment::updateOrCreate(['id' => $comment_id],
            [
                'name' => $request->name,

                'email' => $request->email,

                'comment' => $request->comment,

                'blog_id' => $request->blog_id,

            ]);

        Session::flash('message', 'Votre commentaire a été enregistré!');
        Session::flash('title', 'Merci pour votre message');
        Session::flash('alert-type', 'success');


        // dd(\session());


        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param Bcomment $bcomment
     * @return Response
     */
    public function show($lang, Bcomment $bcomment)
    {
        $data['blogs'] = Blog::orderBy('id','desc')->get();
        $data['bcomment'] = $bcomment;
        return view('backend.pages.posts.comments.show-comment',$data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Bcomment $bcomment
     * @return Response
     */
    public function edit($lang, Bcomment $bcomment)
    {
        $data['blogs'] = Blog::orderBy('id','desc')->get();
        $data['bcomment'] = $bcomment;
        return view('backend.pages.posts.comments.edit-comment',$data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param UpdateBcommentRequest $request
     * @param Bcomment $bcomment
     * @return Response
     */
    public function update(UpdateBcommentRequest $request,$lang, Bcomment $bcomment)
    {
        $comment_id = $bcomment->id;

        $comment   =   Bcomment::updateOrCreate(['id' => $comment_id],
            [
                'name' => $request->name,

                'email' => $request->email,

                'comment' => $request->comment,

                'blog_id' => $request->blog_id,

            ]);


        return redirect()->route('bcomments.index',app()->getLocale())->with('success','Comment has been added successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Bcomment $bcomment
     * @return Response
     */
    public function destroy(Bcomment $bcomment)
    {
        //
    }
}
