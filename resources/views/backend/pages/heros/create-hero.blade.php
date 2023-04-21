@extends('backend.layouts.app')

@section('page-title', __('heros.create-hero-title'))

@section('content')

    <section class="section">
        <div class="row">
            <div class="col-lg-10">

                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">@lang('heros.create-hero-title')</h5>

                        <!-- Multi Columns Form -->
                        <form class="row g-3" method="POST" action="{{ route('heros.store', app()->getLocale())  }}"
                              enctype="multipart/form-data">

                            @csrf

                            <div class="col-6">
                                <label for="heading_title_fr" class="form-label">@lang('heros.table-heading-title')
                                    Fr</label>
                                <input type="text" name="heading_title_fr" class="form-control" id="heading_title_fr">

                            </div>
                            <div class="col-6">
                                <label for="heading_title_en" class="form-label">@lang('heros.table-heading-title')
                                    En</label>
                                <input type="text" name="heading_title_en" class="form-control" id="heading_title_en">
                            </div>

                            <div class="col-12">
                                <label for="heading_description_fr"
                                       class="form-label">@lang('heros.table-heading-description') Fr</label>
                                <textarea name="heading_description_fr" class="form-control" id="heading_description_fr"
                                          cols="30" rows="3"></textarea>
                            </div>
                            <div class="col-12">
                                <label for="heading_description_en"
                                       class="form-label">@lang('heros.table-heading-description') En</label>
                                <textarea name="heading_description_en" class="form-control" id="heading_description_en"
                                          cols="30" rows="3"></textarea>
                            </div>

                            <div class="col-6">
                                <label for="heading_btn_fr" class="form-label">@lang('heros.table-heading-btn')
                                    Fr</label>
                                <input type="text" name="heading_btn_fr" class="form-control" id="heading_btn_fr">

                            </div>
                            <div class="col-6">
                                <label for="heading_btn_en" class="form-label">@lang('heros.table-heading-btn')
                                    En</label>
                                <input type="text" name="heading_btn_en" class="form-control" id="heading_btn_en">
                            </div>

                            <div class="col-12">
                                <label for="heading_link" class="form-label">@lang('heros.table-heading-link') </label>
                                <input type="text" name="heading_link" class="form-control" id="heading_link">
                            </div>

                            <div class="col-md-12">
                                <label for="status" class="form-label">@lang('heros.table-status')</label>
                                <select class="form-select" name="status" aria-label="Default select example">
                                    <option value="false">Inactif</option>
                                    <option value="true">Actif</option>
                                </select>
                            </div>

                            <div class="col-md-12">
                                <label for="heading_bg_image" class="col-sm-2 col-form-label">Image</label>
                                <div class="col-md-12">
                                    <input class="form-control" type="file" id="heading_bg_image"
                                           name="heading_bg_image">
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
