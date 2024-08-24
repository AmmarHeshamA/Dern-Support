
@extends('frontend.layouts.app')

@section('title' , 'About Page')

@section('content')
 <!-- header -->
    @include('frontend.layouts.nav.nav-pages')

    <!-- about us -->
    <section class="with-bg solid-section">
        <div class="fix-image-wrap" data-image-src="{{ asset('./assets/images/service/harddrive.jpg') }}" data-parallax="scroll"></div>
        <div class="theme-back"></div>
        <div class="container page-info">
            <div class="section-alt-head container-md">
                <h1 class="section-title text-upper text-lg" data-inview-showup="showup-translate-right">About Us</h1>

            </div>
        </div>
        <div class="section-footer">
            <div class="container" data-inview-showup="showup-translate-down">
                <ul class="page-path">
                    <li><a href="/home">Home</a></li>
                    <li class="path-separator"><i class="fas fa-chevron-right" aria-hidden="true"></i></li>
                    <li>Pages</li>
                    <li class="path-separator"><i class="fas fa-chevron-right" aria-hidden="true"></i></li>
                    <li>About Us</li>
                </ul>
            </div>
        </div>
    </section>

    <!-- secton what we do -->
    <section class="muted-bg solid-section" data-inview-showup="showup-translate-up">
        <div class="container">
            <div class="row cols-xl rows-lg">
                <div class="md-col-6 text-center md-text-left">
                    <h2 class="text-upper text-semibold">What we do</h2>
                    <p>The most comprehensive repairs available at Dern Support. Any device, mobile, tablet or laptop can be
                        repaired or upgraded by us, learn more about us and see why we are the best choice for device
                        repairs and upgrades.</p>
                    <blockquote class="hard-line-right text-right">
                        <p>10+ Years Of Working Experience In Quality Repair Services.</p>
                    </blockquote>
                    <p>We have a fully trained, experienced service department ready to handle all of your service
                        needs. We have been in the repair and service business since 2006.</p>
                </div>
                <div class="md-col-6 md-fix-container"><img class="image" src="{{ asset('./assets/images/service/measurements.jpg') }}"
                        alt=""></div>
            </div>
        </div>
    </section>

    <!-- section OUR TEAM -->
    <section class="content-section" data-inview-showup="showup-translate-up">
        <div class="container">
            <div class="row cols-md rows-xl">
                <div class="md-col-3 text-center md-text-left">
                    <h3 class="text-upper text-semibold">Our team</h3>
                    <p>Meet with our qualified and expert team. We are specialized in our individual field. We have
                        enough skill and tested. That’s why you’re getting the quality repair services.</p>
                    <div class="shift-lg"><a class="btn text-upper" href="/contact">Contact us</a></div>
                </div>
                <div class="md-col-3 sm-col-4">
                    <div class="member sm-fix-container">
                        <div class="text-center"><span class="image-wrap"><img class="image"
                                    src="{{ asset('./assets/images/outsource/member-1.jpg') }}" alt=""></span></div>
                        <div class="member-info muted-bg text-center">
                            <div class="member-title">Alexander Smith</div>
                            <div class="member-subtitle">CEO &amp; Founder</div>
                            <div class="cols-list cols-sm socials inline-block"><a href="#" class="list-item"><i
                                        class="fab fa-facebook-f" aria-hidden="true"></i></a> <a href="#"
                                    class="list-item"><i class="fab fa-twitter" aria-hidden="true"></i></a> <a href="#"
                                    class="list-item"><i class="fab fa-google-plus-g" aria-hidden="true"></i></a></div>
                        </div>
                    </div>
                </div>
                <div class="md-col-3 sm-col-4">
                    <div class="member sm-fix-container">
                        <div class="text-center"><span class="image-wrap"><img class="image"
                                    src="{{ asset('./assets/images/outsource/member-2.jpg') }}" alt=""></span></div>
                        <div class="member-info muted-bg text-center">
                            <div class="member-title">Bryan Lewis</div>
                            <div class="member-subtitle">Cheif Engineer</div>
                            <div class="cols-list cols-sm socials inline-block"><a href="#" class="list-item"><i
                                        class="fab fa-facebook-f" aria-hidden="true"></i></a> <a href="#"
                                    class="list-item"><i class="fab fa-twitter" aria-hidden="true"></i></a> <a href="#"
                                    class="list-item"><i class="fab fa-google-plus-g" aria-hidden="true"></i></a></div>
                        </div>
                    </div>
                </div>
                <div class="md-col-3 sm-col-4">
                    <div class="member sm-fix-container">
                        <div class="text-center"><span class="image-wrap"><img class="image"
                                    src="{{ asset('./assets/images/outsource/member-3.jpg') }}" alt=""></span></div>
                        <div class="member-info muted-bg text-center">
                            <div class="member-title">David Hanson</div>
                            <div class="member-subtitle">Technical Manager</div>
                            <div class="cols-list cols-sm socials inline-block"><a href="#" class="list-item"><i
                                        class="fab fa-facebook-f" aria-hidden="true"></i></a> <a href="#"
                                    class="list-item"><i class="fab fa-twitter" aria-hidden="true"></i></a> <a href="#"
                                    class="list-item"><i class="fab fa-google-plus-g" aria-hidden="true"></i></a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- contact us -->
    <section class="main-bg" data-inview-showup="showup-translate-up">
        <div class="container">
            <div class="contact-table only-xs-text-center">
                <div class="contact-icon xs-hidden"><i class="fas fa-bicycle" aria-hidden="true"></i></div>
                <div class="contact-content">
                    <div class="contact-title">Request free consultation</div>
                    <div class="text-justify only-xs-text-justify-center">Get answers and advice from people you want it
                        from.</div>
                </div>
                <div class="contact-btn"><a href="/contact" class="btn btns-white text-upper">Contact Us</a>
                </div>
            </div>
        </div>
    </section>


@endsection


