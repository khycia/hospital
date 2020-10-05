<!DOCTYPE html>
<html>
<head>
	<title>Create LAB</title>
</head>
<body>
	<h1>Create LAB Form</h1>
		<form action="/labs" method='POST'>
			@csrf
      		<div class="row">
        		<div class="input-field col s6">
          			<input placeholder="LAB" id="LAB" type="text" name='LAB'>
   
        		</div>
        	</div>
        	<div class="row">
        		<div class="input-field col s6">
          			<input placeholder="AMOUNT" id="AMOUNT" type="text" name='AMOUNT'>
          
        		</div>
        	</div>
        	<div class="row">
      			<div class="input-field col s6">
      				<button class="btn arial" type="submit" name="action">
    				<i class="material-icons right">OK</i>
  					</button>
  				</div>
      		</div>
    	</form>

</body>
</html> 