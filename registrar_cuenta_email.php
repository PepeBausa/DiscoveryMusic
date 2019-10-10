<?php
require 'conexion_DB.php';
$tbl_name = "users";
$nombre = $_POST['name'];
$lastname = $_POST['lastname'];
$username = $_POST['username'];
$correo = $_POST['email'];
$password = $_POST['password'];
$pwd = hash('sha256',$password);
$status = "Pending";
$urlinfo='?username='.$username;
$kind = 1;
$query = "INSERT INTO $tbl_name (username,name,lastname,email,password,status,kind) VALUES ('$username', '$nombre', '$lastname','$correo', '$pwd', '$status', '$kind')";
  mysqli_query($conexion, $query);
  $target_path = "archivos_subidos/";
  mkdir($target_path.$username, 0700);

require 'correo/PHPMailer/PHPMailerAutoload.php';
require "correo/PHPMailer/class.phpmailer.php";

$mail = new PHPMailer;

$mensaje = '
<html xmlns="http://www.w3.org/1999/xhtml">
   <head>
      <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
      <!--[if !mso]><!-->
      <meta http-equiv="X-UA-Compatible" content="IE=edge" />
      <!--<![endif]-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0" />
      <title></title>
      <link rel="stylesheet" href="http://discoverymusic.ddns.net/css/estilo_correo.css">
   </head>
   <body style="Margin:0;padding-top:0;padding-bottom:0;padding-right:0;padding-left:0;min-width:100%;background-color:#f3f2f0;">
      <center class="wrapper" style="width:100%;table-layout:fixed;-webkit-text-size-adjust:100%;-ms-text-size-adjust:100%;background-color:#f3f2f0;">
         <table width="100%" cellpadding="0" cellspacing="0" border="0" style="background-color:#f3f2f0;" bgcolor="#f3f2f0;">
         <tr>
            <td width="100%">
               <div class="webkit" style="max-width:600px;Margin:0 auto;">
                  <!-- ======= start main body ======= -->
                  <table class="outer" align="center" cellpadding="0" cellspacing="0" border="0" style="border-spacing:0;Margin:0 auto;width:100%;max-width:600px;">
                     <tr>
                        <td style="padding-top:0;padding-bottom:0;padding-right:0;padding-left:0;">
                           <!-- ======= start header ======= -->
                           <table border="0" width="100%" cellpadding="0" cellspacing="0"  >
                              <tr>
                                 <td>
                                    <table style="width:100%;" cellpadding="0" cellspacing="0" border="0">
                                       <tbody>
                                          <tr>
                                             <td align="center">
                                                <center>
                                                   <table border="0" align="center" width="100%" cellpadding="0" cellspacing="0" style="Margin: 0 auto;">
                                                      <tbody>
                                                         <tr>
                                                            <td class="one-column" style="padding-top:0;padding-bottom:0;padding-right:0;padding-left:0;" bgcolor="#FFFFFF">
                                                               <!-- ======= start header ======= -->
                                                               <table cellpadding="0" cellspacing="0" border="0" width="100%" bgcolor="#f3f2f0">
                                                                  <tr>
                                                                     <td class="two-column" style="padding-top:0;padding-bottom:0;padding-right:0;padding-left:0;text-align:left;font-size:0;" >
                                                                                 <div class="column" style="width:100%;max-width:80px;display:inline-block;vertical-align:top;">
                                                                                    <table class="contents" style="border-spacing:0; width:100%"  >
                                                                                       <tr>
                                                                                          <td style="padding-top:0;padding-bottom:0;padding-right:0;padding-left:5px;" align="left"><a href="#" target="_blank"><img src="http://discoverymusic.ddns.net/resources/icon.png" alt="" width="60" height="60" style="border-width:0; max-width:60px;height:auto; display:block" align="left"/></a></td>
                                                                                       </tr>
                                                                                    </table>
                                                                                 </div>
                                                                                 <div class="column" style="width:100%;max-width:518px;display:inline-block;vertical-align:top;">
                                                                                    <table width="100%" style="border-spacing:0" cellpadding="0" cellspacing="0" border="0" >
                                                                                       <tr>
                                                                                          <td class="inner" style="padding-top:0px;padding-bottom:10px; padding-right:10px;padding-left:10px;">
                                                                                             <table class="contents" style="border-spacing:0; width:100%" cellpadding="0" cellspacing="0" border="0">
                                                                                                <tr>
                                                                                                   <td align="left" valign="top">&nbsp;</td>
                                                                                                </tr>
                                                                                                <tr>
                                                                                                   <td  align="right" valign="top"><img src="https://gallery.mailchimp.com/fdcaf86ecc5056741eb5cbc18/images/c01afe22-e370-4df3-b96e-927714713f51.jpg" width="20" height="16" style="border-width:0; max-width:20px;height:auto; max-height:16px; padding-top:0px; padding-left:10px" alt=""/><font style="font-size:11px; text-decoration:none; color:#474b53; font-family: Verdana, Geneva, sans-serif; text-align:left; line-height:16px; padding-bottom:30px"><a href="#" target="_blank" style="color:#474b53; text-decoration:none">View as a web page</a></font></td>
                                                                                                </tr>
                                                                                             </table>
                                                                                          </td>
                                                                                       </tr>
                                                                                    </table>
                                                                                 </div>
                                                                              </td>
                                                                           </tr>
                                                                           <tr>
                                                                              <td>&nbsp;</td>
                                                                           </tr>
                                                                        </table>
                                                                     </td>
                                                                  </tr>
                                                                  </tbody>
                                                               </table>
                                                </center>
                                                </td>
                                                </tr>
                                                </tbody>
                                                </table>
                                             </td>
                                          </tr>
                                    </table>
                                    <!-- ======= end header ======= -->
                                    <!-- ======= start hero image ======= --><!-- ======= end hero image ======= -->
                                    <!-- ======= start hero article ======= -->
                                    <table class="one-column" border="0" cellpadding="0" cellspacing="0" width="100%" style="border-spacing:0; border-left:1px solid #e8e7e5; border-right:1px solid #e8e7e5; border-bottom:1px solid #e8e7e5; border-top:1px solid #e8e7e5" bgcolor="#FFFFFF">
                                       <tr>
                                          <td align="left" style="padding:50px 50px 50px 50px">
                                             <p style="color:#262626; font-size:24px; text-align:left; font-family: Verdana, Geneva, sans-serif"><strong>Bienvenido '.$username.'
                                                </strong>
                                             </p>
                                             <p style="color:#000000; font-size:16px; text-align:left; font-family: Verdana, Geneva, sans-serif; line-height:22px ">Nos complace darte la bienvenida a <strong>DiscoveryMusic</strong> la Web donde compartir tus nuevas Covers y darte a conocer. <br />
                                                <br />
                                                <br />
                                                Para confirmar tu Suscripcion pulsa el siguiente boton y empieza a Disfrutar de la musica.
                                                <br />
                                                <br />
                                             </p>
                                             <table border="0" align="left" cellpadding="0" cellspacing="0" style="Margin:0 auto;">
                                                <tbody>
                                                   <tr>
                                                      <td align="center">
                                                         <table border="0" cellpadding="0" cellspacing="0" style="Margin:0 auto;">
                                                            <tr>
                                                               <td width="250" height="60" align="center" bgcolor="#1f3ca6" style="-moz-border-radius: 30px; -webkit-border-radius: 30px; border-radius: 30px;"><a href="http://discoverymusic.ddns.net/confirmacion.php'.$urlinfo.'" style="width:250; display:block; text-decoration:none; border:0; text-align:center; font-weight:bold;font-size:18px; font-family: Arial, sans-serif; color: #ffffff" class="button_link">Confirmar Suscripcion<img src="https://gallery.mailchimp.com/fdcaf86ecc5056741eb5cbc18/images/582dc751-b0fc-4769-ad74-35932c7594dd.png" width="32" height="17" style="padding-top:5px" alt="" border="0"/></a></td>
                                                            </tr>
                                                         </table>
                                                      </td>
                                                   </tr>
                                                </tbody>
                                             </table>
                                             <p style="color:#000000; font-size:16px; text-align:left; font-family: Verdana, Geneva, sans-serif; line-height:22px "><br />
                                                <br />
                                                <br />
                                                <br />
                                                <br />
                                                Saludos Cordiales, <br />
                                                DiscoveryMusic
                                             </p>
                                          </td>
                                       </tr>
                                    </table>
                                    <!-- ======= end hero article ======= -->
                                    <!-- ======= start footer ======= -->
                                    <table cellpadding="0" cellspacing="0" border="0" width="100%">
                                       <tr>
                                          <td height="30">&nbsp;</td>
                                       </tr>
                                       <tr>
                                          <td class="two-column" style="padding-top:0;padding-bottom:0;padding-right:0;padding-left:0;text-align:center;font-size:0;">
                                             <div class="column" style="width:100%;max-width:350px;display:inline-block;vertical-align:top;">
                                                <table class="contents" style="border-spacing:0; width:100%">
                                                   <tr>
                                                      <td width="39%" align="right" style="padding-top:0;padding-bottom:0;padding-right:0;padding-left:0;"><a href="#" target="_blank"><img src="http://discoverymusic.ddns.net/resources/icon.png" alt="" width="59" height="59" style="border-width:0; max-width:59px;height:auto; display:block; padding-right:20px" /></a></td>
                                                      <td width="61%" align="left" valign="middle" style="padding-top:0;padding-bottom:0;padding-right:0;padding-left:0;">
                                                         <p style="color:#787777; font-size:13px; text-align:left; font-family: Verdana, Geneva, sans-serif"> DiscoveryMusic &copy; 2018<br />
                                                            Palma de Mallorca<br />
                                                         </p>
                                                      </td>
                                                   </tr>
                                                </table>
                                             </div>
                                             <div class="column" style="width:100%;max-width:248px;display:inline-block;vertical-align:top;">
                                                <table width="100%" style="border-spacing:0">
                                                   <tr>
                                                      <td class="inner" style="padding-top:0px;padding-bottom:10px; padding-right:10px;padding-left:10px;">
                                                         <table class="contents" style="border-spacing:0; width:100%">
                                                            <tr>
                                                               <td width="32%" align="center" valign="top" style="padding-top:10px">
                                                                  <table width="150" border="0" cellspacing="0" cellpadding="0">
                                                                     <tr>
                                                                        <td width="33" align="center"><a href="#" target="_blank"><img src="https://gallery.mailchimp.com/fdcaf86ecc5056741eb5cbc18/images/1f9161ee-46b5-4bdf-86db-9e32d4b98336.jpg" alt="facebook" width="36" height="36" border="0" style="border-width:0; max-width:36px;height:auto; display:block; max-height:36px"/></a></td>
                                                                        <td width="34" align="center"><a href="#" target="_blank"><img src="https://gallery.mailchimp.com/fdcaf86ecc5056741eb5cbc18/images/4e449140-ec71-4978-97bf-8e0f15b5ff23.jpg" alt="twitter" width="36" height="36" border="0" style="border-width:0; max-width:36px;height:auto; display:block; max-height:36px"/></a></td>
                                                                        <td width="33" align="center"><a href="#" target="_blank"><img src="https://gallery.mailchimp.com/fdcaf86ecc5056741eb5cbc18/images/d21cca91-335e-4fa4-9313-b0ea37e0452b.jpg" alt="linkedin" width="36" height="36" border="0" style="border-width:0; max-width:36px;height:auto; display:block; max-height:36px"/></a></td>
                                                                     </tr>
                                                                  </table>
                                                               </td>
                                                            </tr>
                                                         </table>
                                                      </td>
                                                   </tr>
                                                </table>
                                             </div>
                                          </td>
                                       </tr>
                                       <tr>
                                          <td height="30">&nbsp;</td>
                                       </tr>
                                    </table>
                                    <!-- ======= end footer ======= -->
                                 </td>
                              </tr>
                           </table>
               </div>
               </td>
               </tr>
               </table>
      </center>
   </body>
</html>
';

$mail->IsHTML(true);                                  //
$mail->isSMTP();                                      // Configurar mailer para que use SMTP
$mail->Host = 'smtp.gmail.com';                       // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Habilitar autenticación SMTP
$mail->Username = 'labrast7@gmail.com';               // SMTP username
$mail->Password = 'S_kh5Hgn';                         // SMTP password
$mail->SMTPSecure = 'ssl';                            // Habilitar SSL encryption
$mail->Port = 465;                                    // Puerto TCP al que nos conectaremos


$mail->setFrom('labrast7@gmail.com', 'DiscoveryMusic');
$mail->addAddress($correo, $nombre);

$mail->Subject = 'Confirmacion registro DiscoveryMusic';
$mail->Body    = $mensaje;

if(!$mail->send()) {
    echo 'Error, mensaje no enviado';
    echo 'Error del mensaje: ' . $mail->ErrorInfo;
} else {
    echo 'El mensaje se ha enviado correctamente';
    mysqli_close($conexion);
    header('Location: http://discoverymusic.ddns.net/aviso_correo.php');
}
?>
