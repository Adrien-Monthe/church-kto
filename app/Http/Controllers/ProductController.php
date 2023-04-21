<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;
use App\Models\Pcategory;
use App\Models\Product;
use App\Models\Ptag;
use Illuminate\Http\Response;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $data['products'] = Product::orderBy('id', 'desc')->get();
        return view('backend.pages.products.show-products', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        $data['categories'] = Pcategory::orderBy('id', 'desc')->get();
        $data['tags'] = Ptag::orderBy('id', 'desc')->get();
        return view('backend.pages.products.create-product', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param StoreProductRequest $request
     * @return Response
     */
    public function store(StoreProductRequest $request)
    {
        $product_id = $request->product_id;

        $product = Product::updateOrCreate(['id' => $product_id],
            [
                'reference' => $request->reference,

                'type' => $request->product_type,

                'status' => $request->status,

                'comment_status' => $request->comment_status,

                'quantity_in_stock' => $request->quantity_in_stock,

                'meta_keywords' => $request->meta_keywords,

                'visibility' => $request->visibility,

                'meta_description' => $request->meta_description,

                'views' => '0',

                'pcategory_id' => $request->category_id,

                'price' => $request->price,

                'promo_price' => $request->promo_price,


                'description' => [
                    'en' => $request->description_en,
                    'fr' => $request->description_fr
                ],
                'name' => [
                    'en' => $request->name_en,
                    'fr' => $request->name_fr
                ],
                'short_description' => [
                    'en' => $request->short_description_en,
                    'fr' => $request->short_description_fr
                ],


            ]);

        if ($request->image_path) {
            $fileName = time() . '_img.' . $request->image_path->extension();
            $request->image_path->move(public_path('storage/products/' . $product->id . '/product-images/'), $fileName);
            $product->image_path = 'storage/products/' . $product->id . '/product-images/' . $fileName;
            $product->save();
        }
        /*if($request->tags){
            foreach ($request->tags as $tag_id){
                $product->tags()->attach($tag_id);
                $product->save();
            }
        }*/


        return redirect()->route('products.index', app()->getLocale())->with('success', 'Product has been added successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param Product $product
     * @return Response
     */
    public function show($lang, Product $product)
    {
        $data['categories'] = Pcategory::orderBy('id', 'desc')->get();
        $data['tags'] = Ptag::orderBy('id', 'desc')->get();
        $data['product'] = $product;
        return view('backend.pages.products.show-product', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Product $product
     * @return Response
     */
    public function edit($lang, Product $product)
    {
        $data['categories'] = Pcategory::orderBy('id', 'desc')->get();
        $data['tags'] = Ptag::orderBy('id', 'desc')->get();
        $data['product'] = $product;
        return view('backend.pages.products.edit-product', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param UpdateProductRequest $request
     * @param Product $product
     * @return Response
     */
    public function update(UpdateProductRequest $request, $lang, Product $product)
    {
        $product_id = $product->id;

        $product = Product::updateOrCreate(['id' => $product_id],
            [

                'type' => $request->product_type,

                'status' => $request->status,

                'comment_status' => $request->comment_status,

                'quantity_in_stock' => $request->quantity_in_stock,

                'meta_keywords' => $request->meta_keywords,

                'visibility' => $request->visibility,

                'meta_description' => $request->meta_description,

                'views' => '0',

                'pcategory_id' => $request->category_id,

                'price' => $request->price,

                'promo_price' => $request->promo_price,

                'description' => [
                    'en' => $request->description_en,
                    'fr' => $request->description_fr
                ],
                'name' => [
                    'en' => $request->name_en,
                    'fr' => $request->name_fr
                ],
                'short_description' => [
                    'en' => $request->short_description_en,
                    'fr' => $request->short_description_fr
                ],


            ]);

        if ($request->image_path) {
            $fileName = time() . '_img.' . $request->image_path->extension();
            $request->image_path->move(public_path('storage/products/' . $product->id . '/product-images/'), $fileName);
            $product->image_path = 'storage/products/' . $product->id . '/product-images/' . $fileName;
            $product->save();
        }
        /*if($request->tags){
            foreach ($request->tags as $tag_id){
                $product->tags()->attach($tag_id);
                $product->save();
            }
        }*/


        return redirect()->route('products.index', app()->getLocale())->with('success', 'Product has been added successfully');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Product $product
     * @return Response
     */
    public function destroy(Product $product)
    {
        //
    }
}
