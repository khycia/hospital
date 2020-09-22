section('content')
<div class="container">
	<div class="col=sm-12">
		<h5> Update OutPatients</h5>
		<form action="/outpatients/ {{ $outpatients->patient_id }}" methods="POST"></form>
		@csrf
		  <div class="row">
    <form class="col s12">
      <div class="row">
        <div class="input-field col s6">
          <input placeholder="Placeholder" id="name" type="text" class="validate" value = '{{ $outpatients->patient_id}}'>
          <label for="first_name">Name</label>
        </div>
        <div class="input-field col s6">
          <input id="diagnosis" type="text" class="validate">
          <label for="last_name">Diagnosis</label>
        </div>
      </div>
    
      </div>
      <div class="row">
        <div class="input-field col s12">
          <input id="lab_number" type="id" class="validate">
          <label for="password">lab_number</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <input id="email" type="email" class="validate">
          <label for="email">Email</label>
        </div>
      </div>
      <div class="row">
        <div class="col s12">
          This is an inline input field:
          <div class="input-field inline">
            <input id="patient_id" type="email" class="validate">
            <label for="patient_id">Patient ID</label>
            <span class="helper-text" data-error="wrong" data-success="right">Helper text</span>
          </div>
        </div>
      </div>
    </form>
  </div>
	
</div>
</div>
@endsection