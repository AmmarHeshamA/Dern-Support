@extends('frontend.layouts.app')

@section('title', 'Service Page')


@section('content')

@include('frontend.layouts.nav.nav-pages')

    <!-- service -->
    <section class="with-bg solid-section">
        <div class="fix-image-wrap" data-image-src="{{ asset('./assets/images/service/motherboard-4.jpg') }}"
            data-parallax="scroll">
        </div>
        <div class="theme-back"></div>
        <div class="container page-info">
            <div class="section-alt-head container-md">
                <h1 class="section-title text-upper text-lg" data-inview-showup="showup-translate-right">Services</h1>
            </div>
        </div>
        <div class="section-footer">
            <div class="container" data-inview-showup="showup-translate-down">
                <ul class="page-path">
                    <li><a href="/home">Home</a></li>
                    <li class="path-separator"><i class="fas fa-chevron-right" aria-hidden="true"></i></li>
                    <li><a href="/services">Services</a></li>
                    <li class="path-separator"><i class="fas fa-chevron-right" aria-hidden="true"></i></li>
                    <li>Service</li>
                </ul>
            </div>
        </div>
    </section>

    <!-- content and sidebar -->
    <div class="clearfix page-sidebar-right container">
        <!-- content -->
        <div class="page-content">
            <section class="content-section">
                <div class="service">
                    <h3 class="text-upper offs-md" data-inview-showup="showup-translate-up">Replacement of the north
                        bridge, south bridge, video chip (replacement of BGA elements)</h3><img
                        data-inview-showup="showup-translate-up" class="col-12 offs-md"
                        src="{{ asset('Uploads/service/' . $service->image_service) }}" alt="">
                    <div class="content-text clearfix" data-inview-showup="showup-translate-up">
                        <p>In modern laptops, one of the most common problems is the destruction of the south or north
                            bridge. Almost every third device will eventually shut down. And, as a rule, this means that
                            this part of it is burnt. In most cases, your mistake is not in this issue. Recording of
                            this chip can not only in the old device, but also in a completely new model that has just
                            been bought.<br>Of course, if the laptop is still under warranty, then the official service
                            center should be repaired or replaced. But if your device has been purchased for a long
                            time, then it is worthwhile to seek the help of specialists. Do not try to solve the problem
                            by yourself.<br>The main causes of the destruction of the northern and southern bridges.</p>
                        <h5>The reasons of chipset malfunctioning:</h5>
                        <ul class="list">
                            <li><span class="list-mark"><i class="fas fa-chevron-right"
                                        aria-hidden="true"></i></span>overheating - the motherboard is running at a high
                                frequency and often overheats (if you do not conduct continuous prophylaxis, the
                                elements can burn out);</li>
                            <li><span class="list-mark"><i class="fas fa-chevron-right"
                                        aria-hidden="true"></i></span>flooding - because of a liquid contacts could
                                oxidize and decay (the more moisture is trapped, the more expensive the repair will
                                cost);</li>
                            <li><span class="list-mark"><i class="fas fa-chevron-right" aria-hidden="true"></i></span>defect
                                - factory defect is also possible.</li>
                        </ul>
                        <h4>How much will it cost?</h4>
                        <table class="table table-lines table-striped">
                            <thead>
                                <tr class="main-bg">
                                    <th class="text-upper">Repairs services</th>
                                    <th class="text-upper">Price</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Reballing of the southern, northern bridges, video chip without replacement</td>
                                    <td>$85</td>
                                </tr>
                                <tr>
                                    <td>Replacing the south bridge of the laptop with the cost of the chip</td>
                                    <td>$155</td>
                                </tr>
                                <tr>
                                    <td>Replacement of the north bridge without video inside with the chip included</td>
                                    <td>$185</td>
                                </tr>
                                <tr>
                                    <td>Replacement of the north bridge with integrated video inside with the chip</td>
                                    <td>$195</td>
                                </tr>
                                <tr>
                                    <td>Changing the chip of the video card with the chip with the chip included</td>
                                    <td>$175</td>
                                </tr>
                            </tbody>
                        </table><a class="btn text-upper pull-right" href="/services"><i class="fas fa-download"
                                aria-hidden="true"></i>&nbsp;&nbsp;&nbsp;download price list</a>
                    </div>
                    <div class="top-separator out-lg" data-inview-showup="showup-translate-up"></div>
                    <div class="table offs-lg" data-inview-showup="showup-translate-up">
                        <div class="col">
                            <div class="row cols-md pull-right share">
                                <div class="col">Share:</div>
                                <div class="col">
                                    <div class="cols-list cols-sm"><a href="#" class="list-item"><i
                                                class="fab fa-facebook-f" aria-hidden="true"></i></a> <a href="#"
                                            class="list-item"><i class="fab fa-twitter" aria-hidden="true"></i></a> <a
                                            href="#" class="list-item"><i class="fab fa-pinterest"
                                                aria-hidden="true"></i></a> <a href="#" class="list-item"><i
                                                class="fab fa-google-plus-g" aria-hidden="true"></i></a> <a href="#"
                                            class="list-item"><i class="fab fa-dribbble" aria-hidden="true"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>

        <!-- sidebar -->
        <aside class="page-sidebar content-section">
            <section class="side-content-section" data-inview-showup="showup-translate-up">
                <h5 class="shift-sm offs-md">Our Services</h5>
                <ul class="spaced-list text-medium solid-color">
                    <li><a class="muted-solid-link block-md" href="#">Data becup & recovery</a></li>
                    <li><a class="muted-solid-link block-md" href="#">Repair smartphone</a></li>
                    <li><a class="muted-solid-link block-md" href="#">Laptop & Mac upgrade</a></li>
                    <li><a class="muted-solid-link block-md" href="#">Tablet repair</a></li>
                    <li><a class="muted-solid-link block-md" href="#">Network solution</a></li>
                </ul>
            </section>
            <div class="line-sides main-bg out-lg" data-inview-showup="showup-translate-up"></div>
            <section class="side-content-section" data-inview-showup="showup-translate-up">
                <h5 class="shift-sm offs-md">Recent Posts</h5>
                <ul class="list text-medium solid-color">
                    <li><a class="solid-link" href="#">6 Most Common Reasons for iPhone Repair <span
                                class="sub-block">April 17, 2017</span></a></li>
                    <li><a class="solid-link" href="#">Best Methods to Fix Broken Screen <span
                                class="sub-block">April
                                17, 2017</span></a></li>
                    <li><a class="solid-link" href="#">Replacing laptop and TV screens <span
                                class="sub-block">April 17,
                                2017</span></a></li>
                    <li><a class="solid-link" href="#">Game discs and game console ports <span
                                class="sub-block">April
                                17, 2017</span></a></li>
                    <li><a class="solid-link" href="#">Magnets and electric devices <span class="sub-block">April
                                17,
                                2017</span></a></li>
                </ul>
            </section>
        </aside>
    </div>

    <!-- section contact us -->
    <section class="main-bg" data-inview-showup="showup-translate-up">
        <div class="container">
            <div class="contact-table only-xs-text-center">
                <div class="contact-icon xs-hidden">
                    <i class="fas fa-bicycle" aria-hidden="true"></i>
                </div>
                <div class="contact-content">
                    <div class="contact-title">Request free consultation</div>
                    <div class="text-justify only-xs-text-justify-center">
                        Get answers and advice from people you want it from.
                    </div>
                </div>
                <div class="contact-btn">
                    <a href="/contact" class="btn btns-white text-upper">Contact Us</a>
                </div>
            </div>
        </div>
    </section>

@endsection
