<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePotagRequest;
use App\Http\Requests\UpdatePotagRequest;
use App\Models\Potag;
use Illuminate\Http\Response;

class PotagController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $data['potags'] = Potag::orderBy('id', 'desc')->get();
        return view('backend.pages.portfolios.tags.show-tags', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('backend.pages.portfolios.tags.create-tag');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param StorePotagRequest $request
     * @return Response
     */
    public function store(StorePotagRequest $request)
    {
        $tag_id = $request->tag_id;

        $codename = $this->clean($request->name_fr);

        $tag = Potag::updateOrCreate(['id' => $tag_id],
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
            $request->image_path->move(public_path('storage/portfolios/tags/' . $tag->id . '/tag-images/'), $fileName);
            $tag->image_path = 'storage/portfolios/tags/' . $tag->id . '/tag-images/' . $fileName;
            $tag->save();
        }

        return redirect()->route('potags.index', app()->getLocale())->with('success', 'tag has been added successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param Potag $potag
     * @return Response
     */
    public function show($lang, Potag $potag)
    {
        $data['potag'] = $potag;
        return view('backend.pages.portfolios.tags.show-tag', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Potag $potag
     * @return Response
     */
    public function edit($lang, Potag $potag)
    {
        $data['potag'] = $potag;
        return view('backend.pages.portfolios.tags.edit-tag', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param UpdatePotagRequest $request
     * @param Potag $potag
     * @return Response
     */
    public function update(UpdatePotagRequest $request, $lang, Potag $potag)
    {
        $tag_id = $potag->id;

        $tag = Potag::updateOrCreate(['id' => $tag_id],
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
            $request->image_path->move(public_path('storage/portfolios/tags/' . $tag->id . '/tag-images/'), $fileName);
            $tag->image_path = 'storage/portfolios/tags/' . $tag->id . '/tag-images/' . $fileName;
            $tag->save();
        }

        return redirect()->route('potags.index', app()->getLocale())->with('success', 'tag has been Updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Potag $potag
     * @return Response
     */
    public function destroy($lang, Potag $potag)
    {
        //
    }
}
