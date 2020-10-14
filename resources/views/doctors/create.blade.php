@extends('layouts.master')
@section('content')
<div class="container">
 <div class="row">
    <div class="col s12">
    	<h4>Create Doctor Form</h4>
    	<form action="/doctors" method='POST'>
    		@csrf
      		<div class="row">
      			  <div class="input-field col s6">
          				<input placeholder="Name" id="name" type="text" class="validate" name = 'name'>
         				 <label for="name">Name</label>
       			 </div>

       		</div>


   
     		  <div class="row">
      			  <div class="input-field col s6">
         				 <input placeholder="Contact" id="contact" type="text" class="validate" name ='contact'>
         				 <label for="contact">Contact</label>
       			 </div>
       		</div>



      		<div class="row">
       			 <div class="input-field col s6">
          				<input placeholder="Position" id="position" type="text" class="validate" name = 'position'>
          				<label for="position">Position</label>
       			 </div>
       		</div>



      		<div class="row">
     	  		<div class="input-field col s6">
          				<input placeholder="Department" id="department" type="text" class="validate" name = 'department'>
          				<label for="departmentz">Department</label>
        		</div>
        	</div>
          <br>
 
      		<div class="row">
       			 <div class="input-field col s6">
        			 <button class="section-btn" type="sumbit" name="action">Submit
         			</button>
        		 </div>   
          </div>
      </form>
    </div>
  </div>
</div>
@endsection      




     