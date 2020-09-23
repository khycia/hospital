<!DOCTYPE html>
<html>
<head>
	<title>SHOW ROOMS</title>
</head>
<body>
	<h1> ROOMS TABLE</h1>
	<h3><a href="/rooms/create">Add Room</a></h3>
		<ol>
			@foreach($rooms as $room)
				<li>
					<a href="/showrooms/{{ $room->id }}">{{ $room->room_type }}</a>
				</li>
			@endforeach
		</ol>
</body>
</html>