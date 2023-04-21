@extends('backend.layouts.app')

@section('page-title', __('sponsors.edit-sponsor-title'))

@section('content')
    <div class="pagetitle">
        <h1>@lang('sponsors.edit-sponsor-title')</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a
                        href="{{ route('dashboard', app()->getLocale())  }}">@lang('dash-sidebar.nav-dashboard')</a>
                </li>
                {{--                <li class="breadcrumb-item">@lang('dash-sidebard.nav-ecomm')</li>--}}
                <li class="breadcrumb-item active">@lang('sponsors.edit-sponsor-title')</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section">
        <div class="row">
            <div class="col-lg-8">

                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">@lang('sponsors.edit-sponsor-title')</h5>

                        <!-- Multi Columns Form -->
                        <form class="row g-3">

                            @csrf

                            <div class="col-md-6">
                                <label for="name" class="form-label">Noms</label>
                                <input type="text" class="form-control" name="name" id="name"
                                       value="{{ $sponsor->name }}">
                            </div>

                            <div class="col-md-6">
                                <label for="status" class="form-label">@lang('blogs.table-status')</label>
                                <select class="form-select" name="status" aria-label="Default select example">
                                    <option {{ $sponsor->status ? "selected" : "" }} value="1">Actif</option>
                                    <option {{ !$sponsor->status ? "selected" : "" }} value="0">Inactif</option>
                                </select>
                            </div>


                            <div class="col-md-12">
                                <label for="image_path" class="col-sm-2 col-form-label">Image</label>
                                <div class="col-md-12">
                                    <input class="form-control" type="file" id="image_path" name="image_path">
                                </div>
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
