@extends('layouts.master')
@section('content')
<div class="container">
	<div class="row">
		<div class="col-sm-12">
		<h3> Healthcares </h3>
		<br>
		<button class = "section-btn"><a href="/healthcares/create">Add Healthcare</a></button>
		<br>
			<ol>
				@foreach($healthcares as $healthcare)
					<li>
						<a href="/showhealthcares/{{ $healthcare->id }}">{{ $healthcare->title }}</a>
					</li>
				@endforeach
			</ol>
		</div>
	</div>
</div>
@endsection