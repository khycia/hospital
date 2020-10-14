@extends('layouts.master')
@section('content')
<div class = "container">
	<h3>Healthcares</h3>> 	
	<a href="/healthcares/{{ $healthcare->id }}/edit">Edit</a>
	<h5>Name: {{ $healthcare->title }}</h5>	
	<h5>{{ $healthcare->discount }}</h5>
	<form action="/healthcares/{{ $healthcare->id }}" method='POST'>
		@csrf
		@method('DELETE')
		<button class="section-btn" type="submit">Delete</button>
	</form>
</div>
@endsection