@extends('layout.master')

@section('content')
<div class="container">
	<div class="col=sm-12">
		<h5> {{ $outpatient->patient_id}} </h5>
		<p> {{ $outpatient->name }}</p>
		
</div>
@endsection