@extends('backend.layouts.app')

@section('page-title', __('pcomments.create-pcomment-title'))

@section('content')

    <div class="pagetitle">
        <h1>@lang('pcomments.create-pcomment-title')</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a
                        href="{{ route('dashboard', app()->getLocale())  }}">@lang('dash-sidebar.nav-dashboard')</a>
                </li>
                {{--                <li class="breadcrumb-item">@lang('dash-sidebard.nav-ecomm')</li>--}}
                <li class="breadcrumb-item active">@lang('pcomments.create-pcomment-title')</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section">
        <div class="row">
            <div class="col-lg-10">

                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">@lang('pcomments.create-pcomment-title')</h5>

                        <!-- Multi Columns Form -->
                        <form class="row g-3" method="POST" action="{{ route('pcomments.store', app()->getLocale())  }}"
                              enctype="multipart/form-data">

                            @csrf

                            <div class="col-md-12">
                                <select class="form-select" name="product_id" aria-label="Default select example">

                                    @foreach ($products as $product)
                                        <option value="{{$product->id}}">{{$product->name }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="col-md-6">
                                <label for="name" class="form-label">@lang('pcomments.table-name')</label>
                                <input type="text" class="form-control" name="name" id="name" required>
                            </div>
                            <div class="col-md-6">
                                <label for="email" class="form-label">@lang('pcomments.table-email')</label>
                                <input type="email" class="form-control" name="email" id="email" required>
                            </div>

                            <div class="col-12">
                                <label for="rate" class="form-label">Note</label><br>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="rate" id="inlineRadio1"
                                           value="1">
                                    <label class="form-check-label" for="inlineRadio1">1</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="rate" id="inlineRadio2"
                                           value="2">
                                    <label class="form-check-label" for="inlineRadio2">2</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="rate" id="inlineRadio3"
                                           value="3">
                                    <label class="form-check-label" for="inlineRadio3">3</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="rate" id="inlineRadio4"
                                           value="4">
                                    <label class="form-check-label" for="inlineRadio4">4</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="rate" id="inlineRadio4"
                                           value="5">
                                    <label class="form-check-label" for="inlineRadio5">5</label>
                                </div>
                            </div>

                            <div class="col-12">
                                <label for="comment" class="form-label">@lang('pcomments.table-comment')</label>
                                <textarea name="comment" class="form-control" id="comment" cols="30"
                                          rows="3"></textarea>
                            </div>


                            <div class="text-center">
                                <button type="submit" class="btn btn-primary">@lang('general.btn-submit')</button>
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
