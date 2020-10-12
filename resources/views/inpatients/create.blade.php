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
			<div class="col-sm-12"><br>
				<p>Create inpatient</p>
				<form action="/inpatients" method="POST">
					@csrf
					<label>Name: </label>
					<input type="text" name="name">
					<label>Diagnosis: </label>
					<input type="text" name="diagnosis">
					<label>Room Number: </label>
					<input type="text" name="room_number">
					<input type="submit" name="submit">
				</form>
			</div>
		</div>
	</div>
	@endsection
</body>
</html>