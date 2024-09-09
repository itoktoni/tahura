@extends('layouts.public')

@section('content')

  <!-- Widget-about -->
    <div class="tf-widget-about-us main-content">
        <div class="themeflat-container">
            <div class="tf-about-us">
                <div class="row">
                    <div class="col-md-6 image-wraper">
                        <div class="media">
                            <div class="media-v1">
                                <img class="mask-media wow fadeInLeft animated" src="{{ asset('zunzo/images/about/mask1.png') }}"
                                    alt="image">
                                <img class="shape-media wow fadeInRight animated" src="{{ asset('zunzo/images/about/graphic.png') }}"
                                    alt="image">
                            </div>
                            <img src="{{ asset('zunzo/images/about/mask2.png') }}" alt="image" class="image-gr wow fadeInRight animated">
                            <img src="{{ asset('zunzo/images/about/Intersect.png') }}" alt="image" class="intersect-img">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="about-box">
                            <img src="{{ asset('zunzo/images/about/graphic-box.png') }}" alt="image shape">
                            <!-- header style v1 -->
                            <div class="title-box title-small-v2">
                                <h2 class="title-section wow fadeInUp animated">
                                    Welcome, {{ auth()->user()->name }}
                                </h2>
                            </div><!-- header style v1 -->
                            <p class="post wow fadeInUp animated">
                                Welcome to our vibrant running community, where we organize exciting running events,
                                provide helpful running tutorials, and keep you informed with the latest running news.
                            </p>
                            <div class="line"></div>
                            <div class="about-button-group">
                                <a class="flat-button wow fadeInUp animated" href="{{ route('event-register') }}">Register Event</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- Widget-about  -->

    @include('public.counter')

@endsection