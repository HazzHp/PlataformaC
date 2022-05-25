<?php

date_default_timezone_set('America/Mexico_City');

//librerias
require 'MailPHP/class.phpmailer.php';
require 'MailPHP/class.smtp.php';

//$liga="http://localhost:8080/pruebaPaltaforma/CambiarPassword.php?datos=".base64_encode($_POST['txt_email']);

$codigoAcceso =  rand(10000, 99999);
$fecha_actual = date("d-m-Y g:i");
//sumo 5 minutos
$fechaVigencia =  date("d-m-Y G:i",strtotime($fecha_actual."+ 5 minutes")); 
//echo $codigoAcceso;

$mail = new PHPMailer();
$mail->IsSMTP();

//Configuracion servidor mail
$mail->From = "user06.pp@gmail.com"; //remitente
$mail->SMTPAuth = true;
$mail->SMTPSecure = 'tls'; //seguridad
$mail->SMTPDebug = 0;
//$mail->Port = 25; 
$mail->Host = "smtp.gmail.com"; // servidor smtp
$mail->Port = 587; //puerto
$mail->Username ='user06.pp@gmail.com'; //nombre usuario
$mail->Password = '&wqFCk3c'; //contraseña
$mail->IsHTML(true);
//Agregar destinatario
$mail->AddAddress($_POST['txt_email']);
$mail->Subject = "Cambio de contraseña";
$mail->Body = "Utiliza el siguiente codigo para poder actualizar tu contraseña de manera correcta <br>
".$codigoAcceso."' <br> tienes hasta las ".$fechaVigencia." para usar el codigo
";
//Avisar si fue enviado o no y dirigir al index
if ($mail->Send()) {
    include "DBconect.php";
    $query = $db->prepare("INSERT INTO CODIGOSACCESO(USUARIO, CODIGO, VIGENCIA) VALUES (:user,:codigo,:vigencia)");
	$query->bindParam(":user",$_POST['txt_email']);
	$query->bindParam(":codigo",$codigoAcceso);
	$query->bindParam(":vigencia",$fechaVigencia);
	$query->execute();

    header("location:cambiarPassword.php");
} else {
  echo'<script type="text/javascript">
         alert("NO ENVIADO, intentar de nuevo");
      </script>';
}
?>