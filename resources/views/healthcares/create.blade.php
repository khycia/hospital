<!DOCTYPE html>
<html>
<head>
	<title>Create Healthcare</title>
</head>
<body>
	<h1>Create Healthcare Form</h1>
		<form action="/healthcares" method='POST'>
			@csrf
      		<div class="row">
        		<div class="input-field col s6">
          			<input placeholder="Title" id="title" type="text" name='title'>
          			<label for="title">Healthcare Title</label>
        		</div>
        	</div>
        	<div class="row">
        		<div class="input-field col s6">
          			<input placeholder="Discount" id="discount" type="text" name='discount'>
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