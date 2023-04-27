<!DOCTYPE html>
<html lang="en">

<head>
    @include('backend.layouts.meta')

    @include('backend.layouts.css')

    <!-- =======================================================
    * Template Name: NiceAdmin - v2.4.1
    * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
    * Author: BootstrapMade.com
    * License: https://bootstrapmade.com/license/
    ======================================================== -->
</head>

<body>


<!-- ======= Header ======= -->
@include('backend.layouts.header')

    <!-- ======= Sidebar ======= -->
    @include('backend.layouts.sidebar')

    <main id="main" class="main">

        @yield('content')

    </main><!-- End #main -->



@include('backend.layouts.footer')

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    @include('backend.layouts.scripts')


</body>

</html>
