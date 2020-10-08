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
			<h1>Inpatients</h1>
			<table>
				<thead>
					<tr>
						<th>Patient ID</th>
						<th>Name</th>
						<th>Room number</th>
						<th>Actions</th>				
					</tr>
				</thead>
				<tbody>
					@foreach($inpatients as $inpatient)
						<tr>
							<td> {{$inpatient->patient_id}} </td>
							<td> {{$inpatient->name}} </td>
							<td> {{$inpatient->room_number}} </td>
							<td><a href="/inpatients/{{ $inpatient->id }}">Show details</a>
								<a href="/inpatients/{{ $inpatient->id }}/edit">Edit</a>
							</td>
								<!-- link for delete is at show.blade.php -->					
						</tr>
					@endforeach	
				</tbody>
			</div>
		</div>
	</div>
</table>
<br>
	<button><a href="/inpatients/create">Create </a></button>
	@endsection
</body>
</html>