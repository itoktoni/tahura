@extends('layouts.public')

@push('meta')
    <meta name="description" content="{{ $page->page_description }}">
@endpush

@section('content')

    <!-- Widget-slide -->
    <div class="tf-slider-widget swiper mySwiper">
        <div class="tf-slider swiper-wrapper">
            <div class="tf-banner swiper-slide">
                <div class="image-slider">
                    <img src="{{ asset('storage/files/page/' . $page->page_image) }}" alt="image" />
                    <div class="overlay"></div>
                </div>
                <div class="themeflat-container">
                    <div class="slide-item">
                        <div class="silde-content">

                            <h1 class="flat-title-slider">{{ $page->page_name }}</h1>

                            @if(!empty($page->page_description))
                            <p class="flat-description-slider">{!! $page->page_description !!}</p>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="swiper-pagination"></div>
    </div><!-- Widget-slide -->

  <!-- Widget-about -->
  <div class="tf-widget-about-us main-content">
    <div class="themeflat-container">
        <div class="tf-about-us">

            <div class="about-box">
                <div class="title-box title-small-v2">
                    <h2 class="title-section wow fadeInUp animated text-center">
                        {{ $page->page_title }}
                    </h2>
                </div>

                <div class="post wow fadeInUp animated">
                    {!! $page->page_body !!}
                </div>
            </div>

        </div>
    </div>
</div><!-- Widget-about  -->

@endsection