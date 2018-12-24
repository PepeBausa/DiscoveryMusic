<!DOCTYPE html>
<?php session_start(); ?>
<html>
<head>
  <title>Gestión</title>
  <link rel="shortcut icon" href="resources/icon.png" />
  <meta charset="utf-8">
  <link rel="stylesheet" href="css/gestion.css">
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
      function eliminarArchivos(archivo) {
          $.ajax({
              url: 'eliminar_archivo.php',
              type: 'POST',
              timeout: 10000,
              data: {archivo: archivo},
              error: function() {
                  mostrarRespuesta('Error en la funcion eliminarArchivos.', false);
              },
              success: function(respuesta) {
                  if (respuesta === 0) {
                    mostrarRespuesta('Error al eliminar el archivo: '+respuesta+'. Path incorrecto.', false);
                  } else if(respuesta === 1){
                    mostrarRespuesta('Error al eliminar el archivo: '+respuesta+'. Error en el $_POST', false);
                  } else{
                    mostrarRespuesta('El archivo: '+respuesta+' ha sido eliminado.', true);
                  }
                  mostrarArchivos();
              }
          });
      }
      function mostrarArchivos() {
          $.ajax({
              url: 'mostrar_archivos.php',
              dataType: 'JSON',
              success: function(respuesta) {
                  if (respuesta) {
                      var html = '';
                      for (var i = 0; i < respuesta.length; i++) {
                          if (respuesta[i] != undefined) {
                              html += '<div class="row"><span class="col-10"> ' + respuesta[i] + ' </span> <div class="col-2"> <a class="eliminar_archivo btn btn-danger" href="javascript:void(0);"> Eliminar </a> </div> </div> <hr />';
                          }
                      }
                      $("#archivos_subidos").html(html);
                  }
              }
          });
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
          mostrarArchivos();
          $("#archivos_subidos").on('click', '.eliminar_archivo', function() {
              var archivo = $(this).parents('.row').eq(0).find('span').text();
              archivo = $.trim(archivo);
              eliminarArchivos(archivo);
          });

      });
  </script>
</head>
  <body>
    <div class="container-fluid" id="Contenido">
      <?php require ('navbar.php'); ?>
      <div class="col-10 offset-2" id="Cuerpo">
        <div class="row" >
          <div class="col-12" id="Centrar">
            <h1> Gestionar Archivos </h1>
          </div>
        </div>
        <hr/>
        <div class="row" id="Centrar">
          <div class="col-12">
            <div id="respuesta" class="alert"></div>
          </div>
        </div>
        <hr />
        <div id="archivos_subidos"></div>
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
