<!DOCTYPE html>
<html>
<head>
  <title>AvisoCorreo</title>
  <link rel="shortcut icon" href="resources/icon.png" />
  <meta charset="utf-8">
  <link rel="stylesheet" href="css/index.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
</head>
<body>
  <div class="container-fluid" id="Contenido">
    <div id="Demo" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ul class="carousel-indicators">
        <li data-target="#Demo" data-slide-to="0" class="active"></li>
        <li data-target="#Demo" data-slide-to="1"></li>
        <li data-target="#Demo" data-slide-to="2"></li>
      </ul>
      <!-- The slideshow -->
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="resources/banner.png" alt="Banner" id="ImgCarousel">
        </div>
        <div class="carousel-item">
          <img src="resources/music.png" alt="Music" id="ImgCarousel">
        </div>
        <div class="carousel-item">
          <img src="resources/guitar.png" alt="Guitar" id="ImgCarousel">
        </div>
      </div>
      <!-- Logo -->
      <!-- Left and right controls -->
      <a class="carousel-control-prev" href="#Demo" data-slide="prev">
        <span class="carousel-control-prev-icon"></span>
      </a>
      <a class="carousel-control-next" href="#Demo" data-slide="next">
        <span class="carousel-control-next-icon"></span>
      </a>
    </div>
    <!-- Botones Login y Registro -->
    <div class="row" id="Fila">
      <div class="col-2">
        <img id="ImgLogo" src="resources/icon.png" class="img-circle" alt="Logo">
      </div>
    </div>
  </div>
</body>
</html>
