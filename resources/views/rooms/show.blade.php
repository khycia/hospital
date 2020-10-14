@extends('layouts.master')
@section('content')
	<h4>{{ $room->room_type }}</h4>
	<a href="/rooms/{{ $room->id }}/edit">Edit</a>
	<form action="/rooms/{{ $room->id }}" method='POST'>
		@csrf
		@method('DELETE')
		<button class="section-btn" type="submit">Delete</button>
	</form>
	<h4>{{ $room->ward }}</h4>
@endsection