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
				<br>
				<form action="/inpatients/{{ $inpatient->id}}" method="POST">
					@csrf
					@method('PUT')
					<label>Name: </label>
					<input type="text" name="name" value="{{$inpatient->name}}">
					<label>Diagnosis: </label>
					<input type="text" name="diagnosis" value="{{$inpatient->diagnosis}}">
					<label>Room Number: </label>
					<input type="text" name="room_number" value="{{$inpatient->room_number}}">
					<input type="submit" name="submit">
				</form>
			</div>
		</div>
	</div>
	@endsection
</body>
</html>