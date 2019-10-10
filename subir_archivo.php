<?php
session_start();
if (     ($_FILES["archivo"]["type"] == "video/mp4")
      || ($_FILES["archivo"]["type"] == "video/avi")
      ){
    $archivo = $_FILES['archivo'];
    $extension = pathinfo($archivo['name'], PATHINFO_EXTENSION);
    $nombre = "{$_POST['Titulo']}.$extension";
    $x=$_COOKIE["UserCookie"];
    $infouser = explode(",", $x);
    $target_path = "archivos_subidos/".$infouser[1]."/".$nombre;
    if (move_uploaded_file($archivo['tmp_name'], $target_path)) {
        echo $target_path;
        } else {
        echo 0;
    }
}else{
  echo 1;
}
?>
