<!DOCTYPE html>
<html>
<head>
	<title>Room</title>
</head>
<body>
	<h1>{{ $room->room_type }}</h1>
	<a href="/rooms/{{ $room->id }}/edit">Edit</a>
	<form action="/rooms/{{ $room->id }}" method='POST'>
		@csrf
		@method('DELETE')
		<button class="btn" type="submit">Delete</button>
	</form>
	<h3>{{ $room->ward }}</h3>
</body>
</html>