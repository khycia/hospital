@extends('layouts.master')
@section('content')
<div class = "container">
	<h4>EDIT LAB Form</h4>
		<form action="/lab/{{ $lab->id }}" method='POST'>
      @method('PUT')
			@csrf
      		<div class="row">
        		<div class="input-field col s6">
          			<input placeholder="DATE" id="room_type" type="text" name='DATE' value='{{ $lab->date }}'>
         
        		</div>
        	</div>
        	<div class="row">
        		<div class="input-field col s6">
          			<input placeholder="AMOUNT" id="ward" type="text" name='AMOUNT'value='{{ $lab->amount }}'>
          
        		</div>
        	</div>
        	<div class="row">
      			<div class="input-field col s6">
      				<button class="section=btn" type="submit" name="action">
    				<i class="material-icons right">Submit</i>
  					</button>
  				</div>
      		</div>
    	</form>
</div>
@endsection