@extends('frontend.layouts.app')

@section('title', 'Shop Page')

@section('content')

    <!-- header -->
    @include('frontend.layouts.nav.nav-pages')



    <section class="with-bg solid-section">
        <div class="fix-image-wrap" data-image-src="{{ asset('./assets/images/service/tools.jpg') }}" data-parallax="scroll">
        </div>
        <div class="theme-back"></div>
        <div class="container page-info">
            <div class="section-alt-head container-md">
                <h1 class="section-title text-upper text-lg" data-inview-showup="showup-translate-right">Shop</h1>
            </div>
        </div>
        <div class="section-footer">
            <div class="container" data-inview-showup="showup-translate-down">
                <ul class="page-path">
                    <li><a href="/home">Home</a></li>
                    <li class="path-separator"><i class="fas fa-chevron-right" aria-hidden="true"></i></li>
                    <li>Shop</li>
                </ul>
            </div>
        </div>
    </section>

    <div class="clearfix container">
        <div class="page-content">
            <section class="content-section">
                <div class="row">
                    @if ($categorys->isNotEmpty())
                        @foreach ($categorys as $category)
                            <div class="md-col-4 p-3">
                                <div class="item shop-item shop-item-simple" data-inview-showup="showup-scale">
                                    <div class="item-back"></div>
                                    <a href="shop-item.html" class="item-image responsive-1by1">
                                        <img src="{{ asset('Uploads/categories/' . $category->category_image) }}"
                                            alt="">
                                    </a>
                                    <div class="item-content shift-md">
                                        <div class="item-textes">
                                            <div class="item-title text-upper">
                                                <a href="#" class="content-link">{{ $category->category_name }}</a>
                                            </div>
                                            <div class="item-categories">
                                                <a href="#"
                                                    class="content-link">{{ $category->category_description }}</a>
                                            </div>
                                        </div>
                                        <div class="item-prices">
                                            <div class="item-price">${{ $category->category_price }}</div>
                                        </div>
                                    </div>
                                    @guest
                                        <div class="item-links">
                                            <a class="btn text-upper btn-md add-to-cart-btn " href="/register">

                                                Add to cart

                                            </a>
                                        </div>
                                    @else
                                        <div class="item-links">
                                            <button class="btn text-upper btn-md add-to-cart-btn" data-id="{{ $category->id }}"
                                                data-name="{{ $category->category_name }}"
                                                data-price="{{ $category->category_price }}"
                                                data-image="{{ asset('Uploads/categories/' . $category->category_image) }}">
                                                Add to cart
                                            </button>
                                        </div>
                                    @endguest
                                </div>
                            </div>
                        @endforeach
                    @else
                        <h1 class="text-center mx-auto">No Products now</h1>
                    @endif
                </div>
            </section>
        </div>
    </div>





@endsection
