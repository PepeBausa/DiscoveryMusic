<!DOCTYPE html>
<?php session_start(); ?>
<html>
<head>
  <title>Editar</title>
  <link rel="shortcut icon" href="resources/icon.png" />
  <meta charset="utf-8">
  <link rel="stylesheet" href="css/editar.css">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
  <script src="js/jquery-2.0.2.js"></script>
  <script src="js/upload.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script  src="js/Search.js"></script>
</head>
  <body>
    <div class="container-fluid" id="Contenido">
        <?php require ('navbar.php'); ?>
        <?php
        $x = $_COOKIE["UserCookie"];
        $infouser = explode(",", $x);
        ?>
        <div class="col-10 offset-2" id= "Cuerpo">
          <div class="row" id="Centrar">
            <img id="ImgCuenta" src="resources/account.png" class="img-circle" alt="Logo">
          </div>
          <div class="col-6 offset-3">
            <div class="row">
                <h3 id="Username">Username: <?php echo "$infouser[1]"; ?></h3>
            </div>
          </div>
          <div class="col-6 offset-3">
            <div class="row">
                <h3 id="Name">Name: <?php echo "$infouser[2]"; ?></h3>
            </div>
          </div>
          <div class="col-6 offset-3">
            <div class="row">
                <h3 id="Lastname">Lastname: <?php echo "$infouser[3]"; ?></h3>
            </div>
          </div>
          <div class="col-6 offset-3">
            <div class="row">
                <h3 id="Email">Email: <?php echo "$infouser[5]"; ?></h3>
            </div>
          </div>
        </div>
        <div id="search">
          <form>
            <input type="search" value="" placeholder="SEARCH" />
            <button type="submit" class="btn">Search</button>
          </form>
        </div>
    </div>
  </body>
</html>
