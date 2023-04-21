@extends('backend.layouts.app')

@section('page-title', __('blogs.edit-blog-title'))

@section('content')
    <div class="pagetitle">
        <h1>@lang('blogs.edit-blog-title')</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('dashboard', app()->getLocale())  }}">@lang('dash-sidebard.nav-dashboard')</a></li>
                <li class="breadcrumb-item">@lang('dash-sidebard.nav-ecomm')</li>
                <li class="breadcrumb-item active">@lang('blogs.edit-blog-title')</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section">
        <div class="row">
            <div class="col-lg-12">

                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">@lang('blogs.edit-blog-title')</h5>

                        <!-- Multi Columns Form -->
                        <form class="row g-3" method="POST" action="{{ route('blogs.update', [app()->getLocale(), $blog->id])  }}" enctype="multipart/form-data">

                            @csrf
                            @method('PUT')



                            <div class="col-md-6">
                                <label for="title_en" class="form-label">Name En</label>
                                <input type="text" class="form-control" name="title_en" id="title_en" value="{{$blog->getTranslation('title', 'en')}}">
                            </div>

                            <div class="col-md-6">
                                <label for="title_fr" class="form-label">Noms Fr</label>
                                <input type="text" class="form-control" name="title_fr" id="title_fr" value="{{$blog->getTranslation('title', 'fr')}}">
                            </div>

                            <div class="col-md-6">
                                <label for="author" class="form-label">@lang('blogs.table-author')</label>
                                <input type="text" class="form-control" name="author" id="author" value="{{ $blog->author }}">
                            </div>

                            <div class="col-md-6">
                                <label for="visibility" class="form-label">@lang('blogs.table-tag')</label>
                                <select class="form-select" name="visibility" aria-label="Default select example">
                                    <option value="public">Public</option>
                                    <option value="private">Private</option>
                                </select>
                            </div>

                            <div class="col-md-12">
                                <label for="meta_keywords" class="form-label">Meta Keywords</label>
                                <input type="text" class="form-control" name="meta_keywords" id="meta_keywords" value="{{ $blog->meta_keywords }}">
                            </div>

                            <div class="col-12">
                                <label for="meta_description" class="form-label">Meta description</label>
                                <textarea name="meta_description" class="form-control" id="meta_description" cols="30" rows="3">{{ $blog->meta_description }}</textarea>
                            </div>





                            <div class="col-md-6">
                                <label for="tags" class="form-label">@lang('blogs.table-tags')</label>
                                <select class="form-select" multiple name="tags[]" aria-label="Default select example">

                                    @foreach ($tags as $tag)
                                        <option value="{{$tag->id}}">{{$tag->name }}</option>
                                    @endforeach
                                </select>
                            </div>







                            <div class="col-md-12">
                                <img src="{{ asset($blog->image_path)}}" alt="{{ $blog->id }}" width="250">
                                <br>
                                <label for="image_path" class="col-sm-2 col-form-label">Image</label>
                                <div class="col-md-12">
                                    <input class="form-control" type="file" id="image_path" name="image_path">
                                </div>
                            </div>

                            <div class="col-md-12">
                                <label for="category_id" class="form-label">@lang('blogs.table-category')</label>
                                <select class="form-select" name="category_id" aria-label="Default select example">

                                    @foreach ($categories as $category)
                                        <option
                                            {{ $blog->category && $blog->category->id == $category->id ? "selected" : "" }} value="{{$category->id}}">{{$category->name }}</option>
                                    @endforeach

                                </select>

                            </div>

                            <div class="col-12">
                                <label for="short_description_en" class="form-label">Short Description En</label>
                                <textarea name="short_description_en" class="form-control" id="short_description_en"
                                          cols="30"
                                          rows="3">{{$blog->getTranslation('short_description', 'en')}}</textarea>
                            </div>
                            <div class="col-12">
                                <label for="short_description_fr" class="form-label">Short Description Fr</label>
                                <textarea name="short_description_fr" class="form-control" id="short_description_fr" cols="30" rows="3">{{$blog->getTranslation('short_description', 'fr')}}</textarea>
                            </div>

                            <div class="col-12">
                                <label for="description_en" class="form-label">Description En</label>
                                <textarea name="description_en" class="tinymce-editor" id="description_en" >{{$blog->getTranslation('description', 'en')}}</textarea>
                            </div>
                            <div class="col-12">
                                <label for="description_fr" class="form-label">Description Fr</label>
                                <textarea name="description_fr" class="tinymce-editor" class="form-control" id="description_fr" >{{$blog->getTranslation('description', 'fr')}}</textarea>
                            </div>




                            <div class="text-center">
                                <button type="submit" class="btn btn-primary">@lang('general.btn-submit')</button>
                                <button type="reset" class="btn btn-secondary">@lang('general.btn-reset')</button>
                            </div>
                        </form><!-- End Multi Columns Form -->

                    </div>
                </div>

            </div>


            <div class="col-lg-12">
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
                                    @if($blog->images)
                                        @foreach ($blog->images as $image)
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

                                    <input type="hidden" name="blog_id" class="invisible" id="blog_id"
                                           value="{{ $blog->id }}">

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
