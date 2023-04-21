@extends('backend.layouts.app')

@section('page-title', __('testimonials.create-testimonial-title'))

@section('content')
    <div class="pagetitle">
        <h1>@lang('testimonials.create-testimonial-title')</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a
                        href="{{ route('dashboard', app()->getLocale())  }}">@lang('dash-sidebar.nav-dashboard')</a>
                </li>
                {{--                <li class="breadcrumb-item">@lang('dash-sidebard.nav-ecomm')</li>--}}
                <li class="breadcrumb-item active">@lang('testimonials.create-testimonial-title')</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section">
        <div class="row">
            <div class="col-lg-8">

                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">@lang('testimonials.create-testimonial-title')</h5>

                        <!-- Multi Columns Form -->
                        <form class="row g-3" method="POST"
                              action="{{ route('testimonials.store', app()->getLocale())  }}"
                              enctype="multipart/form-data">

                            @csrf

                            <div class="col-md-6">
                                <label for="author_name" class="form-label">Noms</label>
                                <input type="text" class="form-control" name="author_name" id="author_name">
                            </div>
                            <div class="col-md-6">
                                <label for="author_title" class="form-label">Titre</label>
                                <input type="text" class="form-control" name="author_title" id="author_title">
                            </div>

                            <div class="col-12">
                                <label for="author_message" class="form-label">Message</label>
                                <textarea name="author_message" class="form-control" id="author_message"
                                          cols="30" rows="3"></textarea>
                            </div>

                            <div class="col-md-6">
                                <label for="status" class="form-label">@lang('blogs.table-status')</label>
                                <select class="form-select" name="status" aria-label="Default select example">
                                    <option value="1">Actif</option>
                                    <option value="0">Inactif</option>
                                </select>
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
