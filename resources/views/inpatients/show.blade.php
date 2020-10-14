@extends('layouts.master')
@section('content')
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<h5>{{$inpatient-> patient_id}} </h5>
				<h5>Full name: {{$inpatient-> name}} </h5>
				<h5>Diagnosis: {{$inpatient -> diagnosis }}</h5>
				<h5>Room number: {{$inpatient -> room_number }}</h5>
				<form action="/inpatients/{{ $inpatient->id}}/delete" method="POST">
					@csrf
					@method('delete')
					<button class="section-btn" type="submit">Delete</button>
				</form>
			</div>
		</div>
	</div>
@endsection
