@php use Carbon\Carbon; @endphp
<!-- ================> Blog section start here <================== -->
<div class="blog padding--top padding--bottom bg-light">
    <div class="container">
        <div class="section__header text-center">
            <h2>Articles Récents</h2>
            <p>Consultez Nous différents articles qui ballaient plusieurs thèmes de l'études Biblique</p>
        </div>
        <div class="section__wrapper">
            <div class="row g-4">
                <div class="col-lg-8 col-12">
                    <div class="blog__left">
                        <div class="blog__area">

                            @foreach($blogs as $blog)
                                <div class="blog__item">
                                    <div class="blog__inner">
                                        <div class="blog__thumb">
                                            <a href="{{ route('single_blog_page', [$blog->codename ] ) }}"><img src="{{ asset($blog->image_path ? : "/frontend/images/gallery/09.jpg") }}" alt="{{ $blog->name }}"></a>
                                        </div>
                                        <div class="blog__content">
                                            <a href="{{ route('single_blog_page', [$blog->codename ] ) }}"><h5>{{ $blog->title }}</h5></a>
                                            <ul class="blog__content-metapost">
                                                <li><i class="far fa-calendar"></i> {{ Carbon::parse($blog->created_at)->isoFormat('Do MMM, YYYY') }}</li>
                                                <li><i class="fas fa-user"></i> {{ $blog->author }}</li>
                                                <li><i class="far fa-eye"></i> <a href="#">{{ $blog->views }}</a></li>
                                            </ul>
                                            <p style="text-align: justify">{{ substr($blog->short_description, 0, 200)."..."  }}</p>
                                        </div>
                                    </div>
                                </div>
                            @endforeach




                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-12">
                    <div class="blog__right">
                        <div class="section__header">
                            <h2>Best Product</h2>
                        </div>
                        <div class="section__wrapper">
                            <div class="blog__slider overflow-hidden">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <div class="blog__slider-item">
                                            <div class="blog__slider-thumb">
                                                <a href="blog-single.html"><img src="/frontend/images/blog/slider/01.jpg" alt="blog thumb"></a>
                                            </div>
                                            <div class="blog__slider-content">
                                                <a href="blog-single.html"><h6>Lorem Ipsum Dolor.</h6></a>
                                                <p class="blog__slider-rating">
                                                    <i class="far fa-star"></i>
                                                    <i class="far fa-star"></i>
                                                    <i class="far fa-star"></i>
                                                    <i class="far fa-star"></i>
                                                    <i class="far fa-star"></i>
                                                </p>
                                                <h5>$9.00</h5>
                                                <a href="#" class="default-btn move-right"><span><i class="fas fa-cart-plus"></i> Add to cart</span></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="blog__slider-item">
                                            <div class="blog__slider-thumb">
                                                <a href="blog-single.html"><img src="/frontend/images/blog/slider/02.jpg" alt="blog thumb"></a>
                                            </div>
                                            <div class="blog__slider-content">
                                                <a href="blog-single.html"><h6>Lorem Ipsum Dolor.</h6></a>
                                                <p class="blog__slider-rating">
                                                    <i class="far fa-star"></i>
                                                    <i class="far fa-star"></i>
                                                    <i class="far fa-star"></i>
                                                    <i class="far fa-star"></i>
                                                    <i class="far fa-star"></i>
                                                </p>
                                                <h5>$9.00</h5>
                                                <a href="#" class="default-btn move-right"><span><i class="fas fa-cart-plus"></i> Add to cart</span></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="blog__slider-item">
                                            <div class="blog__slider-thumb">
                                                <a href="blog-single.html"><img src="/frontend/images/blog/slider/03.jpg" alt="blog thumb"></a>
                                            </div>
                                            <div class="blog__slider-content">
                                                <a href="blog-single.html"><h6>Lorem Ipsum Dolor.</h6></a>
                                                <p class="blog__slider-rating">
                                                    <i class="far fa-star"></i>
                                                    <i class="far fa-star"></i>
                                                    <i class="far fa-star"></i>
                                                    <i class="far fa-star"></i>
                                                    <i class="far fa-star"></i>
                                                </p>
                                                <h5>$9.00</h5>
                                                <a href="#" class="default-btn move-right"><span><i class="fas fa-cart-plus"></i> Add to cart</span></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="blog__pagination"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ================> Blog section end here <================== -->
