@extends('layouts.master')
@section('content')
  <div class="container">

    <h4>Update Patient File</h4>    
    <div class="row">
      <form action="/outpatients/ {{$outpatients->id}}" method='POST'>
      @include('layouts.errors')
      @method('PUT')
      @csrf
        <div class="row">
        <div class="input-field col s6">
          <input placeholder="Name" id="name" type="text" class="validate" name ="name" value='{{ $outpatients->name }}'>
          <label for="name">Name</label>
        </div>
        <div class="input-field col s6">
          <input id="diagnosis" type="text" class="validate" name="diagnosis" value='{{ $outpatients->diagnosis }}'>
          <label for="diagnosis">Diagnosis</label>
        </div>
          <div class="input-field col s6">
          <input id="lab_number" type="text" class="validate" name="lab_number" value='{{ $outpatients->lab_number }}'>
          <label for="diagnosis">Lab Number</label>
        </div>
      
        <div class="row">
          <div class="input-field col s12">
            <button class = "section-btn" type="submit" name="action">Update</button>           
          </div>
        </div>
      </form>
    </div>
  </div>  
@endsection