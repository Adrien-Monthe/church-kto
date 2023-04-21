@extends('backend.layouts.app')

@section('page-title', __('bcategories.show-bcategories-title'))

@section('content')
    <div class="pagetitle">
        <h1>@lang('bcategories.show-bcategories-title')</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('dashboard', app()->getLocale()) }}">@lang('dash-sidebar.nav-dashboard')</a></li>
{{--                <li class="breadcrumb-item">@lang('dash-sidebard.nav-ecomm')</li>--}}
                <li class="breadcrumb-item active">@lang('dash-sidebar.nav-bcategories')</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section">
        <div class="row">
            <div class="col-lg-12">
                <a href="{{ route('bcategories.create', app()->getLocale())  }}"  class="btn btn-primary btn-primary-custom"><i class="bi bi-bag-plus me-1"></i> @lang('bcategories.create-bcategory-title')</a>
                <br>
                <br>
                <div class="card recent-sales overflow-auto">
                    <div class="card-body">
                        <h5 class="card-title">@lang('bcategories.table-title')</h5>

                        <table class="table table-borderless datatable">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">@lang('bcategories.table-name')</th>
                                    <th scope="col">@lang('bcategories.table-description')</th>
                                    <th scope="col">actions</th>

                                </tr>
                            </thead>
                            <tbody>
                            @foreach ($bcategories as $bcategory)
                                <tr>
                                    <th scope="row"><a href="#">{{ $bcategory->codename }}</a></th>
                                    <td><a href="#" class="text-primary">{{ $bcategory->name }}</a></td>
                                    <td>{{ $bcategory->description }}</td>
                                    <td>
                                        <form
                                            action="{{ route('bcategories.destroy',[app()->getLocale() ,$bcategory->id]) }}"
                                            method="Post">
                                            <a class="btn btn-info"
                                               href="{{ route('bcategories.show',[app()->getLocale() ,$bcategory->id]) }}">@lang('general.btn-view')</a>

                                            <a class="btn btn-primary"
                                               href="{{ route('bcategories.edit',[app()->getLocale() ,$bcategory->id]) }}"><i
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
