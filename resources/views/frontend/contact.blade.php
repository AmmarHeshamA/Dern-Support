@extends('frontend.layouts.app')

@section('title', 'Contact Page')

@section('content')
    <!-- header -->
    @include('frontend.layouts.nav.nav-pages')

    <!-- contact us -->
    <section class="with-bg solid-section">
        <div class="fix-image-wrap" data-image-src="{{ asset('./assets/images/service/contact-us.jpg') }}"
            data-parallax="scroll">
        </div>
        <div class="theme-back"></div>
        <div class="container page-info">
            <div class="section-alt-head container-md">
                <h1 class="section-title text-upper text-lg" data-inview-showup="showup-translate-right">Contact Us</h1>

            </div>
        </div>
        <div class="section-footer">
            <div class="container" data-inview-showup="showup-translate-down">
                <ul class="page-path">
                    <li><a href="/home">Home</a></li>
                    <li class="path-separator"><i class="fas fa-chevron-right" aria-hidden="true"></i></li>
                    <li>Contact Us</li>
                </ul>
            </div>
        </div>
    </section>


    <!-- contact form -->
    <div class="content-section container">
        <div class="row cols-lg rows-lg">
            <div class="sm-col-6">
                <section data-inview-showup="showup-translate-right">
                    <h2 class="text-upper">How to find us</h2>
                    <p class="offs-lg">Our goal is to provide the best customer service and to answer all of your
                        questions in a timely manner.</p>
                    <div class="rows-md">
                        <div class="row cols-md rows-md">
                            <div class="md-col-6">
                                <div class="info-item">
                                    <div class="icon"><img src="{{ asset('./assets/images/icons/side/phone.png') }}"
                                            alt=""></div>
                                    <div class="text">+20 123456789</div>
                                </div>
                            </div>
                            <div class="md-col-6">
                                <div class="info-item">
                                    <div class="icon"><img src="{{ asset('./assets/images/icons/side/phone1.png') }}"
                                            alt=""></div>
                                    <div class="text">+20 123456789</div>
                                </div>
                            </div>
                        </div>
                        <div class="row cols-md rows-md">
                            <div class="md-col-6">
                                <div class="info-item">
                                    <div class="icon"><img src="{{ asset('./assets/images/icons/side/skype.png') }}"
                                            alt=""></div>
                                    <div class="text">+20 123456789</div>
                                </div>
                            </div>
                            <div class="md-col-6">
                                <div class="info-item">
                                    <div class="icon"><img src="{{ asset('./assets/images/icons/side/instagram.png') }}"
                                            alt=""></div>
                                    <div class="text">#Dern-support</div>
                                </div>
                            </div>
                        </div>
                        <div class="row cols-md rows-md">
                            <div class="md-col-6">
                                <div class="info-item">
                                    <div class="icon"><img src="{{ asset('./assets/images/icons/side/email.png') }}"
                                            alt=""></div>
                                    <div class="text"><a href="#">Dern-support@gmail.com</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
            <div class="sm-col-6">

                <section class="block-md sm-fix-container muted-bg" data-inview-showup="showup-translate-left">
                    <h5 class="offs-md">Send Us a Message</h5>
                    @if (session('message'))
                        <div class="alert alert-success alert-dismissible fade show " role="alert">
                            {{ session('message') }}
                            <button type="button" class="btn-close m-2 " data-bs-dismiss="alert"
                                aria-label="Close"></button>
                        </div>
                    @endif

                    <!-- Session Status -->
                    <x-auth-session-status class="mb-4" :status="session('status')" />
                    <form method="post" enctype="multipart/form-data" action="{{ route('message.store') }}">
                        @csrf



                        <!-- company-name -->
                        <div class="field-group">
                            <div class="field-wrap"><input class="field-control @error('companyname') is-invalid @enderror"
                                    name="companyname" value="{{ old('company-name') }}" placeholder="Company Name"> <span
                                    class="field-back"></span></div>
                        </div>

                        <!-- name -->
                        <div class="field-group">
                            <div class="field-wrap"><input class="field-control @error('name') is-invalid @enderror"
                                    name="name" placeholder="Name" value="{{ old('name') }}"> <span
                                    class="field-back"></span></div>
                        </div>
                        <x-input-error class="text-red-800" :messages="$errors->get('name')" class="m-2" />

                        <!-- email -->
                        <div class="field-group">
                            <div class="field-wrap"><input class="field-control @error('email') is-invalid @enderror"
                                    name="email" type="email" value="{{ old('email') }}" placeholder="Email"> <span
                                    class="field-back"></span></div>
                        </div>
                        <x-input-error class="text-red-800" :messages="$errors->get('email')" class="m-2" />

                        <!-- phone -->
                        <div class="field-group">
                            <div class="field-wrap"><input class="field-control @error('phone') is-invalid @enderror"
                                    name="phone" placeholder="Phone" value="{{ old('phone') }}"> <span
                                    class="field-back"></span>
                            </div>
                        </div>
                        <x-input-error class="text-red-800" :messages="$errors->get('phone')" class="m-2" />


                        <!-- address -->
                        <div class="field-group">
                            <div class="field-wrap"><input class="field-control @error('address') is-invalid @enderror"
                                    name="address" placeholder="Address" value="{{ old('address') }}"> <span
                                    class="field-back"></span>
                            </div>
                        </div>
                        <x-input-error class="text-red-800" :messages="$errors->get('address')" class="m-2" />


                        <!-- How can we help you? --> <!-- message -->
                        <div class="field-group">
                            <div class="field-wrap">
                                <textarea class="field-control @error('message') is-invalid @enderror" name="message"
                                    placeholder="How can we help you?">{{ old('message') }}</textarea> <span class="field-back"></span>
                            </div>
                        </div>
                        <x-input-error class="text-red-800" :messages="$errors->get('message')" class="m-2" />


                        <!-- logo or image upload -->
                        <div class="form-group mb-4">
                            <label class="p-2">Upload Image (To clarify the problem more)</label>
                            <input type="file" name="photo[]" multiple id="photo"
                                class="form-control @error('photo.*') is-invalid @enderror ">
                            @if ($errors->has('photo.*'))
                                @foreach ($errors->get('photo.*') as $message)
                                    <div style="color: red;font-weight: bold; font-size: 13px" class="m-2">
                                        {{ $message[0] }}</div>
                                @endforeach
                            @endif
                        </div>


                        @guest
                        <a class="btn-block" href="/register">
                            <a class="btn text-upper ajax-disabled"  href="/register">send message</a>
                        </a>
                        @else
                            <div class="btn-block">
                                <button class="btn text-upper ajax-disabled" type="submit">send message</button>
                            </div>
                        @endguest


                    </form>
                </section>
            </div>
        </div>
    </div>


@endsection
