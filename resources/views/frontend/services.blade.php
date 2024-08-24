@extends('frontend.layouts.app')

@section('title', 'Services Page')

@section('content')

    <!-- header -->
    @include('frontend.layouts.nav.nav-pages')

    <!-- section services -->
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
                    <li>Services</li>
                </ul>
            </div>
        </div>
    </section>

    <!-- Contevt -->
    <section class="content-section">
        <div class="container">
            <div class="shuffle-js">

                <div class="row cols-md rows-md shuffle-items">
                    @foreach ($services as $service)
                        <div class="shuffle-item col-12 md-col-4 sm-col-6">
                            <div class="item muted-bg" data-inview-showup="showup-scale"><a href="{{ route('service.show', ['id' => $service->id]) }}"
                                    class="block-link"><span class="image-wrap"><img class="image"
                                            src="{{ asset('Uploads/service/' . $service->image_service) }}"
                                            alt=""></span><span class="hover"><span class="hover-show"><span
                                                class="back"></span> <span class="content"><i class="fas fa-search"
                                                    aria-hidden="true"></i></span></span></span></a>
                                <div class="item-content">
                                    <div class="item-title text-upper"><a href="{{ route('service.show', ['id' => $service->id]) }}">{{ $service->title_service }}</a>
                                    </div>
                                    <div class="item-text">{{ $service->content_service }}</div><a
                                        href="{{ route('service.show', ['id' => $service->id]) }}
                                    "
                                        class="btn btn-md btns-bordered text-upper pull-right">read more</a>
                                </div>
                            </div>
                        </div>
                    @endforeach

                </div>
                <div class="shuffle-empty text-center alt-color text-lg">Nothing Found!</div>
            </div>
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
