<?

	//incluímos la clase ajax
	require ('../include/functions.php');
	require ('xajax/xajax.inc.php');

	//Definimos datos de la encuesta
	$encuesta_titulo_html = "Encuesta de Satisfaccion al Cliente Posventas";
	$encuesta_nombre = touppercase($encuesta_titulo_html);
	$encuesta_fecha = date("d/m/Y");
	// INICIA - CAMBIO DE FECHA TEMPORAL
	// Se comenta la generacion automatica de fecha
	// $encuesta_fecha = date("d/m/Y");
	// Se da la fecha por el usuario.
	$encuesta_fecha = date("28/10/2015");
	// TERMINA - CAMBIO DE FECHA TEMPORAL  
	$encuesta_codigo = "FA-017";
	$encuesta_version = "02";
	$encuesta_logo = "./images/Mekatech.jpg";
	$encuesta_link = "http://www.mekatech.tv/servicio";

	$encuesta_db_url = "mysql1051.servage.net";
	$encuesta_db_nombre = "cotizatv1";
	$encuesta_db_user = "cotizatv1";
	$encuesta_db_passwd = "cotizaTV2011";

?>

<HTML>
	<HEAD>
		<TITLE>
			<?echo $encuesta_titulo_html;?>
		</TITLE>
		
		<style type="text/css">
			
			titulo {
				font-family: Arial,Helvetica,sans-serif;
				font-size: 18px;
			}
		
			cuerpo {
				font-family: Arial,Helvetica,sans-serif;
				font-size: 12px;
			}
			
			pregunta {
				font-family: Arial,Helvetica,sans-serif;
				font-size: 10px;
			}
			
			.style1 {
				color: #F0F0F0
			}
			

		</style>
		
		
		
	</HEAD>
	
	<BODY>
		<table width="100%" border="0">
			<tr>
				<td width="6%" rowspan="2"><img src = <? echo $encuesta_logo ?> width=50 height=50 border=0 alt="logo"></td>
				<td width="50%" rowspan="2" valign = "bottom"><titulo><? echo $encuesta_nombre . " - " . $encuesta_codigo ?></titulo></td>
				<!--<td width="44%"><titulo>Fecha: <? echo $encuesta_fecha; ?></titulo></td>-->
			</tr>
			
			<tr>
				<td><titulo></titulo></td>
			</tr>
		</table>
		



		<form method = "POST" action="reimprimir.php" name="usr_input" id="usr_input" >
			<br>
			
				Numero de Folio: <input type="text" name="folio_num" id = "folio_num"><br>
			
			<br>
			
			<input type="submit" value="Enviar">
		  	
		</form>
	</BODY>
	
</HTML>
