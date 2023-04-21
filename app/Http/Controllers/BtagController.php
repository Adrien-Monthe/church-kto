<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreBtagRequest;
use App\Http\Requests\UpdateBtagRequest;
use App\Models\Btag;
use Illuminate\Http\Response;

class BtagController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $data['btags'] = Btag::orderBy('id','desc')->get();
        return view('backend.pages.posts.tags.show-tags',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('backend.pages.posts.tags.create-tag');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param StoreBtagRequest $request
     * @return Response
     */
    public function store(StoreBtagRequest $request)
    {
        $tag_id = $request->tag_id;

        $codename = $this->clean($request->name_fr);

        $tag   =   Btag::updateOrCreate(['id' => $tag_id],
            [
                'codename' => $codename,

                'meta_keywords' => $request->meta_keywords,

                'meta_description' => $request->meta_description,

                'name' => [
                    'en' => $request->name_en,
                    'fr' => $request->name_fr,
                ],
                'description' => [
                    'en' => $request->description_en,
                    'fr' => $request->description_fr,
                ],

            ]);

        if ($request->image_path) {
            $fileName = time().'_img.'.$request->image_path->extension();
            $request->image_path->move(public_path('storage/posts/tags/'.$tag->id.'/tag-images/'), $fileName);
            $tag->image_path = 'storage/posts/tags/'.$tag->id.'/tag-images/'.$fileName;
            $tag->save();
        }

        return redirect()->route('btags.index',app()->getLocale())->with('success','tag has been added successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param Btag $btag
     * @return Response
     */
    public function show($lang ,Btag $btag)
    {
        $data['btag'] = $btag;
        return view('backend.pages.posts.tags.show-tag',$data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Btag $btag
     * @return Response
     */
    public function edit($lang ,Btag $btag)
    {
        $data['btag'] = $btag;
        return view('backend.pages.posts.tags.edit-tag',$data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param UpdateBtagRequest $request
     * @param Btag $btag
     * @return Response
     */
    public function update(UpdateBtagRequest $request, $lang, Btag $btag)
    {
        $tag_id = $btag->id;

        $tag   =   Btag::updateOrCreate(['id' => $tag_id],
            [

                'meta_keywords' => $request->meta_keywords,

                'meta_description' => $request->meta_description,

                'name' => [
                    'en' => $request->name_en,
                    'fr' => $request->name_fr,
                ],
                'description' => [
                    'en' => $request->description_en,
                    'fr' => $request->description_fr,
                ],

            ]);

        if ($request->image_path) {
            $fileName = time().'_img.'.$request->image_path->extension();
            $request->image_path->move(public_path('storage/posts/tags/'.$tag->id.'/tag-images/'), $fileName);
            $tag->image_path = 'storage/posts/tags/'.$tag->id.'/tag-images/'.$fileName;
            $tag->save();
        }

        return redirect()->route('btags.index',app()->getLocale())->with('success','tag has been Updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Btag $btag
     * @return Response
     */
    public function destroy(Btag $btag)
    {
        //
    }
}
