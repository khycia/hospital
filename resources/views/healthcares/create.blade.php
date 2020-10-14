@extends('layouts.master')
@section('content')
<div class="container">
	<h4>Create Healthcare Form</h4>
  <br>
		<form action="/healthcares" method='POST'>
			@csrf
      		<div class="row">
        		<div class="input-field col s6">
          			<input placeholder="Title" id="title" type="text" name='title'>
          			<label for="title">Healthcare Title</label>
        		</div>
        	</div>
        	<div class="row">
        		<div class="input-field col s6">
          			<input placeholder="Discount" id="discount" type="text" name='discount'>
          			<label for="discount">Discount</label>
        		</div>
        	</div>
          <br>
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