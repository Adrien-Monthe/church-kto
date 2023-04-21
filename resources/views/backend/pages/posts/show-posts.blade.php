@extends('backend.layouts.app')

@section('page-title', __('blogs.show-blogs-title'))

@section('content')

<div class="pagetitle">
    <h1>@lang('blogs.show-blogs-title')</h1>
    <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('dashboard', app()->getLocale()) }}">@lang('dash-sidebar.nav-dashboard')</a></li>

            <li class="breadcrumb-item active">@lang('blogs.show-blogs-title')</li>
        </ol>
    </nav>
</div><!-- End Page Title -->

<section class="section">

    <div class="row">
        <div class="col-lg-12">
            <a href="{{ route('blogs.create', app()->getLocale())  }}"  class="btn btn-primary"><i class="bi bi-bag-plus me-1"></i> @lang('blogs.create-blog-title')</a>
            <br>
            <br>
            <div class="card recent-sales overflow-auto">

                <div class="card-body">
                    <h5 class="card-title">@lang('blogs.show-blogs-title')</h5>

                    <table class="table table-borderless datatable">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">@lang('blogs.table-preview')</th>
                                <th scope="col">@lang('blogs.table-name')</th>
                                <th scope="col">@lang('blogs.table-author')</th>
                                <th scope="col">@lang('blogs.table-status')</th>
                                <th scope="col">@lang('blogs.table-visibility')</th>
                                <th scope="col">@lang('blogs.table-category')</th>
                                <th scope="col">actions</th>

                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($blogs as $blog)
                                <tr>
                                    <th scope="row"><a href="#">{{ $blog->id }}</a></th>
                                    <th scope="row"><a href="#"><img src="{{ asset($blog->image_path) }}"
                                                                     alt="{{ $blog->id }}" width="75"></a></th>
                                    <td><a href="#" class="text-primary">{{ $blog->title }}</a></td>
                                    <td>{{ $blog->author }}</td>
                                    <td>{{ $blog->status }}</td>
                                    <td>{{ $blog->visibility }}</td>

                                    <td>{{  $blog->category ? $blog->category->name : ''  }}</td>
                                    <td>
                                        <form action="{{ route('blogs.destroy',[app()->getLocale() ,$blog->id]) }}"
                                              method="Post">
                                            <a class="btn btn-info"
                                               href="{{ route('blogs.show',[app()->getLocale() ,$blog->id]) }}">@lang('general.btn-view')</a>

                                            <a class="btn btn-primary"
                                               href="{{ route('blogs.edit',[app()->getLocale() ,$blog->id]) }}"> <i
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
