<!DOCTYPE html>
<html>
<head>
	<title>Healthcare</title>
</head>
<body>
	<h1>{{ $healthcare->title }}</h1>
	<a href="/healthcares/{{ $healthcare->id }}/edit">Edit</a>
	<form action="/healthcares/{{ $healthcare->id }}" method='POST'>
		@csrf
		@method('DELETE')
		<button class="btn" type="submit">Delete</button>
	</form>
	<h3>{{ $healthcare->discount }}</h3>
</body>
</html>