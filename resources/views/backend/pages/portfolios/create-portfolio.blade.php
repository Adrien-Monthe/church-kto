@extends('backend.layouts.app')

@section('page-title', __('portfolios.create-portfolio-title'))

@section('content')
    <div class="pagetitle">
        <h1>@lang('portfolios.create-portfolio-title')</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a
                        href="{{ route('dashboard', app()->getLocale())  }}">@lang('dash-sidebar.nav-dashboard')</a>
                </li>
                {{--                <li class="breadcrumb-item">@lang('dash-sidebard.nav-ecomm')</li>--}}
                <li class="breadcrumb-item active">@lang('portfolios.create-portfolio-title')</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section">
        <div class="row">
            <div class="col-lg-8">

                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">@lang('portfolios.create-portfolio-title')</h5>

                        <!-- Multi Columns Form -->
                        <form class="row g-3" method="POST"
                              action="{{ route('portfolios.store', app()->getLocale())  }}"
                              enctype="multipart/form-data">

                            @csrf

                            <div class="col-md-6">
                                <label for="name_en" class="form-label">Name En</label>
                                <input type="text" class="form-control" name="name_en" id="name_en">
                            </div>
                            <div class="col-md-6">
                                <label for="name_fr" class="form-label">Noms Fr</label>
                                <input type="text" class="form-control" name="name_fr" id="name_fr">
                            </div>
                            <div class="col-12">
                                <label for="short_description_en" class="form-label">Description En</label>
                                <textarea name="short_description_en" class="form-control" id="short_description_en"
                                          cols="30"
                                          rows="3"></textarea>
                            </div>
                            <div class="col-12">
                                <label for="short_description_fr" class="form-label">Description Fr</label>
                                <textarea name="short_description_fr" class="form-control" id="short_description_fr"
                                          cols="30"
                                          rows="3"></textarea>
                            </div>

                            <div class="col-md-12">
                                <label for="event_date" class="form-label">@lang('portfolios.table-event-date') </label>
                                <input type="date" class="form-control" name="event_date" id="event_date">
                            </div>

                            <div class="col-md-6">
                                <label for="image_path" class=" col-form-label">Image</label>
                                <div class="col-md-12">
                                    <input class="form-control" type="file" id="image_path" name="image_path">
                                </div>
                            </div>


                            <div class="col-md-6">
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
                                        <option value="{{$category->id}}">{{$category->name }}</option>
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


            </div>

        </div>
    </section>
@endsection
