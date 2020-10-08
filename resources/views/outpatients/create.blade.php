@extends('layouts.master')
@section('content')
  <div class="container">

    <h4>Create OutPatient File</h4>    
    <div class="row">
      <form class="col s12" action="/outpatients/create" method="POST">
      @include('layouts.errors')
      @csrf
        <div class="row">
          <div class="input-field col s6">
            <label for="name">Full name</label>
            <input placeholder="name"id="name" type="text" name="name">
          </div>          
        </div>
      
        <div class="row">
          <div class="input-field col s12">
            <label for="gender">Lab Number</label>
            <input placeholder="lab_numberr" id="lab_number" type="number" name="lab_number">
          </div>
        </div>
        <div class="row">
          <div class="input-field col s12">
            <label for="diagnosis">Diagnosis</label>
            <input placeholder="Diagnosis" id="diagnosis" type="text" name="diagnosis">
          </div>
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