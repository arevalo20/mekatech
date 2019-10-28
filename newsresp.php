<?php

  //Incluye el archivo de notficaciones de GPOCOMERCOM
  include './gpcScripts/notifier.php';

  //Establecer la zona horaria a México
  date_default_timezone_set('America/Mexico_City');

  //Conexión a la base de datos
  $dbh = mysql_connect("mysql1047.servage.net", "cotizatv1", "cotizaTV2011") or die('problema: ' . mysql_error());

  //Seleccionar base de datos
  mysql_select_db("cotizatv1", $dbh);

  //Cargar fecha para grabarla 
  $fecha = date("Y/m/d H:i:s",time());

  //Leer el email del formulario
  $email = $_POST["email"]; 

  //Crear cadena de inserción
  $strsql = "INSERT INTO newsletter(email, web, fecha) ";
  $strsql.= "VALUES('".$email."', 'mekatech', '".$fecha."')";

  //Ejecutar query
  $query = mysql_query($strsql,$dbh);

  //Ejecuta notificacion via eMail
  notifyViaEmail($email,$fecha);

  //Cerrar conexión a la tienda
  mysql_close($dbh);

  //Poner variablle de sesión de grabado
  $_SESSION['grabado'] = 1;

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />
		<title>Newsletter</title>
	</head>

	<body>
		<table width="682" border="0" align="center" cellpadding="0" cellspacing="0"><tr>
	    	<td width="682"><img src="http://www.mekatech.tv/image13/respuesta.jpg" width="682" height="167" /></td>
		</tr>
		</table>
	</body>
</html>