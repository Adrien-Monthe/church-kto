@extends('backend.layouts.app')

@section('page-title', __('faqs.edit-faq-title'))

@section('content')

    <section class="section">
        <div class="row">
            <div class="col-lg-10">

                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">@lang('faqs.create-faq-title')</h5>

                        <!-- Multi Columns Form -->
                        <form class="row g-3">


                            <div class="col-6">
                                <label for="question_fr" class="form-label">Question Fr</label>
                                <textarea name="question_fr" class="form-control" id="question_fr" cols="30"
                                          rows="3">{{ $faq->getTranslation('question', 'fr') }}</textarea>
                            </div>
                            <div class="col-6">
                                <label for="question_en" class="form-label">Question En</label>
                                <textarea name="question_en" class="form-control" id="question_en" cols="30"
                                          rows="3">{{ $faq->getTranslation('question', 'en') }}</textarea>
                            </div>

                            <div class="col-12">
                                <label for="answer_fr" class="form-label">@lang('faqs.table-answer') Fr</label>
                                <textarea name="answer_fr" class="form-control" id="answer_fr" cols="30"
                                          rows="3">{{ $faq->getTranslation('answer', 'fr') }}</textarea>
                            </div>
                            <div class="col-12">
                                <label for="answer_en" class="form-label">@lang('faqs.table-answer') En</label>
                                <textarea name="answer_en" class="form-control" id="answer_en" cols="30"
                                          rows="3">{{ $faq->getTranslation('answer', 'en') }}</textarea>
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
