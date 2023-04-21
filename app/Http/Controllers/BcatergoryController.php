<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreBcatergoryRequest;
use App\Http\Requests\UpdateBcatergoryRequest;
use App\Models\Bcatergory;
use Illuminate\Http\Response;

class BcatergoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $data['bcategories'] = Bcatergory::orderBy('id','desc')->get();
        return view('backend.pages.posts.categories.show-categories',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('backend.pages.posts.categories.create-category');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param StoreBcatergoryRequest $request
     * @return Response
     */
    public function store(StoreBcatergoryRequest $request)
    {
        $category_id = $request->category_id;

        $codename =  $this->clean($request->name_fr);

        $category   =   Bcatergory::updateOrCreate(['id' => $category_id],
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
            $request->image_path->move(public_path('storage/posts/categories/' . $category->id . '/category-images/'), $fileName);
            $category->image_path = 'storage/posts/categories/' . $category->id . '/category-images/' . $fileName;
            $category->save();
        }

        notify()->success('Catégorie créé avec succès');

        return redirect()->route('bcategories.index', app()->getLocale())->with('success', 'Category has been added successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param Bcatergory $bcatergory
     * @return Response
     */
    public function show($lang, Bcatergory $bcategory)
    {
        $data['bcategory'] = $bcategory;
        return view('backend.pages.posts.categories.show-category',$data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Bcatergory $bcatergory
     * @return Response
     */
    public function edit($lang, Bcatergory $bcategory)
    {
        $data['bcategory'] = $bcategory;
        return view('backend.pages.posts.categories.edit-category',$data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param UpdateBcatergoryRequest $request
     * @param Bcatergory $bcatergory
     * @return Response
     */
    public function update(UpdateBcatergoryRequest $request, $lang, Bcatergory $bcategory)
    {
        $category_id = $bcategory->id;

        $category   =   Bcatergory::updateOrCreate(['id' => $category_id],
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
            $request->image_path->move(public_path('storage/posts/categories/' . $category->id . '/category-images/'), $fileName);
            $category->image_path = 'storage/posts/categories/' . $category->id . '/category-images/' . $fileName;
            $category->save();
        }

        notify()->success('Catégorie modifié avec succès');

        return redirect()->route('bcategories.index', app()->getLocale())->with('success', 'Category has been Updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Bcatergory $bcatergory
     * @return Response
     */
    public function destroy(Bcatergory $bcatergory)
    {
        //
    }
}
