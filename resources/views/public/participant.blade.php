@extends('layouts.public')

@section('content')

  <!-- Widget-about -->
  <div class="tf-widget-about-us main-content">
    <div class="themeflat-container">
        <div class="tf-about-us">
            <div class="row">
                <div class="col-md-12">
                    <div class="about-box">

                        <div class="title-box title-small-v2">
                            <span class="sub-title wow fadeInUp animated">List Peserta</span>
                            <h2 class="title-section wow fadeInUp animated">Participants List
                            </h2>
                        </div><!-- header style v1 -->

                        <div class="line"></div>

                        <table class="table table-responsive" id="myTable">
                            <thead>
                                <th style="width: 50px !important">No.</th>
                                <th>Event</th>
                                <th>Category</th>
                                <th>First Name</th>
                                <th>Last Name</th>
                                <th>Country</th>
                                <th>Gender</th>
                                <th>City</th>
                            </thead>
                            @foreach ($user as $item)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $item->has_event->event_name ?? '' }}</td>
                                <td>{{ $item->category }}</td>
                                <td>{{ $item->first_name }}</td>
                                <td>{{ $item->last_name }}</td>
                                <td>{{ $item->country }}</td>
                                <td>{{ $item->gender }}</td>
                                <td>{{ $item->city }}</td>
                            </tr>
                            @endforeach
                        </table>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div><!-- Widget-about  -->

@push('js')
    <link rel="stylesheet" href="//cdn.datatables.net/2.1.5/css/dataTables.dataTables.min.css">
    <script src="//cdn.datatables.net/2.1.5/js/dataTables.min.js"></script>

    <script>
        let table = new DataTable('#myTable');
    </script>
@endpush

@endsection