<table border="0" class="header">
	<tr>
		<td></td>
		<td colspan="6">
			<h2>
				<b>Report Participant</b>
			</h2>
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
				<th style="width: 50px">ITRA ID</th>
				<th>BIB</th>
				<th>NO. INVOICE</th>
				<th style="width: 50px">EVENT</th>
				<th>CATEGORY</th>
				<th style="width: 50px">KTP</th>
				<th>FIRST NAME</th>
				<th>LAST NAME</th>
				<th style="width: 150px">NAMA USER</th>
				<th>USERNAME</th>
				<th>EMAIL</th>
				<th>TANGGAL</th>

				<th>PLACE BIRTH</th>
				<th>DATE BIRTH</th>
				<th>GENDER</th>
				<th style="width: 250px">ADDRESS</th>
				<th style="width: 50px">KEWARGANEGARAAN</th>
				<th>COUNTRY</th>
				<th>PROVINCE</th>
				<th style="width: 50px">CITY</th>
				<th>BLOOD</th>
				<th>ILLNESS</th>
				<th>EMERGENCY NAME</th>
				<th>EMERGENCY PHONE</th>
				<th>COMMUNITY</th>
				<th>JERSEY</th>
				<th>PAYMENT</th>
				<th style="width: 50px">QRCODE</th>

			</tr>
		</thead>
		<tbody>
			@php
			$total_berat = 0;
			@endphp

			@forelse($data as $table)
			<tr>
				<td>{{ $loop->iteration }}</td>


				<td>{{ $table->itraid }}</td>
				<td>{{ $table->bib }}</td>
				<td>{{ $table->external_id }}</td>
				<td>{{ $table->has_event->event_name ?? '' }}</td>
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
				<td>{{ $table->gender }}</td>
				<td>{{ $table->address }}</td>
				<td>{{ $table->kewarganegaraan }}</td>
				<td>{{ $table->country }}</td>
				<td>{{ $table->province }}</td>
				<td>{{ $table->city }}</td>
				<td>{{ $table->blood_type }}</td>
				<td>{{ $table->illness }}</td>
				<td>{{ $table->emergency_name }}</td>
				<td>{{ $table->emergency_contact }}</td>
				<td>{{ $table->community }}</td>
				<td>{{ $table->jersey }}</td>
				<td>{{ $table->payment_status }}</td>

				<td>
					@if($table->bib)
					<img src="data:image/png;base64,{!! DNS2D::getBarcodePNG('4', 'QRCODE') !!}" />
					@endif
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