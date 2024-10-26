@extends('layouts.public')

@section('content')
    <!-- Widget event -->
    <div class="tf-widget-event main-content-medium">
        <div class="themeflat-container">

            <div class="">
                <div class="tf-title-wrap title-medium">
                    <div class="title-box-v2">
                        <h2 class="title-section wow fadeInUp animated">Running Events</h2>
                        <span class="sub-title wow fadeInUp animated">running events</span>
                    </div>
                </div>

                <div class="widget-event event-white-wiget">

                    <div class="row">

                        @foreach ($events as $event)
                            <div class="event-box col-md-6 mt-4">
                                <h2 class="text-white">{{ $event->field_name }} (Rp {{ number_format($event->event_price, 0, ',', '.') }})</h2>
                                <a href="{{ route('event-detail', ['code' => $event->event_slug]) }}">
                                    <img decoding="async" src="{{ asset('storage/files/event/' . $event->event_image) }}"
                                    alt="{{ $event->event_description }}">
                                </a>
                            </div>
                        @endforeach

                    </div>

                </div>
            </div>

        </div>
    </div><!-- Widget event -->
@endsection
