@extends('layouts.master')
@section('content')
<div class = "container">
 <div class="row">
    <div class="col s12">
    	<h4>UPDATE Doctor Information</h4>


    	<form action="/doctors/{{ $doctor->id}}" method='POST'>
        @method('PUT')
    		@csrf
      		<div class="row">
      			  <div class="input-field col s6">
          				<input placeholder="Name" id="name" type="text" class="validate" name = 'name' value='{{ $doctor->name }}'>
         				 <label for="name">Name</label>
       			 </div>

       		</div>


   
     		<div class="row">
      			  <div class="input-field col s6">
         				 <input placeholder="Contact" id="contact" type="text" class="validate" name ='contact' value='{{ $doctor->contact }}'>
         				 <label for="contact">Contact</label>
       			 </div>
       		</div>



      		<div class="row">
       			 <div class="input-field col s6">
          				<input placeholder="Position" id="position" type="text" class="validate" name = 'position' value='{{ $doctor->position }}'>
          				<label for="position">Position</label>
       			 </div>
       		</div>



      		<div class="row">
     	  		<div class="input-field col s6">
          				<input placeholder="Department" id="department" type="text" class="validate" name = 'department' value='{{ $doctor->department }}'>
          				<label for="departmentz">Department</label>
        		</div>
        	</div>

 
      		<div class="row">
       			 <div class="input-field col s6">
        			 <button class="btn waves-effect waves-light" type="sumbit" name="action">Submit
         			<i class="material-icons right"> Send </i>
         	
         			</button>
        		</div>   
    

    		</div>
        </form>
    </div>
  </div>
</div>   
@endsection



     