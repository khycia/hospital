@extends('layouts.master')
@section('content')
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<h3>View Patient</h3>
				<a href="/outpatients/{{ $outpatients -> id }}/edit">Edit</a>
				<h5>Name: {{ $outpatients->name }}</h5>
				<h5>Diagnosis: {{ $outpatients->diagnosis}}</h5>
				<h5>Lab Number: {{ $outpatients->lab_number }}</h5>
			
				<form action="/outpatients/{{ $outpatients->id }}" method="POST">
					@csrf
					@method('DELETE')
					<button class="section-btn" type="submit">Delete</button>
				</form>
			</div>
		</div>
	</div>	
@endsection