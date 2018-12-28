<!DOCTYPE html>
<html>
<head>
  <title>Login</title>
  <link rel="shortcut icon" href="resources/icon.png" />
  <meta charset="utf-8">
  <link rel="stylesheet" href="css/register_login.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
</head>
<body>
  <div class="container-fluid" id="Contenido">
    <div class="row" id="Fila">
      <div class="col-9 offset-3" id="Background">
        <img id="ImgCarousel" src="resources/banner1.png" alt="background">
      </div>
      <div class="col-3" id="CentrarFormulario">
        <div class="row" id="Centrar">
          <form action="validar.php" method="post" accept-charset="utf-8" class="form" role="form">
  					<div class="Icon">
  						<center>
  							<img src="resources/icon.png" class="img-circle" alt="Logo" id="ImgLogo" >
  						</center>
  					</div>
  					<legend style="text-align :center">Login</legend>
            <br>
            <input id="login" type="text" name="Login" value="" class="form-control" placeholder="username or email" required >
            <br>
  					<input id="password" type="password" name="password" value="" class="form-control" placeholder="********" required >
  					<br>
  					<button class="btn btn-lg btn-success btn-block signup-btn" id="Button" type="submit">Sign Up</button>
  				</form>
        </div>
      </div>
    </div>
  </div>
</body>
</html>
