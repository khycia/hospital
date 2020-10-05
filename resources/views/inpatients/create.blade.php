<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form action="/inpatients" method="POST">
		@csrf
		<label>Name: </label>
		<input type="text" name="name">
		<label>Diagnosis: </label>
		<input type="text" name="diagnosis">
		<label>Room Number: </label>
		<input type="text" name="room_number">
		<input type="submit" name="submit">
	</form>
</body>
</html>