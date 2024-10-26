<table border="0" class="header">
	<tr>
		<td></td>
		<td colspan="6">
			<h3>
				<b>Report Event Quota</b>
			</h3>
		</td>
		<td rowspan="3">
		</td>
	</tr>
</table>

<div class="table-responsive" id="table_data">
	<table id="export" border="1" style="border-collapse: collapse !important; border-spacing: 0 !important;"
		class="table table-bordered table-striped table-responsive-stack">
		<thead>
			<tr>
				<th width="1">No. </th>
				<th>EVENT</th>
				<th>QUOTA</th>
				<th>TOTAL</th>
				<th>SISA</th>
			</tr>
		</thead>
		<tbody>
			@php
			$total_berat = 0;
			@endphp

			@forelse($data as $table)
			@php
			$quota = $table->event_max;
			$total = $table->has_users->count();
			$selisih = $quota - $total;
			@endphp
			<tr>
				<td>{{ $loop->iteration }}</td>
				<td>{{ $table->event_name }}</td>
				<td>{{ $quota }}</td>
				<td>{{ $total }}</td>
				<td>{{ $selisih }}</td>
			</tr>
			@empty
			@endforelse

		</tbody>
	</table>
</div>

<table class="footer">
	<tr>
		<td colspan="2" class="print-date">{{ date('d F Y') }}</td>
	</tr>
	<tr>
		<td colspan="2" class="print-person">{{ auth()->user()->name ?? '' }}</td>
	</tr>
</table>