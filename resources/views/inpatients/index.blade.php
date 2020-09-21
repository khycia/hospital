<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<ol>
		@foreach($inpatients as $inpatient)
			<li>{{ $inpatient->name }}</li>
			
		@endforeach
	</ol>

</body>
</html>