@extends('layouts.master')
@section('content')
	<div class="container">

	  <h4>Create Patient Form</h4>		
	  <div class="row">
	    <form class="col s12" action="/patients/create" method="POST">
	    @include('layouts.errors')
	    @csrf
	      <div class="row">
	        <div class="input-field col s6">
	          <input placeholder="Full name"id="name" type="text" name="name">	
	          <label for="name">Full name</label>
	        </div>	        
	      </div>
	      <div class="row">
	        <div class="input-field col s12">
	          <input placeholder="Patient type" id="patient_type" type="number" name="patient_type">
	          <label for="patient_type">Patient type</label>          
	        </div>
	      </div>
	      <div class="row">
	        <div class="input-field col s12">
	          <input placeholder="Gender" id="gender" type="text" name="gender">
	          <label for="gender">Gender</label>     
	        </div>
	      </div>
	      <div class="row">
	        <div class="input-field col s12">
	          <input placeholder="Date of birth" id="date_of_birth" type="date" name="date_of_birth">
	          <label for="date_of_birth">Date of birth</label>
	        </div>
	      </div>
	      <div class="row">
	        <div class="input-field col s12">
	          <input placeholder="Contact number" id="contact" type="tel" name="contact">
	          <label for="gender">Contact number</label>
	        </div>
	      </div>
	      <div class="row">
	        <div class="input-field col s12">
	          <input placeholder="Diagnosis" id="diagnosis" type="text" name="diagnosis">
	          <label for="diagnosis">Diagnosis</label>
	        </div>
	      </div>
	      <div class="row">
	        <div class="input-field col s12">
	          <input placeholder="Healthcare type" id="healthcare_type" type="number" name="healthcare_type">
	          <label for="healthcare">Healthcare type</label>
	        </div>
	      </div>
	      <div class="row">
	        <div class="input-field col s12">
	          <input placeholder="Phycisian" id="doctor" type="number" name="doctor">
	          <label for="doctor">Phycisian</label>  
	        </div>
	      </div>
	      <div class="row">
	        <div class="input-field col s12">
	          <input placeholder="Assigned nurse" id="nurse" type="number" name="nurse">
	          <label for="nurse">Assigned nurse</label>	
	        </div>
	      </div>
	      <br>
	      <div class="row">
	        <div class="input-field col s12">
	          <button class = "section-btn" type="submit" name="action">Submit</button>	          
	        </div>
	      </div>
	    </form>
	  </div>
	</div>  
@endsection