<?php
session_start();
if(isset($_SESSION['user_id'])&& $_SESSION['user_id']!="")
{
  $_SESSION['user_id']="";
  unset($_SESSION['user_id']);
  session_destroy();
  header("location: home.php");
  
}
else
{
   header("location: home.php");
}
?>