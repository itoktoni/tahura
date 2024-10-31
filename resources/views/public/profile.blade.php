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

                            <div class="line"></div>

                            <p class="post wow fadeInUp animated">

                                <table>
                                    <tr>
                                        <td style="width: 100px">{{ __('Event Name') }}</td>
                                        <td style="width: 15px">:</td>
                                        <td>{{ $event->event_name ?? '' }}</td>
                                    </tr>
                                    <tr>
                                        <td style="width: 100px">{{ __('Category') }}</td>
                                        <td style="width: 15px">:</td>
                                        <td>{{ $user->category ?? '' }}</td>
                                    </tr>
                                    <tr>
                                        <td style="width: 100px">{{ __('First Name') }}</td>
                                        <td style="width: 15px">:</td>
                                        <td>{{ auth()->user()->first_name }}</td>
                                    </tr>
                                    <tr>
                                        <td style="width: 100px">{{ __('Last Name') }}</td>
                                        <td style="width: 15px">:</td>
                                        <td>{{ auth()->user()->last_name }}</td>
                                    </tr>
                                    <tr>
                                        <td style="width: 100px">{{ __('Gender') }}</td>
                                        <td style="width: 15px">:</td>
                                        <td>{{ auth()->user()->gender }}</td>
                                    </tr>
                                </table>

                            </p>
                            @if (auth()->user()->payment_status != 'PAID')
                            <div class="line"></div>
                            <div class="about-button-group">
                                <a class="flat-button wow fadeInUp animated" href="{{ route('event-register') }}">
                                    {{ __('Register Event') }}
                                </a>
                            </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- Widget-about  -->

@endsection