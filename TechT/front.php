<?php 

session_start();


 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title>Choose</title>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
<link href="https://fonts.googleapis.com/css?family=Kavivanar" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="style.css">
 </head>
 <body>
     

   <div class="container">

  <form method="POST" action="loginsys.php">
  	<h2>  <i class="fas fa-user-tie"></i>  System Admin</h2>
  <div class="form-group">
    <label for="user1">Username</label>
    <input type="text" class="form-control" id="user1" placeholder="Username" name="uid">
  </div>
  <div class="form-group">
    <label for="password1">Password</label>
    <input type="password" class="form-control" id="password1" placeholder="Password" name="pwd">
  </div>
  
  <button type="submit" class="btn btn-primary" name="submit"><i class="fas fa-sign-in-alt"></i>  LOGIN</button>
</form>
<br>
 <a href="signup.php">  <i class="fas fa-user-plus"></i>  Not Registered! Click here to Sign Up!</a>

<br>
<br>
  
   <form method="POST" action="logininfo.php">
  	<h2>  <i class="fas fa-user"></i> INFODESK PORTAL</h2>
  <div class="form-group">
    <label for="user2">Username</label>
    <input type="text" class="form-control" id="user2" placeholder="Uername" name="uid">
  </div>
  <div class="form-group">
    <label for="password2">Password</label>
    <input type="password" class="form-control" id="passsword2" placeholder="Password" name="pwd">
  </div>
  
  <button type="submit" class="btn btn-primary" name="submit"><i class="fas fa-sign-in-alt"></i>  LOGIN</button>
</form>
<br>
<a href="signupi.php">  <i class="fas fa-user-plus"></i>  Not Registered! Click here to Sign up!</a>


   </div>








<script
  src="https://code.jquery.com/jquery-2.2.4.min.js"
  integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44="
  crossorigin="anonymous"></script>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

 </body>
 </html>