@extends('frontend.layouts.app')
@section('title', 'Register')

@section('content')

    <!-- header -->
    @include('frontend.layouts.nav.nav-pages')

    <!-- secion reg -->
    <section class="with-bg solid-section">
        <div class="fix-image-wrap" data-image-src="./assets/images/service/harddrive.jpg" data-parallax="scroll"></div>
        <div class="theme-back"></div>
        <div class="container page-info">
            <div class="section-alt-head container-md">
                <h1 class="section-title text-upper text-lg" data-inview-showup="showup-translate-right">Sign Up</h1>

            </div>
        </div>
        <div class="section-footer">
            <div class="container" data-inview-showup="showup-translate-down">
                <ul class="page-path">
                    <li><a href="/home">Home</a></li>
                    <li class="path-separator"><i class="fas fa-chevron-right" aria-hidden="true"></i></li>
                    <li>Pages</li>
                    <li class="path-separator"><i class="fas fa-chevron-right" aria-hidden="true"></i></li>
                    <li>Sign Up</li>
                </ul>
            </div>
        </div>
    </section>


    <!-- form reg -->
    <section class="content-section">
        <div class="container">
            <div class="section-head text-center container-md">
                <h2 class="section-title text-upper text-lg" data-inview-showup="showup-translate-right">Register</h2>
                <p data-inview-showup="showup-translate-left">Register to discover all great features</p>
            </div>
            <div class="container">
                <div class="row d-flex justify-content-center align-items-center">
                    <div class="col-lg-7 col-md-10 col-sm-12">

                        <!-- Session Status -->
                        <x-auth-session-status class="mb-4" :status="session('status')" />
                        <div class="card w-100 mx-auto p-3" data-inview-showup="showup-translate-right">
                            <form class="sign-up-form" method="POST" action="{{ route('register') }}">
                                @csrf
                                <h4 class="text-upper text-center" data-inview-showup="showup-translate-right">Register</h4>
                                <div class="row">
                                    <!-- Name -->
                                    <div class="col-12 mb-3" data-inview-showup="showup-translate-right">
                                        <div class="field-group">
                                            <div class="field-wrap">
                                                <input class="field-control @error('name') is-invalid @enderror" name="name"
                                                    value="{{ old('name') }}" autofocus autocomplete="name" placeholder="Name">
                                                <span class="field-back"></span>
                                            </div>
                                        </div>
                                        <x-input-error   :messages="$errors->get('name')" />
                                    </div>

                                    <!-- Email Address -->
                                    <div class="col-12 mb-3" data-inview-showup="showup-translate-right">
                                        <div class="field-group">
                                            <div class="field-wrap">
                                                <input class="field-control @error('email') is-invalid @enderror" type="email" name="email"
                                                    value="{{ old('email') }}" autocomplete="username" placeholder="Email">
                                                <span class="field-back"></span>
                                            </div>
                                        </div>
                                        <x-input-error   :messages="$errors->get('email')" />
                                    </div>

                                    <!-- Phone -->
                                    <div class="col-12 mb-3" data-inview-showup="showup-translate-right">
                                        <div class="field-group">
                                            <div class="field-wrap">
                                                <input class="field-control @error('phone') is-invalid @enderror" name="phone"
                                                    value="{{ old('phone') }}" autofocus autocomplete="phone" placeholder="Phone">
                                                <span class="field-back"></span>
                                            </div>
                                        </div>
                                        <x-input-error   :messages="$errors->get('phone')" />
                                    </div>

                                    <!-- Address -->
                                    <div class="col-12 mb-3" data-inview-showup="showup-translate-right">
                                        <div class="field-group">
                                            <div class="field-wrap">
                                                <input class="field-control @error('address') is-invalid @enderror" name="address"
                                                    value="{{ old('address') }}" autofocus autocomplete="address" placeholder="Address">
                                                <span class="field-back"></span>
                                            </div>
                                        </div>
                                        <x-input-error   :messages="$errors->get('address')" />
                                    </div>

                                    <!-- Password -->
                                    <div class="col-12 mb-3" data-inview-showup="showup-translate-right">
                                        <div class="field-group">
                                            <div class="field-wrap">
                                                <input class="field-control @error('password') is-invalid @enderror" name="password"
                                                    type="password" autocomplete="new-password" placeholder="Password">
                                                <span class="field-back"></span>
                                            </div>
                                        </div>
                                        <x-input-error   :messages="$errors->get('password')" />
                                    </div>

                                    <!-- Confirm Password -->
                                    <div class="col-12 mb-3" data-inview-showup="showup-translate-left">
                                        <div class="field-group">
                                            <div class="field-wrap">
                                                <input class="field-control @error('password_confirmation') is-invalid @enderror" type="password"
                                                    name="password_confirmation" autocomplete="new-password" placeholder="Confirm Password">
                                                <span class="field-back"></span>
                                            </div>
                                        </div>
                                        <x-input-error   :messages="$errors->get('password_confirmation')" />
                                    </div>
                                </div>

                                <div class="text-center mx-auto">
                                    <button data-inview-showup="showup-translate-left"
                                        class="btn my-3 text-upper text-center mx-auto" type="submit">{{ __('Register') }}</button>
                                </div>
                            </form>
                        </div> <!-- card -->

                        <div class="text-center mx-auto my-3">
                            <div class="d-flex justify-content-center align-items-center"
                                data-inview-showup="showup-translate-left">
                                <div class="m-1">Already have an account?</div>
                                <div class="m-1"><a href="{{ route('login') }}">
                                        <i class="fas fa-edit"></i>&nbsp;&nbsp;Login</a></div>
                            </div>
                        </div>

                    </div>
                    <div class="col-lg-5 col-md-8 col-sm-12 mt-3 mt-lg-0">
                        <div>
                            <img data-inview-showup="showup-translate-left"
                                src="{{ asset('./assets/images/service/background.png') }}" alt="" class="img-fluid " style="width: 900px;">
                        </div>
                    </div>
                </div>
            </div>

    </section>

@endsection
