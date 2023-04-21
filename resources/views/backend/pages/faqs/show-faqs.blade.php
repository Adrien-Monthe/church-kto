@extends('backend.layouts.app')

@section('page-title', __('faqs.show-faqs-title'))

@section('content')

    <section class="section">
        <div class="row">
            <div class="col-lg-12">
                <a href="{{ route('faqs.create', app()->getLocale())  }}" class="btn btn-primary btn-primary-custom"><i
                        class="bi bi-bag-plus me-1"></i> @lang('faqs.create-faq-title')</a>
                <br>
                <br>
                <div class="card recent-sales overflow-auto">
                    <div class="card-body">
                        <h5 class="card-title">@lang('faqs.show-faqs-title')</h5>

                        <table class="table table-borderless datatable">
                            <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Question</th>
                                <th scope="col">actions</th>

                            </tr>
                            </thead>
                            <tbody>
                            @foreach ($faqs as $faq)
                                <tr>
                                    <th scope="row"><a href="#">{{ $faq->id }}</a></th>
                                    <td><a href="#" class="text-primary">{{ $faq->question }}</a></td>

                                    <td>
                                        <form action="{{ route('faqs.destroy',[app()->getLocale() ,$faq->id]) }}"
                                              method="Post">
                                            <a class="btn btn-info"
                                               href="{{ route('faqs.show',[app()->getLocale() ,$faq->id]) }}">@lang('general.btn-view')</a>

                                            <a class="btn btn-primary"
                                               href="{{ route('faqs.edit',[app()->getLocale() ,$faq->id]) }}"><i
                                                    class="bi bi-pencil-square"></i> </a>
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger"
                                                    disabled>@lang('general.btn-delete')</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach


                            </tbody>
                        </table>

                    </div>
                </div>
            </div>

        </div>
    </section>
@endsection
