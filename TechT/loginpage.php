<!DOCTYPE html>
<html>
<head>
	<title>Welcome</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
<link href="https://fonts.googleapis.com/css?family=Kavivanar" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

	<?php 
	    session_start();
		if(isset($_SESSION['uid'])){

			echo '<div class="container">
			       <h2> You Have Successfully Logged in!  <i class="fas fa-clipboard-check"></i><h2>
			        <h2> WELCOME !<h2>
			        <span class="desg">'.$_SESSION['uid'].'</span></div>' ;

			 

			 echo '

	 <div class="container">
	  <h3> LOGOUT </h3>
	 <form action="logout.php" method="POST">
	 	 <button type="submit" class="btn btn-primary" name="submitOut" >Logout <i class="fas fa-sign-out-alt"></i> </button>
	 </form>
	 </div>
' ;
		}


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