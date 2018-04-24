<!DOCTYPE html>
<html lang="en">
<head>
  <title>Google Map api</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>

<body>
	<div class="container-fluid">
	  <div class="row">
		<div class=" col-sm-offset-4 col-sm-4">
		 <br>
		  <form method="post" action='google_maps_api.php'>
		  <div class="form-group">
			 <label for="comment">Street name,City state,Country:</label>
			 <textarea name='user_address'  class="form-control" rows="3" id="comment"></textarea>
			</div>
		  <button type="submit" name="submit_user_address"  class="btn btn-primary">Get the Latitude and Longitude</button>
		</form>
       <br>
       <p>Or</p>
		<form method="post" action='google_maps_api.php'>  
		   <div class="form-group">
			<label for="user_latitude">Enter Latitude:</label>
			<input type='text' name='user_latitude' class="form-control">
		   </div>	 
		   <div class="form-group">
			<label for="user_longitude">Enter Longitude</label>
		    <input type='text' name='user_longitude' class="form-control">
		   </div>
		  <button type="submit"  name="submit_user_coordinates" class="btn btn-primary">Get the address</button>
		</form>
	  </div>
     </div>
	</div>
</body>
</html>