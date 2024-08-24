@extends('frontend.layouts.app')

@section('title', 'Order_Confirmation Page')

@section('content')

    <!-- header -->
    @include('frontend.layouts.nav.nav-pages')


    <section class="with-bg solid-section">
        <div class="fix-image-wrap" data-image-src="{{ asset('./assets/images/service/tools.jpg') }}" data-parallax="scroll"></div>
        <div class="theme-back"></div>
        <div class="container page-info">
            <div class="section-alt-head container-md">
                <h1 class="section-title text-upper text-lg" data-inview-showup="showup-translate-right">Order
                    Confirmation</h1>
            </div>
        </div>

        <div class="section-footer">
            <div class="container" data-inview-showup="showup-translate-down">
                <ul class="page-path">
                    <li><a href="/home">Home</a></li>
                    <li class="path-separator"><i class="fas fa-chevron-right" aria-hidden="true"></i></li>
                    <li><a href="/shop">Shop</a></li>
                    <li class="path-separator"><i class="fas fa-chevron-right" aria-hidden="true"></i></li>
                    <li>Order Confirmation</li>
                </ul>
            </div>
        </div>

    </section>

    <!-- Message -->
    <section class="content-section">
        <div class="container">
            <div class="content-text clearfix offs-md" data-inview-showup="showup-translate-up">
                <p>Thank you, we've reciewved your order. Our managers will contact you soon.</p>
            </div><a href="/home" class="btn text-upper" data-inview-showup="showup-translate-up">back to
                homepage</a>
        </div>
    </section>

    <script>
        if (window.location.pathname === '/order_confirmation') {
            console.log("Clearing localStorage...");
            localStorage.removeItem('cart');
        }
    </script>



@endsection
