@extends('frontend.master')

@section('title', 'Contact Us')
@section('breadcrumb-title', 'Contact')

@section('body')
    <!-- contact info area start here -->
    <section class="bd-contact-info-area pt-120 pb-95">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-4 col-md-4 col-sm-12">
                    <div class="bd-contact-info-wrap mb-30 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".3s">
                        <div class="bd-contact-info">
                            <div class="bd-contact-info-content">
                                <div class="bd-contact-info-icon cat-1">
                                    <a href="tel:9072003462"><i class="flaticon-phone-call"></i></a>
                                </div>
                                <h6><a href="tel:9072003462">907-200-3462</a></h6>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12">
                    <div class="bd-contact-info-wrap mb-30 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".4s">
                        <div class="bd-contact-info">
                            <div class="bd-contact-info-content">
                                <div class="bd-contact-info-icon cat-2">
                                    <a href="#"><i class="flaticon-location-pin"></i></a>
                                </div>
                                <h6><a href="#">14/A, Kilix Home Tower</a></h6>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12">
                    <div class="bd-contact-info-wrap mb-30 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".5s">
                        <div class="bd-contact-info">
                            <div class="bd-contact-info-content">
                                <div class="bd-contact-info-icon cat-3">
                                    <a href="https://codeskdhaka.com/cdn-cgi/l/email-protection#3e4d4b4e4e514c4a7e5557505a5b5a51105d5153"><i class="flaticon-email"></i></a>
                                </div>
                                <h6><a href="https://codeskdhaka.com/cdn-cgi/l/email-protection#c2b1b7b2b2adb0b682a9abaca6a7a6adeca1adaf"><span class="__cf_email__" data-cfemail="eb989e9b9b84999fab8082858f8e8f84c5888486">[email&#160;protected]</span></a></h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- contact info area end here-->

    <!-- contact area start here  -->
    <section class="bd-contact-area pb-60">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 mb-60">
                    <div class="bd-contact-form wow fadeInLeft" data-wow-duration="1s" data-wow-delay=".3s">
                        <h3 class="bd-contact-form-title mb-25">Contact Us Right Here</h3>
                        <form action="#">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="bd-contact-input mb-30">
                                        <label for="name">Name <sup><i class="fa-solid fa-star-of-life"></i></sup></label>
                                        <input id="name" type="text">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="bd-contact-input mb-30">
                                        <label for="email">Email <sup><i class="fa-solid fa-star-of-life"></i></sup></label>
                                        <input id="email" type="text">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="bd-contact-input mb-30">
                                        <label for="phone">Phone <sup><i class="fa-solid fa-star-of-life"></i></sup></label>
                                        <input id="phone" type="text">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="bd-contact-input mb-30">
                                        <label for="subject">Subject <sup><i
                                                    class="fa-solid fa-star-of-life"></i></sup></label>
                                        <select name="subject" id="subject" class="bd-nice-select">
                                            <option>Select Subject</option>
                                            <option>Junior KG</option>
                                            <option>Senior KG</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="bd-contact-input mb-20">
                                        <label for="textarea">Comments <sup><i
                                                    class="fa-solid fa-star-of-life"></i></sup></label>
                                        <textarea name="textarea" id="textarea"></textarea>
                                    </div>
                                </div>
                                <div class="col-md-12 mb-30">
                                    <div class="bd-contact-agree d-flex align-items-center">
                                        <input class="" type="checkbox" id="check-agree">
                                        <label class="check-label" for="check-agree">Save Data for Next Comment</label>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="bd-contact-agree-btn">
                                        <button type="submit" class="bd-btn">
                                    <span class="bd-btn-inner">
                                       <span class="bd-btn-normal">Send
                                          now</span>
                                       <span class="bd-btn-hover">Send
                                          now</span>
                                    </span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-xl-6 mb-60">
                    <div class="bd-contact-map wow fadeInRight" data-wow-duration="1s" data-wow-delay=".3s">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d14596.899807208923!2d90.3654215!3d23.8461445!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sbd!4v1673765392297!5m2!1sen!2sbd"
                            style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- contact area end here  -->
@endsection
