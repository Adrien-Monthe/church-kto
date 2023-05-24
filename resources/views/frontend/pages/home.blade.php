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

    <!-- ================> Banner section start here <================== -->
    <div class="banner__slider banner-style2 overflow-hidden">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <div class="banner" style="background-image: url(/frontend/images/banner/01.jpg);">
                    <div class="container">
                        <div class="banner__content ms-lg-auto">
                            <h2>We Believe In Huminity</h2>
                            <p>Enthusiastically underwhelm quality benefits rather than professional "outside the box" thinking. Distinctively network highly efficient leadership skills</p>
                            <a href="#" class="default-btn move-right"><span>GET HELP NOW</span></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="banner" style="background-image: url(/frontend/images/banner/02.jpg);">
                    <div class="container">
                        <div class="banner__content">
                            <h2>A Powerful Religion Theme</h2>
                            <p>Enthusiastically underwhelm quality benefits rather than professional "outside the box" thinking. Distinctively network highly efficient leadership skills</p>
                            <a href="#" class="default-btn move-right"><span>GET HELP NOW</span></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="banner" style="background-image: url(/frontend/images/banner/03.jpg);">
                    <div class="container">
                        <div class="banner__content ms-lg-auto">
                            <h2>It"S Useless To Lecture</h2>
                            <p>Enthusiastically underwhelm quality benefits rather than professional "outside the box" thinking. Distinctively network highly efficient leadership skills</p>
                            <a href="#" class="default-btn move-right"><span>GET HELP NOW</span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ================> Banner section end here <================== -->


    <!-- ================> Event Time section start here <================== -->
    <div class="eventtime">
        <div class="container">
            <div class="eventtime__area">
                <div class="eventtime__left">
                    <h2>Upcoming Event</h2>
                </div>
                <div class="eventtime__center">
                    <ul class="countdown count-down" data-date="Nove 09, 2022 21:14:01">
                        <li class="clock-item">
                            <span class="count-number days">56</span>
                            <p class="count-text">Days</p>
                        </li>

                        <li class="clock-item">
                            <span class="count-number hours">16</span>
                            <p class="count-text">Hours</p>
                        </li>

                        <li class="clock-item">
                            <span class="count-number minutes">25</span>
                            <p class="count-text">Minutes</p>
                        </li>

                        <li class="clock-item">
                            <span class="count-number seconds">19</span>
                            <p class="count-text">Seconds</p>
                        </li>
                    </ul>
                </div>
                <div class="eventtime__right">
                    <a href="#" class="default-btn move-right"><span>ALL EVENTS</span></a>
                </div>
            </div>
        </div>
    </div>
    <!-- ================> Event Time section end here <================== -->



    <!-- ================> About section start here <================== -->
    <div class="about padding--top padding--bottom">
        <div class="container">
            <div class="row g-4">
                <div class="col-lg-4 col-12">
                    <div class="about__thumbpart">
                        <img src="/frontend/images/about/01.jpg" alt="about">
                        <h3>Mme Laurette NGANKAM</h3>
{{--                        <span>Church Pastor</span>--}}
                        <p>Responsable de la Commission Diocésaine de l'Enfance</p>
                        <ul>
                            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-8 col-12">
                    <div class="about__contentpart ms-lg-4 ps-lg-5 border-start">
                        <div class="section__header">
                            <h2>A propos de Nous?</h2>
                            <p style="text-align: justify;">La <strong>Commission Diocésaine de l’Enfance (CDE)</strong> a pour principal rôle de soutenir l’éducation des enfants en leur inculquant des valeurs humaines et chrétiennes leur permettant de s’intégrer dans la société et d’y apporter un changement. Cette participation à leur éducation est assurée par les encadreurs d’enfants volontaires dans chaque paroisse et formés pour cette mission. La mise en œuvre de cette plateforme, nous permet de participer activement à la formation continue des petits amis de Jésus et de par ailleurs nous aussi en tant qu’encadreurs d’enfants.</p>
                        </div>
                        <div class="section__wrapper">

                            <div class="about__item">
                                <div class="about__inner">
                                    <div class="about__icon">
                                        <i class="fas fa-rocket"></i>
                                    </div>
                                    <div class="about__content">
                                        <h5>Objectif Général :</h5>
                                        <p>Créer un cadre d’épanouissement social, culturel et spirituel de l’enfant à travers des activités qu’organise l’aumônerie diocésaine de la jeunesse et de l’enfance de l’Archidiocèse de Douala - Cameroun.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ================> About section end here <================== -->


    <!-- ================> gallery section start here <================== -->
    <div class="gallery padding--top padding--bottom bg-light">
        <div class="container-fluid">
            <div class="section__header text-center">
                <h2>Cristian Fastivals</h2>
            </div>
            <div class="section__wrapper">
                <div class="gallery__filter">
                    <ul>
                        <li data-filter="*" class="active">All</li>
                        <li data-filter=".cate-1">Christmas</li>
                        <li data-filter=".cate-2">Corpus Christi</li>
                        <li data-filter=".cate-3">Holy Innocents</li>
                        <li data-filter=".cate-4">Lammas</li>
                    </ul>
                </div>
                <div class="row g-3 grid">
                    <div class="col-lg-4 col-sm-6 col-12 cate-1">
                        <div class="gallery__item">
                            <div class="gallery__inner">
                                <div class="gallery__thumb">
                                    <img src="/frontend/images/gallery/01.jpg" alt="gallery-thumb" class="w-100">
                                </div>
                                <div class="gallery__content text-center">
                                    <a href="/frontend/images/gallery/01.jpg" data-rel="lightcase" class="gallery__icon"><i class="fas fa-plus"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 col-12 cate-2">
                        <div class="gallery__item">
                            <div class="gallery__inner">
                                <div class="gallery__thumb">
                                    <img src="/frontend/images/gallery/02.jpg" alt="gallery-thumb" class="w-100">
                                </div>
                                <div class="gallery__content text-center">
                                    <a href="/frontend/images/gallery/02.jpg" data-rel="lightcase" class="gallery__icon"><i class="fas fa-plus"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 col-12 cate-3">
                        <div class="gallery__item">
                            <div class="gallery__inner">
                                <div class="gallery__thumb">
                                    <img src="/frontend/images/gallery/03.jpg" alt="gallery-thumb" class="w-100">
                                </div>
                                <div class="gallery__content text-center">
                                    <a href="/frontend/images/gallery/03.jpg" data-rel="lightcase" class="gallery__icon"><i class="fas fa-plus"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 col-12 cate-4 cate-1">
                        <div class="gallery__item">
                            <div class="gallery__inner">
                                <div class="gallery__thumb">
                                    <img src="/frontend/images/gallery/04.jpg" alt="gallery-thumb" class="w-100">
                                </div>
                                <div class="gallery__content text-center">
                                    <a href="/frontend/images/gallery/04.jpg" data-rel="lightcase" class="gallery__icon"><i class="fas fa-plus"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 col-12 cate-3">
                        <div class="gallery__item">
                            <div class="gallery__inner">
                                <div class="gallery__thumb">
                                    <img src="/frontend/images/gallery/05.jpg" alt="gallery-thumb" class="w-100">
                                </div>
                                <div class="gallery__content text-center">
                                    <a href="/frontend/images/gallery/05.jpg" data-rel="lightcase" class="gallery__icon"><i class="fas fa-plus"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 col-12 cate-2 cate-4">
                        <div class="gallery__item">
                            <div class="gallery__inner">
                                <div class="gallery__thumb">
                                    <img src="/frontend/images/gallery/06.jpg" alt="gallery-thumb" class="w-100">
                                </div>
                                <div class="gallery__content text-center">
                                    <a href="/frontend/images/gallery/06.jpg" data-rel="lightcase" class="gallery__icon"><i class="fas fa-plus"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 col-12 cate-1 cate-3">
                        <div class="gallery__item">
                            <div class="gallery__inner">
                                <div class="gallery__thumb">
                                    <img src="/frontend/images/gallery/07.jpg" alt="gallery-thumb" class="w-100">
                                </div>
                                <div class="gallery__content text-center">
                                    <a href="/frontend/images/gallery/07.jpg" data-rel="lightcase" class="gallery__icon"><i class="fas fa-plus"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 col-12 cate-2">
                        <div class="gallery__item">
                            <div class="gallery__inner">
                                <div class="gallery__thumb">
                                    <img src="/frontend/images/gallery/08.jpg" alt="gallery-thumb" class="w-100">
                                </div>
                                <div class="gallery__content text-center">
                                    <a href="/frontend/images/gallery/08.jpg" data-rel="lightcase" class="gallery__icon"><i class="fas fa-plus"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 col-12 cate-1">
                        <div class="gallery__item">
                            <div class="gallery__inner">
                                <div class="gallery__thumb">
                                    <img src="/frontend/images/gallery/09.jpg" alt="gallery-thumb" class="w-100">
                                </div>
                                <div class="gallery__content text-center">
                                    <a href="/frontend/images/gallery/09.jpg" data-rel="lightcase" class="gallery__icon"><i class="fas fa-plus"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="text-center mt-5">
                    <a href="#" class="default-btn move-right"><span>View All</span></a>
                </div>
            </div>
        </div>
    </div>
    <!-- ================> gallery section end here <================== -->


    <!-- ================> Event section start here <================== -->
    <div class="event padding--top padding--bottom">
        <div class="container">
            <div class="section__header text-center">
                <h2>Recent Event</h2>
                <p>Enthusiastically underwhelm quality benefits rather than professional outside the box thinking. Distinctively network highly efficient leadership skills</p>
            </div>
            <div class="section__wrapper">
                <div class="row g-4 justify-content-center">
                    <div class="col-lg-4 col-sm-6 col-12">
                        <div class="event__item">
                            <div class="event__inner">
                                <div class="event__thumb">
                                    <a href="event-single.html"><img src="/frontend/images/event/01.jpg" alt="event thumb"></a>
                                    <div class="event__thumb-date">
                                        <h6>09</h6>
                                        <p>Nov</p>
                                    </div>
                                </div>
                                <div class="event__content">
                                    <a href="event-single.html"><h5>Open Rededication</h5></a>
                                    <div class="event__metapost">
                                        <ul class="event__metapost-info">
                                            <li><i class="far fa-clock"></i> 10am - 12pm</li>
                                            <li><i class="fas fa-map-marker-alt"></i> PO Box 16122, Collins Street</li>
                                        </ul>
                                        <ul class="event__metapost-comentshare">
                                            <li class="event__metapost-coment">
                                                <i class="far fa-comments"></i>
                                                <a href="#" class="event__metapost-count">10</a>
                                            </li>
                                            <li class="event__metapost-share">
                                                <i class="fas fa-share-alt"></i>
                                                <ul>
                                                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                                    <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                                    <li><a href="#"><i class="fab fa-dribbble"></i></a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </div>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore consectetur adipisicing elit</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 col-12">
                        <div class="event__item">
                            <div class="event__inner">
                                <div class="event__thumb">
                                    <a href="event-single.html"><img src="/frontend/images/event/02.jpg" alt="event thumb"></a>
                                    <div class="event__thumb-date">
                                        <h6>09</h6>
                                        <p>Nov</p>
                                    </div>
                                </div>
                                <div class="event__content">
                                    <a href="event-single.html"><h5>Big Event This Year</h5></a>
                                    <div class="event__metapost">
                                        <ul class="event__metapost-info">
                                            <li><i class="far fa-clock"></i> 10am - 12pm</li>
                                            <li><i class="fas fa-map-marker-alt"></i> PO Box 16122, Collins Street</li>
                                        </ul>
                                        <ul class="event__metapost-comentshare">
                                            <li class="event__metapost-coment">
                                                <i class="far fa-comments"></i>
                                                <a href="#" class="event__metapost-count">10</a>
                                            </li>
                                            <li class="event__metapost-share">
                                                <i class="fas fa-share-alt"></i>
                                                <ul>
                                                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                                    <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                                    <li><a href="#"><i class="fab fa-dribbble"></i></a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </div>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore consectetur adipisicing elit</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 col-12">
                        <div class="event__item">
                            <div class="event__inner">
                                <div class="event__thumb">
                                    <a href="event-single.html"><img src="/frontend/images/event/03.jpg" alt="event thumb"></a>
                                    <div class="event__thumb-date">
                                        <h6>09</h6>
                                        <p>Nov</p>
                                    </div>
                                </div>
                                <div class="event__content">
                                    <a href="event-single.html"><h5>Church Evert</h5></a>
                                    <div class="event__metapost">
                                        <ul class="event__metapost-info">
                                            <li><i class="far fa-clock"></i> 10am - 12pm</li>
                                            <li><i class="fas fa-map-marker-alt"></i> PO Box 16122, Collins Street</li>
                                        </ul>
                                        <ul class="event__metapost-comentshare">
                                            <li class="event__metapost-coment">
                                                <i class="far fa-comments"></i>
                                                <a href="#" class="event__metapost-count">10</a>
                                            </li>
                                            <li class="event__metapost-share">
                                                <i class="fas fa-share-alt"></i>
                                                <ul>
                                                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                                    <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                                    <li><a href="#"><i class="fab fa-dribbble"></i></a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </div>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore consectetur adipisicing elit</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ================> Event section end here <================== -->


    <!-- ================> Shedule section start here <================== -->
    <div class="shedule padding--top padding--bottom bg-img" style="background-image: url(/frontend/images/bg-img/01.jpg);">
        <div class="container">
            <div class="row g-4">
                <div class="col-xl-4 col-12">
                    <div class="section__header mb-xl-0 text-white">
                        <h2 class="text-white">Festival Schedule</h2>
                        <p>Dramatically strategize economically sound action items for e-business niches. Quickly re-engineer 24/365 potentialities before.</p>
                        <p class="mb-0">Holisticly extend sticky partnerships and cross functional markets. Monotonectally.</p>
                    </div>
                </div>
                <div class="col-xl-8 col-12">
                    <div class="section__wrapper">
                        <div class="shedule__top">
                            <div class="shedule__item">
                                <div class="shedule__inner">
                                    <div class="shedule__content">
                                        <div class="shedule__left">
                                            <div class="shedule__title">
                                                <h6>Christmas</h6>
                                                <p>26 June at 6:30 am</p>
                                            </div>
                                        </div>
                                        <div class="shedule__right">
                                            <div class="shedule__time">
                                                <ul class="countdown count-down" data-date="Nove 14, 2022 21:14:01">
                                                    <li class="clock-item">
                                                        <span class="count-number days">56</span>
                                                        <p class="count-text">Days</p>
                                                    </li>

                                                    <li class="clock-item">
                                                        <span class="count-number hours">16</span>
                                                        <p class="count-text">Hours</p>
                                                    </li>
                                                    <li class="clock-item">
                                                        <span class="count-number minutes">25</span>
                                                        <p class="count-text">Minutes</p>
                                                    </li>

                                                    <li class="clock-item">
                                                        <span class="count-number seconds">19</span>
                                                        <p class="count-text">Seconds</p>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="shedule__item">
                                <div class="shedule__inner">
                                    <div class="shedule__content">
                                        <div class="shedule__left">
                                            <div class="shedule__title">
                                                <h6>Holy Cross Day</h6>
                                                <p>26 June at 6:30 am</p>
                                            </div>
                                        </div>
                                        <div class="shedule__right">
                                            <div class="shedule__time">
                                                <ul class="countdown count-down" data-date="Nove 13, 2022 21:14:01">
                                                    <li class="clock-item">
                                                        <span class="count-number days">56</span>
                                                        <p class="count-text">Days</p>
                                                    </li>

                                                    <li class="clock-item">
                                                        <span class="count-number hours">16</span>
                                                        <p class="count-text">Hours</p>
                                                    </li>
                                                    <li class="clock-item">
                                                        <span class="count-number minutes">25</span>
                                                        <p class="count-text">Minutes</p>
                                                    </li>

                                                    <li class="clock-item">
                                                        <span class="count-number seconds">19</span>
                                                        <p class="count-text">Seconds</p>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="shedule__item">
                                <div class="shedule__inner">
                                    <div class="shedule__content">
                                        <div class="shedule__left">
                                            <div class="shedule__title">
                                                <h6>ST. Patrick Day</h6>
                                                <p>26 June at 6:30 am</p>
                                            </div>
                                        </div>
                                        <div class="shedule__right">
                                            <div class="shedule__time">
                                                <ul class="countdown count-down" data-date="Nove 12, 2022 21:14:01">
                                                    <li class="clock-item">
                                                        <span class="count-number days">56</span>
                                                        <p class="count-text">Days</p>
                                                    </li>

                                                    <li class="clock-item">
                                                        <span class="count-number hours">16</span>
                                                        <p class="count-text">Hours</p>
                                                    </li>
                                                    <li class="clock-item">
                                                        <span class="count-number minutes">25</span>
                                                        <p class="count-text">Minutes</p>
                                                    </li>

                                                    <li class="clock-item">
                                                        <span class="count-number seconds">19</span>
                                                        <p class="count-text">Seconds</p>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="shedule__item">
                                <div class="shedule__inner">
                                    <div class="shedule__content">
                                        <div class="shedule__left">
                                            <div class="shedule__title">
                                                <h6>Candlemas</h6>
                                                <p>26 June at 6:30 am</p>
                                            </div>
                                        </div>
                                        <div class="shedule__right">
                                            <div class="shedule__time">
                                                <ul class="countdown count-down" data-date="Nove 11, 2022 21:14:01">
                                                    <li class="clock-item">
                                                        <span class="count-number days">56</span>
                                                        <p class="count-text">Days</p>
                                                    </li>

                                                    <li class="clock-item">
                                                        <span class="count-number hours">16</span>
                                                        <p class="count-text">Hours</p>
                                                    </li>
                                                    <li class="clock-item">
                                                        <span class="count-number minutes">25</span>
                                                        <p class="count-text">Minutes</p>
                                                    </li>

                                                    <li class="clock-item">
                                                        <span class="count-number seconds">19</span>
                                                        <p class="count-text">Seconds</p>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="shedule__item">
                                <div class="shedule__inner">
                                    <div class="shedule__content">
                                        <div class="shedule__left">
                                            <div class="shedule__title">
                                                <h6>Christmas Eve</h6>
                                                <p>26 June at 6:30 am</p>
                                            </div>
                                        </div>
                                        <div class="shedule__right">
                                            <div class="shedule__time">
                                                <ul class="countdown count-down" data-date="Nove 10, 2022 21:14:01">
                                                    <li class="clock-item">
                                                        <span class="count-number days">56</span>
                                                        <p class="count-text">Days</p>
                                                    </li>

                                                    <li class="clock-item">
                                                        <span class="count-number hours">16</span>
                                                        <p class="count-text">Hours</p>
                                                    </li>
                                                    <li class="clock-item">
                                                        <span class="count-number minutes">25</span>
                                                        <p class="count-text">Minutes</p>
                                                    </li>

                                                    <li class="clock-item">
                                                        <span class="count-number seconds">19</span>
                                                        <p class="count-text">Seconds</p>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="shedule__item">
                                <div class="shedule__inner">
                                    <div class="shedule__content">
                                        <div class="shedule__left">
                                            <div class="shedule__title">
                                                <h6>Ascension Jes</h6>
                                                <p>26 June at 6:30 am</p>
                                            </div>
                                        </div>
                                        <div class="shedule__right">
                                            <div class="shedule__time">
                                                <ul class="countdown count-down" data-date="Nove 09, 2022 21:14:01">
                                                    <li class="clock-item">
                                                        <span class="count-number days">56</span>
                                                        <p class="count-text">Days</p>
                                                    </li>

                                                    <li class="clock-item">
                                                        <span class="count-number hours">16</span>
                                                        <p class="count-text">Hours</p>
                                                    </li>
                                                    <li class="clock-item">
                                                        <span class="count-number minutes">25</span>
                                                        <p class="count-text">Minutes</p>
                                                    </li>

                                                    <li class="clock-item">
                                                        <span class="count-number seconds">19</span>
                                                        <p class="count-text">Seconds</p>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="shedule__bottom">
                            <div class="shedule__sunrise">
                                <div class="shedule__sunrise-item">
                                    <div class="shedule__sunrise-inner">
                                        <div class="shedule__sunrise-thumb">
                                            <img src="/frontend/images/shedule/sun.png" alt="event sunrise">
                                        </div>
                                        <div class="shedule__sunrise-content">
                                            <h3>SUNRISE</h3>
                                            <p>5.10 AM</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="shedule__sunrise-item">
                                    <div class="shedule__sunrise-inner">
                                        <div class="shedule__sunrise-thumb">
                                            <img src="/frontend/images/shedule/sun2.png" alt="event sunrise">
                                        </div>
                                        <div class="shedule__sunrise-content">
                                            <h3>SUNset</h3>
                                            <p>5.10 AM</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ================> Shedule section end here <================== -->


    <!-- ================> Sermon section start here <================== -->
    <div class="sermon padding--top padding--bottom bg-light">
        <div class="container">
            <div class="section__header text-center">
                <h2>Latest Sermons</h2>
                <p>Proin Eget Tortor Risus. Cras ultricies ligula sed magna dictum porta. Vivamus suscipit tortor eget felis porttitor volutpat.</p>
            </div>
            <div class="section__wrapper">
                <div class="row g-4">
                    <div class="col-lg-6 col-12">
                        <div class="sermon__item">
                            <div class="sermon__inner">
                                <div class="sermon__thumb">
                                    <img src="/frontend/images/sermon/01.jpg" alt="sermon thumb">
                                </div>
                                <div class="sermon__content">
                                    <a href="sermon-single.html"><h6>Lorem ipsum dolor sit amet, consectetur adipisicing</h6></a>
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
                                    <img src="/frontend/images/sermon/02.jpg" alt="sermon thumb">
                                </div>
                                <div class="sermon__content">
                                    <a href="sermon-single.html"><h6>Seamlessly embrace distributed portals whereas maintainable platforms.</h6></a>
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
                                    <img src="/frontend/images/sermon/03.jpg" alt="sermon thumb">
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
                                    <img src="/frontend/images/sermon/04.jpg" alt="sermon thumb">
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


    <!-- ================> Cause section start here <================== -->
    <div class="cause padding--top padding--bottom bg-img" style="background: url(/frontend/images/bg-img/02.jpg) rgba(0, 0, 0, .4);">
        <div class="container">
            <div class="section__header text-center">
                <h2 class="text-white">Urgent Causes</h2>
            </div>
            <div class="section__wrapper">
                <div class="cause__top row justify-content-center g-4 row-cols-xl-5 row-cols-md-3 row-cols-sm-2 row-cols-1">
                    <div class="cause__item">
                        <div class="cause__inner">
                            <div class="cause__content">
                                <h3>82.5%</h3>
                                <h6>Founded</h6>
                            </div>
                        </div>
                    </div>
                    <div class="cause__item">
                        <div class="cause__inner">
                            <div class="cause__content">
                                <h3>$ 1650</h3>
                                <h6>Donate</h6>
                            </div>
                        </div>
                    </div>
                    <div class="cause__item">
                        <div class="cause__inner">
                            <div class="cause__content">
                                <h3>$ 2000</h3>
                                <h6>Goal</h6>
                            </div>
                        </div>
                    </div>
                    <div class="cause__item">
                        <div class="cause__inner">
                            <div class="cause__content">
                                <h3>10</h3>
                                <h6>Donator</h6>
                            </div>
                        </div>
                    </div>
                    <div class="cause__item">
                        <div class="cause__inner">
                            <div class="cause__content">
                                <h3>60</h3>
                                <h6>Day to go</h6>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="cause__bottom">
                    <div class="cause__bars">
                        <div class="donaterange__content text-center">
                            <h4><span>66% Donated </span> / $10,013 To Go</h4>
                            <div class="donaterange__bars" data-percent="60%">
                                <div class="donaterange__bar"></div>
                            </div>
                            <a href="causes.html" class="default-btn move-right"><span>Donate <i class="fas fa-heart"></i></span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ================> Cause section end here <================== -->


    @include('frontend.layouts.blog.blog-section')



    <!-- ================> Qoute section start here <================== -->
    <div class="qoute padding--top padding--bottom bg-img" style="background: url(/frontend/images/bg-img/03.jpg) rgba(0, 0, 0, .4);;">
        <div class="container">
            <div class="qoute__slider overflow-hidden">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="qoute__item">
                            <div class="qoute__inner align-items-center">
                                <div class="qoute__thumb">
                                    <h4>Quote From </h4>
                                    <span>Prophat</span>
                                    <i class="fas fa-quote-left"></i>
                                </div>
                                <div class="qoute__content">
                                    <blockquote class="qoute__content-blockquote">
                                        <p>Hazrat Mohammod (s) Said "It is Better For Any Of You To Carry A Load Of Firewood On His Own Back Than To Beg From Someone Else"</p>
                                        <h4>Riyadh-Us-Saleheen, Chapter 59, hadith 540</h4>
                                    </blockquote>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ================> Qoute section end here <================== -->


    <!-- ================> Sponsor section start here <================== -->
    <div class="sponsor">
        <div class="container">
            <div class="sponsor__slider overflow-hidden">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="sponsor__item">
                            <div class="sponsor__inner">
                                <div class="sponsor__thumb">
                                    <img src="/frontend/images/sponsor/01.png" alt="sponsor thumb">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="sponsor__item">
                            <div class="sponsor__inner">
                                <div class="sponsor__thumb">
                                    <img src="/frontend/images/sponsor/02.png" alt="sponsor thumb">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="sponsor__item">
                            <div class="sponsor__inner">
                                <div class="sponsor__thumb">
                                    <img src="/frontend/images/sponsor/03.png" alt="sponsor thumb">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="sponsor__item">
                            <div class="sponsor__inner">
                                <div class="sponsor__thumb">
                                    <img src="/frontend/images/sponsor/04.png" alt="sponsor thumb">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ================> Sponsor section end here <================== -->


    <!-- ================> Contact section start here <================== -->
    <div class="contact padding--top padding--bottom bg-light">
        <div class="container">
            <div class="section__header text-center">
                <h2>Contact Us</h2>
                <p>Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit.</p>
            </div>
            <div class="section__wrapper">
                <div class="contact__form">
                    <form class="d-flex flex-wrap justify-content-between" action="https://demos.codexcoder.com/themeforest/html/peace/peace/contact.php" id="contact-form" method="POST">
                        <input type="text" placeholder="Your Name" id="name" name="name" required="required">
                        <input type="text" placeholder="Your Email" id="email" name="email" required>
                        <input class="w-100" type="text" placeholder="Subject" id="subject" name="subject" required>
                        <textarea placeholder="Your Message" rows="8" name="message" id="message" required></textarea>
                        <div class="text-center w-100">
                            <button type="submit" class="default-btn move-right"><span>SEND NOW</span></button>
                        </div>
                    </form>
                    <p class="form-message"></p>
                </div>
            </div>
        </div>
    </div>
    <!-- ================> Contact section end here <================== -->


    <!-- ================> Location section start here <================== -->
    <div class="location">
        <div class="container-fluid">
            <div class="row g-0">
                <div class="col-lg-6 col-12">
                    <div class="location__left">
                        <div class="location__map">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d423283.4355669374!2d-118.69192993092697!3d34.02073049448939!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80c2c75ddc27da13%3A0xe22fdf6f254608f4!2sLos%20Angeles%2C%20CA%2C%20USA!5e0!3m2!1sen!2sbd!4v1633958856057!5m2!1sen!2sbd" allowfullscreen="" loading="lazy"></iframe>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-12">
                    <div class="location__right padding--top padding--bottom">
                        <div class="location__info">
                            <div class="location__info-top">
                                <div class="section__header">
                                    <h2>Contact Person</h2>
                                </div>
                                <div class="section__wrapper">
                                    <div class="location__info-thumb">
                                        <img src="/frontend/images/location/01.jpg" alt="location thumb">
                                    </div>
                                    <div class="location__info-content">
                                        <h6>Deniyel Murchi</h6>
                                        <span>Church Pastor</span>
                                        <ul>
                                            <li><b>Tel:</b>+002145698</li>
                                            <li><b>Email:</b>info@yourmail.com</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="location__info-bottom">
                                <div class="section__header">
                                    <h2>Contact Info</h2>
                                </div>
                                <div class="section__wrapper">
                                    <div class="location__info-list">
                                        <ul>
                                            <li>
                                                <div class="location__info-left">
                                                    <i class="fas fa-map-marker-alt"></i>
                                                </div>
                                                <div class="location__info-right">
                                                    <p>Inner Circular Road, New Fabada Streed Barmuda, USA.</p>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="location__info-left">
                                                    <i class="far fa-clock"></i>
                                                </div>
                                                <div class="location__info-right">
                                                    <ul>
                                                        <li><b>Monday-Thursday :</b> 06:00 am - 09:00 pm</li>
                                                        <li><b>Friday :</b> 10:30 am - 05:30 pm</li>
                                                        <li><b>Saturday :</b> 10:30 am - 05:30 pm</li>
                                                        <li><b>Sunday :</b> Closed</li>
                                                    </ul>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ================> Location section end here <================== -->


    <!-- ================> Social section start here <================== -->
    <div class="social">
        <div class="container">
            <div class="social__area">
                <ul class="social__list">
                    <li class="social__list-facebook">
                        <a href="https://www.facebook.com/profile.php?id=100064865718626&mibextid=ZbWKwL">
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
