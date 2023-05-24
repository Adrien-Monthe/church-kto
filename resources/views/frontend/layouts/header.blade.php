<!-- ================> header section start here <================== -->
<header class="header">
    <div class="navbar-expand-xl">
        <div class="collapse navbar-collapse" id="menubar2">
            <div class="header__top w-100">
                <div class="container">
                    <div class="header__top-area">
                        <div class="header__top-left">
                            <ul>
                                <li>
                                    <i class="fas fa-phone-alt"></i>
                                    691485850 | 677551257 | 677550341
                                </li>
                                <li>
                                    <i class="fas fa-envelope"></i>
                                    info@enfancekto-dla.com
                                </li>
                            </ul>
                        </div>
                        <div class="header__top-center">
                            <div class="header__top-logo d-none d-md-block">
                                <a href="index.html"><img src="/frontend/images/logo/01.png" alt="logo"></a>
                            </div>
                        </div>
                        <div class="header__top-right">
                            <div class="header__top-socialsearch">
                                <div class="header__top-social">
                                    <ul>
                                        <li><a href="https://www.facebook.com/profile.php?id=100064865718626&mibextid=ZbWKwL"><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                        <li><a href="#"><i class="fab fa-pinterest-p"></i></a></li>
                                    </ul>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="header__bottom">
        <div class="container">
            <div class="header__mainmenu navbar navbar-expand-xl navbar-light">
                <div class="header__logo">
                    <a href="index.html" class="d-none d-xl-block"><img src="/frontend/images/logo/02.png" alt="logo"></a>
                    <a href="index.html" class="d-xl-none"><img src="/frontend/images/logo/01.png" alt="logo"></a>
                </div>
                <div class="header__bar">
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#menubar" aria-controls="menubar" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <button class="navbar-toggler header__bar-info" type="button" data-bs-toggle="collapse" data-bs-target="#menubar2" aria-controls="menubar2" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="fas fa-info"></span>
                    </button>
                </div>
                @include('frontend.layouts.menu')
            </div>
        </div>
    </div>
</header>
<!-- ================> header section end here <================== -->
