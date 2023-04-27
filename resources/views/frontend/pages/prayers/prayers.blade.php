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
                    <h3>Sermon</h3>
                </div>
                <div class="pageheader__right">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Sermon</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- ================> PageHeader section end here <================== -->


    <!-- ================> Sermon section start here <================== -->
    <div class="sermon padding--top padding--bottom bg-light">
        <div class="container">
            <div class="section__wrapper">
                <div class="row g-4">

                    @foreach($prayers as $prayer)
                        <div class="col-lg-6 col-12">
                            <div class="sermon__item">
                                <div class="sermon__inner">

                                    <div class="sermon__content">
                                        <a href="sermon-single.html"><h6>{{ $prayer->title }}</h6></a>
                                        <ul class="sermon__content-metapost">
                                            <li><i class="far fa-calendar"></i> 10 Jan 2022</li>
                                            <li><i class="fas fa-user"></i> Admin</li>
                                        </ul>

                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach


                    <div class="col-lg-6 col-12">
                        <div class="sermon__item">
                            <div class="sermon__inner">
                                {{--<div class="sermon__thumb">
                                    <img src="assets/images/sermon/02.jpg" alt="sermon thumb">
                                </div> --}}
                                <div class="sermon__content">
                                    <a href="sermon-single.html"><h6>Seamlessly embrace distributed portals whereas maintainable platforms.</h6></a>
                                    <ul class="sermon__content-metapost">
                                        <li><i class="far fa-calendar"></i> 10 Jan 2022</li>
                                        <li><i class="fas fa-user"></i> Admin</li>
                                    </ul>
    {{--<ul class="sermon__content-social">
        <li><a href="#"><i class="fas fa-video"></i></a></li>
        <li><a href="#"><i class="fas fa-headphones-alt"></i></a></li>
        <li><a href="#"><i class="fas fa-file-alt"></i></a></li>
        <li><a href="#"><i class="fas fa-image"></i></a></li>
    </ul>--}}
</div>
</div>
</div>
</div>
<div class="col-lg-6 col-12">
<div class="sermon__item">
<div class="sermon__inner">
<div class="sermon__thumb">
    <img src="assets/images/sermon/03.jpg" alt="sermon thumb">
</div>
<div class="sermon__content">
    <a href="sermon-single.html"><h6>Embrace Seamlessly distributed portals whereas maintainable.</h6></a>
    <ul class="sermon__content-metapost">
        <li><i class="far fa-calendar"></i> 10 Jan 2022</li>
        <li><i class="fas fa-user"></i> Admin</li>
    </ul>
    <ul class="sermon__content-social">
        <li><a href="#"><i class="fas fa-video"></i></a></li>
        <li><a href="#"><i class="fas fa-headphones-alt"></i></a></li>
        <li><a href="#"><i class="fas fa-file-alt"></i></a></li>
        <li><a href="#"><i class="fas fa-image"></i></a></li>
    </ul>
</div>
</div>
</div>
</div>
<div class="col-lg-6 col-12">
<div class="sermon__item">
<div class="sermon__inner">
<div class="sermon__thumb">
    <img src="assets/images/sermon/04.jpg" alt="sermon thumb">
</div>
<div class="sermon__content">
    <a href="sermon-single.html"><h6>Lorem ipsum dolor sit amet, consectetur Atque, soluta.</h6></a>
    <ul class="sermon__content-metapost">
        <li><i class="far fa-calendar"></i> 10 Jan 2022</li>
        <li><i class="fas fa-user"></i> Admin</li>
    </ul>
    <ul class="sermon__content-social">
        <li><a href="#"><i class="fas fa-video"></i></a></li>
        <li><a href="#"><i class="fas fa-headphones-alt"></i></a></li>
        <li><a href="#"><i class="fas fa-file-alt"></i></a></li>
        <li><a href="#"><i class="fas fa-image"></i></a></li>
    </ul>
</div>
</div>
</div>
</div>

</div>
</div>
</div>
</div>
<!-- ================> Sermon section end here <================== -->



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
