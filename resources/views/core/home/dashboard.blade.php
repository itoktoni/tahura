<x-layout>

    @push('footer')
    <script src="{{ @asset('vendor/larapex-charts/apexcharts.js') }}"></script>
    {{ $chart->script() }}

    @endpush

</x-layout>
