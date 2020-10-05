@extends('layout.master')

@section('content')
<div class="container">
	<div class="col=sm-12">
		<h5> OutPatients</h5>
		<a href="/outpatients/create">Create Outpatient </a>
		<ol> 
		@foreach($outpatients as $outpatient)
		<li>
			<a href="/outpatients/{{ $outpatient->id}}">{{  $outpatient -> name}}</a></li>


		@endforeach
		</ol>
</div>
@endsection