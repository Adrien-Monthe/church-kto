<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreImageRequest;
use App\Http\Requests\UpdateImageRequest;
use App\Models\Blog;
use App\Models\Image;
use App\Models\Portfolio;
use App\Models\Product;
use Illuminate\Http\Response;

class ImageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param StoreImageRequest $request
     * @return Response
     */
    public function store(StoreImageRequest $request)
    {
        $image_id = $request->image_id;

        $image = Image::updateOrCreate(['id' => $image_id],
            [

                'name' => [
                    'en' => $request->name_en,
                    'fr' => $request->name_fr,
                ],

            ]);


        if ($request->image_path) {
            $fileName = time() . '_img.' . $request->image_path->extension();
            $request->image_path->move(public_path('storage/images/' . $image->id . '/image-images/'), $fileName);
            $image->image_path = 'storage/images/' . $image->id . '/image-images/' . $fileName;
            $image->save();
        }


        if ($request->portfolio_id) {
            $portfolio = Portfolio::find($request->portfolio_id);
            $portfolio->images()->save($image);
        }
        if ($request->product_id) {
            $product = Product::find($request->product_id);
            $product->images()->save($image);
        }

        if ($request->blog_id) {
            $blog = Blog::find($request->blog_id);
            $blog->images()->save($image);
        }

        if ($request->event_id) {
            $event = Blog::find($request->event_id);
            $event->images()->save($image);
        }

        //notify()->success('Image ajouté avec succès️');


        return redirect()->back()->with('success', 'Image Added.');


    }

    /**
     * Display the specified resource.
     *
     * @param Image $image
     * @return Response
     */
    public function show(Image $image)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Image $image
     * @return Response
     */
    public function edit(Image $image)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param UpdateImageRequest $request
     * @param Image $image
     * @return Response
     */
    public function update(UpdateImageRequest $request, Image $image)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Image $image
     * @return Response
     */
    public function destroy($lang, Image $image)
    {

        $image->delete();

        return redirect()->back()->with('success', 'Image Added.');

    }
}
