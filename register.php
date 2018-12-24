<!DOCTYPE html>
<html>
<head>
  <title>Register</title>
  <link rel="shortcut icon" href="resources/icon.png" />
  <meta charset="utf-8">
  <link rel="stylesheet" href="css/register_Login.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
</head>
<body>
  <div class="container-fluid" id="Contenido">
    <div class="row" id="Fila">
      <div class="col-9" id="ColCarusel">
        <div id="demo" class="carousel slide" data-ride="carousel">
          <!-- Indicators -->
          <ul class="carousel-indicators">
            <li data-target="#demo" data-slide-to="0" class="active"></li>
            <li data-target="#demo" data-slide-to="1"></li>
            <li data-target="#demo" data-slide-to="2"></li>
          </ul>
          <!-- The slideshow -->
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="resources/notas.png" alt="Notas" id="ImgCarousel">
            </div>
            <div class="carousel-item">
              <img src="resources/music.png" alt="Music" id="ImgCarousel">
            </div>
            <div class="carousel-item">
              <img src="resources/guitar.png" alt="Guitar" id="ImgCarousel">
            </div>
          </div>
          <!-- Left and right controls -->
          <a class="carousel-control-prev" href="#demo" data-slide="prev">
            <span class="carousel-control-prev-icon"></span>
          </a>
          <a class="carousel-control-next" href="#demo" data-slide="next">
            <span class="carousel-control-next-icon"></span>
          </a>
        </div>
      </div>
      <div class="col-3" id="Centrar">
        <div class="row" id="Centrar">
          <form action="registrar_cuenta_email.php" method="post" accept-charset="utf-8" class="form" role="form">
  					<div class="Icon">
              <center>
  							<img src="resources/icon.png" class="img-circle" alt="Logo" id="ImgLogo" >
  						</center>
            </div>
  					<legend style="text-align :center">Register</legend>
            <br>
            <input id="name" type="text" name="name" value="" class="form-control" placeholder="name" required autofocus>
            <br>
            <input id="lastname" type="text" name="lastname" value="" class="form-control" placeholder="lastname" required >
            <br>
            <input id="username" type="text" name="username" value="" class="form-control" placeholder="username" required >
            <br>
  					<input id="email" type="email" name="email" value="" class="form-control" placeholder="e-mail" required >
  					<br>
  					<input id="password" type="password" name="password" value="" class="form-control" placeholder="Password" required >
  					<br>
            <input id="cpassword" type="password" name="cpassword" value="" class="form-control" placeholder="Confirm Password" required >
  					<br>
  					<button class="btn btn-lg btn-success btn-block signup-btn" id="ButtonAside" type="submit">Sign Up</button>
  				</form>
        </div>
      </div>
    </div>
  </div>
</body>
</html>
