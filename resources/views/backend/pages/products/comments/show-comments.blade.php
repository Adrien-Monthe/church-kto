@extends('backend.layouts.app')

@section('page-title', __('pcomments.show-pcomments-title'))

@section('content')
    <div class="pagetitle">
        <h1>@lang('pcomments.show-pcomments-title')</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a
                        href="{{ route('dashboard', app()->getLocale()) }}">@lang('dash-sidebar.nav-dashboard')</a></li>
                {{--                <li class="breadcrumb-item">@lang('dash-sidebard.nav-ecomm')</li>--}}
                <li class="breadcrumb-item active">@lang('dash-sidebar.nav-pcomments')</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section">
        <div class="row">
            <div class="col-lg-12">
                <a href="{{ route('pcomments.create', app()->getLocale())  }}"
                   class="btn btn-primary btn-primary-custom"><i
                        class="bi bi-bag-plus me-1"></i> @lang('pcomments.create-pcomment-title')</a>
                <br>
                <br>
                <div class="card recent-sales overflow-auto">
                    <div class="card-body">
                        <h5 class="card-title">@lang('pcomments.table-title')</h5>

                        <table class="table table-borderless datatable">
                            <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">@lang('pcomments.table-name')</th>
                                <th scope="col">@lang('pcomments.table-email')</th>
                                <th scope="col">@lang('pcomments.table-rating')</th>
                                <th scope="col">@lang('pcomments.table-product')</th>
                                <th scope="col">actions</th>

                            </tr>
                            </thead>
                            <tbody>
                            @foreach ($pcomments as $pcomment)
                                <tr>
                                    <th scope="row"><a href="#">{{ $pcomment->id }}</a></th>
                                    <td><a href="#" class="text-primary">{{ $pcomment->name }}</a></td>
                                    <td>{{ $pcomment->email }}</td>
                                    <td>{{ $pcomment->rate }}</td>
                                    <td>{{ $pcomment->product ? $pcomment->product->name : ''}}</td>
                                    <td>
                                        <form
                                            action="{{ route('pcomments.destroy',[app()->getLocale() ,$pcomment->id]) }}"
                                            method="Post">
                                            <a class="btn btn-info"
                                               href="{{ route('pcomments.show',[app()->getLocale() ,$pcomment->id]) }}">@lang('general.btn-view')</a>

                                            <a class="btn btn-primary"
                                               href="{{ route('pcomments.edit',[app()->getLocale() ,$pcomment->id]) }}"><i
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
