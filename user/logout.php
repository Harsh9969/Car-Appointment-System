<?php 
session_start();
if((isset($_SESSION['login_user'])))
{
 session_destroy();
 echo '<script> alert("Successful logout");window.location="index.php";</script>';
 //header("Location:http://localhost/Project/user/index.php");
}
?>