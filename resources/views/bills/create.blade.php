<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form action="/bills" method="POST">
		@csrf
		<label>Patient id: </label>
		<input type="text" name="patient id">
		<label>Doctor id: </label>
		<input type="text" name="doctor_id">
		<label>Nurse id: </label>
		<input type="text" name="nurse_id">
		<label>Healthcare type: </label>
		<input type="text" name="healthcare_type">
		<label>Discount: </label>
		<input type="text" name="discount">
		<label>Room Charge: </label>
		<input type="text" name="room_charge">
		<label>Number of days: </label>
		<input type="text" name="no_of_days">
		<label>Lab charge: </label>
		<input type="text" name="lab_charge">
		<input type="submit" name="submit">
	</form>
</body>
</html>