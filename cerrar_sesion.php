<?php
  session_start();
	require 'conexion_DB.php';
	$tbl_name = "users";
  $x = $_COOKIE["UserCookie"];
  $infouser = explode(",", $x);
  $query="UPDATE $tbl_name SET status='Offline' WHERE username ='$infouser[1]'";
  $run = mysqli_query($conexion, $query);
  setcookie("UserCookie", "", time() - 365 * 24 * 60 * 60, "/");
  session_destroy();
  mysqli_close($conexion);
  header('Location:login.php');
?>
