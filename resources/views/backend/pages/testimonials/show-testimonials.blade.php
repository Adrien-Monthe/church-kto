@extends('backend.layouts.app')

@section('page-title', __('testimonials.show-testimonials-title'))

@section('content')

    <div class="pagetitle">
        <h1>@lang('testimonials.show-testimonials-title')</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a
                        href="{{ route('dashboard', app()->getLocale()) }}">@lang('dash-sidebar.nav-dashboard')</a></li>

                <li class="breadcrumb-item active">@lang('testimonials.show-testimonials-title')</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section">

        <div class="row">
            <div class="col-lg-12">
                <a href="{{ route('testimonials.create', app()->getLocale())  }}" class="btn btn-primary"><i
                        class="bi bi-bag-plus me-1"></i> @lang('testimonials.create-testimonial-title')</a>
                <br>
                <br>
                <div class="card recent-sales overflow-auto">

                    <div class="card-body">
                        <h5 class="card-title">@lang('testimonials.show-testimonials-title')</h5>

                        <table class="table table-borderless datatable">
                            <thead>
                            <tr>
                                <th scope="col">@lang('testimonials.table-preview')</th>
                                <th scope="col">@lang('testimonials.table-author-name')</th>
                                <th scope="col">@lang('testimonials.table-author-title')</th>
                                <th scope="col">@lang('testimonials.table-author-message')</th>
                                <th scope="col">@lang('testimonials.table-status')</th>
                                <th scope="col">actions</th>

                            </tr>
                            </thead>
                            <tbody>
                            @foreach ($testimonials as $testimonial)
                                <tr>

                                    <th scope="row"><a href="#"><img src="{{ asset($testimonial->image_path) }}"
                                                                     alt="{{ $testimonial->id }}" width="75"></a></th>
                                    <td><a href="#" class="text-primary">{{ $testimonial->author_name }}</a></td>
                                    <td>{{ $testimonial->author_title }}</td>
                                    <td>{{ $testimonial->author_message }}</td>
                                    @if($testimonial->status)
                                        <td><span class="badge bg-success"><i class="bi bi-check-circle me-1"></i> Actif</span>
                                        </td>
                                    @else
                                        <td><span class="badge bg-danger"><i class="bi bi-exclamation-octagon me-1"></i> Inactif</span>
                                        </td>
                                    @endif

                                    <td>
                                        <form
                                            action="{{ route('testimonials.destroy',[app()->getLocale() ,$testimonial->id]) }}"
                                            method="Post">
                                            <a class="btn btn-info"
                                               href="{{ route('testimonials.show',[app()->getLocale() ,$testimonial->id]) }}">@lang('general.btn-view')</a>

                                            <a class="btn btn-primary"
                                               href="{{ route('testimonials.edit',[app()->getLocale() ,$testimonial->id]) }}">
                                                <i
                                                    class="bi bi-pencil-square"></i> </a>
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger" disabled><i
                                                    class="bi bi-trash"></i></button>
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
