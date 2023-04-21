@extends('backend.layouts.app')

@section('page-title', __('bcomments.edit-bcomment-title'))

@section('content')
    <div class="pagetitle">
        <h1>@lang('bcomments.edit-bcomment-title')</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('dashboard', app()->getLocale())  }}">@lang('dash-sidebar.nav-dashboard')</a></li>
                {{--                <li class="breadcrumb-item">@lang('dash-sidebard.nav-ecomm')</li>--}}
                <li class="breadcrumb-item active">@lang('bcomments.edit-bcomment-title')</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section">
        <div class="row">
            <div class="col-lg-10">

                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">{{ $bcomment->codename }}</h5>

                        <!-- Multi Columns Form -->
                        <form class="row g-3" method="POST" action="{{ route('bcomments.update', [app()->getLocale(), $bcomment->id])  }}">

                            @csrf
                            @method('PUT')

                            <div class="col-md-6">
                                <label for="name" class="form-label">Noms</label>
                                <input type="text" class="form-control" name="name" id="name" value="{{$bcomment->name}}" >
                            </div>

                            <div class="col-md-6">
                                <label for="email" class="form-label">Courriel</label>
                                <input type="email" class="form-control" name="email" id="email" value="{{ $bcomment->email }}">
                            </div>
                            <div class="col-12">
                                <label for="comment" class="form-label">Commentaire</label>
                                <textarea name="comment" class="form-control" id="comment" cols="30" rows="3">{{ $bcomment->comment }}</textarea>
                            </div>

                            <div class="col-md-12">

                                <label for="blog_id" class="form-label">@lang('bcomments.table-blog')</label>

                                <select class="form-select" name="blog_id" aria-label="Default select example" >

                                    @foreach ($blogs as $blog)

                                        @if($bcomment->blog && $bcomment->blog->id == $blog->id )
                                            <option selected value="{{$blog->id}}">{{$blog->title }}</option>
                                        @else
                                            <option value="{{$blog->id}}">{{$blog->title }}</option>
                                        @endif

                                    @endforeach

                                </select>

                            </div>


                            <div class="text-center">
                                <button type="submit" class="btn btn-primary btn-primary-custom">@lang('general.btn-submit')</button>
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
