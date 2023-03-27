<!-- header bottom area start -->
<div id="header-sticky" class="bd-header-bottom-2">
    <!-- header bottom clip shape  -->
    <div class="bd-header-bottom-clip-shape"></div>
    <div class="container">
        <div class="mega-menu-wrapper p-relative">
            <div class="d-flex align-items-center justify-content-between">
                <div class="bd-header-logo">
                    <a href="{{ route('home') }}">
                        <img src="{{ asset('/') }}frontend/assets/img/logo/logo.svg" alt="logo">
                    </a>
                </div>
                <div class="bd-main-menu d-none d-lg-flex align-items-center">
                    <nav id="mobile-menu">
                        <ul>
                            <li class="">
                                <a href="{{ route('home') }}">Home</a>

                            </li>
                            <li>
                                <a href="{{ route('about') }}">About</a>
                            </li>
                            <li class="has-dropdown">
                                <a href="">Administration</a>
                                <ul class="submenu">
                                    <li><a href="#">Chancellor</a></li>
                                    <li><a href="#">Vice-Chancellor</a></li>
                                    <li><a href="#">Pro Vice-Chancellor</a></li>
                                </ul>
                            </li>
                            <li class="has-dropdown">
                                <a href="">Academic</a>
                                <ul class="submenu">
                                    <li><a href="#">Class</a></li>
                                    <li><a href="#">Admission</a></li>
                                    <li><a href="#">Syllabus</a></li>
                                    <li><a href="#">Notice</a></li>
                                </ul>
                            </li>
{{--                            <li class="has-dropdown">--}}
{{--                                <a href="shop.html">Shop</a>--}}
{{--                                <ul class="submenu">--}}
{{--                                    <li><a href="shop.html">Shop Main</a></li>--}}
{{--                                    <li><a href="shop-details.html">Shop Details</a></li>--}}
{{--                                    <li><a href="wishlist.html">Wishlist</a></li>--}}
{{--                                    <li><a href="cart.html">Cart</a></li>--}}
{{--                                    <li><a href="checkout.html">Checkout</a></li>--}}
{{--                                </ul>--}}
{{--                            </li>--}}
{{--                            <li class="has-dropdown has-mega-menu">--}}
{{--                                <a href="#">Pages</a>--}}
{{--                                <ul class="mega-menu">--}}
{{--                                    <li><a href="javasript:void(0);" class="mega-menu-title">Page Layout 1</a>--}}
{{--                                        <ul>--}}
{{--                                            <li> <a href="programs.html">Program</a></li>--}}
{{--                                            <li><a href="program-details.html">Program Details</a></li>--}}
{{--                                        </ul>--}}
{{--                                    </li>--}}
{{--                                    <li><a href="javasript:void(0);" class="mega-menu-title">Page Layout 2</a>--}}
{{--                                        <ul>--}}
{{--                                            <li><a href="testimonial.html">Testimonial</a></li>--}}
{{--                                            <li><a href="gallery.html">Gallery</a></li>--}}
{{--                                        </ul>--}}
{{--                                    </li>--}}
{{--                                    <li><a href="javasript:void(0);" class="mega-menu-title">Page Layout 3</a>--}}
{{--                                        <ul>--}}
{{--                                            <li><a href="news.html">News Main</a></li>--}}
{{--                                            <li><a href="news-sidebar.html">News Sidebar</a></li>--}}
{{--                                        </ul>--}}
{{--                                    </li>--}}
{{--                                </ul>--}}
{{--                            </li>--}}
                            <li>
                                <a href="{{ route('gallery') }}">Gallery</a>
                            </li>
                            <li>
                                <a href="{{ route('faq') }}">FAQ</a>
                            </li>
                            <li>


                                <a href="{{ route('contact') }}">Contact</a>

                            </li>
                        </ul>
                    </nav>
                    <div class="bd-search-btn-wrapper">
                        <button class="bd-search-open-btn">
                            <i class="flaticon-search"></i>
                        </button>
                    </div>
                </div>
                <div class="bd-header-bottom-right d-flex justify-content-end align-items-center">
                    <div class="bd-header-meta-item d-none bd-header-menu-meta d-xxl-flex align-items-center">
                        <div class="bd-header-meta-icon">
                            <i class="flaticon-phone-call"></i>
                        </div>
                        <div class="bd-header-meta-text">
                            <p><a href="tel:9072003462">907-200-3462</a></p>
                        </div>
                    </div>
                    <div class="bd-header-btn d-none d-xl-block">
                        <a href="contact.html" class="bd-btn">
                              <span class="bd-btn-inner">
                                 <span class="bd-btn-normal">Apply now</span>
                                 <span class="bd-btn-hover">Apply now</span>
                              </span>
                        </a>
                    </div>
                    <div class="header-hamburger">
                        <button type="button" class="hamburger-btn offcanvas-open-btn">
                            <span></span>
                            <span></span>
                            <span></span>
                            <span></span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- header bottom area end -->
