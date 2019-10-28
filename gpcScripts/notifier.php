
<?php

function notifyViaEmail($emailAddress,$fecha) {

	$logFile = './logs/notifications';
	require_once('phpmailer/class.phpmailer.php');

	$mail = new PHPMailer(); // defaults to using php "mail()"

	$body = file_get_contents('mailnotify.html');
	$body = eregi_replace("[\]",'',$body);
	
	$body = str_replace('%email%', $emailAddress, $body); 

	$mail->IsSMTP();
	$mail->Host = "smtp1.servage.net"; // SMTP server
	//$mail->SMTPDebug = 2; // enables SMTP debug information (for testing)
	
	$mail->SMTPAuth = true; // enables SMTP authentication 
	$mail->Host = "smtp1.servage.net"; // sets the SMTP server
	$mail->Port = 2525; // set the SMTP port for the GMAIL 
	$mail->Username   = "notificaciones@w2a.com.mx"; // SMTP account username

	$mail->Password   = "N0&BHOG=4yox!=9mDb"; // SMTP account password
	
	$mail->SetFrom('notificaciones@w2a.com.mx', 'Sistema de Notificaciones Comercom');
	$mail->AddReplyTo("soporte@w2a.com.mx","Area de Sistemas");

	$mail->Subject = "Registro de correo en sitio Mekatech.tv";
	$mail->AltBody = "To view the message, please use an HTML compatible email viewer!"; // optional, comment out and test
	$mail->MsgHTML($body);
	
	$mail->AddAddress('rarandia@w2a.com.mx','Roberto Arandia');
	$mail->AddCC('oliva.hernandez@w2a.com.mx','Oliva Hernandez');
	$mail->AddBCC('soporte@w2a.com.mx','Soporte Tecnico');
	
	$mail->Subject = "Notificacion registro de correo electronico en sitio Mekatech";

	$f = fopen($logFile,'a'); 

	if(!$mail->Send()) {
	  fwrite($f, $fecha . " - Email " . $emailAddress . " registration email notification failed, error: " . $mail-> ErrorInfo . "\n");
	  fclose($f);
	} 
	else {
	  fwrite($f, $fecha . " - Email " . $emailAddress . " registration email notification was succesful.\n");
	  fclose($f);
	}
}
?>
?>
