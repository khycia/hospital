@extends('layouts.master')
@section('content')
<div class="container">

    <h4>UPDATE NURSE INFO</h4>   
    <div class="row">
      <form class="col s12" action="/nurses/{{ $nurses->id}}" method="POST">
      @method('PUT')
      @csrf
          <div class="row">
              <div class="input-field col s6">
                  <input placeholder="Name" id="name" type="text" class="validate" name = 'name' value='{{ $nurse->name }}'>
                 <label for="name">Name</label>
             </div>

          </div>


   
        <div class="row">
              <div class="input-field col s6">
                 <input placeholder="Contact" id="contact" type="text" class="validate" name ='contact' value='{{ $nurse->contact }}'>
                 <label for="contact">Contact</label>
             </div>
          </div>






          <div class="row">
            <div class="input-field col s6">
                  <input placeholder="Department" id="department" type="text" class="validate" name = 'department' value='{{ $nurse->department }}'>
                  <label for="department">Department</label>
            </div>
          </div>

  
          
          <div class="row">
             <div class="input-field col s6">
               <button class="btn waves-effect waves-light" type="sumbit" name="action">Submit
               
              </button>
            </div>   
    

        </div>

      </form>
    </div>
  </div>  
@endsection