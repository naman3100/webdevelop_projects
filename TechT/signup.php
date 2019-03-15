<?php 

session_start();


 ?>

	<!DOCTYPE html>
	<html>
	<head>
		<title>Sign up</title>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/css?family=Kavivanar" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="style.css">
	</head>
	<body>
		<div class="container">
		<form method="POST" action="safe.php">
			<h2> <i class="fas fa-user-tie"></i> System admin</h2>
			<div class="form-group">
	    <label for="first">First Name</label>
	    <input type="text" class="form-control" id="first" placeholder="First Name" name="first" required>
	  </div>
	  <div class="form-group">
	    <label for="last">Last Name</label>
	    <input type="text" class="form-control" id="last" placeholder="Last Name" name="last" required>
	  </div>
	   <div class="form-group">
	    <label for="Username">User Name</label>
	    <input type="text" class="form-control" id="Username" placeholder="Username" name="uid" required>
	  </div>
	   <div class="form-group">
	    <label for="password">Password</label>
	    <input type="password" class="form-control" id="password" placeholder="Password" name="pwd" required>
	  </div>

	  <button type="submit" class="btn btn-primary" name="submit" > <i class="fas fa-thumbs-up"></i> Submit</button>
		</form>
	</div>





<script
  src="https://code.jquery.com/jquery-2.2.4.min.js"
  integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44="
  crossorigin="anonymous"></script>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

</body>
</html>
