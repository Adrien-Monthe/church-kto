@php use Carbon\Carbon; @endphp
<!-- ================> Footer section start here <================== -->
<footer class="footer">
    <div class="footer__top padding--top padding--bottom">
        <div class="container">
            <div class="row g-4">
                <div class="col-xl-3 col-sm-6 col-12">
                    <div class="footer__about">
                        <div class="section__header">
                            <h2>Apropos de Enfance KTO DLA</h2>
                        </div>
                        <div class="section__wrapper">
                            <div class="footer__about-thumb">
                                <img src="/frontend/images/footer/about/01.jpg" alt="footer thumb" class="w-100">
                            </div>
                            <div class="footer__about-contet">
                                <p>Dramatically strategize economically sound action items for e-business niches. Quickly re-engineer 24/365 potentialities before.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6 col-12">
                    <div class="footer__tags">
                        <div class="section__header">
                            <h2>Catégories</h2>
                        </div>
                        <div class="section__wrapper">
                            <ul>
                                @foreach($categories as $cat)
                                    <li><a href="{{ route('blog_category', [$cat->id]) }}">{{ $cat->name }}</a></li>
                                @endforeach


                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6 col-12">
                    <div class="footer__post">
                        <div class="section__header">
                            <h2>Recent Post</h2>
                        </div>
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
                <div class="col-xl-3 col-sm-6 col-12">
                    <div class="footer__links">
                        <div class="section__header">
                            <h2>Useful Links</h2>
                        </div>
                        <div class="section__wrapper">
                            <ul>
                                <li><a href="#">Log in</a></li>
                                <li><a href="#">Entries <abbr title="RSS">RSS</abbr></a></li>
                                <li><a href="#">Comments <abbr title="RSS">RSS</abbr></a></li>
                                <li><a href="#">WordPress.org</a></li>
                                <li><a href="#">Google</a></li>
                                <li><a href="#">Template</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer__bottom">
        <div class="container">
            <div class="footer__bottom-area text-center">
                <div class="footer__bottom-logo">
                    <a href="index.html"><img src="/frontend/images/logo/01.png" alt="footer logo"></a>
                </div>
                <div class="footer__bottom-content">
                    <p>Copyright &copy; 2022 <a href="index.html">Peace</a> | Designed by <a href="https://themeforest.net/user/codexcoder/portfolio">CodexCoder</a></p>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- ================> Footer section end here <================== -->
