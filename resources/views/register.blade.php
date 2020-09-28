<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form action="/register" method="POST">
		@include('layout.errors')
		@csrf
		<input type="text" name="name" required placeholder="Name">
		<input type="email" name="email" required placeholder="Email">
		<input type="password" name="password" required placeholder="Password">
		<button type="submit" >Submit </button>
	</form>
</body>
</html>