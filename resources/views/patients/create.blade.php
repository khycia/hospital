@extends('layouts.master')
@section('content')
	<div class="container">

	  <h4>Create Patient File</h4>		
	  <div class="row">
	    <form class="col s12" action="/patients/create" method="POST">
	    @include('layouts.errors')
	    @csrf
	      <div class="row">
	        <div class="input-field col s6">
	          <label for="name">Full name</label>
	          <input placeholder="Full name"id="name" type="text" name="name">
	        </div>	        
	      </div>
	      <div class="row">
	        <div class="input-field col s12">
	          <label for="patient_type">Patient type</label>
	          <input placeholder="Patient type" id="patient_type" type="number" name="patient_type">
	        </div>
	      </div>
	      <div class="row">
	        <div class="input-field col s12">
	          <label for="gender">Gender</label>
	          <input placeholder="Gender" id="gender" type="text" name="gender">
	        </div>
	      </div>
	      <div class="row">
	        <div class="input-field col s12">
	          <label for="date_of_birth">Date of birth</label>
	          <input placeholder="Date of birth" id="date_of_birth" type="date" name="date_of_birth">
	        </div>
	      </div>
	      <div class="row">
	        <div class="input-field col s12">
	          <label for="gender">Contact number</label>
	          <input placeholder="Contact number" id="contact" type="tel" name="contact">
	        </div>
	      </div>
	      <div class="row">
	        <div class="input-field col s12">
	          <label for="diagnosis">Diagnosis</label>
	          <input placeholder="Diagnosis" id="diagnosis" type="text" name="diagnosis">
	        </div>
	      </div>
	      <div class="row">
	        <div class="input-field col s12">
	          <label for="healthcare">Healthcare type</label>
	          <input placeholder="Healthcare type" id="healthcare_type" type="number" name="healthcare_type">
	        </div>
	      </div>
	      <div class="row">
	        <div class="input-field col s12">
	          <label for="doctor">Phycisian</label>
	          <input placeholder="Phycisian" id="doctor" type="number" name="doctor">
	        </div>
	      </div>
	      <div class="row">
	        <div class="input-field col s12">
	          <label for="nurse">Assigned nurse</label>	
	          <input placeholder="Assigned nurse" id="nurse" type="number" name="nurse">	          
	        </div>
	      </div>
	      <div class="row">
	        <div class="input-field col s12">
	          <button class = "section-btn" type="submit" name="action">Submit</button>	          
	        </div>
	      </div>
	    </form>
	  </div>
	</div>  
@endsection