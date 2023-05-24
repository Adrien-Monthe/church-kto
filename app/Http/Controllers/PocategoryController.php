<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePocategoryRequest;
use App\Http\Requests\UpdatePocategoryRequest;
use App\Models\Pocategory;
use Illuminate\Http\Response;

class PocategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $data['pocategories'] = Pocategory::orderBy('id', 'desc')->get();
        return view('backend.pages.portfolios.categories.show-categories', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('backend.pages.portfolios.categories.create-category');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param StorePocategoryRequest $request
     * @return Response
     */
    public function store(StorePocategoryRequest $request)
    {
        $category_id = $request->category_id;

        $codename = $this->clean($request->name_fr);

        $category = Pocategory::updateOrCreate(['id' => $category_id],
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
            $request->image_path->move(public_path('storage/portfolios/categories/' . $category->id . '/category-images/'), $fileName);
            $category->image_path = 'storage/portfolios/categories/' . $category->id . '/category-images/' . $fileName;
            $category->save();
        }

        return redirect()->route('pocategories.index', app()->getLocale())->with('success', 'Category has been added successfully');

    }

    /**
     * Display the specified resource.
     *
     * @param Pocategory $pocategory
     * @return Response
     */
    public function show($lang, Pocategory $pocategory)
    {
        $data['pocategory'] = $pocategory;
        return view('backend.pages.portfolios.categories.show-category', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Pocategory $pocategory
     * @return Response
     */
    public function edit($lang, Pocategory $pocategory)
    {
        $data['pocategory'] = $pocategory;
        return view('backend.pages.portfolios.categories.edit-category', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param UpdatePocategoryRequest $request
     * @param Pocategory $pocategory
     * @return Response
     */
    public function update(UpdatePocategoryRequest $request, $lang, Pocategory $pocategory)
    {
        $category_id = $pocategory->id;

        $category = Pocategory::updateOrCreate(['id' => $category_id],
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
            $request->image_path->move(public_path('storage/portfolios/categories/' . $category->id . '/category-images/'), $fileName);
            $category->image_path = 'storage/portfolios/categories/' . $category->id . '/category-images/' . $fileName;
            $category->save();
        }

        return redirect()->route('pocategories.index', app()->getLocale())->with('success', 'Category has been Updated successfully');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Pocategory $pocategory
     * @return Response
     */
    public function destroy(Pocategory $pocategory)
    {
        //
    }
}
