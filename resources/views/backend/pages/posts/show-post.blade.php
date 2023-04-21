@extends('backend.layouts.app')

@section('page-title', __('products.edit-product-title'))

@section('content')
    <div class="pagetitle">
        <h1>@lang('products.edit-product-title')</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('dashboard', app()->getLocale())  }}">@lang('dash-sidebard.nav-dashboard')</a></li>
                <li class="breadcrumb-item">@lang('dash-sidebard.nav-ecomm')</li>
                <li class="breadcrumb-item active">@lang('products.edit-product-title')</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section">
        <div class="row">
            <div class="col-lg-10">

                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">@lang('products.edit-product-title')</h5>

                        <!-- Multi Columns Form -->
                        <form class="row g-3"  enctype="multipart/form-data">


                            <div class="col-md-6">
                                <label for="name_en" class="form-label">Name En</label>
                                <input type="text" class="form-control" name="name_en" id="name_en" value="{{$product->getTranslation('name', 'en')}}" readonly>
                            </div>
                            <div class="col-md-6">
                                <label for="name_fr" class="form-label">Noms Fr</label>
                                <input type="text" class="form-control" name="name_fr" id="name_fr" value="{{$product->getTranslation('name', 'fr')}}" readonly>
                            </div>

                            <div class="col-md-6">
                                <label for="price" class="form-label">@lang('products.table-price')</label>
                                <input type="text" class="form-control" name="price" id="price" value="{{ $product->price }}" readonly>
                            </div>
                            <div class="col-md-6">
                                <label for="quantity_in_stock" class="form-label">@lang('products.table-quantity-in-stock')</label>
                                <input type="number" class="form-control" name="quantity_in_stock" id="quantity_in_stock" value="{{ $product->price }}" readonly>
                            </div>



                            <div class="col-md-12">
                                <img src="{{ asset($product->image_path)}}" alt="{{ $product->id }}" width="250">
                                <br>
                                <label for="image_path" class="col-sm-2 col-form-label">Image</label>

                              </div>

                            <div class="col-md-12">
                                <label for="category_id" class="form-label">@lang('products.table-category')</label>
                                <select class="form-select" name="category_id" aria-label="Default select example" readonly>

                                    @foreach ($categories as $category)

                                                @if($product->category && $product->category->id == $category->id )
                                                    <option selected value="{{$category->id}}">{{$category->name }}</option>
                                                @else
                                                    <option value="{{$category->id}}">{{$category->name }}</option>
                                                @endif

                                    @endforeach

                                </select>

                            </div>

                            <div class="col-12">
                                <label for="short_description_en" class="form-label">Short Description En</label>
                                <textarea name="short_description_en" class="form-control" id="short_description_en" cols="30" rows="3" readonly>{{$product->getTranslation('short_description', 'en')}}</textarea>
                            </div>
                            <div class="col-12">
                                <label for="short_description_fr" class="form-label">Short Description Fr</label>
                                <textarea name="short_description_fr" class="form-control" id="short_description_fr" cols="30" rows="3" readonly>{{$product->getTranslation('short_description', 'fr')}}</textarea>
                            </div>

                            <div class="col-12">
                                <label for="description_en" class="form-label">Description En</label>
                                <textarea name="description_en" class="tinymce-editor" id="description_en" readonly>{{$product->getTranslation('description', 'en')}}</textarea>
                            </div>
                            <div class="col-12">
                                <label for="description_fr" class="form-label">Description Fr</label>
                                <textarea name="description_fr" class="tinymce-editor" class="form-control" id="description_fr" readonly>{{$product->getTranslation('description', 'fr')}}</textarea>
                            </div>



                        </form><!-- End Multi Columns Form -->

                    </div>
                </div>

            </div>


            <div class="col-lg-6">



            </div>

        </div>
    </section>
@endsection
