<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePtagRequest;
use App\Http\Requests\UpdatePtagRequest;
use App\Models\Ptag;
use Illuminate\Http\Response;

class PtagController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $data['ptags'] = Ptag::orderBy('id', 'desc')->get();
        return view('backend.pages.products.tags.show-tags', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('backend.pages.products.tags.create-tag');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param StorePtagRequest $request
     * @return Response
     */
    public function store(StorePtagRequest $request)
    {
        $tag_id = $request->tag_id;

        $codename = $this->clean($request->name_fr);

        $tag = Ptag::updateOrCreate(['id' => $tag_id],
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
            $fileName = time() . '_img.' . $request->image_path->extension();
            $request->image_path->move(public_path('storage/products/tags/' . $tag->id . '/tag-images/'), $fileName);
            $tag->image_path = 'storage/products/tags/' . $tag->id . '/tag-images/' . $fileName;
            $tag->save();
        }

        return redirect()->route('ptags.index', app()->getLocale())->with('success', 'tag has been added successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param Ptag $ptag
     * @return Response
     */
    public function show($lang, Ptag $ptag)
    {
        $data['ptag'] = $ptag;
        return view('backend.pages.products.tags.show-tag', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Ptag $ptag
     * @return Response
     */
    public function edit($lang, Ptag $ptag)
    {
        $data['ptag'] = $ptag;
        return view('backend.pages.products.tags.edit-tag', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param UpdatePtagRequest $request
     * @param Ptag $ptag
     * @return Response
     */
    public function update(UpdatePtagRequest $request, $lang, Ptag $ptag)
    {
        $tag_id = $ptag->id;

        $tag = Ptag::updateOrCreate(['id' => $tag_id],
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
            $fileName = time() . '_img.' . $request->image_path->extension();
            $request->image_path->move(public_path('storage/products/tags/' . $tag->id . '/tag-images/'), $fileName);
            $tag->image_path = 'storage/products/tags/' . $tag->id . '/tag-images/' . $fileName;
            $tag->save();
        }

        return redirect()->route('ptags.index', app()->getLocale())->with('success', 'tag has been Updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Ptag $ptag
     * @return Response
     */
    public function destroy(Ptag $ptag)
    {
        //
    }
}
