@extends('layouts.master')
@section('content')
<div class = "container">
	<a href="/lab/{{ $lab->id }}/edit">Edit</a>
	 <h5>DATE:{{ $lab->date }}</h5>
      <h5>AMOUNT: {{ $lab->amount }}</h5>
	<form action="/lab/{{ $lab->id }}" method='POST'>
		@csrf
		@method('DELETE')
		<button class="section=btn" type="submit">Delete</button>
	</form>
	<h3>{{ $lab->id }}</h3>
</div>
@endsection