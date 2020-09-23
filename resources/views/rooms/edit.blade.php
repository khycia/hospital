<!DOCTYPE html>
<html>
<head>
	<title>Edit Room</title>
</head>
<body>
	<h1>Edit Room Form</h1>
		<form action="/rooms/{{ $room->id }}" method='POST'>
      @method('PUT')
			@csrf
      		<div class="row">
        		<div class="input-field col s6">
          			<input placeholder="Room Type" id="room_type" type="text" name='room_type' value='{{ $room->room_type }}'>
          			<label for="room_type">Room Type</label>
        		</div>
        	</div>
        	<div class="row">
        		<div class="input-field col s6">
          			<input placeholder="Ward" id="ward" type="text" name='ward'value='{{ $room->ward }}'>
          			<label for="ward">Ward</label>
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