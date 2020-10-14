@extends('layouts.master')
@section('content')
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<h3>Outpatients</h3>
				<br>
				<button class = "section-btn"><a href="outpatients/create">Create Outpatient File</a></button>
				<br>
				<br>
				<table class="table">
					<thead>
						<tr>
							<th>Outpatient name</th>
							<th>Outpatient diagnosis</th>
							<th>Lab Number</th>
						
						</tr>
					</thead>
					<tbody>
						@foreach($outpatients as $outpatient)
						
							<tr>
								<td><a href="/outpatients/{{ $outpatient->id}}">{{  $outpatient -> name}}</a></li></td> 
						
								<td>{{ $outpatient->diagnosis }}</td>
								<td>{{ $outpatient->lab_number}}</td>
							</tr>
							</tr>
					
						@endforeach
					</tbody>
				</table>	
			</div>
		</div>
	</div>
@endsection