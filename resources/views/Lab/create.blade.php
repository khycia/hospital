@extends('layouts.master')
@section('content')
<container>
	<h4>Create LAB Form</h4>
		<form action="/labs" method='POST'>
			@csrf
      		<div class="row">
        		<div class="input-field col s6">
          			<input placeholder="LAB" id="LAB" type="text" name='LAB'>
   
        		</div>
        	</div>
        	<div class="row">
        		<div class="input-field col s6">
          			<input placeholder="AMOUNT" id="AMOUNT" type="text" name='AMOUNT'>
          
        		</div>
        	</div>
        	<div class="row">
      			<div class="input-field col s6">
      				<button class="Section-btn" type="submit" name="action">
    				<i class="material-icons right">Submit</i>
  					</button>
  				</div>
      		</div>
    	</form>
</container>
@endsection