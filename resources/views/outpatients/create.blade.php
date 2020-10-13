@extends('layouts.master')
@section('content')
  <div class="container">

    <h4>Create a Outpatients</h4>    
    <div class="row">
      <form class="col s12" action="/outpatients/create" method="POST">
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
            <label for="patient_type">Diagnosis type</label>
            <input placeholder="Diagnosis type" id="diagnosis" type="rext" name="diagnosis">
          </div>
        </div>
        <div class="row">
          <div class="input-field col s12">
            <label for="gender">Lab number</label>
            <input placeholder="Lab number" id="lab_number" type="number" name="lab number">
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