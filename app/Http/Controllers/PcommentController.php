<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePcommentRequest;
use App\Http\Requests\UpdatePcommentRequest;
use App\Models\Pcomment;
use App\Models\Product;
use Illuminate\Http\Response;

class PcommentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $data['pcomments'] = Pcomment::orderBy('id', 'desc')->get();
        return view('backend.pages.products.comments.show-comments', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        $data['products'] = Product::orderBy('id', 'desc')->get();
        return view('backend.pages.products.comments.create-comment', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param StorePcommentRequest $request
     * @return Response
     */
    public function store(StorePcommentRequest $request)
    {
        $comment_id = $request->comment_id;

        $comment = Pcomment::updateOrCreate(['id' => $comment_id],
            [
                'name' => $request->name,

                'rate' => $request->rate,

                'email' => $request->email,

                'comment' => $request->comment,

                'product_id' => $request->product_id,

            ]);


        return redirect()->route('pcomments.index', app()->getLocale())->with('success', 'Comment has been added successfully');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param StorePcommentRequest $request
     * @return Response
     */
    public function store_comment(StorePcommentRequest $request)
    {
        $comment_id = $request->comment_id;

        $comment = Pcomment::updateOrCreate(['id' => $comment_id],
            [
                'name' => $request->name,

                'rate' => $request->rate,

                'email' => $request->email,

                'comment' => $request->comment,

                'product_id' => $request->product_id,

            ]);


        return redirect()->back()->with('success', 'Comment has been added successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param Pcomment $pcomment
     * @return Response
     */
    public function show($lang, Pcomment $pcomment)
    {
        $data['products'] = Product::orderBy('id', 'desc')->get();
        $data['pcomment'] = $pcomment;
        return view('backend.pages.products.comments.show-comment', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Pcomment $pcomment
     * @return Response
     */
    public function edit($lang, Pcomment $pcomment)
    {
        $data['products'] = Product::orderBy('id', 'desc')->get();
        $data['pcomment'] = $pcomment;
        return view('backend.pages.products.comments.edit-comment', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param UpdatePcommentRequest $request
     * @param Pcomment $pcomment
     * @return Response
     */
    public function update(UpdatePcommentRequest $request, Pcomment $pcomment)
    {
        $comment_id = $pcomment->id;

        $comment = Pcomment::updateOrCreate(['id' => $comment_id],
            [
                'name' => $request->name,

                'rate' => $request->rate,

                'email' => $request->email,

                'comment' => $request->comment,

            ]);


        return redirect()->back()->with('success', 'Comment has been added successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Pcomment $pcomment
     * @return Response
     */
    public function destroy(Pcomment $pcomment)
    {
        //
    }
}
