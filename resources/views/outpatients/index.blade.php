@extends('layout.master')

@section('content')
<div class="container">
	<div class="col=sm-12">
		<h5> OutPatients</h5>
		<a href="/outpatients/create">Create </a>
		<ol> 
		@foreach($outpatients as $outpatient)
		<li>
			<a href="/outpatients/{{ $outpatient->patient_id}}">{{  $outpatient -> diagnosis}}</a></li>


		@endforeach
		</ol>
</div>
@endsection