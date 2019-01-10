<!DOCTYPE html>
<?php session_start(); ?>
<html>
<head>
  <title>Subir</title>
  <link rel="shortcut icon" href="resources/icon.png" />
  <meta charset="utf-8">
  <link rel="stylesheet" href="css/subir.css">
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
      function subirArchivos() {
          $("#archivo").upload('subir_archivo.php',
          {
              Titulo: $("#titulo").val()
          },
          function(respuesta) {
            //Subida finalizada.
              var r = obtenerInfo()+respuesta;

              $("#barra_de_progreso").val(0);
              if (respuesta === 0) {
                mostrarRespuesta('El archivo NO se ha podido subir.', false);
              } else if (respuesta === 1) {
                mostrarRespuesta('Revisa el Formato o el Tamaño', false);
              }
              else {
                SubirBD(r);
              }
              mostrarArchivos();
          }, function(progreso, valor) {
              //Barra de progreso.
              $("#barra_de_progreso").val(valor);
          });
      }
      function SubirBD(x) {
          $.ajax({
              url: 'subir_archivo_BD.php',
              type: 'POST',
              timeout: 10000,
              data: {x: x},
              error: function() {
                  mostrarRespuesta('Error en la funcion SubirBD.', false);
              },
              success: function(respuesta) {
                  if (respuesta === 0) {
                    mostrarRespuesta('Error al Registrar el archivo: '+respuesta+' en BD.', false);
                  } else {
                    mostrarRespuesta('Archivo: '+respuesta+' subido correctamente', true);
                    $("#archivo, #titulo").val('');

                  }
              }
          });
      }
      function obtenerInfo(){
        var titulo = document.getElementById("titulo").value;
        var artista = document.getElementById("artista").value;
        var genero = document.getElementById("genero").value;
        var instrumento = document.getElementById("instrumento").value;
        var r = titulo+","+artista+","+genero+","+instrumento+",";
        return r
      }
      function mostrarRespuesta(mensaje, ok){
          $("#respuesta").removeClass('alert-success').removeClass('alert-danger').html(mensaje);
          if(ok){
              $("#respuesta").addClass('alert-success');
          }else{
              $("#respuesta").addClass('alert-danger');
          }
      }
      $(document).ready(function() {
          $("#boton_subir").on('click', function() {
              subirArchivos();
          });
      });
  </script>
</head>
  <body>
    <div class="container-fluid" id="Contenido">
      <?php require ('navbar.php'); ?>
      <?php
        $x=$_COOKIE["UserCookie"];
        $infouser = explode(",", $x);
      ?>
      <div class="col-10 offset-2" id="Cuerpo">
        <div class="row" >
          <div class="col-12" id="Centrar">
            <h1> Subir Archivos </h1>
          </div>
        </div>
        <hr/>
        <div class="row" id="Centrar">
          <div class="col-12">
            <div id="respuesta" class="alert"></div>
          </div>
        </div>
        <hr />
        <form action="javascript:void(0);">
          <div class="row">
            <div class="col-4 offset-3" id="Centrar">
              <input type="file" name="archivo" id="archivo" />
            </div>
          </div>
          <hr/>
          <div class="row">
            <div class="col-12" id="Centrar">
              <label for="titulo">Titulo:</label>
              <input type="text" class="form-control" placeholder="" id="titulo">
              <label for="artista">Artista:</label>
              <input type="text" class="form-control" placeholder="<?php echo $infouser[1]?>" value="<?php echo $infouser[1]?>" id="artista" readonly>
              <label for="genero">Genero:</label>
              <select class="form-control" id="genero">
                <option>Pop</option>
                <option>Rap</option>
                <option>Clasica</option>
                <option>Instrumental</option>
                <option>Jazz</option>
                <option>Blues</option>
              </select>
              <label for="instrumento">Instrumento:</label>
              <select class="form-control" id="instrumento">
                <option>Piano</option>
                <option>Guitarra</option>
                <option>Bateria</option>
                <option>Saxo</option>
                <option>Voz</option>
                <option>Violin</option>
              </select>
            </div>
          </div>
          <hr />
          <div class="row">
            <div class="col-4 offset-4" id="Centrar">
                <input type="submit" id="boton_subir" value="Subir" class="btn btn-success" />
                <progress id="barra_de_progreso" value="0" max="100"></progress>
            </div>
          </div>
          <div id="obtenerDatos"> </div>
        </form>
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
