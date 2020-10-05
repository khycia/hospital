@extends('layout.master')

@section('content')
<div class="container">
	<div class="col-sm-12">
		<h5> {{ $outpatients->name}} </h5>
 <a href="/outpatients/ {{ $outpatients->id }}/edit">Edit</a>
 <form action="/outpatients/ {{ $outpatients->id}}" method='POST'>
 	@csrf
 	@method('DELETE')
 	<button class="btn" type="submit">DELETE</button>
 </form>
		<p> {{ $outpatients->name }}</p>
		
</div>
</div>
@endsection