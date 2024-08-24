@extends('frontend.layouts.app')

@section('title', 'Home Page')

@section('content')
    <!-- header -->
    @include('frontend.layouts.nav.nav-home')

    <!-- slide show -->
    <section>
        <div class="flexslider screen-height">
            <div class="slides">
                <div class="slide">
                    <img src="{{ asset('./assets/images/service/motherboard-1.jpg') }}" alt=""
                        data-cover-image="true" />
                    <div class="theme-back"></div>
                    <div class="pos-center text-center col-12 text-white">
                        <div class="banner-title res-text-xxl">Fast & Quick Fix</div>
                        <div class="banner-subtitle res-text-md">
                            Just send valuable laptop, PC, MAC, Mobile,<br />Gaming Device
                            or Smartphone and we'll take care of it.
                        </div>
                    </div>
                </div>
                <div class="slide">
                    <img src="./assets/images/service/motherboard-3.jpg" alt="" data-cover-image="true" />
                    <div class="theme-back"></div>
                    <div class="pos-center text-center col-12 text-white">
                        <div class="banner-title res-text-xxl">Any Kind of Upgrades</div>
                    </div>
                </div>
                <div class="slide">
                    <img src="./assets/images/service/data-recovery.jpg" alt="" data-cover-image="true" />
                    <div class="theme-back"></div>
                    <div class="pos-center text-center col-12 text-white">
                        <div class="banner-title res-text-xxl">Data Recovery</div>
                        <div class="banner-subtitle res-text-md">
                            You Lose - We'll Find
                        </div>
                    </div>
                </div>
            </div>
            <div class="flex-custom-navigation">
                <a href="#" class="flex-prev"><i class="fas fa-angle-left" aria-hidden="true"></i> </a><a
                    href="#" class="flex-next"><i class="fas fa-angle-right" aria-hidden="true"></i></a>
            </div>
        </div>
    </section>

    <!-- two section after slide show -->
    <div class="clearfix muted-bg">
        <!-- section fixed -->
        <section class="md-stuck-top content-section">
            <div class="container hyped-block">
                <div class="row cols-md rows-md">
                    <div class="md-col-8">
                        <div class="row cols-md rows-md">
                            <div class="sm-col-6">
                                <div class="price-block simple" data-inview-showup="showup-translate-up">
                                    <div class="price-back"></div>
                                    <div class="price-image">
                                        <img class="image" src="./assets/images/icons/notebook-dark.png" alt="" />
                                    </div>
                                    <div class="price-title">Laptop Repair</div>
                                    <div class="price-subtext">starting at...</div>
                                    <div class="price">$20.00</div>
                                    <a class="btn-md btns-bordered btn text-upper" href="#">read more</a>
                                </div>
                            </div>
                            <div class="sm-col-6">
                                <div class="price-block simple" data-inview-showup="showup-translate-up">
                                    <div class="price-back"></div>
                                    <div class="price-image">
                                        <img class="image" src="./assets/images/icons/computer-dark.png" alt="" />
                                    </div>
                                    <div class="price-title">Computer Repair</div>
                                    <div class="price-subtext">starting at...</div>
                                    <div class="price">$20.00</div>
                                    <a class="btn-md btns-bordered btn text-upper" href="#">read more</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="md-col-4">
                        <div class="row cols-md rows-md">
                            <div class="sm-col-12">
                                <div class="price-block simple" data-inview-showup="showup-translate-up">
                                    <div class="price-back"></div>
                                    <div class="price-image">
                                        <img class="image" src="./assets/images/icons/printer-dark.png" alt="" />
                                    </div>
                                    <div class="price-title">Printer Repair</div>
                                    <div class="price-subtext">starting at...</div>
                                    <div class="price">$110.00</div>
                                    <a class="btn-md btns-bordered btn text-upper" href="#">read more</a>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- section why choose -->
        <section class="content-section">
            <div class="container">
                <div class="section-head text-center container-md">
                    <h2 class="section-title text-upper text-lg" data-inview-showup="showup-translate-right">
                        Why choose us
                    </h2>
                    <p data-inview-showup="showup-translate-left">
                        Some Of Our Features
                    </p>
                </div>
                <div class="row cols-md rows-lg text-center">
                    <div class="md-col-6">
                        <div class="row cols-md rows-lg">
                            <div class="sm-col-6">
                                <div class="feature feature-side text-left" data-inview-showup="showup-translate-up">
                                    <div class="feature-icon">
                                        <i class="fas fa-rocket" aria-hidden="true"></i>
                                    </div>
                                    <div class="feature-title text-upper">We are fast</div>
                                    <div class="feature-text">
                                        Qualified Workers Lorem Ipsum is simply dummy text of the
                                        printing
                                    </div>
                                </div>
                            </div>
                            <div class="sm-col-6">
                                <div class="feature feature-side text-left" data-inview-showup="showup-translate-up">
                                    <div class="feature-icon">
                                        <i class="fas fa-dollar-sign" aria-hidden="true"></i>
                                    </div>
                                    <div class="feature-title text-upper">No fix, no fee</div>
                                    <div class="feature-text">
                                        Repair on Demand Lorem Ipsum is simply dummy text of the
                                        printing
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="md-col-6">
                        <div class="row cols-md rows-lg">
                            <div class="sm-col-6">
                                <div class="feature feature-side text-left" data-inview-showup="showup-translate-up">
                                    <div class="feature-icon">
                                        <i class="far fa-calendar-check" aria-hidden="true"></i>
                                    </div>
                                    <div class="feature-title text-upper">30 days warranty</div>
                                    <div class="feature-text">
                                        Guaranteed Service Lorem Ipsum is simply dummy text of the
                                        printing
                                    </div>
                                </div>
                            </div>
                            <div class="sm-col-6">
                                <div class="feature feature-side text-left" data-inview-showup="showup-translate-up">
                                    <div class="feature-icon">
                                        <i class="fas fa-users" aria-hidden="true"></i>
                                    </div>
                                    <div class="feature-title text-upper">Expert staff</div>
                                    <div class="feature-text">
                                        Available Anytime Lorem Ipsum is simply dummy text of the
                                        printing
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </div>


    <!-- section SERVICE PROCESS -->
    <section class="with-bg solid-section">
        <div class="fix-image-wrap" data-image-src="{{ asset('./assets/images/service/item-10.jpg') }}"
            data-parallax="scroll">
        </div>
        <div class="theme-back inner-shadow"></div>
        <div class="container text-center">
            <div class="section-head text-center container-md">
                <h2 class="section-title text-upper text-lg" data-inview-showup="showup-translate-right">
                    Service process
                </h2>
                <p data-inview-showup="showup-translate-left">
                    easy and effective way to get your device repaired
                </p>
            </div>
            <div class="service-steps text-upper" data-inview-showup="showup-scale">
                <div class="step">
                    <span class="step-number">1</span>damage device
                </div>
                <div class="step">
                    <span class="step-number">2</span>send it to us
                </div>
                <div class="step">
                    <span class="step-number active">3</span>fast fix
                </div>
                <div class="step"><span class="step-number">4</span>quick return</div>
            </div>
        </div>
    </section>

    <!-- section SERVICES -->
    <section class="muted-bg solid-section">
        <div class="container">
            <div class="section-head text-center container-md">
                <h2 class="section-title text-upper text-lg" data-inview-showup="showup-translate-right">
                    Services
                </h2>
                <p data-inview-showup="showup-translate-left">
                    We offer a full range of repair services provided by an experienced
                    and specialized team
                </p>
            </div>

            <div class="row cols-md rows-md">

                @if ($services->isNotEmpty())
                    @foreach ($services->take(3) as $service)
                        <div class="md-col-4 sm-col-6">
                            <div class="item" data-inview-showup="showup-translate-up">
                                <a href="/services" class="block-link text-center"><span class="image-wrap"><img
                                            class="image" src="{{ asset('Uploads/service/' . $service->image_service) }}"
                                            alt="" /></span><span class="hover"><span class="hover-show"><span
                                                class="back"></span>
                                            <span class="content"><i class="fas fa-search"
                                                    aria-hidden="true"></i></span></span></span></a>
                                <div class="item-content">
                                    <div class="item-title text-upper">
                                        <a href="/services">{{ $service->title_service }}</a>
                                    </div>
                                    <div class="item-text">
                                        {{ $service->content_service }}
                                    </div>
                                    <a href="/services" class="btn btn-md btns-bordered pull-right text-upper">read
                                        more</a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @else
                    <h1 class="text-center mx-auto  "data-inview-showup="showup-translate-up">No Services now</h1>

                @endif


            </div>
            <div class="text-center shift-xl">
                <a class="btn text-upper" href="/services" data-inview-showup="showup-translate-up"><i
                        class="fas fa-th-large" aria-hidden="true"></i>&nbsp;&nbsp;view
                    all services</a>
            </div>
        </div>
    </section>

    <!-- section Products -->
    <section class="muted-bg solid-section">
        <div class="container">
            <div class="section-head text-center container-md">
                <h2 class="section-title text-upper text-lg" data-inview-showup="showup-translate-right">
                    Our products
                </h2>
                <p data-inview-showup="showup-translate-left">
                    We offer a full range of repair services provided by an experienced
                    and specialized team
                </p>
            </div>

            <div class="row">
                @if ($categorys->isNotEmpty())
                    @foreach ($categorys->take(3) as $category)
                        <div class="md-col-4">
                            <div class="item shop-item shop-item-simple" data-inview-showup="showup-scale">
                                <div class="item-back"></div>
                                <a href="shop-item.html" class="item-image responsive-1by1">
                                    <img src="{{ asset('Uploads/categories/' . $category->category_image) }}"
                                        alt="">
                                </a>
                                <div class="item-content shift-md">
                                    <div class="item-textes">
                                        <div class="item-title text-upper">
                                            <a href="shop-item.html"
                                                class="content-link">{{ $category->category_name }}</a>
                                        </div>
                                        <div class="item-categories">
                                            <a href="/shop"
                                                class="content-link">{{ $category->category_description }}</a>
                                        </div>
                                    </div>
                                    <div class="item-prices">
                                        <div class="item-price">${{ $category->category_price }}</div>
                                    </div>
                                </div>
                                <div class="item-links">
                                    <a class="btn text-upper btn-md " href="/shop">
                                        Add to cart
                                    </a>
                                </div>
                            </div>
                        </div> <!-- md-col-6 -->
                    @endforeach
                @else
                    <h1 class="text-center mx-auto" data-inview-showup="showup-translate-up">No Products now</h1>
                @endif
            </div> <!-- row -->





            <div class="text-center shift-xl">
                <a class="btn text-upper" href="/shop" data-inview-showup="showup-translate-up"><i
                        class="fas fa-th-large" aria-hidden="true"></i>&nbsp;&nbsp;view
                    all Products</a>
            </div>
        </div>
    </section>

    <!-- section counter -->
    <section class="main-bg decorated-bg text-center tight solid-section">
        <div class="container">
            <div class="row cols-md rows-xl" data-inview-showup="showup-translate-up">
                <div class="sm-col-3">
                    <div class="counter">
                        <div class="counter-title text-upper">Happy client</div>
                        <div class="counter-value" data-waypoint-counter="3720">3720</div>
                    </div>
                </div>
                <div class="sm-col-3">
                    <div class="counter">
                        <div class="counter-title text-upper">Finished projects</div>
                        <div class="counter-value" data-waypoint-counter="4170">4170</div>
                    </div>
                </div>
                <div class="sm-col-3">
                    <div class="counter">
                        <div class="counter-title text-upper">Computer serviced</div>
                        <div class="counter-value" data-waypoint-counter="2730">2730</div>
                    </div>
                </div>
                <div class="sm-col-3">
                    <div class="counter">
                        <div class="counter-title text-upper">Mobile serviced</div>
                        <div class="counter-value" data-waypoint-counter="1510">1510</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- section WHAT PEOPLE SAY -->
    <section class="content-section">
        <div class="container">
            <div class="section-head text-center container-md">
                <h2 class="section-title text-upper text-lg" data-inview-showup="showup-translate-right">
                    What people say
                </h2>
                <p data-inview-showup="showup-translate-left">
                    Real customers reviews
                </p>
            </div>
            @if ($comments->isNotEmpty())
                <div class="owl-carousel" data-inview-showup="showup-translate-up" data-owl-dots="true">
                    @foreach ($comments as $comment)
                        <div class="item">
                            <div class="simple-testimonial text-center">
                                <div class="tt-title">{{ $comment->comment_title }}</div>
                                <div class="tt-rating">
                                    @for ($i = 0; $i < 5; $i++)
                                        <i class="tt-star fa fa-star" aria-hidden="true"></i>
                                    @endfor
                                </div>
                                <div class="tt-content">
                                    <div class="tt-quote">&#8220;</div>
                                    {{ $comment->comment_content }}
                                </div>
                                <div class="tt-icon">
                                    <img src="{{ asset('Uploads/comments/' . $comment->comment_image) }}"
                                        alt="{{ $comment->comment_title }}" />
                                </div>
                                <div class="pexx-tt-user-title">{{ $comment->comment_users }}</div>
                                <div class="pexx-tt-user-subtitle">{{ $comment->comment_subtitle }}</div>
                            </div>
                        </div>
                    @endforeach

                </div>
            @else
                <h1 class="text-center mx-auto"data-inview-showup="showup-translate-up">No reviews now</h1>
            @endif
        </div>
    </section>


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
