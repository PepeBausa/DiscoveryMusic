<?php
session_start();
require 'conexion_DB.php';
$tbl_name = "users";
$query = "SELECT * FROM $tbl_name ";
$row  = array();
$run = mysqli_query($conexion, $query);
for ($i=0; $i < ($row[$i] =$run->fetch_assoc()); $i++) {
//print_r($row[$i][archivo]);
}
echo json_encode($row, JSON_UNESCAPED_SLASHES);
?>
