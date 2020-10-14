@extends('layouts.master')
@section('content')
<div class = "container">
	<h4>Edit Healthcare Form</h4>
		<form action="/healthcares/{{ $healthcare->id }}" method='POST'>
      @method('PUT')
			@csrf
      		<div class="row">
        		<div class="input-field col s6">
          			<input placeholder="Title" id="title" type="text" name='title' value='{{ $healthcare->title }}'>
          			<label for="title">Healthcare Title</label>
        		</div>
        	</div>
        	<div class="row">
        		<div class="input-field col s6">
          			<input placeholder="Discount" id="discount" type="text" name='discount' value='{{ $healthcare->discount }}'>
          			<label for="discount">Discount</label>
        		</div>
        	</div>
        	<div class="row">
      			<div class="input-field col s6">
      				<button class="section-btn" type="submit" name="action">
    				<i class="material-icons right">Submit</i>
  					</button>
  				</div>
      		</div>
    	</form>
</div>
@endsection