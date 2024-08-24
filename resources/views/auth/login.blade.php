@extends('frontend.layouts.app')

@section('title', 'Login Page')

@section('content')

    <!-- header -->
    @include('frontend.layouts.nav.nav-pages')

    <!-- login -->
    <section class="with-bg solid-section">
        <div class="fix-image-wrap" data-image-src="{{ asset('./assets/images/service/harddrive.jpg') }}"
            data-parallax="scroll"></div>
        <div class="theme-back"></div>
        <div class="container page-info">
            <div class="section-alt-head container-md">
                <h1 class="section-title text-upper text-lg" data-inview-showup="showup-translate-right">Log in</h1>

            </div>
        </div>
        <div class="section-footer">
            <div class="container" data-inview-showup="showup-translate-down">
                <ul class="page-path">
                    <li><a href="index.html">Home</a></li>
                    <li class="path-separator"><i class="fas fa-chevron-right" aria-hidden="true"></i></li>
                    <li>Pages</li>
                    <li class="path-separator"><i class="fas fa-chevron-right" aria-hidden="true"></i></li>
                    <li>Log in</li>
                </ul>
            </div>
        </div>
    </section>




  <!-- login form -->
<section class="content-section">
    <div class="container">
        <div class="section-head text-center container-md">
            <h2 class="section-title text-upper text-lg" data-inview-showup="showup-translate-right">Log in</h2>
            <p data-inview-showup="showup-translate-left">Log in to your account to discover all great features</p>
        </div>

        <div class="row justify-content-center">
            <div class="col-lg-7 col-md-10 col-sm-12">
                <!-- Session Status -->
                <x-auth-session-status class="mb-4" :status="session('status')" />

                <div class="card w-100 mx-auto p-3" data-inview-showup="showup-translate-right">
                    <form class="sign-in-form" method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="medium-container">
                            <div class="row">
                                <div class="col-12">
                                    <div class="item-form" data-inview-showup="showup-translate-right">
                                        <div class="offs-lg">
                                            <!-- Email address -->
                                            <div class="field-group ">
                                                <div class="field-wrap">
                                                    <input name="email" value="{{ old('email') }}" autofocus autocomplete="username"
                                                        class="field-control @error('email') is-invalid @enderror"
                                                        placeholder="Your Login or email">
                                                    <span class="field-back"></span>
                                                </div>
                                            </div>
                                            <x-input-error    :messages="$errors->get('email')"  />

                                            <!-- Password -->
                                            <div class="field-group ">
                                                <div class="field-wrap">
                                                    <input class="field-control @error('password') is-invalid @enderror"
                                                        name="password" type="password" placeholder="Password">
                                                    <span class="field-back"></span>
                                                </div>
                                            </div>
                                            <x-input-error :messages="$errors->get('password')"  />
                                        </div>
                                        <div class="row cols-md offs-md">
                                            <div class="col-12 text-left">
                                                <!-- Keep me logged in -->
                                                <div class="field-group">
                                                    <div class="checkbox">
                                                        <label>
                                                            <input class="field-control" name="keepLogged" type="checkbox">
                                                            <span class="check-icon">
                                                                <span class="check-block">
                                                                    <span class="check-pin"></span>
                                                                </span>
                                                            </span>
                                                            <span class="label">Keep me logged in</span>
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="text-center mt-3">
                                            <button class="btn text-upper" type="submit">{{ __('Log in') }}</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>

                <div class="text-center mx-auto my-3">
                    <div class="d-flex justify-content-center align-items-center" data-inview-showup="showup-translate-left">
                        <div class="m-1">Don't have an account?</div>
                        <div class="m-1"><a href="{{ route('register') }}">
                            <i class="fas fa-edit"></i>&nbsp;&nbsp;Register</a></div>
                    </div>
                </div>
            </div>

            <div class="col-lg-5 col-md-6 col-sm-12 mt-3 mt-lg-0">
                <div>
                    <img data-inview-showup="showup-translate-left"
                        src="{{ asset('./assets/images/service/background.png') }}" alt="" class="img-fluid">
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
