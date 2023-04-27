@extends('backend.layouts.app')

@section('page-title', __('prayers.edit-prayer-title'))

@section('content')

    <section class="section">
        <div class="row">
            <div class="col-lg-10">

                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">@lang('prayers.edit-prayer-title')</h5>

                        <!-- Multi Columns Form -->
                        <form class="row g-3" method="POST" action="{{ route('prayers.update', $prayer->id)  }}">

                            @csrf
                            <div class="col-6">
                                <label for="title_fr" class="form-label">Titre FR
                                </label>
                                <input type="text" name="title_fr" class="form-control" id="title_fr" value="{{$prayer->getTranslation('title', 'fr')}}">

                            </div>
                            <div class="col-6">
                                <label for="title_en" class="form-label">Titre EN
                                </label>
                                <input type="text" name="title_en" class="form-control" id="title_en">

                            </div>

                            <div class="col-6">
                                <label for="sub_title_fr" class="form-label">Sous-Titre FR
                                </label>
                                <input type="text" name="title_fr" class="form-control" id="title_fr">

                            </div>
                            <div class="col-6">
                                <label for="sub_title_en" class="form-label">Sous-Titre EN
                                </label>
                                <input type="text" name="sub_title_en" class="form-control" id="sub_title_en">

                            </div>

                            <div class="col-12">
                                <label for="content_fr" class="form-label">Prière Fr</label>
                                <textarea name="content_fr" class="tinymce-editor" class="form-control" id="content_fr" ></textarea>
                            </div>

                            <div class="col-12">
                                <label for="content_en" class="form-label">Prière En</label>
                                <textarea name="content_en" class="tinymce-editor" id="content_en"  ></textarea>
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
