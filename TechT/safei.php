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


<?php
session_start();

   if(isset ($_POST['submit']))
   		{  
	include 'dbc.php';

	$first=mysqli_real_escape_string($conn,$_POST['first']);
	$last=mysqli_real_escape_string($conn,$_POST['last']);
	$uid=mysqli_real_escape_string($conn,$_POST['uid']);
	$pwd=mysqli_real_escape_string($conn,$_POST['pwd']);


		// error handlers

		//checking for empty fleids
		if( empty($first) || empty($last) || empty($uid) || empty($pwd) )
		{
			header("Location: signupi.php?signup=empty");
			EXIT ();
		}
		else{

			//checking if user name already exists
			$sql="SELECT * FROM info_user Where uid='$uid' ";
			$result=mysqli_query($conn,$sql);
			$count= mysqli_num_rows($result);
			
			if ($count > 0)
			{
						 echo  "<div class='container'>
		<h2>Username Already Exists !!  Please Try Another Username</h2>
		<br>
		<a href='signup.php'>Click Here to TRY ANOTHER USER NAME </a>
		</div>
		" ;
		      
			        EXIT ();
			}
			else{
					// Hashing The Password
					$hashedpwd = password_hash($pwd,PASSWORD_DEFAULT);

					//Inserting Into Data Base 


						$sql= "INSERT INTO info_user (first,last,uid,pwd) VALUES ('$first','$last','$uid','$hashedpwd')" ;
	                    mysqli_query($conn,$sql);

						 header ("Location: front.php");
			}	
			}
		}

		else
		{
			header("Location: signupi.php?signup=wrong");
			 EXIT ();
		}
?>




<script
  src="https://code.jquery.com/jquery-2.2.4.min.js"
  integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44="
  crossorigin="anonymous"></script>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

</body>
</html>













