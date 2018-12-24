<?php
	session_start();
	require 'conexion_DB.php';
	$tbl_name = "users";
	$Login = $_POST['Login'];
	$password = $_POST['password'];
	$pwd = hash('sha256',$password);
	$kind;
	$query = "SELECT * FROM $tbl_name WHERE username ='$Login' OR email='$Login'";
	$run = mysqli_query($conexion, $query);
	$row = $run->fetch_assoc();
	$cookie_value=$row['id'].",".$row['username'].",".$row['name'].",".$row['lastname'].",".$row['image'].",".$row['email'].",".$row['kind'];
	if($row['password']==$pwd){
		if ($row['status']=="Offline") {
			$query="UPDATE $tbl_name SET status='Online' WHERE username ='$Login' OR email='$Login'";
			$run = mysqli_query($conexion, $query);
			setcookie("UserCookie", $cookie_value, time() + 365 * 24 * 60 * 60, "/");
			mysqli_close($conexion);
			header('Location:home.php');
		}
		elseif ($row['status']=="Pending") {
			echo "Cuenta Pendiente de confirmar";
			mysqli_close($conexion);
		}
		elseif ($row['status']=="Banned") {
			echo "Cuenta en Baneada";
			mysqli_close($conexion);
		}
		elseif ($row['status']=="Online") {
			echo "Cuenta en uso";
			mysqli_close($conexion);
		}
	}
	else{
	echo "password incorrecto";
	mysqli_close($conexion);
}
?>
