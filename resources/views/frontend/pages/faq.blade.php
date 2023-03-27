@extends('frontend.master')

@section('title', 'Contact Us')
@section('breadcrumb-title', 'Contact')

@section('body')
    <section class="bd-faq-area pt-120 pb-95">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="bd-section-title-wrapper text-center mb-55 wow fadeInUp" data-wow-duration="1s"
                         data-wow-delay=".3s">
                        <h2 class="bd-section-title mb-0">Freequently Asked Questions</h2>
                        <p>View classes by age, program, or subject. Check out upcoming camps and<br> special events too!
                        </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-6 col-lg-6">
                    <div class="bd-faq-content bd-faq-content-4 mb-25 wow fadeInLeft" data-wow-duration="1s"
                         data-wow-delay=".3s">
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
                                            Is there any play ground for students?
                                        </button>
                                    </h2>
                                    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                                         data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <p>From 1873 to 1886, the number of kindergarten children in this country has been
                                                steadily increasing from a handful of one thousand to twenty thousand. </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingFour">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                                data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseThree">
                                            What is the toution fee on first year?
                                        </button>
                                    </h2>
                                    <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingThree"
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
                    <div class="bd-faq-content bd-faq-content-4 mb-25 wow fadeInRight" data-wow-duration="1s"
                         data-wow-delay=".3s">
                        <div class="bd-faq">
                            <div class="accordion" id="accordionExample2">
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="faqHeadingTwoo">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                                data-bs-target="#faqCollapseOne" aria-expanded="false"
                                                aria-controls="faqCollapseOne">
                                            What do you get when you work at Kindedo?
                                        </button>
                                    </h2>
                                    <div id="faqCollapseOne" class="accordion-collapse collapse"
                                         aria-labelledby="faqHeadingTwoo" data-bs-parent="#accordionExample2">
                                        <div class="accordion-body">
                                            <p>When you join us, whether as a teacher, counselor, or custodian, you’re joining a
                                                community of professionals who are passionate about the total success of our
                                                scholars..
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="faqHeadingTwo">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                                data-bs-target="#faqCollapseTwo" aria-expanded="false"
                                                aria-controls="faqCollapseTwo">
                                            Do you provide any scholarship for kids ?
                                        </button>
                                    </h2>
                                    <div id="faqCollapseTwo" class="accordion-collapse collapse"
                                         aria-labelledby="faqHeadingTwo" data-bs-parent="#accordionExample2">
                                        <div class="accordion-body">
                                            <p>As parents, we are often excited about our kid’s milestones and may find
                                                ourselves always in the rut to help our child achieve them as soon as possible
                                                and the same may sometimes apply in the case of schooling too etc.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="faqHeadingThree">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                                data-bs-target="#faqCollapseThree" aria-expanded="false"
                                                aria-controls="faqCollapseThree">
                                            Do you provide lunch, breakfast at Kindedo?
                                        </button>
                                    </h2>
                                    <div id="faqCollapseThree" class="accordion-collapse collapse"
                                         aria-labelledby="faqHeadingThree" data-bs-parent="#accordionExample2">
                                        <div class="accordion-body">
                                            <p>What may be suitable for one may not for the other child. This means that age
                                                criterion is an important parameter in determining at what age do kids start
                                                kinder garten.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="faqHeadingFour">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                                data-bs-target="#faqCollapseFour" aria-expanded="false"
                                                aria-controls="faqCollapseFour">
                                            Is there any available course for parents?
                                        </button>
                                    </h2>
                                    <div id="faqCollapseFour" class="accordion-collapse collapse"
                                         aria-labelledby="faqHeadingFour" data-bs-parent="#accordionExample2">
                                        <div class="accordion-body">
                                            <p>So, if you are interested in knowing kindergarten age in Texas, New York, Alaska,
                                                or other states, well, have a look at the following table, which will help you in
                                                providing a complete state-wise age guide.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- faq area end here  -->

    <!-- faq area 2 start here  -->
    <section class="bd-faq-area-2 theme-bg-6 pt-120 pb-70">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="bd-section-title-wrapper text-center mb-35 wow fadeInUp" data-wow-duration="1s"
                         data-wow-delay=".3s">
                        <h2 class="bd-section-title mb-0">General Questions</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <div class="bd-faq-2 mb-50 wow fadeInLeft" data-wow-duration="1s" data-wow-delay=".3s">
                        <ul>
                            <li>
                                <div class="bd-faq-number"><span>01</span></div>
                                <div class="bd-faq-content-3">
                                    <h4 class="bd-faq-title">What is the best age to start Kindergarten?</h4>
                                    <p>Some states and countries implement mandatory early childhood education. With
                                        such rules, many preschool and kindergarten learning centers are built.</p>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="bd-faq-2 mb-50 wow fadeInLeft" data-wow-duration="1s" data-wow-delay=".3s">
                        <ul>
                            <li>
                                <div class="bd-faq-number"><span>02</span></div>
                                <div class="bd-faq-content-3">
                                    <h4 class="bd-faq-title">Which is the best preschool for your child ?</h4>
                                    <p>Right after you book your party, you’ll receive an email confirming the date,
                                        time, and details about what’s included in the package you’ve selected result observers
                                        of Montessori children note that they are confident.</p>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="bd-faq-2 mb-50 wow fadeInLeft" data-wow-duration="1s" data-wow-delay=".3s">
                        <ul>
                            <li>
                                <div class="bd-faq-number"><span>03</span></div>
                                <div class="bd-faq-content-3">
                                    <h4 class="bd-faq-title"> Is there any play ground for students?</h4>
                                    <p>From 1873 to 1886, the number of kindergarten children in this country has been
                                        steadily increasing from a handful of one thousand to twenty thousand.</p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="bd-faq-2 mb-50 wow fadeInRight" data-wow-duration="1s" data-wow-delay=".3s">
                        <ul>
                            <li>
                                <div class="bd-faq-number"><span>04</span></div>
                                <div class="bd-faq-content-3">
                                    <h4 class="bd-faq-title"> Do you provide any scholarship for kids ?</h4>
                                    <p>As parents, we are often excited about our kid’s milestones and may find
                                        ourselves always in the rut to help our child achieve them.</p>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="bd-faq-2 mb-50 wow fadeInRight" data-wow-duration="1s" data-wow-delay=".3s">
                        <ul>
                            <li>
                                <div class="bd-faq-number"><span>05</span></div>
                                <div class="bd-faq-content-3">
                                    <h4 class="bd-faq-title">Do you provide lunch, breakfast at Kindedo?</h4>
                                    <p>What may be suitable for one may not for the other child. This means that age
                                        criterion is an important parameter in determining at what age do kids start
                                        kinder garten.</p>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="bd-faq-2 mb-50 wow fadeInRight" data-wow-duration="1s" data-wow-delay=".3s">
                        <ul>
                            <li>
                                <div class="bd-faq-number"><span>06</span></div>
                                <div class="bd-faq-content-3">
                                    <h4 class="bd-faq-title">Is there any available course for parents?</h4>
                                    <p>So, if you are interested in knowing kindergarten age in Texas, New York, Alaska,
                                        or other states, well, have a look at the following table, which will help you in
                                        providing a complete state-wise age guide.</p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- faq area 2 end here  -->

    <!-- promotion area start here  -->
    <section class="bd-promotion-area pt-120 pb-60 fix">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-6 col-lg-6">
                    <div class="bd-promotion bd-promotion-2 mb-60 wow fadeInLeft" data-wow-duration="1s"
                         data-wow-delay=".3s">
                        <div class="bd-section-title-wrapper mb-35">
                            <h2 class="bd-section-title mb-10">Health and Safety</h2>
                            <span class="mb-10 d-inline-block">
                           Some states and countries implement mandatory early childhood education
                           such rules, many preschool.
                        </span>
                            <p> Being brave isn’t always a grand gesture sometimes it just means having a go attempting that
                                difficult question, offering an answer in a lesson when you’re simply really trying new.
                            </p>
                        </div>
                        <div class="bd-promotion-list-2">
                            <ul>
                                <li>
                                    <div class="bd-promotion-icon">
                                        <i class="flaticon-clean theme-bg-2"></i>
                                    </div>
                                    <span>Nightly cleaning</span>
                                </li>
                                <li>
                                    <div class="bd-promotion-icon">
                                        <i class="flaticon-hand-wash theme-bg"></i>
                                    </div>
                                    <span>Hand Washing</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6">
                    <div class="bd-promotion-thumb-wrapper mb-60 wow fadeInRight" data-wow-duration="1s"
                         data-wow-delay=".3s">
                        <div class="bd-promotion-thumb">
                            <div class="bd-promotion-thumb-mask p-relative">
                                <img src="assets/img/promotion/3.jpg" alt="Image not found">
                                <div class="panel-2 wow"></div>
                            </div>
                        </div>
                        <div class="bd-promotion-shape d-none d-lg-block">
                            <img src="assets/img/shape/tripple-line.png" alt="Shape not found">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
