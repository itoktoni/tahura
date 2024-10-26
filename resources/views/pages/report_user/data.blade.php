<table border="0" class="header">
	<tr>
		<td></td>
		<td colspan="6">
			<h3>
				<b>Report Participant</b>
			</h3>
		</td>
		<td rowspan="3">
		</td>
	</tr>
	<tr>
		<td></td>
		<td colspan="10">
			<h3>
				laporan data user berdasarkan tanggal register
			</h3>
		</td>
	</tr>
	<tr>
		<td></td>
		<td colspan="10">
			<h3>
				Tanggal Register : {{ formatDate(request()->get('start_date')) }} - {{ formatDate(request()->get('end_date')) }}
			</h3>
		</td>
	</tr>
</table>

<div class="table-responsive" id="table_data">
	<table id="export" border="1" style="border-collapse: collapse !important; border-spacing: 0 !important;"
		class="table table-bordered table-striped table-responsive-stack">
		<thead>
			<tr>
				<th width="1">No. </th>
				<th>BIB</th>
				<th>NO. INVOICE</th>
				<th>CATEGORY</th>
				<th>ID USER</th>
				<th>FIRST NAME</th>
				<th>LAST NAME</th>
				<th>NAMA USER</th>
				<th>USERNAME</th>
				<th>EMAIL</th>
				<th>TANGGAL</th>

				<th>PLACE BIRTH</th>
				<th>DATE BIRTH</th>
				<th>ADDRESS</th>
				<th>COUNTRY</th>
				<th>PROVINCE</th>
				<th>CITY</th>
				<th>BLOOD TYPE</th>
				<th>ILLNESS</th>
				<th>EMERGENCY CONTACT</th>
				<th>COMMUNITY</th>
				<th>JERSEY</th>
				<th>PAYMENT STATUS</th>
				<th>QRCODE</th>
			</tr>
		</thead>
		<tbody>
			@php
			$total_berat = 0;
			@endphp

			@forelse($data as $table)
			<tr>
				<td>{{ $loop->iteration }}</td>
				<td>{{ $table->bib }}</td>
				<td>{{ $table->external_id }}</td>
				<td>{{ $table->category }}</td>
				<td>{{ $table->key }}</td>
				<td>{{ $table->first_name }}</td>
				<td>{{ $table->last_name }}</td>
				<td>{{ $table->field_name }}</td>
				<td>{{ $table->field_username }}</td>
				<td>{{ $table->field_email }}</td>
				<td>{{ formatDate($table->created_at) }}</td>

				<td>{{ $table->place_birth }}</td>
				<td>{{ $table->date_birth }}</td>
				<td>{{ $table->address }}</td>
				<td>{{ $table->country }}</td>
				<td>{{ $table->province }}</td>
				<td>{{ $table->city }}</td>
				<td>{{ $table->blood_type }}</td>
				<td>{{ $table->illness }}</td>
				<td>{{ $table->emergency_contact }}</td>
				<td>{{ $table->community }}</td>
				<td>{{ $table->jersey }}</td>
				<td>{{ $table->payment_status }}</td>
				<td>
					{!! !empty($table->bib) ? QrCode::getBarcodeHTML($table->bib, 'QRCODE', 4, 4) : '' !!}
				</td>

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