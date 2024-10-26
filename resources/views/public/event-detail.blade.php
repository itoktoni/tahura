@extends('layouts.public')

@section('content')
    <!-- Widget-slide -->
    <div class="tf-slider-widget swiper mySwiper">
        <div class="tf-slider swiper-wrapper">
            <div class="tf-banner swiper-slide">
                <div class="image-slider">
                    <img src="{{ asset('storage/files/event/' . $event->event_banner) }}" alt="image" />
                    <div class="overlay"></div>
                </div>
                <div class="themeflat-container">
                    <div class="slide-item">
                        <div class="silde-content">

                            <h1 class="flat-title-slider">{{ $event->event_description }}</h1>

                            <p class="flat-description-slider">
                                {!! $event->event_page !!}
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- Widget-slide -->

    <div class="image-event">
        <img src="{{ asset('storage/files/event/' . $event->event_background) }}" alt="Image Events"
            class="wow fadeInLeft animated">
    </div>

    <!-- Event Detail Content -->
    <div class="tf-widget-events">
        <div class="themeflat-container">

            <div class="row">
                <div class="col-md-10 mx-auto">

                    <div id="accordion">
                        <div class="card">
                            <div class="card-header header-event" id="headingOne">
                                <h5 class="mb-0">
                                    <button class="btn" data-bs-toggle="collapse" data-bs-target="#collapseOne"
                                        aria-expanded="true" aria-controls="collapseOne">
                                        <h5>Race Detail</h5>
                                    </button>
                                </h5>
                            </div>

                            <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                                <div class="card-body">
                                    <div class="image-event">
                                        <img src="{{ asset('storage/files/event/' . $event->event_detail) }}" alt="Image Events"
                                            class="wow fadeInLeft animated">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card">
                            <div class="card-header header-event" id="headingTwo">
                                <h5 class="mb-0">
                                    <button class="btn collapsed" data-bs-toggle="collapse" data-bs-target="#collapseTwo"
                                        aria-expanded="false" aria-controls="collapseTwo">
                                        <h5>Course Map</h5>
                                    </button>
                                </h5>
                            </div>
                            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                                <div class="card-body">
                                    <div class="image-event">
                                        <img src="{{ asset('storage/files/event/' . $event->event_map) }}" alt="Image Events"
                                            class="wow fadeInLeft animated">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card">
                            <div class="card-header header-event" id="headingThree">
                                <h5 class="mb-0">
                                    <button class="btn collapsed" data-bs-toggle="collapse" data-bs-target="#collapseThree"
                                        aria-expanded="false" aria-controls="collapseThree">
                                        <h5>
                                            Mandatory
                                        </h5>
                                    </button>
                                </h5>
                            </div>
                            <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                                <div class="card-body">
                                    <div class="image-event">
                                        <img src="{{ asset('storage/files/event/' . $event->event_mandatory) }}" alt="Image Events"
                                            class="wow fadeInLeft animated">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card">
                            <div class="card-header header-event" id="headingThree">
                                <h5 class="mb-0">
                                    <button class="btn collapsed" data-bs-toggle="collapse" data-bs-target="#collapse4"
                                        aria-expanded="false" aria-controls="collapse4">
                                        <h5>
                                            Roundown
                                        </h5>
                                    </button>
                                </h5>
                            </div>
                            <div id="collapse4" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                                <div class="card-body">
                                    <div class="image-event">
                                        <img src="{{ asset('storage/files/event/' . $event->event_roundown) }}" alt="Image Events"
                                            class="wow fadeInLeft animated">
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="event-detail-content">

                        @if (auth()->check())
                        <a href="{{ route('event-register', ['event_id' => $event->field_primary]) }}"
                            class="flat-button wow fadeInUp animated">Register now</a>
                        @else
                        <a href="{{ route('register') }}"
                            class="flat-button wow fadeInUp animated">Create Account</a>
                        @endif



                    </div>

                </div>
            </div>
        </div>
    </div><!--Event Detail Content -->
@endsection
