<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h1>Bills</h1>
	<table>
		<thead>
			<tr>
				
				<th>Patient ID |</th>
				<th>Doctor ID |</th>
				<th>Nurse ID |</th>
				<th>Healthcare Type |</th>
				<th>Manage</th>

			</tr>
		</thead>
		<tbody>
			@foreach($bills as $bill)
				<tr>
					<td> {{$bill->patient_id}} </td>
					<td> {{$bill->doctor_id}} </td>
					<td> {{$bill->nurse_id}} </td>
					<td> {{$bill->healthcare_type}} </td>
					
					<td>
						
						<a href="/bills/{{ $bill->id }}">Show</a>
	
					</td>

					<td>
						<a href="/bills/{{ $bill->id }}/edit">Edit</a>
					</td>

					  <td>
                        <form action="/bills/{{$bill->id}}/delete" method="POST">
                            @csrf
                            @method('delete')
                            <input type="submit" id="delete" value="delete">
                        </form>
                    </td>

				</tr>

			@endforeach	
		</tbody>

	</table>
	<a href="/bills/create">Create </a>
</body>
</html>