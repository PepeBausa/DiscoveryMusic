<!DOCTYPE html>
<?php session_start(); ?>
<html>
<head>
  <title>Home</title>
  <link rel="shortcut icon" href="resources/icon.png" />
  <meta charset="utf-8">
  <link rel="stylesheet" href="css/Videos_Usuario.css">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
  <script src="js/jquery-2.0.2.js"></script>
  <script src="js/upload.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script  src="js/Search.js"></script>
  <script type="text/javascript">

  function mostrarVideos() {
      $.ajax({
          url: 'mostrar_videos_usuario.php?username=<?php echo $_GET['username'] ?>',
          dataType: 'JSON',
          success: function(respuesta) {
              if (respuesta) {
                  var html = '';
                  for (var i = 0; i < respuesta.length; i++) {
                      if (respuesta[i] != undefined) {
                          html += '<div class="col-4"><video id="video" controls><source src="'+respuesta[i]["archivo"]+'" type="video/mp4" allow/><source src="'+respuesta[i]["archivo"]+'" type="video/avi" allow/></video><hr/><p style="text-align:center">Titulo: '+respuesta[i]["titulo"]+'<br/> Artista: '+respuesta[i]["artista"]+'</p></div>';
                      }
                  }
                  $("#mostrar_videos").html(html);
              }
          }
      });
  }
  (function(){
    $('a#logout').click(function(){
        if(confirm('Are you sure to logout?')) {
            return true;
        }
        return false;
    });
  });

  function cambiar() {
  var valor = document.getElementById('input').value;
  var path = "busqueda.php?busqueda="+valor
  document.getElementById('submit').action = path;
  document.formulario.submit();
};
  $(document).ready(function() {
      mostrarVideos();
  });
</script>
</head>
  <body onbeforeunload="return CloseWindow()">
    <div class="container-fluid" id="Contenido">
        <?php require_once('navbar.php'); ?>
        <?php
        $x = $_COOKIE["UserCookie"];
        $infouser = explode(",", $x);
        ?>
      <div class="col-10 offset-2" id="Cuerpo">
        <div class="row" id= "mostrar_videos"></div>
      </div>
    </div>
  </body>
</html>
