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
		
	
	if(isset($_POST['submit'])){  


		include 'dbc.php';
		session_start();
		$uid=mysqli_real_escape_string($conn,$_POST['uid']);
		$pwd=mysqli_real_escape_string($conn,$_POST['pwd']);

		//check if inputs are empty

		if(empty($uid) || empty($pwd) )
		{
			header ("Location: front.php");
			exit ();
		}
		else
		{
			//Checking if user exists or not
			$sql = "SELECT * FROM info_user WHERE uid='$uid'";
			$result=mysqli_query($conn,$sql);
			$count=mysqli_num_rows($result);

			if($count < 1){
						 echo  "<div class='container'>
		<h2>No Such Username Exists !!</h2>
		<br>
		<a href='front.php?NO_Username'>Click Here to TRY AGAIN</a>
		</div>
		" ;	
				exit ();
			} 
			else
			{
				if($row=mysqli_fetch_assoc($result)){
					//DE-hashing the password and then checking if it is correct
					$hashedPwd=password_verify($pwd,$row['pwd']);

					if ($hashedPwd == false)
					{
												 echo  "<div class='container'>
		<h2> <i class='fas fa-times-circle'></i> Wrong Password !!</h2>
		<br>
		<a href='front.php?Wrong_Password'>Click Here to TRY AGAIN</a>
		</div>
		" ;
						exit ();
					}
					elseif ($hashedPwd == true)
					{
						// LOGIN THE USER HERE

						$_SESSION['uid']=$row['uid'];
						$_SESSION['first']=$row['first'];
						$_SESSION['last']=$row['last'];
						header ("Location: loginpage.php?login=success");

					}
				}
			}
		}
	}
	else {
		header ("Location: front.php?No_Username");
		exit();
	}

      


?>
	

	

<script
  src="https://code.jquery.com/jquery-2.2.4.min.js"
  integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44="
  crossorigin="anonymous"></script>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

 ?>
</body>
</html>