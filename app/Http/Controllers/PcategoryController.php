<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePcategoryRequest;
use App\Http\Requests\UpdatePcategoryRequest;
use App\Models\Pcategory;
use Illuminate\Http\Response;

class PcategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $data['pcategories'] = Pcategory::orderBy('id','desc')->get();
        return view('backend.pages.products.categories.show-categories',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('backend.pages.products.categories.create-category');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param StorePcategoryRequest $request
     * @return Response
     */
    public function store(StorePcategoryRequest $request)
    {
        $category_id = $request->category_id;

        $codename = $this->clean($request->name_fr);

        $category   =   Pcategory::updateOrCreate(['id' => $category_id],
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
            $request->image_path->move(public_path('storage/products/categories/'.$category->id.'/category-images/'), $fileName);
            $category->image_path = 'storage/products/categories/'.$category->id.'/category-images/'.$fileName;
            $category->save();
        }

        return redirect()->route('pcategories.index',app()->getLocale())->with('success','Category has been added successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param Pcategory $pcategory
     * @return Response
     */
    public function show($lang, Pcategory $pcategory)
    {
        $data['pcategory'] = $pcategory;
        return view('backend.pages.products.categories.show-category',$data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Pcategory $pcategory
     * @return Response
     */
    public function edit($lang, Pcategory $pcategory)
    {
        $data['pcategory'] = $pcategory;
        return view('backend.pages.products.categories.edit-category',$data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param UpdatePcategoryRequest $request
     * @param Pcategory $pcategory
     * @return Response
     */
    public function update(UpdatePcategoryRequest $request, $lang, Pcategory $pcategory)
    {
        $category_id = $pcategory->id;

        $category   =   Pcategory::updateOrCreate(['id' => $category_id],
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
            $request->image_path->move(public_path('storage/products/categories/'.$category->id.'/category-images/'), $fileName);
            $category->image_path = 'storage/products/categories/'.$category->id.'/category-images/'.$fileName;
            $category->save();
        }

        return redirect()->route('pcategories.index',app()->getLocale())->with('success','Category has been Updated successfully');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Pcategory $pcategory
     * @return Response
     */
    public function destroy(Pcategory $pcategory)
    {
        //
    }
}
