<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	
	<h1>{{$inpatient-> name}} </h1>
	<h4>Diagnosis: {{$inpatient -> diagnosis }}</h4>
	<h4>Room number: {{$inpatient -> room_number }}</h4>
	<form action="/inpatients/{{ $inpatient->id}}/delete" method="POST">
		@csrf
		@method('delete')
		<input type="submit" name="delete" value="delete"></form>
</body>
</html>