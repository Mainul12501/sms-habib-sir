<!doctype html>
<html class="no-js" lang="zxx">


<!-- Mirrored from codeskdhaka.com/html/kindedo-prev/kindedo/about.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 27 Mar 2023 02:36:35 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Site Name - @yield('title')</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    @include('frontend.includes.assets.css')
</head>

<body>

<!-- pre loader area start -->
<div id="loading">
    <div id="preloader">
        <div class="preloader-thumb-wrap">
            <div class="preloader-thumb">
                <div class="preloader-border"></div>
                <img src="{{ asset('/') }}frontend/assets/img/bg/preloader.png" alt="img not found!">
            </div>
        </div>
    </div>
</div>
<!-- pre loader area end -->

<!-- back to top start -->
<div class="progress-wrap">
    <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
        <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
    </svg>
</div>
<!-- back to top end -->

<!-- header area start -->
<header>
    <div class="bd-header">
        @include('frontend.includes.header.top')

        @include('frontend.includes.header.menu')
    </div>
</header>
<!-- header area end here -->

<!-- main area start here  -->
<main>
    @include('frontend.includes.breadcrumb')

    @yield('body')

    @include('frontend.includes.news-letter')
</main>
<!-- main area end here  -->

<!-- footer area start -->
@include('frontend.includes.breadcrumb-footer')
<!-- footer area end -->

@include('frontend.includes.offcanvas')


@include('frontend.includes.search-box')

<!-- JS here -->
@include('frontend.includes.assets.js')
</body>
</html>
