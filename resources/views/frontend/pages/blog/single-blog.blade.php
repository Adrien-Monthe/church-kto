@php use Carbon\Carbon; @endphp
@extends('frontend.layouts.app')

@section('additional_meta')

    <meta property="og:image" content="{{ asset($blog->image_path  ? : "/frontend/images/gallery/09.jpg") }}"/>
    <meta property="og:image:url" content="{{ asset($blog->image_path  ? : "/frontend/images/gallery/09.jpg") }}"/>
    <meta property="og:image:secure_url" content="{{ asset($blog->image_path  ? : "/frontend/images/gallery/09.jpg") }}"/>
    <meta property="og:type" content="article"/>


    <meta property="og:description" content="{{ $blog->short_description }}"/>

    <meta property="og:url" content="{{ route('single_blog_page', [app()->getLocale(),$blog->id ] ) }}"/>

    <meta property="og:title" content="{{ $blog->title }}"/>

@endsection

@section('page-title', __('home.page-title'))

@section('content')


    <!-- ================> PageHeader section start here <================== -->
    <div class="pageheader">
        <div class="container">
            <div class="pageheader__area">
                <div class="pageheader__left">
                    <h3>{{ $blog->category ? $blog->category->name : $blog->title }}</h3>
                </div>
                <div class="pageheader__right">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('home') }}">Accueil</a></li>
                            <li class="breadcrumb-item active" aria-current="page">{{ $blog->title }}</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- ================> PageHeader section end here <================== -->


    <!-- ================> Blog section start here <================== -->
    <div class="blog blog-style2 blog-single padding--top padding--bottom bg-light">
        <div class="container">
            <div class="section__wrapper">
                <div class="row g-4">
                    <div class="col-lg-8 col-12">
                        <div class="row g-4">
                            <div class="col-12">
                                <div class="blog__item">
                                    <div class="blog__inner">
                                        <div class="blog__thumb">
                                            <img src="{{ asset($blog->image_path  ? : "/frontend/images/gallery/09.jpg") }}" alt="{{ $blog->name }}">
                                        </div>
                                        <div class="blog__content">
                                            <h3>{{ $blog->title }}.</h3>
                                            <ul class="blog__content-metapost">
                                                <li><i class="far fa-calendar"></i> {{ Carbon::parse($blog->created_at)->isoFormat('Do MMM, YYYY') }}</li>
                                                <li><i class="fas fa-user"></i> {{ $blog->author }}</li>
                                                <li><i class="fas fa-tag"></i> <a href="{{ $blog->category ? route('blog_category', [$blog->category->id]) : "#" }}">{{ $blog->category ? $blog->category->name : "" }}</a></li>
                                                <li><i class="far fa-eye"></i> <a href="#">{{ $blog->views }} Visites</a></li>
                                            </ul>
                                            <p>{{ $blog->short_description }}</p>
                                            {!! $blog->description   !!}
                                            <div class="blog__tags">
                                                <div class="blog__tags-left">
                                                    <div class="blog__tags-title">
                                                        <p>Tags:</p>
                                                    </div>
                                                    <div class="blog__tags-details">
                                                        <ul>
                                                            <li><a href="#">Fashion</a></li>
                                                            <li><a href="#">Model</a></li>
                                                            <li><a href="#">Entertainment</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="blog__tags-right">
                                                    <div class="blog__tags-title">
                                                        <p>Share:</p>
                                                    </div>
                                                    <div class="blog__tags-details">
                                                        <div class="footer__social">
                                                            <ul>
                                                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                                                <li><a href="#"><i class="fab fa-dribbble"></i></a></li>
                                                                <li><a href="#"><i class="fab fa-pinterest-p"></i></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                {{--<div class="blog__comments">
                                    <div class="section__header">
                                        <h2>4 Comments</h2>
                                    </div>
                                    <div class="blog__comments-details">
                                        <ul>
                                            <li>
                                                <div class="blog__comments-thumb">
                                                    <img src="/frontend/assets/images/blog/author/none.jpg" alt="blog-thumb">
                                                </div>
                                                <div class="blog__comments-content">
                                                    <h6>Mr Jake</h6>
                                                    <span>On January 10, 2022 at 9:49 am</span>
                                                    <a href="#" class="blog__comments-edit">Edit</a>
                                                    <p>Hi, this is a comment. Donec sollicitudin molestie malesuada. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula. Cras ultricies ligula sed magna dictum porta.</p>
                                                    <a href="#" class="text-btn"><span><i class="fas fa-reply-all"></i> Reply</span></a>
                                                </div>
                                                <ul>
                                                    <li>
                                                        <div class="blog__comments-thumb">
                                                            <img src="/frontend/assets/images/blog/author/none.jpg" alt="blog-thumb">
                                                        </div>
                                                        <div class="blog__comments-content">
                                                            <h6>Mr Jahirul</h6>
                                                            <span>On January 10, 2022 at 9:49 am</span>
                                                            <a href="#" class="blog__comments-edit">Edit</a>
                                                            <p>Enthusiastical actualize turnkey channel via real-time market. Progressively restore play supply chains after tactical technologies. </p>
                                                            <a href="#" class="text-btn"><span><i class="fas fa-reply-all"></i> Reply</span></a>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li>
                                                <div class="blog__comments-thumb">
                                                    <img src="/frontend/assets/images/blog/author/none.jpg" alt="blog-thumb">
                                                </div>
                                                <div class="blog__comments-content">
                                                    <h6>Mr Jake</h6>
                                                    <span>On January 10, 2022 at 9:49 am</span>
                                                    <a href="#" class="blog__comments-edit">Edit</a>
                                                    <p>Enthusiastical actualize turnkey channel via real-time market. Progressively restore play supply chains after tactical technologies. </p>
                                                    <a href="#" class="text-btn"><span><i class="fas fa-reply-all"></i> Reply</span></a>
                                                </div>
                                                <ul>
                                                    <li>
                                                        <div class="blog__comments-thumb">
                                                            <img src="/frontend/assets/images/blog/author/none.jpg" alt="blog-thumb">
                                                        </div>
                                                        <div class="blog__comments-content">
                                                            <h6>Mr Jahirul</h6>
                                                            <span>On January 10, 2022 at 9:49 am</span>
                                                            <a href="#" class="blog__comments-edit">Edit</a>
                                                            <p>Enthusiastical actualize turnkey channel via real-time market. Progressively restore play supply chains after tactical technologies. </p>
                                                            <a href="#" class="text-btn"><span><i class="fas fa-reply-all"></i> Reply</span></a>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="blog__respond">
                                    <div class="section__header">
                                        <h2>Leave a Comment</h2>
                                    </div>
                                    <div class="blog__respond-details">
                                        <form action="#">
                                            <input name="name" type="text" value="" placeholder="Name">
                                            <input name="email" type="text" value="" placeholder="Email">
                                            <input name="url" type="text" value="" placeholder="Subject" class="w-100">
                                            <textarea id="comment-reply" name="comment" rows="10" placeholder="Type Here Your Comment"></textarea>
                                            <p class="comment-form-cookies-consent w-100">
                                                <input id="wp-comment-cookies-consent" name="wp-comment-cookies-consent" type="checkbox" value="yes">
                                                <label for="wp-comment-cookies-consent">Save my name, email, and website in this browser for the next time I comment.</label>
                                            </p>
                                            <button type="submit" class="default-btn move-right"><span>Submit</span></button>
                                        </form>
                                    </div>
                                </div> --}}
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-12">
                        <div class="sidebar">

                            <div class="sidebar__tab">
                                <div class="section__header">
                                    <h2>Articles</h2>
                                </div>
                                <div class="section__wrapper">
                                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link active" id="post-tab" data-bs-toggle="tab" data-bs-target="#post" type="button" role="tab" aria-controls="post" aria-selected="true">Articles Récents</button>
                                        </li>

                                    </ul>
                                    <div class="tab-content" id="myTabContent">
                                        <div class="tab-pane fade show active" id="post" role="tabpanel" aria-labelledby="post-tab">
                                            <div class="footer__post">
                                                <div class="section__wrapper">
                                                    @foreach($recent_blogs as $rblog)
                                                        <div class="footer__post-item">
                                                            <div class="footer__post-inner">
                                                                <div class="footer__post-thumb">
                                                                    <a href="{{ route('single_blog_page', [$rblog->codename ] ) }}"><img src="{{ asset($rblog->image_path  ? : "/frontend/images/gallery/09.jpg") }}" alt="footer post"></a>
                                                                </div>
                                                                <div class="footer__post-content">
                                                                    <a href="{{ route('single_blog_page', [$rblog->codename ] ) }}"><h6>{{ $rblog->title }}</h6></a>
                                                                    <p><i class="far fa-calendar-alt"></i> {{ Carbon::parse($rblog->created_at)->isoFormat('Do MMM, YYYY') }}</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    @endforeach


                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="sidebar__tag">
                                <div class="footer__tags">
                                    <div class="section__header">
                                        <h2>Post Tag</h2>
                                    </div>
                                    <div class="section__wrapper">
                                        <ul>
                                            @foreach($tags as $tag)
                                                <li><a href="{{ route('blog_tag', [$tag->id]) }}">{{ $tag->name }}</a></li>
                                            @endforeach



                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="sidebar__catagory">
                                <div class="section__header">
                                    <h2>Categories</h2>
                                </div>
                                <div class="section__wrapper">
                                    <ul>
                                        @foreach($categories as $cat)
                                            <li><a href="{{ route('blog_category', [$cat->id]) }}"><i class="fas fa-chevron-right"></i>{{ $cat->name }}</a></li>
                                        @endforeach

                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
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
