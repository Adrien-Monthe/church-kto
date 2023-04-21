@extends('backend.layouts.app')

@section('page-title', __('bcomments.show-bcomments-title'))

@section('content')
    <div class="pagetitle">
        <h1>@lang('bcomments.show-bcomments-title')</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('dashboard', app()->getLocale()) }}">@lang('dash-sidebar.nav-dashboard')</a></li>
                {{--                <li class="breadcrumb-item">@lang('dash-sidebard.nav-ecomm')</li>--}}
                <li class="breadcrumb-item active">@lang('dash-sidebar.nav-bcomments')</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section">
        <div class="row">
            <div class="col-lg-12">
                <a href="{{ route('bcomments.create', app()->getLocale())  }}"  class="btn btn-primary btn-primary-custom"><i class="bi bi-bag-plus me-1"></i> @lang('bcomments.create-bcomment-title')</a>
                <br>
                <br>
                <div class="card recent-sales overflow-auto">
                    <div class="card-body">
                        <h5 class="card-title">@lang('bcomments.table-title')</h5>

                        <table class="table table-borderless datatable">
                            <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">@lang('bcomments.table-name')</th>
                                <th scope="col">@lang('bcomments.table-email')</th>
                                <th scope="col">@lang('bcomments.table-blog')</th>
                                <th scope="col">actions</th>

                            </tr>
                            </thead>
                            <tbody>
                            @foreach ($bcomments as $bcomment)
                                <tr>
                                    <th scope="row"><a href="#">{{ $bcomment->id }}</a></th>
                                    <td><a href="#" class="text-primary">{{ $bcomment->name }}</a></td>
                                    <td>{{ $bcomment->email }}</td>
                                    <td>{{ $bcomment->blog ? $bcomment->blog->title : ''}}</td>
                                    <td>
                                        <form
                                            action="{{ route('bcomments.destroy',[app()->getLocale() ,$bcomment->id]) }}"
                                            method="Post">
                                            <a class="btn btn-info"
                                               href="{{ route('bcomments.show',[app()->getLocale() ,$bcomment->id]) }}">@lang('general.btn-view')</a>

                                            <a class="btn btn-primary"
                                               href="{{ route('bcomments.edit',[app()->getLocale() ,$bcomment->id]) }}"><i
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
