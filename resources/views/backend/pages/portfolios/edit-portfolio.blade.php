@extends('backend.layouts.app')

@section('page-title', __('portfolios.edit-portfolio-title'))

@section('content')
    <div class="pagetitle">
        <h1>@lang('portfolios.edit-portfolio-title')</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a
                        href="{{ route('dashboard', app()->getLocale())  }}">@lang('dash-sidebar.nav-dashboard')</a>
                </li>
                {{--                <li class="breadcrumb-item">@lang('dash-sidebard.nav-ecomm')</li>--}}
                <li class="breadcrumb-item active">@lang('portfolios.edit-portfolio-title')</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section">
        <div class="row">
            <div class="col-lg-6">

                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">@lang('portfolios.edit-portfolio-title')</h5>

                        <!-- Multi Columns Form -->
                        <form class="row g-3" method="POST"
                              action="{{ route('portfolios.update', [app()->getLocale(), $portfolio->id])  }}"
                              enctype="multipart/form-data">

                            @csrf
                            @method('PUT')

                            <div class="col-md-6">
                                <label for="name_en" class="form-label">Name En</label>
                                <input type="text" class="form-control" name="name_en" id="name_en"
                                       value="{{$portfolio->getTranslation('name', 'en')}}">
                            </div>
                            <div class="col-md-6">
                                <label for="name_fr" class="form-label">Noms Fr</label>
                                <input type="text" class="form-control" name="name_fr" id="name_fr"
                                       value="{{$portfolio->getTranslation('name', 'fr')}}">
                            </div>
                            {{-- <div class="col-12">
                                <label for="short_description_en" class="form-label">Description En</label>
                                <textarea name="short_description_en" class="tinymce-editor" id="short_description_en"
                                          cols="30"
                                          rows="3">{{$portfolio->getTranslation('short_description', 'en')}}</textarea>
                            </div> --}}
                            <div class="col-12">
                                <label for="short_description_fr" class="form-label">Description Fr</label>
                                <textarea name="short_description_fr" class="tinymce-editor" id="short_description_fr"
                                          cols="30"
                                          rows="3">{{$portfolio->getTranslation('short_description', 'fr')}}</textarea>
                            </div>

                            <div class="col-md-12">
                                <label for="event_date" class="form-label">@lang('portfolios.table-event-date') </label>
                                <input type="date" class="form-control" name="event_date" id="event_date"
                                       value="{{ $portfolio->event_date }}">
                            </div>

                            <div class="col-md-6">
                                <img src="{{ asset($portfolio->image_path)}}" alt="{{ $portfolio->id }}" width="250">
                                <br>
                                <label for="image_path" class=" col-form-label">Image</label>
                                <div class="col-md-12">
                                    <input class="form-control" type="file" id="image_path" name="image_path">
                                </div>
                            </div>


                            <div class="col-md-6">
                                <img src="{{ asset($portfolio->image_path_banner)}}" alt="{{ $portfolio->id }}"
                                     width="250">
                                <br>
                                <label for="image_path_banner" class=" col-form-label">Image de Bannière</label>
                                <div class="col-md-12">
                                    <input class="form-control" type="file" id="image_path_banner"
                                           name="image_path_banner">
                                </div>
                            </div>

                            <div class="col-md-12">
                                <label for="pocategory_id" class="form-label">@lang('products.table-category')</label>
                                <select class="form-select" name="pocategory_id" aria-label="Default select example">

                                    @foreach ($categories as $category)
                                        <option
                                            {{ $portfolio->category && $portfolio->category->id == $category->id ? "selected" : "" }} value="{{$category->id}}">{{$category->name }}</option>
                                    @endforeach
                                </select>

                            </div>


                            <div class="text-center">
                                <button type="submit"
                                        class="btn btn-primary btn-primary-custom">@lang('general.btn-submit')</button>
                                <button type="reset" class="btn btn-secondary">@lang('general.btn-reset')</button>
                            </div>
                        </form><!-- End Multi Columns Form -->

                    </div>
                </div>

            </div>


            <div class="col-lg-6">

                <div class="card">
                    <div class="card-body">

                        <h5 class="card-title"></h5>

                        <ul class="nav nav-tabs nav-tabs-bordered" id="imagesTab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="list-images-tab" data-bs-toggle="tab"
                                        data-bs-target="#list-images" type="button" role="tab" aria-controls="home"
                                        aria-selected="true">@lang('images.show-images-title')</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="add-image-tab" data-bs-toggle="tab"
                                        data-bs-target="#add-image" type="button" role="tab" aria-controls="profile"
                                        aria-selected="false">@lang('images.create-image-title')</button>
                            </li>

                        </ul>
                        <div class="tab-content pt-2" id="imagesTabContent">
                            <div class="tab-pane fade show active" id="list-images" role="tabpanel"
                                 aria-labelledby="list-images-tab">
                                <table class="table table-borderless datatable">
                                    <thead>
                                    <tr>

                                        <th scope="col">@lang('images.table-preview')</th>
                                        <th scope="col">actions</th>

                                    </tr>
                                    </thead>
                                    <tbody>
                                    @if($portfolio->images)
                                        @foreach ($portfolio->images as $image)
                                            <tr>

                                                <th scope="row"><a href="#"><img src="{{ asset($image->image_path) }}"
                                                                                 alt="{{ $image->id }}" width="75"></a>
                                                </th>
                                                <td>
                                                    <form
                                                        action="{{ route('images.destroy',[app()->getLocale() ,$image->id]) }}"
                                                        method="Post">


                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-danger"
                                                        ><i class="bi bi-trash"></i></button>
                                                    </form>
                                                </td>
                                            </tr>
                                        @endforeach
                                    @endif


                                    </tbody>
                                </table>
                            </div>
                            <div class="tab-pane fade" id="add-image" role="tabpanel" aria-labelledby="add-image-tab">

                                <form class="row g-3" method="POST"
                                      action="{{ route('images.store', app()->getLocale())  }}"
                                      enctype="multipart/form-data">

                                    @csrf

                                    <input type="hidden" name="portfolio_id" class="invisible" id="portfolio_id"
                                           value="{{ $portfolio->id }}">

                                    <div class="col-md-6">
                                        <label for="name_en" class="form-label">Name En</label>
                                        <input type="text" class="form-control" name="name_en" id="name_en">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="name_fr" class="form-label">Noms Fr</label>
                                        <input type="text" class="form-control" name="name_fr" id="name_fr">
                                    </div>

                                    <div class="col-md-12">
                                        <label for="image_path" class="col-sm-2 col-form-label">Image</label>
                                        <div class="col-md-12">
                                            <input class="form-control" type="file" id="image_path" name="image_path">
                                        </div>
                                    </div>


                                    <div class="text-center">
                                        <button type="submit"
                                                class="btn btn-primary btn-primary-custom">@lang('general.btn-submit')</button>
                                        <button type="reset"
                                                class="btn btn-secondary">@lang('general.btn-reset')</button>
                                    </div>
                                </form><!-- End Multi Columns Form -->

                            </div>

                        </div><!-- End Bordered Tabs -->


                    </div>
                </div>

            </div>

        </div>
    </section>

@endsection
