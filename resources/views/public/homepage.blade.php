@extends('layouts.public')
@section('content')

    <!-- Widget-slide -->
    <div class="tf-slider-widget swiper mySwiper">
        <div class="tf-slider swiper-wrapper">
            @foreach ($sliders as $slider)
            <div class="tf-banner swiper-slide image-container">
                <div class="image-slider">
                    <img src="{{ asset('storage/files/slider/'.$slider->field_image) }}" alt="image" />
                    <div class="overlay"></div>
                </div>
                <div class="themeflat-container">
                    <div class="slide-item">
                        <div class="silde-content">
                            @if(!empty($slider->slider_title))
                            <span class="flat-sub-slider">{{ $slider->slider_title }}</span>
                            @endif

                            @if(!empty($slider->slider_name))
                            <h1 class="flat-title-slider">{{ $slider->slider_name }}</h1>
                            @endif

                            @if(!empty($slider->slider_description))
                            <p class="flat-description-slider">{{ $slider->slider_description }}</p>
                            @endif

                            @if (!empty($slider->slider_button))
                            <div class="button">
                                <a href="{{ $slider->slider_link }}" class="flat-button">{{ $slider->slider_button }}</a>
                            </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        <div class="swiper-pagination"></div>
    </div><!-- Widget-slide -->

    <!-- Logo partner -->
    <div class="tf-widget-partner background-black">
        <div class="themeflat-container">
            <div class="tf-partner">
                <div class="sologan-logo">
                    @foreach ($sponsors as $sponsor)
                    <a href="#">
                        <img class="image-logo" src="{{ asset('storage/files/sponsor/'.$sponsor->field_image) }}" alt="image logo">
                    </a>
                    @endforeach
                </div>
            </div>
        </div>
    </div><!-- Logo partner -->

    <!-- Widget-about -->
    <div class="tf-widget-about-us main-content">
        <div class="themeflat-container">
            <div class="tf-about-us">
                <div class="row">
                    <div class="col-md-6 image-wraper">
                        <div class="media">
                            <div class="media-v1 wow fadeInLeft animated">
                                <img class="mask-media" src="{{ asset('zunzo/images/about/mask1.png') }}"
                                    alt="image">
                                <img class="shape-media" src="{{ asset('zunzo/images/about/graphic.png') }}"
                                    alt="image">
                            </div>
                            <img src="{{ asset('zunzo/images/about/mask2.png') }}" alt="image"
                                class="image-gr wow fadeInRight animated">
                            <img src="{{ asset('zunzo/images/about/Intersect.png') }}" alt="image"
                                class="intersect-img">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="about-box">
                            <img src="{{ asset('zunzo/images/about/graphic-box.png') }}" alt="image shape">
                            <!-- header style v1 -->
                            <div class="title-box title-small-v2">
                                <span class="sub-title wow fadeInUp animated">Welcome to {{ config('app.name') }}!</span>
                                <h2 class="title-section wow fadeInUp animated">{{ env('APP_TITLE') }}</h2>
                            </div><!-- header style v1 -->
                            <p class="post wow fadeInUp animated">
                                {{ env('APP_DESCRIPTION') }}
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- Widget-about  -->

     <!-- wiget benefits -->
     <div class="tf-widget-benefit background-black">
        <div class="themeflat-container">
            <div class="tf-benefit">
                <!-- header style v2 -->
                <div class="title-box-v2 center-title-box title-large">
                    <span class="sub-title wow fadeInUp animated">OUR TEAM</span>
                    <h2 class="title-section wow fadeInUp animated">TAHURA TRAIL RUNNING RACE 2025</h2>
                </div><!-- header style v2 -->
                <div class="benefit-wrap-content">
                    <div class="row">
                        @php
                        $index = 1;
                        @endphp
                        @foreach ($benefits as $benefit)

                        <div class="col-md-4 benefit-on-right">

                            <div class="benefit-item">
                                <div class="benefit-number">
                                    <span class="number wow zoomIn animated">
                                        <img class="img-fluid img-thumbnail image-benefit" src="{{ asset('storage/files/benefit/'.$benefit->field_image) }}" alt="">
                                    </span>
                                </div>

                                <div class="benefit-content">
                                    <h6 class="title-benefit wow fadeInRight animated">
                                        {{ $benefit->benefit_name }}
                                    </h6>
                                    <p class="description-benefit wow fadeInRight animated mb-2">
                                        {{ $benefit->benefit_description }}
                                    </p>

                                    <a target="_blank" href="{{ $benefit->benefit_instagram }}">
                                        <img style="width: 40px;margin-left:-5px" src="{{ asset('zunzo/images/instagram.png') }}" alt="">
                                    </a>
                                </div>
                            </div>

                        </div>

                        @endforeach

                    </div>
                </div>
            </div>
        </div>
    </div><!-- wiget benefits -->

    @if (!Auth::check())

    <!-- widge Form register -->
    <div class="widget-form-register">
        <div class="row">
            <div class="col-md-6 pd-form image-register">
                <img src="{{ asset('zunzo/images/retinal/img-form.png') }}" alt="image">
            </div>
            <div class="col-md-6 pd-form">
                <div class="widget-register background-green">
                    <div class="heading-register">
                        <h2 class="title-register">Create Account</h2>
                    </div>

                    <div class="form-register">

                        @livewire('register-form')

                    </div>
                </div>
            </div>
        </div>
    </div>

    @endif

    <!-- widge Form register -->
      <!-- Logo partner -->
      <div class="tf-widget-partner" style="background-color: white">

        <div class="themeflat-container">
            <div class="title">
                <h3 class="text-center">
                    Supported By
                </h3>
            </div>

            <div class="tf-partner mt-5">
                <div class="display-flex" style="text-align: center">
                    @foreach ($supports as $support)
                    <a class="col-md-3" href="#">
                        <img class="image-logo" src="{{ asset('storage/files/sponsor/'.$support->field_image) }}" alt="image logo">
                    </a>
                    @endforeach
                </div>
            </div>
        </div>
    </div><!-- Logo partner -->

@endsection
