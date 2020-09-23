@extends('layouts.master')
@section('content')
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<h3>View Patient</h3>
				<a href="/patients/{{ $patient -> patient_id }}/edit">Edit</a>
				<h5>Full name: {{ $patient->name }}</h5>
				<h5>Patient type: {{ $patient->patient_type}}</h5>
				<h5>Gender: {{ $patient->gender }}</h5>
				<h5>Date of birth: {{ $patient->date_of_birth }}</h5>
				<h5>Contact no.:{{ $patient->contact }}</h5>
				<h5>Diagnosis: {{ $patient->diagnosis }}</h5>
				<h5>Healthcare: {{ $patient->healthcare_type }}</h5>
				<h5>Phycisian: {{ $patient->doctor_id }}</h5>
				<h5>Assigned nurse: {{ $patient->nurse_id }}</h5>
				<form action="/patients/{{ $patient->patient_id }}" method="POST">
					@csrf
					@method('DELETE')
					<button class="section-btn" type="submit">Delete</button>
				</form>
			</div>
		</div>
	</div>	
@endsection