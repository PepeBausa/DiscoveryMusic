<?php
session_start();
require 'conexion_DB.php';
$tbl_name = "videos";
$username = "pepitobausa"
$query = "SELECT * FROM $tbl_name WHERE artista='$username'";
$row  = array();
$run = mysqli_query($conexion, $query);
for ($i=0; $i < ($row[$i] =$run->fetch_assoc()); $i++) {
}
echo json_encode($row, JSON_UNESCAPED_SLASHES);
?>
