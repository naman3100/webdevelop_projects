<?php 
if(isset($_POST['submitOut']))
{
session_start();
session_unset();
session_destroy();

header ("Location: ../TechT/front.php");
}


 ?>