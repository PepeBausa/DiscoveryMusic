<?php
session_start();
require 'conexion_DB.php';
$tbl_name = "users";
$busqueda = $_GET['busqueda'];
$query = "SELECT * FROM $tbl_name WHERE username='%$busqueda%'";
$row  = array();
$run = mysqli_query($conexion, $query);
for ($i=0; $i < ($row[$i] =$run->fetch_assoc()); $i++) {
}
echo json_encode($row, JSON_UNESCAPED_SLASHES);
?>
