<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	@extends('layouts.master')
	@section('content')
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<h1>{{$inpatient-> patient_id}} </h1>
				<h1>{{$inpatient-> name}} </h1>
				<h4>Diagnosis: {{$inpatient -> diagnosis }}</h4>
				<h4>Room number: {{$inpatient -> room_number }}</h4>
				<form action="/inpatients/{{ $inpatient->id}}/delete" method="POST">
					@csrf
					@method('delete')
					<input type="submit" name="delete" value="delete"></form>
			</div>
		</div>
	</div>
	@endsection
</body>
</html>