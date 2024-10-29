
@if(request()->get('action') == 'excel')
    @php
        $name = request()->get('report_name') ? request()->get('report_name').'.xls' : 'excel.xls';
        header('Content-Type: application/force-download');
        header('Content-disposition: attachment; filename='.$name);
        header("Pragma: ");
        header("Cache-Control: ");
    @endphp
@elseif(request()->get('action') == 'pdf')
<style>
body{
    margin: 20px;
}
</style>
@else
    <div class="header-action">
        <nav>
            <a href="{{ moduleRoute('getCreate') }}">Back</a>
            <a class="cursor" onclick="window.print()">Print</a>
            <a href="{{ url()->full().'&action=pdf' }}">PDF</a>
            <a href="{{ url()->full().'&action=excel' }}">Excel</a>
        </nav>
    </div>
@endif
