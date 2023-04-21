@extends('backend.layouts.app')

@section('page-title', __('pocategories.show-pocategories-title'))

@section('content')
    <div class="pagetitle">
        <h1>@lang('pocategories.show-pocategories-title')</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a
                        href="{{ route('dashboard', app()->getLocale()) }}">@lang('dash-sidebar.nav-dashboard')</a></li>
                {{--                <li class="breadcrumb-item">@lang('dash-sidebard.nav-ecomm')</li>--}}
                <li class="breadcrumb-item active">@lang('dash-sidebar.nav-pocategories')</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section">
        <div class="row">
            <div class="col-lg-12">
                <a href="{{ route('pocategories.create', app()->getLocale())  }}"
                   class="btn btn-primary btn-primary-custom"><i
                        class="bi bi-bag-plus me-1"></i> @lang('pocategories.create-pocategory-title')</a>
                <br>
                <br>
                <div class="card recent-sales overflow-auto">
                    <div class="card-body">
                        <h5 class="card-title">@lang('pocategories.table-title')</h5>

                        <table class="table table-borderless datatable">
                            <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">@lang('pocategories.table-name')</th>
                                <th scope="col">@lang('pocategories.table-description')</th>
                                <th scope="col">actions</th>

                            </tr>
                            </thead>
                            <tbody>
                            @foreach ($pocategories as $pocategory)
                                <tr>
                                    <th scope="row"><a href="#">{{ $pocategory->codename }}</a></th>
                                    <td><a href="#" class="text-primary">{{ $pocategory->name }}</a></td>
                                    <td>{{ $pocategory->description }}</td>
                                    <td>
                                        <form
                                            action="{{ route('pocategories.destroy',[app()->getLocale() ,$pocategory->id]) }}"
                                            method="Post">
                                            <a class="btn btn-info"
                                               href="{{ route('pocategories.show',[app()->getLocale() ,$pocategory->id]) }}">@lang('general.btn-view')</a>

                                            <a class="btn btn-primary"
                                               href="{{ route('pocategories.edit',[app()->getLocale() ,$pocategory->id]) }}"><i
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
