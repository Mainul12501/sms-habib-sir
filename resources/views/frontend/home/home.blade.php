@extends('frontend.home-master')

@section('title', 'Home Page')

@section('body')
    <!-- main area start here  -->
    <main>
        @include('frontend.home.slider')

        <!-- class area start here -->
        <section class="bd-class-area pt-120 pb-120">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="bd-section-title-wrapper text-center mb-55 wow fadeInUp" data-wow-duration="1s"
                             data-wow-delay=".2s">
                            <h2 class="bd-section-title mb-0">Our Offerings</h2>
                            <p>Our multi-level kindergarten programs cater to the age group of 2-5 years<br> with a curriculum
                                focussing children.</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="bd-class-active-2 swiper-container wow fadeInUp" data-wow-duration="1s"
                             data-wow-delay=".4s">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="bd-class-wrapper-2 text-center">
                                        <div class="bd-class-2">
                                            <div class="bd-class-icon-wrapper">
                                                <div class="bd-class-icon-2">
                                                    <i class="flaticon-drum"></i>
                                                </div>
                                            </div>
                                            <div class="bd-class-content">
                                                <h3 class="bd-class-title"><a href="class-details.html">Music Class</a></h3>
                                                <p>Each day at Mother’s Pride is a cele bration! We celebrate all indoor and out
                                                    door activities.</p>
                                                <div class="bd-class-btn">
                                                    <a href="class-details.html" class="bd-btn bd-btn-grey">
                                          <span class="bd-btn-inner">
                                             <span class="bd-btn-normal">View Details</span>
                                             <span class="bd-btn-hover">View Details</span>
                                          </span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="bd-class-wrapper-2 text-center">
                                        <div class="bd-class-2 clr-2">
                                            <div class="bd-class-icon-wrapper">
                                                <div class="bd-class-icon-2">
                                                    <i class="flaticon-sports"></i>
                                                </div>
                                            </div>
                                            <div class="bd-class-content">
                                                <h3 class="bd-class-title"><a href="class-details.html">Day Care</a></h3>
                                                <p>Our special rhyme books also them to phonetic sound of the words that cater to
                                                    all development.</p>
                                                <div class="bd-class-btn">
                                                    <a href="class-details.html" class="bd-btn">
                                          <span class="bd-btn-inner">
                                             <span class="bd-btn-normal">View Details</span>
                                             <span class="bd-btn-hover">View Details</span>
                                          </span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- slider dots pagination -->
                        <div class="bd-class-pagination bd-dots-pagination"></div>
                    </div>
                </div>
            </div>
        </section>
        <!-- class area end here -->

        <!-- promotion area start here  -->
        <section class="bd-promotion-area pb-60">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-xl-6 col-lg-6">
                        <div class="bd-promotion-thumb-wrapper mb-60">
                            <div class="bd-promotion-thumb">
                                <div class="bd-promotion-thumb-mask p-relative wow fadeInLeft" data-wow-delay=".3s"
                                     data-wow-duration="1">
                                    <img src="{{ asset('/') }}frontend/assets/img/promotion/2.png" alt="Image not found">
                                    <div class="panel wow"></div>
                                </div>
                            </div>
                            <div class="bd-promotion-shape d-none d-lg-block">
                                <img src="{{ asset('/') }}frontend/assets/img/shape/tripple-line.png" alt="Shape not found">
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6">
                        <div class="bd-promotion mb-60 wow fadeInRight" data-wow-duration="1s" data-wow-delay=".3s">
                            <div class="bd-section-title-wrapper mb-35">
                                <h2 class="bd-section-title mb-10">Best for Your Kids</h2>
                                <p> Being brave isn’t always a grand gesture sometimes it just means having a go attempting
                                    that difficult question, offering an answer in a lesson when you’re
                                    simply really trying new.
                                </p>
                            </div>
                            <div class="bd-promotion-counter-wrapper mb-40">
                                <div class="bd-promotion-counter">
                                    <div class="bd-promotion-counter-number">
                                        <p><span class="counter">14</span>+</p>
                                    </div>
                                    <div class="bd-promotion-counter-text">
                                        <span>Years of</span>
                                        <span>experience</span>
                                    </div>
                                </div>
                                <div class="bd-promotion-counter">
                                    <div class="bd-promotion-counter-number">
                                        <p><span><span class="counter">7</span>K</span>+</p>
                                    </div>
                                    <div class="bd-promotion-counter-text">
                                        <span>Students</span>
                                        <span>each year</span>
                                    </div>
                                </div>
                                <div class="bd-promotion-counter">
                                    <div class="bd-promotion-counter-number">
                                        <p><span class="counter">15</span>+</p>
                                    </div>
                                    <div class="bd-promotion-counter-text">
                                        <span>Award</span>
                                        <span>Wining</span>
                                    </div>
                                </div>
                            </div>
                            <div class="bd-promotion-list mb-50">
                                <ul>
                                    <li>We believe every child is intelligent so we care.</li>
                                    <li>Teachers make a difference of your child.</li>
                                </ul>
                            </div>
                            <div class="bd-promotion-btn-wrapper flex-wrap">
                                <div class="bd-promotion-btn">
                                    <a href="#" class="bd-btn">
                              <span class="bd-btn-inner">
                                 <span class="bd-btn-normal">View More</span>
                                 <span class="bd-btn-hover">View More</span>
                              </span>
                                    </a>
                                </div>
                                <div class="bd-promotion-btn-2 bd-pulse-btn btn-2">
                                    <a href="https://www.youtube.com/watch?v=l62SIcbCPwo" class="popup-video"><i
                                            class="flaticon-play-button"></i> Promotional Video</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- promotion area end here  -->

        <!-- program area start here  -->
        <section class="bd-program-area-2 p-relative fix theme-bg-6 pt-120 pb-120">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="bd-section-title-wrapper text-center mb-35 wow fadeInUp" data-wow-duration="1s"
                             data-wow-delay=".2s">
                            <h2 class="bd-section-title mb-0">Our Feature Programs</h2>
                            <p>Kindedo opened its doors in 1984 with a unique vision to provide its students<br> with a
                                globally focused study of arts.</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="bd-program-active swiper-container wow fadeInUp" data-wow-duration="1s"
                             data-wow-delay=".4s">
                            <div class="swiper-wrapper pt-20">
                                <div class="swiper-slide">
                                    <div class="bd-program-2 clr-1">
                                        <div class="bd-program-thumb-wrapper">
                                            <a href="program-details.html">
                                                <div class="bd-program-thumb-2">
                                                    <img src="{{ asset('/') }}frontend/assets/img/program/home-program-1.jpg" alt="Image not found">
                                                </div>
                                            </a>
                                        </div>
                                        <div class="bd-program-content mb-10">
                                            <h3 class="bd-program-title"><a class="hover-clr-1"
                                                                            href="program-details.html">Settling</a>
                                            </h3>
                                        </div>
                                        <div class="bd-program-info-wrapper-2">
                                            <div class="bd-program-info">
                                                <h5 class="bd-program-info-title">4-5 Yrs <br><span>age</span></h5>
                                            </div>
                                            <div class="bd-program-info">
                                                <h5 class="bd-program-info-title">5 Days <br><span>weekly</span></h5>
                                            </div>
                                            <div class="bd-program-info">
                                                <h5 class="bd-program-info-title">3.30 Hrs<br><span>period</span></h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="bd-program-2 clr-2">
                                        <div class="bd-program-thumb-wrapper">
                                            <a href="program-details.html">
                                                <div class="bd-program-thumb-2">
                                                    <img src="{{ asset('/') }}frontend/assets/img/program/home-program-2.jpg" alt="Image not found">
                                                </div>
                                            </a>
                                        </div>
                                        <div class="bd-program-content mb-10">
                                            <h3 class="bd-program-title"><a class="hover-clr-2" href="program-details.html">Play
                                                    Group</a>
                                            </h3>
                                        </div>
                                        <div class="bd-program-info-wrapper-2">
                                            <div class="bd-program-info">
                                                <h5 class="bd-program-info-title">4-5 Yrs <br><span>age</span></h5>
                                            </div>
                                            <div class="bd-program-info">
                                                <h5 class="bd-program-info-title">5 Days <br><span>weekly</span></h5>
                                            </div>
                                            <div class="bd-program-info">
                                                <h5 class="bd-program-info-title">3.30 Hrs<br><span>period</span></h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="bd-program-2 clr-3">
                                        <div class="bd-program-thumb-wrapper">
                                            <a href="program-details.html">
                                                <div class="bd-program-thumb-2">
                                                    <img src="{{ asset('/') }}frontend/assets/img/program/home-program-3.jpg" alt="Image not found">
                                                </div>
                                            </a>
                                        </div>
                                        <div class="bd-program-content mb-10">
                                            <h3 class="bd-program-title"><a href="program-details.html"
                                                                            class="hover-clr-3">Pre-Nursery</a>
                                            </h3>
                                        </div>
                                        <div class="bd-program-info-wrapper-2">
                                            <div class="bd-program-info">
                                                <h5 class="bd-program-info-title">4-5 Yrs <br><span>age</span></h5>
                                            </div>
                                            <div class="bd-program-info">
                                                <h5 class="bd-program-info-title">5 Days <br><span>weekly</span></h5>
                                            </div>
                                            <div class="bd-program-info">
                                                <h5 class="bd-program-info-title">3.30 Hrs<br><span>period</span></h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- program slider dots pagination  -->
                <div class="bd-program-pagination bd-dots-pagination fill-pagination"></div>
            </div>
            <!-- <div class="bd-wave-wrapper bd-wave-wrapper-2">
               <div class="bd-wave bd-wave-2"></div>
               <div class="bd-wave bd-wave-2"></div>
            </div> -->
        </section>
        <!-- program area end here -->

        <!-- faq area start here  -->
        <section class="bd-faq-area pt-120 pb-60">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-xl-6 col-lg-6">
                        <div class="bd-faq-content-2 mb-60 wow fadeInLeft" data-wow-duration="1s" data-wow-delay=".3s">
                            <div class="bd-section-title-wrapper mb-25">
                                <h2 class="bd-section-title mb-0">Know More
                                    <br>About Kindedo
                                </h2>
                            </div>
                            <div class="bd-faq">
                                <div class="accordion" id="accordionExample">
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="headingOne">
                                            <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                                    data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                                What is the best age to start Kindergarten?
                                            </button>
                                        </h2>
                                        <div id="collapseOne" class="accordion-collapse collapse show"
                                             aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                                <p>Some states and countries implement mandatory early childhood education. With
                                                    such rules, many preschool and kindergarten learning centers are built.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="headingTwo">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                                    data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                                Which is the best preschool for your child ?
                                            </button>
                                        </h2>
                                        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                             data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                                <p>Right after you book your party, you’ll receive an email confirming the date,
                                                    time, and details about what’s included in the package you’ve selected result.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="headingThree">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                                    data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                                What is the toution fee on first year?
                                            </button>
                                        </h2>
                                        <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                                             data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                                <p>There will also be some fantastic outdoor entertainment, desserts and drinks,
                                                    plus tours of the School for those who want to continue the celebrations.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6">
                        <div class="bd-faq-thumb-wrapper mb-70">
                            <div class="bd-faq-thumb">
                                <div class="bd-faq-thumb-mask p-relative wow fadeInRight" data-wow-duration="1s"
                                     data-wow-delay=".3s">
                                    <img src="{{ asset('/') }}frontend/assets/img/faq/1.jpg" alt="Image not found">
                                    <div class="panel-2 wow"></div>
                                </div>
                            </div>
                            <div class="bd-faq-shape d-none d-lg-block">
                                <img src="{{ asset('/') }}frontend/assets/img/shape/tripple-line.png" alt="Shape not found">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- faq area end here  -->

        <!-- teacher area start here  -->
        <section class="bd-teacher-area-2 theme-bg">
            <div class="container">
                <div class="bd-teacher-bg-wrapper pt-120 pb-120 p-relative">
                    <div class="bd-teacher-bg d-none d-xl-block" data-background="assets/img/bg/teacher-bg.jpg"></div>
                    <div class="bd-teacher-overlay"></div>
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <div class="bd-section-title-wrapper z-index-1 p-relative is-white text-center mb-55 wow fadeInUp"
                                 data-wow-duration="1s" data-wow-delay=".2s">
                                <h2 class="bd-section-title mb-0">Our Best Teachers</h2>
                                <p>With the help of teachers and the environment as the third teacher, students<br> have
                                    opportunities to confidently take risks.</p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="bd-teacher-wrapper">
                                <div class="row">
                                    <div class="col-xl-3 col-lg-6 col-md-6">
                                        <div class="bd-teacher-2 p-relative z-index-1 mb-40 wow fadeInUp" data-wow-duration="1s"
                                             data-wow-delay=".4s">
                                            <div class="bd-teacher-thumb-wrapper-2 mb-20 p-relative">
                                                <a href="teacher-details.html">
                                                    <div class="bd-teacher-thumb-2">
                                                        <img src="{{ asset('/') }}frontend/assets/img/teacher/7.jpg" alt="Image not found">
                                                    </div>
                                                </a>
                                                <div class="bd-teacher-social-2">
                                                    <ul>
                                                        <li>
                                                            <a target="_blank" href="https://www.youtube.com/"><i
                                                                    class="fa-brands fa-youtube"></i></a>
                                                        </li>
                                                        <li>
                                                            <a target="_blank" href="https://twitter.com/"><i
                                                                    class="fa-brands fa-twitter"></i></a>
                                                        </li>
                                                        <li>
                                                            <a target="_blank" href="https://www.facebook.com/"><i
                                                                    class="fa-brands fa-facebook-f"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="bd-teacher-content-wrapper-2">
                                                <div class="bd-teacher-content-2 text-center">
                                                    <h4 class="bd-teacher-title-2 mb-5"><a href="teacher-details.html">Cristina r.
                                                            Hick</a>
                                                    </h4>
                                                    <span class="bd-teacher-des is-white">Teacher</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-6 col-md-6">
                                        <div class="bd-teacher-2 p-relative z-index-1 mb-40 wow fadeInUp" data-wow-duration="1s"
                                             data-wow-delay=".5s">
                                            <div class="bd-teacher-thumb-wrapper-2 mb-20 p-relative">
                                                <a href="teacher-details.html">
                                                    <div class="bd-teacher-thumb-2">
                                                        <img src="{{ asset('/') }}frontend/assets/img/teacher/8.jpg" alt="Image not found">
                                                    </div>
                                                </a>
                                                <div class="bd-teacher-social-2">
                                                    <ul>
                                                        <li>
                                                            <a target="_blank" href="https://www.youtube.com/"><i
                                                                    class="fa-brands fa-youtube"></i></a>
                                                        </li>
                                                        <li>
                                                            <a target="_blank" href="https://twitter.com/"><i
                                                                    class="fa-brands fa-twitter"></i></a>
                                                        </li>
                                                        <li>
                                                            <a target="_blank" href="https://www.facebook.com/"><i
                                                                    class="fa-brands fa-facebook-f"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="bd-teacher-content-wrapper-2">
                                                <div class="bd-teacher-content-2 text-center">
                                                    <h4 class="bd-teacher-title-2 mb-5"><a href="teacher-details.html">Anna
                                                            D.Brown</a>
                                                    </h4>
                                                    <span class="bd-teacher-des is-white">Teacher</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-6 col-md-6">
                                        <div class="bd-teacher-2 p-relative z-index-1 mb-40 wow fadeInUp" data-wow-duration="1s"
                                             data-wow-delay=".6s">
                                            <div class="bd-teacher-thumb-wrapper-2 mb-20 p-relative">
                                                <a href="teacher-details.html">
                                                    <div class="bd-teacher-thumb-2">
                                                        <img src="{{ asset('/') }}frontend/assets/img/teacher/6.jpg" alt="Image not found">
                                                    </div>
                                                </a>
                                                <div class="bd-teacher-social-2">
                                                    <ul>
                                                        <li>
                                                            <a target="_blank" href="https://www.youtube.com/"><i
                                                                    class="fa-brands fa-youtube"></i></a>
                                                        </li>
                                                        <li>
                                                            <a target="_blank" href="https://twitter.com/"><i
                                                                    class="fa-brands fa-twitter"></i></a>
                                                        </li>
                                                        <li>
                                                            <a target="_blank" href="https://www.facebook.com/"><i
                                                                    class="fa-brands fa-facebook-f"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="bd-teacher-content-wrapper-2">
                                                <div class="bd-teacher-content-2 text-center">
                                                    <h4 class="bd-teacher-title-2 mb-5"><a href="teacher-details.html">Aleena
                                                            Jyrod</a>
                                                    </h4>
                                                    <span class="bd-teacher-des is-white">Teacher</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-6 col-md-6">
                                        <div class="bd-teacher-2 p-relative z-index-1 mb-40 wow fadeInUp" data-wow-duration="1s"
                                             data-wow-delay=".7s">
                                            <div class="bd-teacher-thumb-wrapper-2 mb-20 p-relative">
                                                <a href="teacher-details.html">
                                                    <div class="bd-teacher-thumb-2">
                                                        <img src="{{ asset('/') }}frontend/assets/img/teacher/5.jpg" alt="Image not found">
                                                    </div>
                                                </a>
                                                <div class="bd-teacher-social-2">
                                                    <ul>
                                                        <li>
                                                            <a target="_blank" href="https://www.youtube.com/"><i
                                                                    class="fa-brands fa-youtube"></i></a>
                                                        </li>
                                                        <li>
                                                            <a target="_blank" href="https://twitter.com/"><i
                                                                    class="fa-brands fa-twitter"></i></a>
                                                        </li>
                                                        <li>
                                                            <a target="_blank" href="https://www.facebook.com/"><i
                                                                    class="fa-brands fa-facebook-f"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="bd-teacher-content-wrapper-2">
                                                <div class="bd-teacher-content-2 text-center">
                                                    <h4 class="bd-teacher-title-2 mb-5"><a href="teacher-details.html">Emmy Jonas</a>
                                                    </h4>
                                                    <span class="bd-teacher-des is-white">Teacher</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="bd-teacher-view-btn p-relative z-index-1 text-center mt-10">
                                    <a href="teacher.html">View Our All Teacher</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- teacher area end here  -->
        <!-- testimonial area start here  -->
        <section class="bd-testimonial-area-2 pb-120 pt-120">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="bd-section-title-wrapper z-index-1 p-relative text-center mb-55">
                            <h2 class="bd-section-title mb-0">Parents Says</h2>
                            <p>With the help of teachers and the environment as the third teacher, students<br> have
                                opportunities to confidently take risks.</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-6 col-lg-6">
                        <div class="bd-testimonial-thumb-2 wow fadeInLeft p-relative" data-wow-duration="1s"
                             data-wow-delay=".3s">
                            <img src="{{ asset('/') }}frontend/assets/img/testimonials/big-1.jpg" alt="img not found!">
                            <div class="panel wow"></div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6">
                        <div class="bd-testimonial-2-wrap">
                            <div class="bd-testimonial-2 theme-bg-6 mb-25 wow fadeInUp" data-wow-duration="1s"
                                 data-wow-delay=".3s">
                                <div class="bd-testimonial-rating mb-30">
                                    <a href="#"><i class="fas fa-star"></i></a>
                                    <a href="#"><i class="fas fa-star"></i></a>
                                    <a href="#"><i class="fas fa-star"></i></a>
                                    <a href="#"><i class="fas fa-star"></i></a>
                                    <a href="#"><i class="fas fa-star"></i></a>
                                </div>
                                <div class="bd-testimonial-content-2 mb-35">
                                    <p>Happy Christmas to the whole Kindedo from everyone at Monkton. A big thank you to
                                        Kindedo pupil Will who lent his Kindedo to this card and grow there brain.</p>
                                </div>
                                <div class="bd-testimonial-avatar d-flex align-items-center">
                                    <div class="bd-testimonial-avatar-thumb">
                                        <img src="{{ asset('/') }}frontend/assets/img/testimonials/1.png" alt="testimonial avatar">
                                    </div>
                                    <h6 class="bd-testimonial-avatar-title-2 mb-0">Norma J. Johnston</h6>
                                    <div class="bd-testimonial-quote d-none d-sm-block clr-2">
                                        <i class="flaticon-quote
                                                "></i>
                                    </div>
                                </div>
                            </div>
                            <div class="bd-testimonial-2 clr-1 theme-bg-7 wow fadeInUp" data-wow-duration="1s"
                                 data-wow-delay=".5s">
                                <div class="bd-testimonial-rating mb-30">
                                    <a href="#"><i class="fas fa-star"></i></a>
                                    <a href="#"><i class="fas fa-star"></i></a>
                                    <a href="#"><i class="fas fa-star"></i></a>
                                    <a href="#"><i class="fas fa-star"></i></a>
                                    <a href="#"><i class="fas fa-star"></i></a>
                                </div>
                                <div class="bd-testimonial-content-2 mb-35">
                                    <p>Your child will laugh, play and explore at Summer at MLS. From soccer, water
                                        play, art, music, theater and science, Shabbat celebrations, cooking.</p>

                                </div>
                                <div class="bd-testimonial-avatar d-flex align-items-center">
                                    <div class="bd-testimonial-avatar-thumb">
                                        <img src="{{ asset('/') }}frontend/assets/img/testimonials/2.png" alt="testimonial avatar">
                                    </div>
                                    <h6 class="bd-testimonial-avatar-title-2 mb-0">Robert M. Allen</h6>
                                    <div class="bd-testimonial-quote d-none d-sm-block clr-1">
                                        <i class="flaticon-quote
                                                "></i>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- testimonial area end here  -->

        <!-- joining area start here  -->
        <section class="bd-joining-area pt-100 pb-95">
            <!-- joiniong bg -->
            <div class="bd-joining-bg" data-background="assets/img/bg/joining-area.png"></div>
            <!-- joining bg overlay -->
            <div class="bd-joining-bg-overlay"></div>
            <div class="container">
                <div class="bd-joining">
                    <div class="bd-joining-shape-wrapper d-none d-md-block">
                        <div class="bd-joining-shape-1 p-absolute">
                            <img src="{{ asset('/') }}frontend/assets/img/shape/white-curved-line.png" alt="img not found!">
                        </div>
                        <div class="bd-joining-shape-2 p-absolute">
                            <img src="{{ asset('/') }}frontend/assets/img/shape/white-curved-line.png" alt="img not found!">
                        </div>
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-md-8">
                            <div class="bd-joining-content text-center">
                                <div class="bd-section-title-wrapper is-white mb-45 wow fadeInUp" data-wow-duration="1s"
                                     data-wow-delay=".3s">
                                    <h2 class="bd-section-title mb-0">Join Our New Session</h2>
                                    <p>Kindedo believes that good questions drive good answers. Whether it's a query<br> about
                                        the world around us or a challenge.</p>
                                </div>
                                <div class="bd-joining-btn">
                                    <a href="classes.html" class="bd-btn btn-white">
                              <span class="bd-btn-inner">
                                 <span class="bd-btn-normal">Apply now</span>
                                 <span class="bd-btn-hover">Apply now</span>
                              </span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- bd-joining-bottom-line -->
            <div class="bd-joining-line"></div>
            <div class="bd-joining-line-2"></div>
        </section>
        <!-- joining area end here  -->

        <!-- blog area start here  -->
        <section class="bd-blog-area-2 p-relative fix pt-120 pb-120">
            <div class="container">
                <div class="bd-blog-section-title mb-40">
                    <div class="row align-items-end">
                        <div class="col-lg-6">
                            <div class="bd-section-title-wrapper mb-0 wow fadeInLeft" data-wow-duration="1s"
                                 data-wow-delay=".3s">
                                <h2 class="bd-section-title mb-0">Kindedo News</h2>
                                <p>It is our goal to provide age appropriate opportuniy for every child enrolled in Kindedo Kids
                                    Club
                                    enrichment classes.</p>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="bd-blog-navigation mb-15 wow fadeInRight" data-wow-duration="1s" data-wow-delay=".3s">
                                <button class="bd-blog-prev">
                                    <i></i><i class="fa-regular fa-angle-left"></i>
                                </button>
                                <button class="bd-blog-next">
                                    <i class="fa-regular fa-angle-right"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="bd-blog-active swiper-container wow fadeInUp" data-wow-duration="1s" data-wow-delay=".5s">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="bd-blog">
                                        <a href="news-details.html">
                                            <div class="bd-blog-thumb">
                                                <img src="{{ asset('/') }}frontend/assets/img/blog/2.jpg" alt="blog image">
                                            </div>
                                        </a>
                                        <div class="bd-blog-content bd-blog-content-2">
                                            <div class="test-thumb">
                                                <div class="bd-blog-date-2">
                                                    <span>22 Jan 2022</span>
                                                </div>
                                            </div>
                                            <div class="bd-blog-meta">
                                                <span><i class="fas fa-user"></i> by <a href="news.html">Alex</a></span>
                                                <span><i class="fa-solid fa-comment-dots"></i><a href="news-details.html">0
                                          Comments</a></span>
                                            </div>
                                            <h4 class="bd-blog-title"><a href="news-details.html">Tips to Understand Your Child
                                                    Better - Parents Guide !</a></h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="bd-blog">
                                        <a href="news-details.html">
                                            <div class="bd-blog-thumb">
                                                <img src="{{ asset('/') }}frontend/assets/img/blog/4.jpg" alt="blog image">
                                            </div>
                                        </a>
                                        <div class="bd-blog-content bd-blog-content-2">
                                            <div class="bd-blog-date-2">
                                                <span>22 Nov 2022</span>
                                            </div>
                                            <div class="bd-blog-meta">
                                                <span><i class="fas fa-user"></i> by <a href="news.html">Alex</a></span>
                                                <span><i class="fa-solid fa-comment-dots"></i><a href="news-details.html">04
                                          Comments</a></span>
                                            </div>
                                            <h4 class="bd-blog-title"><a href="news-details.html">Why Toys for pre schoolers are
                                                    Important - ready setup</a></h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="bd-blog">
                                        <a href="news-details.html">
                                            <div class="bd-blog-thumb">
                                                <img src="{{ asset('/') }}frontend/assets/img/blog/3.jpg" alt="blog image">
                                            </div>
                                        </a>
                                        <div class="bd-blog-content bd-blog-content-2">
                                            <div class="bd-blog-date-2">
                                                <span>22 Dec 2022</span>
                                            </div>
                                            <div class="bd-blog-meta">
                                                <span><i class="fas fa-user"></i> by <a href="news.html">Alex</a></span>
                                                <span><i class="fa-solid fa-comment-dots"></i><a href="news-details.html">02
                                          Comments</a></span>
                                            </div>
                                            <h4 class="bd-blog-title"><a href="news-details.html">Which Toys are Best for Pre
                                                    School in Area
                                                    Kids in USA
                                                </a></h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- blog area end here  -->

        <!-- gallery area start here  -->
        <section class="bd-gallery-area p-relative pt-120 pb-60 theme-bg-6 p-relative">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="bd-section-title-wrapper mb-55 text-center wow fadeInUp" data-wow-duration="1s"
                             data-wow-delay=".3s">
                            <h2 class="bd-section-title mb-0">See our gallery</h2>
                            <p>It is our goal to provide age appropriate opportuniy for every child enrolled in Kindedo Kids
                                Club
                                enrichment classes.</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="bd-gallery-active swiper-container wow fadeInUp" data-wow-duration="1s"
                             data-wow-delay=".5s">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="bd-gallery">
                                        <div class="bd-gallery-thumb-wrapper">
                                            <div class="bd-gallery-thumb">
                                                <img src="{{ asset('/') }}frontend/assets/img/gallery/1.png" alt="img not found!">
                                            </div>
                                            <div class="bd-gallery-icon">
                                                <a href="{{ asset('/') }}frontend/assets/img/gallery/1.png" class="popup-image"><i
                                                        class="flaticon-eye"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="bd-gallery">
                                        <div class="bd-gallery-thumb-wrapper">
                                            <div class="bd-gallery-thumb">
                                                <img src="{{ asset('/') }}frontend/assets/img/gallery/2.png" alt="img not found!">
                                            </div>
                                            <div class="bd-gallery-icon">
                                                <a href="{{ asset('/') }}frontend/assets/img/gallery/2.png" class="popup-image"><i
                                                        class="flaticon-eye"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="bd-gallery">
                                        <div class="bd-gallery-thumb-wrapper">
                                            <div class="bd-gallery-thumb">
                                                <img src="{{ asset('/') }}frontend/assets/img/gallery/3.png" alt="img not found!">
                                            </div>
                                            <div class="bd-gallery-icon">
                                                <a href="{{ asset('/') }}frontend/assets/img/gallery/3.png" class="popup-image"><i
                                                        class="flaticon-eye"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="bd-gallery">
                                        <div class="bd-gallery-thumb-wrapper">
                                            <div class="bd-gallery-thumb">
                                                <img src="{{ asset('/') }}frontend/assets/img/gallery/4.png" alt="img not found!">
                                            </div>
                                            <div class="bd-gallery-icon">
                                                <a href="{{ asset('/') }}frontend/assets/img/gallery/4.png" class="popup-image"><i
                                                        class="flaticon-eye"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- program slider dots pagination  -->
                        <div class="bd-gallery-pagination bd-dots-pagination fill-pagination wow fadeInUp"
                             data-wow-duration="1s" data-wow-delay=".4s"></div>
                    </div>
                </div>
            </div>
        </section>
        <!-- gallery area end here  -->
    </main>
    <!-- main area end here  -->
@endsection
