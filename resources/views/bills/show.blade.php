<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
	
    <h3>receipt number: {{ $bill->id }}</h3>   	
	<h3>patient id: {{ $bill->patient_id }} </h3>
	<h3>doctor id: {{ $bill->doctor_id }}</h3>
	<h3>nurse id: {{$bill->nurse_id }}</h3>
	<h3>healthcare type: {{ $bill->healthcare_type }}</h3>
	<h3>discount: {{ $bill->discount }}</h3>
	<h3>room charge: {{ $bill->room_charge }}</h3>
	<h3>no of days: {{ $bill->no_of_days }}</h3>
	<h3>lab charge: {{ $bill->lab_charge }}</h3>

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
</body>
</html>