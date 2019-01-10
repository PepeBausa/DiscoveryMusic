<?php
    $x=$_COOKIE["UserCookie"];
    $infouser = explode(",", $x);
?>
<div class="col-2" id="Navbar">
  <div class="row" id="Centrar">
    <a href="home.php"><img id="ImgLogo" src="resources/icon.png" class="img-circle" alt="Logo"></a>
    <a href="home.php"><h3>DiscoveryMusic</h3></a>
  </div>
  <hr/>
  <ul class="nav flex-column">
    <li class="nav-item">
      <a class="nav-link" href="#search">Search</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="home.php">Home</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="usuarios.php">Usuarios</a>
    </li>
  </ul>
</div>
<div class="col-2" id="UserTag">
  <hr/>
  <div class="row">
    <ul class="nav flex-column"  id="Centrar">
      <li class="nav-item dropup">
        <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="" role="button" aria-haspopup="true" aria-expanded="false">
          <img id="ImgUser" src="<?php echo $infouser[4];?>" class="img-circle" alt="Logo">
          <?php echo $infouser[1]; ?>
        </a>
        <div class="dropdown-menu">
          <a class="dropdown-item" href="usuario.php">Cuenta</a>
          <a class="dropdown-item" href="editar.php">Editar</a>
          <a class="dropdown-item" href="subir.php">Subir</a>
          <a class="dropdown-item" href="gestion.php">Gestionar</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="cerrar_sesion.php" id="logout">Cerrar Sesión</a>
        </div>
      </li>
    </ul>
  </div>
</div>
