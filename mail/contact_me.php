  <?php
// Check for empty fields
if(empty($_POST['name'])  		||
   empty($_POST['email']) 		||
   empty($_POST['phone']) 		||
   empty($_POST['start']) 		||
   empty($_POST['end']) 		||
   empty($_POST['message'])	||
   !filter_var($_POST['email'],FILTER_VALIDATE_EMAIL))
   {
	echo "No arguments Provided!";
	return false;
   }

$name = $_POST['name'];
$email_address = $_POST['email'];
$phone = $_POST['phone'];
$start = $_POST['start'];
$end = $_POST['end'];
$message = $_POST['message'];

// Create the email and send the message
$to = 'wanderlust.icea@gmail.com, mariansanzm@gmail.com, diana_lealz@hotmail.com, paloma-macer@hotmail.com'; // Add your email address inbetween the '' replacing yourname@yourdomain.com - This is where the form will send a message to.
$email_subject = "Reservación de:  $name";
$email_body = "Has recibido una nueva reservacion para Zimapán.\n\n"."Aquí están los detalles:\n\nNombre: $name\nEmail: $email_address\nTeléfono: $phone\nFecha de Inicio: $start\nFecha de Fin: $end\nMessage: \n$message \n\nGracias por viajar con nosotros.";
$headers = "From: noreply@wanderlust.com\n"; // This is the email address the generated message will be from. We recommend using something like noreply@yourdomain.com.
$headers .= "Reply-To: $email_address";
mail($to,$email_subject,$email_body,$headers);
return true;
?>
