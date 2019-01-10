<?php
session_start();
require 'conexion_DB.php';
$tbl_name = "videos";
$username = $_GET['username'];
$query = "SELECT * FROM $tbl_name WHERE artista=$username";
$row  = array();
$run = mysqli_query($conexion, $query);
$row =$run->fetch_assoc()
//for ($i=0; $i < ($row[$i] =$run->fetch_assoc()); $i++) {
//print_r($row[$i][archivo]);
//}
echo "$row";
//echo json_encode($row, JSON_UNESCAPED_SLASHES);
?>
