<!DOCTYPE html>
<html>
<head>
	<title>EDIT LAB</title>
</head>
<body>
	<h1>EDIT LAB Form</h1>
		<form action="/lab/{{ $lab->id }}" method='POST'>
      @method('PUT')
			@csrf
      		<div class="row">
        		<div class="input-field col s6">
          			<input placeholder="DATE" id="room_type" type="text" name='DATE' value='{{ $lab->date }}'>
         
        		</div>
        	</div>
        	<div class="row">
        		<div class="input-field col s6">
          			<input placeholder="AMOUNT" id="ward" type="text" name='AMOUNT'value='{{ $lab->amount }}'>
          
        		</div>
        	</div>
        	<div class="row">
      			<div class="input-field col s6">
      				<button class="btn waves-effect waves-light" type="submit" name="action">
    				<i class="material-icons right">Submit</i>
  					</button>
  				</div>
      		</div>
    	</form>

</body>
</html> 