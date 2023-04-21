@extends('backend.layouts.app')

@section('page-title', __('events.create-event-title'))

@section('content')
    <div class="pagetitle">
        <h1>@lang('events.create-event-title')</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a
                        href="{{ route('dashboard', app()->getLocale())  }}">@lang('dash-sidebar.nav-dashboard')</a>
                </li>

                <li class="breadcrumb-item active">@lang('events.create-event-title')</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section">
        <div class="row">
            <div class="col-lg-12">

                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">@lang('events.create-event-title')</h5>

                        <!-- Multi Columns Form -->
                        <form class="row g-3" method="POST" action="{{ route('events.store', app()->getLocale())  }}"
                              enctype="multipart/form-data">

                            @csrf

                            <div class="col-md-6">
                                <label for="title_en" class="form-label">Name En</label>
                                <input type="text" class="form-control" name="title_en" id="title_en">
                            </div>

                            <div class="col-md-6">
                                <label for="title_fr" class="form-label">Noms Fr</label>
                                <input type="text" class="form-control" name="title_fr" id="title_fr">
                            </div>


                            <div class="col-md-12">
                                <label for="image_path" class="col-sm-2 col-form-label">Image</label>
                                <div class="col-md-12">
                                    <input class="form-control" type="file" id="image_path" name="image_path">
                                </div>
                            </div>

                            <div class="col-md-6">
                                <label for="start_date"
                                       class="form-label">@lang('editions.table-start-date') </label>
                                <input type="date" class="form-control" name="start_date" id="start_date">
                            </div>

                            <div class="col-md-6">
                                <label for="end_date"
                                       class="form-label">@lang('editions.table-end-date') </label>
                                <input type="date" class="form-control" name="end_date" id="end_date">
                            </div>

                            <div class="col-md-12">
                                <label for="portfolio_id" class="form-label">@lang('events.table-category')</label>
                                <select class="form-select" name="portfolio_id" aria-label="Default select example">
                                    <option value="">Lier à un portfolio</option>
                                    @foreach ($portfolios as $portfolio)
                                        <option value="{{$portfolio->id}}">{{$portfolio->name }}</option>
                                    @endforeach
                                </select>
                            </div>


                            <div class="col-12">
                                <label for="short_description_en" class="form-label">Short Description En</label>
                                <textarea name="short_description_en" class="form-control" id="short_description_en"
                                          cols="30" rows="3"></textarea>
                            </div>

                            <div class="col-12">
                                <label for="short_description_fr" class="form-label">Short Description Fr</label>
                                <textarea name="short_description_fr" class="form-control" id="short_description_fr"
                                          cols="30" rows="3"></textarea>
                            </div>

                            <div class="col-12">
                                <label for="description_en" class="form-label">Description En</label>
                                <textarea name="description_en" class="tinymce-editor" id="description_en"></textarea>
                            </div>

                            <div class="col-12">
                                <label for="description_fr" class="form-label">Description Fr</label>
                                <textarea name="description_fr" class="tinymce-editor" class="form-control"
                                          id="description_fr"></textarea>
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
