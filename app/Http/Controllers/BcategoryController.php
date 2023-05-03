<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreBcategoryRequest;
use App\Http\Requests\UpdateBcategoryRequest;
use App\Models\Bcategory;
use Illuminate\Http\Response;

class BcategoryController extends Controller
{
/* Display a listing of the resource.
*
* @return Response
*/
    public function index()
    {
        $data['bcategories'] = Bcategory::orderBy('id','desc')->get();
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
     * @param StoreBcategoryRequest $request
     * @return Response
     */
    public function store(StoreBcategoryRequest $request)
    {
        $category_id = $request->category_id;

        $codename =  $this->clean($request->name_fr);

        $category   =   Bcategory::updateOrCreate(['id' => $category_id],
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



        return redirect()->route('bcategories.index', app()->getLocale())->with('success', 'Category has been added successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param Bcategory $bcategory
     * @return Response
     */
    public function show(  Bcategory $bcategory)
    {
        $data['bcategory'] = $bcategory;
        return view('backend.pages.posts.categories.show-category',$data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Bcategory $bcategory
     * @return Response
     */
    public function edit(  Bcategory $bcategory)
    {
        $data['bcategory'] = $bcategory;
        return view('backend.pages.posts.categories.edit-category',$data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param UpdateBcategoryRequest $request
     * @param Bcategory $bcategory
     * @return Response
     */
    public function update(UpdateBcategoryRequest $request,  Bcategory $bcategory)
    {
        $category_id = $bcategory->id;

        $category   =   Bcategory::updateOrCreate(['id' => $category_id],
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



        return redirect()->route('bcategories.index', app()->getLocale())->with('success', 'Category has been Updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Bcategory $bcategory
     * @return Response
     */
    public function destroy(Bcategory $bcategory)
    {
        //
    }
}
