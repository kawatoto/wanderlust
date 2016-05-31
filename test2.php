<?php
class correoWanderlust{
//Incluimos la clase de PHPMailer
//require_once('phpmailer/class.phpmailer.php');
//require_once('../class.phpmailer.php');
require 'class.phpmailer.php';

$correo = new phpmailer(); //Creamos una instancia en lugar usar mail()

$correo­->IsSMTP()
//permite modo debug para ver mensajes de las cosas que van ocurriendo
$correo­->SMTPDebug = 2;
//Debo de hacer autenticación SMTP
$correo­->SMTPAuth = true;
$correo­->SMTPSecure = "ssl";
//indico el servidor de Gmail para SMTP
$correo­->Host = "smtp.gmail.com";
//indico el puerto que usa Gmail
$correo­->Port = 465;
//indico un usuario / clave de un usuario de gmail
$correo­->Username = "kawatoto.j33@gmail.com";
$correo­->Password = "Parachutes1";

//Usamos el SetFrom para decirle al script quien envia el correo
$correo->SetFrom("kawatoto.j33@gmail.com", "Mi Codigo PHP");

//Usamos el AddReplyTo para decirle al script a quien tiene que responder el correo
$correo->AddReplyTo("kawatoto.j33@gmail.com","Mi Codigo PHP");

//Usamos el AddAddress para agregar un destinatario
$correo->AddAddress("kawatoto.j33@gmail.com", "Robot");

//Ponemos el asunto del mensaje
$correo->Subject = "Mi primero correo con PHPMailer";

/*
 * Si deseamos enviar un correo con formato HTML utilizaremos MsgHTML:
 * $correo->MsgHTML("<strong>Mi Mensaje en HTML</strong>");
 * Si deseamos enviarlo en texto plano, haremos lo siguiente:
 * $correo->IsHTML(false);
 * $correo->Body = "Mi mensaje en Texto Plano";
 */
$correo->MsgHTML("Mi Mensaje en <strong>HTML</strong>");

//Enviamos el correo
if(!$correo->Send()) {
  echo "Hubo un error: " . $correo->ErrorInfo;
} else {
  echo "Mensaje enviado con exito.";
}
}
?>
