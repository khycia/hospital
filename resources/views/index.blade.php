@extends('layouts.master')
@extends('layouts.head')
@section('content')

	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<h3>Patients</h3>
				<ol>
					@foreach($patients as $patient)
						<li>
							<a href="/patients/{{ $patient->patient_id }}">{{ $patient->name }}</a>
						</li>
					@endforeach
				</ol>
			</div>
		</div>
	</div>


@endsection	