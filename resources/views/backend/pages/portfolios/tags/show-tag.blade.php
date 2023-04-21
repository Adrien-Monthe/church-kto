@extends('backend.layouts.app')

@section('page-title', __('potags.show-potag-title'))

@section('content')
    <div class="pagetitle">
        <h1>@lang('potags.show-potag-title')</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a
                        href="{{ route('dashboard', app()->getLocale())  }}">@lang('dash-sidebar.nav-dashboard')</a>
                </li>

                <li class="breadcrumb-item active">@lang('potags.show-potag-title')</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section">
        <div class="row">
            <div class="col-lg-8">

                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">{{ $potag->codename}}</h5>

                        <!-- Multi Columns Form -->
                        <form class="row g-3">
                            <div class="col-md-6">
                                <label for="name_en" class="form-label">Name En</label>
                                <input type="text" class="form-control" name="name_en" id="name_en"
                                       value="{{$potag->getTranslation('name', 'en')}}" readonly>
                            </div>
                            <div class="col-md-6">
                                <label for="name_fr" class="form-label">Noms Fr</label>
                                <input type="text" class="form-control" name="name_fr" id="name_fr"
                                       value="{{$potag->getTranslation('name', 'fr')}}" readonly>
                            </div>
                            <div class="col-12">
                                <label for="description_en" class="form-label">Description En</label>
                                <textarea name="description_en" class="form-control" id="description_en" cols="30"
                                          rows="3" readonly>{{$potag->getTranslation('description', 'en')}}</textarea>
                            </div>
                            <div class="col-12">
                                <label for="description_fr" class="form-label">Description Fr</label>
                                <textarea name="description_fr" class="form-control" id="description_fr" cols="30"
                                          rows="3" readonly>{{$potag->getTranslation('description', 'fr')}}</textarea>
                            </div>
                            <div class="col-md-12">
                                <label for="meta_keywords" class="form-label">Meta Keywords</label>
                                <input type="text" class="form-control" name="meta_keywords" id="meta_keywords"
                                       value="{{ $potag->meta_keywords }}">
                            </div>
                            <div class="col-12">
                                <label for="meta_description" class="form-label">Meta description</label>
                                <textarea name="meta_description" class="form-control" id="meta_description" cols="30"
                                          rows="3">{{ $potag->meta_description }}</textarea>
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
