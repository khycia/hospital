<!DOCTYPE html>
<html>
<head>
	<title>SHOW HEALTHCARES</title>
</head>
<body>
	<h1> HEALTHCARES</h1>
	<h3><a href="/healthcares/create">Add Healthcare</a></h3>
		<ol>
			@foreach($healthcares as $healthcare)
				<li>
					<a href="/showhealthcares/{{ $healthcare->id }}">{{ $healthcare->title }}</a>
				</li>
			@endforeach
		</ol>
</body>
</html>	