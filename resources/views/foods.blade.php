<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width-device-width, initial-scale-1.0"> 
	<meta http-equiv="X-UA-Compatible" content="ie-edge">
	<title>array of foods</title>
</head>
<body>
	<div>
		<ul>
			@foreach($foods as $foods)
				<li>{{[$foods]}}</li>
				@endforeach
		</ul>
	</div>
		

</body>
</html>