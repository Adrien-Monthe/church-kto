@extends('backend.layouts.app')

@section('page-title', __('portfolios.show-portfolios-title'))

@section('content')
    <div class="pagetitle">
        <h1>@lang('portfolios.page-title')</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a
                        href="{{ route('dashboard', app()->getLocale()) }}">@lang('dash-sidebar.nav-dashboard')</a></li>
                <li class="breadcrumb-item active">@lang('portfolios.show-portfolios-title')</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section">
        <div class="row">
            <div class="col-lg-12">
                <a href="{{ route('portfolios.create', app()->getLocale())  }}"
                   class="btn btn-primary btn-primary-custom"><i
                        class="bi bi-bag-plus me-1"></i> @lang('portfolios.create-portfolio-title')</a>
                <br>
                <br>
                <div class="card recent-sales overflow-auto">
                    <div class="card-body">
                        <h5 class="card-title">@lang('portfolios.show-portfolios-title')</h5>

                        <table class="table table-borderless datatable">
                            <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">@lang('portfolios.table-preview')</th>
                                <th scope="col">@lang('portfolios.table-name')</th>
                                <th scope="col">@lang('portfolios.table-category')</th>
                                <th scope="col">actions</th>

                            </tr>
                            </thead>
                            <tbody>
                            @foreach ($portfolios as $portfolio)
                                <tr>
                                    <th scope="row"><a href="#">{{ $portfolio->slug }}</a></th>
                                    <th scope="row"><a href="#"><img src="{{ asset($portfolio->image_path)}}"
                                                                     alt="{{ $portfolio->id }}" width="75"></a></th>
                                    <td><a href="#" class="text-primary">{{ $portfolio->name }}</a></td>
                                    <td>{{ $portfolio->category ? $portfolio->category->name : '' }}</td>
                                    <td>
                                        <form
                                            action="{{ route('portfolios.destroy',[app()->getLocale() ,$portfolio->id]) }}"
                                            method="Post">
                                            <a class="btn btn-info"
                                               href="{{ route('portfolios.show',[app()->getLocale() ,$portfolio->id]) }}">@lang('general.btn-view')</a>

                                            <a class="btn btn-primary"
                                               href="{{ route('portfolios.edit',[app()->getLocale() ,$portfolio->id]) }}"><i
                                                    class="bi bi-pencil-square"></i> </a>
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger"
                                                    disabled><i class="bi bi-trash"></i></button>
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
