<HTML>
	<HEAD>
		<!--
			2015-04-28
			Se cambia el Titulo de:   
			<TITLE>Encuesta de satisfacci�n al Cliente</TITLE>
			A:
			<TITLE>Evaluaci�n de Seguimiento Posventa</TITLE>
		-->

		<!--
			2015-10-21
			Se cambia el Titulo de:   
			<TITLE>Evaluaci�n de Seguimiento Posventa</TITLE>
			A:
			<TITLE>ENCUESTA DE SATISFACCION AL CLIENTE POSVENTA</TITLE>
		-->
		<TITLE>Encuesta de Satisfacci�n al Cliente Posventa</TITLE>
		
		<style type="text/css">
			titulo {font-family: Arial,Helvetica,sans-serif;
				font-size: 18px;
			}

			cuerpo {font-family: Arial,Helvetica,sans-serif;
				font-size: 12px;
			}

			pregunta {font-family: Arial,Helvetica,sans-serif;
				font-size: 10px;
			}
		</style>
	</HEAD>
	
	<BODY>
		<?
			//Establecer la zona horaria a M�xico
			date_default_timezone_set('America/Mexico_City');
			
			function touppercase($cadena) { 
				$cadena = strtoupper($cadena); 
				$cadena = str_replace("�", "�", $cadena); 
				$cadena = str_replace("�", "�", $cadena); 
				$cadena = str_replace("�", "�", $cadena); 
				$cadena = str_replace("�", "�", $cadena); 
				$cadena = str_replace("�", "�", $cadena);
				$cadena = str_replace("�", "�", $cadena);
				return ($cadena); 
			}

			//Conexi�n a la base de datos
			$dbh = mysql_connect("mysql1051.servage.net", "cotizatv1", "cotizaTV2011") or die('problema conexi�n: '.mysql_error());

			//Seleccionar base de datos
			mysql_select_db("cotizatv1", $dbh) or die("error base de datos: ".mysql_error());;

			//Fecha del sistema cuando fue grabada la encuesta
			$fecha = date("Y/m/d H:i:s",time());

			//De las fechas de adquisici�n y de visita,invertir el dia y el a�� para grabarla a la base
			$fecha_solicitud_servicio = $_POST['fecha_solicitud_servicio'];
			$fecha_cierre_servicio = $_POST['fecha_cierre_servicio'];

			$fecha_solicitud_servicio_mes = substr($fecha_solicitud_servicio, 0, 2);
			$fecha_solicitud_servicio_dia = substr($fecha_solicitud_servicio, 3, 2);
			$fecha_solicitud_servicio_anio = substr($fecha_solicitud_servicio, 6, 4);
			$fecha_solicitud_servicio = $fecha_solicitud_servicio_anio.'-'.$fecha_solicitud_servicio_dia.'-'.$fecha_solicitud_servicio_mes;

			$fecha_cierre_servicio_mes = substr($fecha_cierre_servicio, 0, 2);
			$fecha_cierre_servicio_dia = substr($fecha_cierre_servicio, 3, 2);
			$fecha_cierre_servicio_anio = substr($fecha_cierre_servicio, 6, 4);
			$fecha_cierre_servicio = $fecha_cierre_servicio_anio.'-'.$fecha_cierre_servicio_dia.'-'.$fecha_cierre_servicio_mes;

			//Cadena para grabar el encabezado
			//$full_name = strtoupper($_POST[fullname]);
			//$full_name = str_replace("�", "�", $full_name);
			
			$full_name = touppercase($_POST[fullname]);
			$documento = touppercase($_POST[documento]);
			$nombre_cts = touppercase($_POST[nombre_cts]);
			
			$strsql = "INSERT INTO encuesta_satisfaccion_cliente_fpv_004_header(fecha, nombre_cliente, doc_compra, fecha_solicitud_servicio, fecha_cierre_servicio, nombre_cts, version_formato) ";
			$strsql.= "VALUES('$fecha', '$full_name', '$documento', '$fecha_solicitud_servicio', '$fecha_cierre_servicio', '$nombre_cts', '$_POST[version_formato]')";

			//Ejecutar query para grabar el encabezado
			$query = mysql_query($strsql,$dbh) or die("problema query: ".mysql_error());;

			//Leer el id que se asign� a la encuensta para ligarlo con las preguntas
			$strsql = "SELECT id FROM encuesta_satisfaccion_cliente_fpv_004_header ORDER BY id DESC LIMIT 1";

			//Ejecutar query de lectura del id de la encuesta
			$query_id = mysql_query($strsql, $dbh) or die ("problema query: ".mysql_error());

			//Leer id de la encuesta
			while($var = mysql_fetch_row($query_id)){
				$id = $var[0];
			};

			//Grabar el id de la encuesta, el n�mero de la pregunta y radio button de las preguntas 1-6
			
			for($i=1; $i<=6; $i++) {
				$radio = $_POST['radio_ask'.$i];
				
				switch ($radio) {
						case 3:
							$radio = "EXCELENTE";
							break;
						case 2:
							$radio = "BUENO";
							break;
						case 1:
							$radio = "REGULAR";
							break;
						case 0:
							$radio = "MALO";
							break;	
				}
				
				$strsql = "INSERT INTO encuesta_satisfaccion_cliente_fpv_004_detail(encabezado_id, num_pregunta, respuesta)";
				$strsql.= "VALUES('$id', '$i', '$radio')";

				//Ejecutar query para grabar cada rengl�n
				$query = mysql_query($strsql,$dbh) or die("problema query: ".mysql_error());;
			}

			$comm_ask7 = touppercase ($_POST['comm_ask7']);
			$strsql = "INSERT INTO encuesta_satisfaccion_cliente_fpv_004_detail(encabezado_id, num_pregunta, respuesta)";
			$strsql.= "VALUES('$id', '$i', '$comm_ask7')";

			//Ejecutar query para grabar cada rengl�n
			$query = mysql_query($strsql,$dbh) or die("problema query: ".mysql_error());;

			
			////Grabar el id de la encuesta, el n�mero de la pregunta y el comentario de la pregunta 4
			//$radio = $_POST['radio_ask4'];
			//$strsql = "INSERT INTO detalle_satisfaccion(id, pregunta, sino) ";
			//$strsql.= "VALUES('$id', '4', '$radio')";

			//Ejecutar query para grabar el rengl�n
			//$query = mysql_query($strsql,$dbh) or die("problema query: ".mysql_error());;


			//Grabar el id de la encuesta, el n�mero de la pregunta y radio button de la pregunta 7
			//$comentario = $_POST['comm_ask7'];
			//$strsql = "INSERT INTO detalle_satisfaccion(id, pregunta, comentario) ";
			//$strsql.= "VALUES('$id', '7', '$comentario')";

			//Ejecutar query para grabar cada rengl�n
			//$query = mysql_query($strsql,$dbh) or die("problema query: ".mysql_error());;


			////Grabar el id de la encuesta, el n�mero de la pregunta y el comentario de las preguntas 6-8
			//for($i=6; $i<=8; $i++) {
			//	$radio = $_POST['radio_ask'.$i];
			//	$strsql = "INSERT INTO detalle_satisfaccion(id, pregunta, sino) ";
			//	$strsql.= "VALUES('$id', '$i', '$radio')";
			//
				//Ejecutar query para grabar cada rengl�n
				//$query = mysql_query($strsql,$dbh) or die("problema query: ".mysql_error());;
			//}
		
			//Cerrar conexi�n
			mysql_close($dbh);
			echo '<script type="text/javascript">window.print();</script>';
		?>
		
		<table width="100%" border="0">
			<tr>
				<td width="6%" rowspan="2"><img src="../clientes/images/Mekatech.jpg" width=50 height=50 border=0 alt="logo"></td>
		 
				<!--
					2015-04-28
					Se cambia: <titulo>Encuesta de Satisfacci�n al Cliente F-PSV-020.R1</titulo>
					A: <titulo>Evaluaci�n de Seguimiento Posventa F-PSV-020.R1</titulo>
				-->
				
				<!--
					2015-10-21
					Se cambia: <titulo>Encuesta de Satisfacci�n al Cliente F-PSV-020.R1</titulo>
					A: <titulo>Encuesta de Satisfacci�n al Cliente FPV-004</titulo>
				-->
		 
				<td width="30%" rowspan="2" valign="bottom"><titulo>Encuesta de Satisfacci�n al Cliente FA-017</titulo></td>
				<!--<td width="29%" height="25" align="left"><titulo>Fecha: <? echo $fecha; ?></titulo></td>-->
				<td width="35%" align="left"><titulo>Folio: <? echo $id; ?></titulo></td>
			</tr>
			
			<tr>
				<td colspan="2" align="left"><titulo></titulo></td>
			</tr>
			
		</table>
		
		<table border=1 bgcolor="#eeeeee">
			<tr>
				<td><cuerpo>Nombre del Cliente</cuerpo></td>
				<td align="left"><cuerpo><? echo $full_name; ?></cuerpo></td>
			</tr>
			<tr>
				<!--
					2015-10-21
					Se cambia: <cuerpo>Documento que ampara la compra</cuerpo>
					A: <cuerpo>Documento que ampara la compra</cuerpo>
				-->
				<td><cuerpo>Documento que ampare su compra:</cuerpo></td>
				<td align="left"><cuerpo><? echo $documento; ?></cuerpo></td>
			</tr>
			<tr>
				<!--
					2015-10-21
					Se cambia: <cuerpo>Fecha de Adquisici�n</cuerpo>
					A: <cuerpo>Fecha de inicio de solicitud de servicio:</cuerpo>
				-->			
				<td><cuerpo>Fecha de inicio de solicitud de servicio:</cuerpo></td>
				<td align="left"><cuerpo><? echo $_POST['fecha_solicitud_servicio']; ?></cuerpo></td>
			</tr>
			<tr>
				<!--
					2015-10-21
					Se cambia: <cuerpo>Fecha de Visita</cuerpo>
					A: <cuerpo>Fecha de inicio de solicitud de servicio:</cuerpo>
				-->
				<td><cuerpo>Fecha de cierre del servicio:</cuerpo></td>
				<td align="left"><cuerpo><? echo $_POST['fecha_cierre_servicio']; ?></cuerpo></td>
			</tr>
			
			<tr>
				<!--
					2015-10-21
					Se agrega: <cuerpo>Nombre CTS</cuerpo>
				-->
				<td><cuerpo>Nombre CTS:</cuerpo></td>
				<td align="left"><cuerpo><? echo $nombre_cts; ?></cuerpo></td>
			</tr>
			
		</table>
		
		<table border=1 bgcolor="#eeeeee">
			<tr>
				<td><pregunta>#</pregunta></td>
				<td align="center"><pregunta>PREGUNTA</pregunta></td>
				<td></td>
			</tr>
			
			<tr> <!-- INICIA PREGUNTA 1 -->
				<td><pregunta>1</pregunta></td>
				<!--
					2015-10-21
					Se cambia: <pregunta>Asigne una calificaci�n de la calidad del equipo recibido (5 la m�s alta, 0 la m�s baja)</pregunta>
					A: <cuerpo>Fecha de inicio de solicitud de servicio:</cuerpo>
				-->
				<td><pregunta>�C�mo califica el servicio de posventa brindada por el CTS?</pregunta></td>
				<td><pregunta> <?
					switch ($_POST['radio_ask1']) {
						case 3:
							echo "EXCELENTE";
							break;
						case 2:
							echo "BUENO";
							break;
						case 1:
							echo "REGULAR";
							break;
						case 0:
							echo "MALO";
							break;	
					}
					?></pregunta>
				</td>
			</tr>
			<!-- TERMINA PREGUNTA 1 -->
			
			<tr> <!-- INICIA PREGUNTA 2 -->
				<td><pregunta>2</pregunta></td>
				<!--
					2015-10-21
					Se cambia: <pregunta>Asigne una calificaci�n de la asesoria recibida sobre el equipo(5 la m�s alta, 0 la m�s baja)</pregunta>
					A: <cuerpo>�C�mo considera usted el tiempo de respuesta que el CTS le brindo en su reparaci�n y/o mantenimiento de su equipo?</cuerpo>
				-->
				<td><pregunta>�C�mo considera usted el tiempo de respuesta que el CTS le brindo en su reparaci�n y/o mantenimiento de su equipo?</pregunta></td>
				<td><pregunta> <?
					switch ($_POST['radio_ask2']) {
						case 3:
							echo "EXCELENTE";
							break;
						case 2:
							echo "BUENO";
							break;
						case 1:
							echo "REGULAR";
							break;
						case 0:
							echo "MALO";
							break;	
					}
					?></pregunta>
				</td>
			</tr>
			<!-- TERMINA PREGUNTA 2 -->
			
			<tr> <!-- INICIA PREGUNTA 3 -->
				<td><pregunta>3</pregunta></td>
				<!--
					2015-10-21
					Se cambia: <pregunta>Asigne una calificaci�n de la asesoria recibida sobre el equipo(5 la m�s alta, 0 la m�s baja)</pregunta>
					A: <cuerpo>�C�mo considera usted el tiempo de respuesta que el CTS le brindo en su reparaci�n y/o mantenimiento de su equipo?</cuerpo>
				-->
				<td><pregunta>�Que le pareci� el conocimiento y la amabilidad del servicio que le brindo el personal que le atendi�?</pregunta></td>
				<td><pregunta> <?
					switch ($_POST['radio_ask3']) {
						case 3:
							echo "EXCELENTE";
							break;
						case 2:
							echo "BUENO";
							break;
						case 1:
							echo "REGULAR";
							break;
						case 0:
							echo "MALO";
							break;	
					}
					?></pregunta>
				</td>
			</tr>
			<!-- TERMINA PREGUNTA 3 -->
			
			<tr> <!-- INICIA PREGUNTA 4 -->
				<td><pregunta>4</pregunta></td>
				<!--
					2015-10-21
					Se cambia: <pregunta>Su equipo ha presentado fallas</pregunta>
					A: <cuerpo>�C�mo califica la asistencia t�cnica o asesor�a que el CTS le brindo en la reparaci�n y/o mantenimiento de su equipo?</cuerpo>
				-->
				<td><pregunta>�C�mo califica la asistencia t�cnica o asesor�a que el CTS le brindo en la reparaci�n y/o mantenimiento de su equipo?</pregunta></td>
				<td><pregunta> <?
					switch ($_POST['radio_ask4']) {
						case 3:
							echo "EXCELENTE";
							break;
						case 2:
							echo "BUENO";
							break;
						case 1:
							echo "REGULAR";
							break;
						case 0:
							echo "MALO";
							break;	
					}
					?></pregunta>
				</td>
			</tr>
			<!-- TERMINA PREGUNTA 4 -->
			
			<tr> <!-- INICIA PREGUNTA 5 -->
				<td><pregunta>5</pregunta></td>
				<!--
					2015-10-21
					Se cambia: <pregunta>Si su equipo presento fallas, �A qui�n las report�?, e indique las fallas</pregunta>
					A: <cuerpo>�C�mo califica usted la calidad de nuestros servicios posventa?</cuerpo>
				-->
				<td><pregunta>�C�mo califica usted la calidad de nuestros servicios posventa?</pregunta></td>
				<td><pregunta> <?
					switch ($_POST['radio_ask5']) {
						case 3:
							echo "EXCELENTE";
							break;
						case 2:
							echo "BUENO";
							break;
						case 1:
							echo "REGULAR";
							break;
						case 0:
							echo "MALO";
							break;	
					}
					?></pregunta>
				</td>
			</tr>
			<!-- TERMINA PREGUNTA 5 -->
			
			<tr> <!-- INICIA PREGUNTA 6 -->
				<td><pregunta>6</pregunta></td>
				<!--
					2015-10-21
					Se cambia: <pregunta>�Recibi� una pronta respuesta de su reporte?</pregunta>
					A: <cuerpo>�C�mo califica usted nuestra atenci�n telef�nica?</cuerpo>
				-->				
				<td><pregunta>�C�mo califica usted nuestra atenci�n telef�nica?</pregunta></td>
				<td><pregunta> <?
					switch ($_POST['radio_ask6']) {
						case 3:
							echo "EXCELENTE";
							break;
						case 2:
							echo "BUENO";
							break;
						case 1:
							echo "REGULAR";
							break;
						case 0:
							echo "MALO";
							break;	
					}
					?></pregunta>
				</td>				
			</tr>
			<!-- TERMINA PREGUNTA 6 -->
			
			<tr> <!-- INICIA PREGUNTA 7 -->
			   <td><pregunta>7</pregunta></td>
				<!--
					2015-10-21
					Se cambia: <pregunta>�Recibi� una pronta respuesta de su reporte?</pregunta>
					A: <cuerpo>�C�mo califica usted nuestra atenci�n telef�nica?</cuerpo>
				-->
				<td><pregunta>�Usted cuenta con un taller cercano para la prestaci�n de su servicio posventa Mekatech</pregunta></td>
				<td><pregunta><? echo $comm_ask7; ?></pregunta></td>
			</tr>
			<!-- TERMINA PREGUNTA 7 -->
	  
			 
			<!-- INICIA - SE COMENTAN PREGUNTAS ELIMINADAS EN CAMBIO DE ENCUESTA
			<tr>
				<td><pregunta>8</pregunta></td>
				<td><pregunta>�El equipo le ayuda a sus labores agr�colas y contribuye al beneficio de su parcela?</pregunta></td>
				<td><pregunta><? 
					if($_POST['radio_ask8'] == 1) {
						echo "Si"; 
						}
						else {
						  echo "No"; 
						};?>
				</pregunta></td>
			</tr>
			<tr>
			<td><pregunta>9</pregunta></td>
			<td><pregunta>Asigne una calificaci�n al servicio y/o mantenimiento proporcionado (5 la m�s alta, 0 la m�s baja)</pregunta></td>
			<td><pregunta><? echo $_POST['radio_ask9']; ?></pregunta></td>
			</tr>
			<tr>
			<td><pregunta>10</pregunta></td>
			<td><pregunta>�Qu� beneficios le ha traido el equipo recibido?</pregunta></td>
			<td><pregunta><? echo $_POST['comm_ask10']; ?></pregunta></td>
			</tr>
			<tr>
			<td><pregunta>11</pregunta></td>
			<td><pregunta>�Qu� nuevos equipos e implementos le gustaria desarrollara la empresa?</pregunta></td>
			<td><pregunta><? echo $_POST['comm_ask11']; ?></pregunta></td>
			</tr>
			<tr>
			<td><pregunta>12</pregunta></td>
			<td><pregunta>�En qu� aspectos cree que debemos mejorar?</pregunta></td>
			<td><pregunta><? echo $_POST['comm_ask12']; ?></pregunta></td>
			</tr>
			<tr>
			<td><pregunta>13</pregunta></td>
			<td><pregunta>Comentarios extra</pregunta></td>
			<td><pregunta><? echo $_POST['comm_ask13']; ?></pregunta></td>
			</tr>
			TERMINA - SE COMENTAN PREGUNTAS ELIMINADAS EN CAMBIO DE ENCUESTA
			--->
		</table>
		<titulo><a href='http://www.mekatech.tv/clientes'>Nueva encuesta</a></titulo>
 </br>
 </br>
 <img src="../servicio/images/pie_cotiza.jpg" width=700 height=50 border=0 alt="logo">
</BODY>
</HTML>
