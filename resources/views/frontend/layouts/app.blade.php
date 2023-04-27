<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from demos.codexcoder.com/themeforest/html/peace/peace/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 12 Apr 2023 14:45:53 GMT -->
@include('frontend.layouts.head')

<body>

<!-- ================> preloader start here <================ -->
@include('frontend.layouts.preloader')
<!-- ================> preloader ending here <================ -->





<!-- ================> header section start here <================== -->
@include('frontend.layouts.header')
<!-- ================> header section end here <================== -->

    @yield('content')

<!-- ================> Footer section start here <================== -->
@include('frontend.layouts.footer')
<!-- ================> Footer section end here <================== -->





<!-- scrollToTop start here -->
<a href="#" class="scrollToTop"><i class="fas fa-arrow-up"></i><span class="pluse_1"></span><span class="pluse_2"></span></a>
<!-- scrollToTop ending here -->





<!-- vendor plugins -->
@include('frontend.layouts.scripts')
</body>

<!-- Mirrored from demos.codexcoder.com/themeforest/html/peace/peace/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 12 Apr 2023 14:47:19 GMT -->
</html>
