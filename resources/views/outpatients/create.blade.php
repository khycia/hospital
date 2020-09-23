@extends('layout.master')

@section('content')
<div class="container">
	<div class ="row">
	<div class="col 12">
		<h5> Create OutPatients</h5>
		<form action="/outpatients" method='POST'>
		@csrf
	
		  
      <div class="row">
        <div class="input-field col s6">
          <input placeholder="Name" id="name" type="text" class="validate" name ="name">
          <label for="name">Name</label>
        </div>
        <div class="input-field col s6">
          <input id="diagnosis" type="text" class="validate" name="diagnosis">
          <label for="diagnosis">Diagnosis</label>
        </div>
      </div>
       


      </div>
     
      </div>
       <div class -"row">
      <div class="col s12">
      	<button class="btn waves-effect waves-light" type="submit" name="action"> Submit
      		<i class = "material-icons right">send</i>
      		
      	</button>
      	</div>
      </div>

      </div>

  </div>
	
</div>
</div>
@endsection