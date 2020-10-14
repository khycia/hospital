@extends('layouts.master')
@section('content')
<div class="container">
	<div class="row">
		<div class="col-sm-12">
		<h3> Rooms </h3>
		<br>
		<button class = "section-btn"><a href="/rooms/create">Add Room</a></button>
			<ol>
				@foreach($rooms as $room)
					<li>
						<a href="/showrooms/{{ $room->id }}">{{ $room->room_type }}</a>
					</li>
				@endforeach
			</ol>
		</div>
	</div>
</div>
@endsection