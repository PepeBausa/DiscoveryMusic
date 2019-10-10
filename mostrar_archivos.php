<?php
session_start();
$x=$_COOKIE["UserCookie"];
$infouser = explode(",", $x);
$target_path = "archivos_subidos/".$infouser[1];
$directorio_escaneado = scandir($target_path);
$archivos = array();
foreach ($directorio_escaneado as $item) {
    if ($item != '.' and $item != '..') {
        $archivos[] = $item;
    }
}
echo json_encode($archivos, JSON_UNESCAPED_SLASHES);
?>
