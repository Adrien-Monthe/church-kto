@php use Carbon\Carbon; @endphp
@extends('frontend.layouts.app')

@section('additional_meta')

    <meta property="og:image" content="{{ asset('') }}"/>
    <meta property="og:description"
          content=""/>
    <meta property="og:keywords"
          content=""/>

    <meta property="og:url" content="{{ route('home' ) }}"/>

    <meta property="og:title" content=""/>

@endsection

@section('page-title', __('home.page-title'))

@section('content')

    <!-- ================> PageHeader section start here <================== -->
    <div class="pageheader">
        <div class="container">
            <div class="pageheader__area">
                <div class="pageheader__left">
                    <h3>{{ $category->name }}</h3>
                </div>
                <div class="pageheader__right">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('home') }}">Accueil</a></li>
                            <li class="breadcrumb-item active" aria-current="page">{{ $category->name }}</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- ================> PageHeader section end here <================== -->


    <!-- ================> Blog section start here <================== -->
    <div class="blog blog-style2 padding--top padding--bottom bg-light">
        <div class="container">
            <div class="section__wrapper">
                <div class="row g-4 justify-content-center">
                    @foreach($category->blogs as $blog)
                        <div class="col-xl-4 col-lg-6 col-12">
                            <div class="blog__item">
                                <div class="blog__inner">
                                    <div class="blog__thumb">
                                        <a href="{{ route('single_blog_page', [$blog->codename ] ) }}"><img src="{{ asset($blog->image_path) }}" alt="{{ $blog->name }}"></a>
                                    </div>
                                    <div class="blog__content">
                                        <a href="{{ route('single_blog_page', [$blog->codename ] ) }}"><h5>{{ $blog->title }}</h5></a>
                                        <ul class="blog__content-metapost">
                                            <li><i class="far fa-calendar"></i> {{ Carbon::parse($blog->created_at)->isoFormat('Do MMM, YYYY') }}</li>
                                            <li><i class="fas fa-user"></i> {{ $blog->author }}</li>
                                            <li><i class="fas fa-tag"></i> <a href="#">{{ $blog->category ? $blog->category->name : "" }}</a></li>
                                        </ul>
                                        <p style="text-align: justify">{{ substr($blog->short_description, 0, 200)."..."  }}</p>
                                        <a href="{{ route('single_blog_page', [$blog->codename ] ) }}" class="default-btn move-right"><span>Plus D'infos</span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                <nav aria-label="Page navigation example">
                    <ul class="pagination justify-content-center mt-5">
                        <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item"><a class="page-link" href="#">Next</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
    <!-- ================> Blog section end here <================== -->



    <!-- ================> Social section start here <================== -->
    <div class="social">
        <div class="container">
            <div class="social__area">
                <ul class="social__list">
                    <li class="social__list-facebook">
                        <a href="#">
                            <i class="fab fa-facebook-f"></i>
                            <span>facebook</span>
                        </a>
                    </li>
                    <li class="social__list-twitter">
                        <a href="#">
                            <i class="fab fa-twitter"></i>
                            <span>twitter</span>
                        </a>
                    </li>
                    <li class="social__list-linkedin">
                        <a href="#">
                            <i class="fab fa-linkedin-in"></i>
                            <span>linkedin</span>
                        </a>
                    </li>
                    <li class="social__list-instagram">
                        <a href="#">
                            <i class="fab fa-instagram"></i>
                            <span>instagram</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- ================> Social section end here <================== -->

@endsection
