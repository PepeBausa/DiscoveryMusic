<?php
	require 'conexion_DB.php';
	$tbl_name = "users";
  $username = $_GET['username'];
  $query="UPDATE $tbl_name SET status='Offline' WHERE username ='$username'";
  $run = mysqli_query($conexion, $query);
  mysqli_close($conexion);
  header('Location: http://musicdiscovery.ddns.net/aviso_successful.php');
?>
