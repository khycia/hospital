@extends('layouts.master')
@section('content')
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<h3>Patients</h3>
				<br>
				<button class = "section-btn"><a href="patients/create">Create Patient File</a></button>
				<br>
				<br>
				<table class="table">
					<thead>
						<tr>
							<th>Patient name</th>
							<th>Patient type</th>
							<th>Gender</th>
							<th>Date of birth</th>
							<th>Contact no.</th>
							<th>Diagnosis</th>
							<th>Healthcare</th>
							<th>Phycisian</th>
							<th>Assigned nurse</th>
						</tr>
					</thead>
					<tbody>
						@foreach($patients as $patient)
							<tr>
								<td><a href="/patients/{{ $patient -> patient_id }}">{{ $patient->name }}</a></td>
								<td>{{ $patient->patient_type }}</td>
								<td>{{ $patient->gender }}</td>
								<td>{{ $patient->date_of_birth }}</td>
								<td>{{ $patient->contact }}</td>
								<td>{{ $patient->diagnosis }}</td>
								<td>{{ $patient->healthcare_type }}</td>
								<td>{{ $patient->doctor_id }}</td>
								<td>{{ $patient->nurse_id }}</td>
							</tr>
						@endforeach
					</tbody>
				</table>	
			</div>
		</div>
	</div>
@endsection