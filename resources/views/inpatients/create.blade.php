@extends('layouts.master')
@section('content')
	<div class="container">
		<div class="row">
			<div class="col-sm-12"><br>
				<h4>Create inpatient</h4>
				<form action="/inpatients" method="POST">
					@csrf
					<label>Name: </label>
					<input type="text" name="name">
					<label>Diagnosis: </label>
					<input type="text" name="diagnosis">
					<label>Room Number: </label>
					<input type="text" name="room_number">
					<button class = "section-btn" type="submit" name="action">Submit</button>	 
				</form>
			</div>
		</div>
	</div>
@endsection
