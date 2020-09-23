<!DOCTYPE html>
<html>
<head>
	<title>Edit Healthcare</title>
</head>
<body>
	<h1>Edit Healthcare Form</h1>
		<form action="/healthcares/{{ $healthcare->id }}" method='POST'>
      @method('PUT')
			@csrf
      		<div class="row">
        		<div class="input-field col s6">
          			<input placeholder="Title" id="title" type="text" name='title' value='{{ $healthcare->title }}'>
          			<label for="title">Healthcare Title</label>
        		</div>
        	</div>
        	<div class="row">
        		<div class="input-field col s6">
          			<input placeholder="Discount" id="discount" type="text" name='discount' value='{{ $healthcare->discount }}'>
          			<label for="discount">Discount</label>
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