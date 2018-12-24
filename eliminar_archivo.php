<?php
session_start();
if (isset($_POST['archivo'])) {
    $archivo = $_POST['archivo'];
    $x=$_COOKIE["UserCookie"];
    $infouser = explode(",", $x);
    $path="archivos_subidos/".$infouser[1]."/".$archivo;
    if (file_exists("$path")) {
        unlink("$path");
        require 'conexion_DB.php';
        $tbl_name = "videos";
        $query="DELETE FROM $tbl_name WHERE archivo='{$path}'";
        mysqli_query($conexion, $query);
        echo $archivo;
    } else {
        echo 0;
    }
}
else{
  echo 1;
}
?>
