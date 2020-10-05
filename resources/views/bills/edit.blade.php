<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form action="/bills/{{ $bill->id}}" method="POST">
		@csrf
		@method('PUT')
		<label>Name: </label>
		<label>Patient id: </label>
		<input type="text" name="patient_id" value="{{$bill->patient_id}}">
		<label>Doctor id: </label>
		<input type="text" name="doctor_id" value="{{$bill->doctor_id}}">
		<label>Nurse id: </label>
		<input type="text" name="nurse_id" value="{{$bill->nurse_id}}">
		<label>Healthcare type: </label>
		<input type="text" name="healthcare_type" value="{{$bill->healthcare_type}}">
		<label>Discount: </label>
		<input type="text" name="discount" value="{{$bill->discount}}">
		<label>Room Charge: </label>
		<input type="text" name="room_charge" value="{{$bill->room_charge}}">
		<label>Number of days: </label> 
		<input type="text" name="no_of_days" value="{{$bill->no_of_days}}">
		<label>Lab charge: </label>
		<input type="text" name="lab_charge" value="{{$bill->lab_charge}}">
		<input type="submit" name="submit">
	</form>
</body>
</html>