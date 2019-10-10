<?php
if (isset($_POST['x'])) {
  $x=$_POST['x'];
  $infovideo = explode(",", $x);
    require 'conexion_DB.php';
        $tbl_name = "videos";
        $titulo=$infovideo[0];
        $artista=$infovideo[1];
        $genero=$infovideo[2];
        $instrumento=$infovideo[3];
        $archivo=$infovideo[4];
        $rate="0";
        $report="0";
        $query="INSERT INTO $tbl_name (titulo,artista,genero,instrumento,archivo,rate,report) VALUES ('$titulo', '$artista', '$genero', '$instrumento', '$archivo', '$rate', '$report')";
        mysqli_query($conexion, $query);
        $pathvideo = explode("/", $archivo);
        echo $pathvideo[2];
        mysqli_close($conexion);
}else {
  echo 0;
}
?>
