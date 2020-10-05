<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h1>Inpatients</h1>
	<table>
		<thead>
			<tr>
				<th>Name</th>
				<th>Room number</th>
				<th>Actions</th>
				
			</tr>
		</thead>
		<tbody>
			@foreach($inpatients as $inpatient)
				<tr>
					<td> {{$inpatient->name}} </td>
					<td> {{$inpatient->room_number}} </td>
					<td><a href="/inpatients/{{ $inpatient->id }}">Show details</a>
						<a href="/inpatients/{{ $inpatient->id }}/edit">Edit</a>
					</td>
				<!-- link for delete is at show.blade.php -->

					
				</tr>

			@endforeach	
		</tbody>
		
		
	
	</table>
	<a href="/inpatients/create">Create </a>

</body>
</html>