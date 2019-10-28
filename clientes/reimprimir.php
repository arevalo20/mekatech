	<? require "encuesta_post_vars.php" ?>
	<? require "encuesta_header_imprimir.php"; ?>
	
	<? require "../bin/convert.php" ?>
	<? require "../bin/sql.php" ?>

	<BODY>
	
	<?
		//Establecer la zona horaria a México
		date_default_timezone_set('America/Mexico_City');
		
		$folio_num =  $_POST['folio_num'];
		$encuesta_db_url = "mysql1051.servage.net";
		$encuesta_db_nombre = "cotizatv1";
		$encuesta_db_user = "cotizatv1";
		$encuesta_db_passwd = "cotizaTV2011";
		$encuesta_logo = "./images/Mekatech.jpg";
		
		//Array para poner en español el día y el mes
		$dias = array("Domingo","Lunes","Martes","Miercoles","Jueves","Viernes","Sabado");
		$meses = array("Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre");

		// Create connection
		$conn = new mysqli($encuesta_db_url, $encuesta_db_user, $encuesta_db_passwd, $encuesta_db_nombre);
		// Check connection
		if ($conn->connect_error) {
			die("Connection failed: " . $conn->connect_error);
		} 

		//Se declara la cadena del query del encabezado
		$sql_query_header = "SELECT id, fecha, nombre_cliente, doc_compra, fecha_solicitud_servicio,fecha_cierre_servicio, nombre_cts ";
		$sql_query_header.= "FROM encuesta_satisfaccion_cliente_fpv_004_header ";
		$sql_query_header.= "WHERE id = '$folio_num'; ";

		$result = $conn->query($sql_query_header);

		if ($result->num_rows > 0) {
		// output data of each row
			while($row = $result->fetch_assoc()) {
				$id = $row["id"];
				$encuesta_fecha = new DateTime ($row["fecha"]);
				$encuesta_fecha = date_format($encuesta_fecha, 'd/m/Y');
				$fullname = $row["nombre_cliente"];
				$doc_compra = $row["doc_compra"];
				$fecha_solicitud_servicio = $row["fecha_solicitud_servicio"];
				$fecha_cierre_servicio = $row["fecha_cierre_servicio"];
				$nombre_cts = $row["nombre_cts"];

				$sql_query_detail = "SELECT num_pregunta, respuesta FROM encuesta_satisfaccion_cliente_fpv_004_detail WHERE encabezado_id = '$folio_num';";
				
				$result = $conn->query($sql_query_detail);
				
				$i = 0;
				
				if ($result->num_rows > 0) {
				// output data of each row
					while($row = $result->fetch_assoc()) {
						$i++;
						//$num[$i] = $row["num_pregunta"];
						$num = $row["num_pregunta"];
						$respuesta[$num] = $row["respuesta"];
					}
				}
				
				else {
					echo "No existen detalles registrados con ese folio.";
					die();
				}				
			}
		}

		else {
			echo "No existe el numero de Folio.";
			die();
		}

		//Se declara la cadena del query de detalle

		$conn->close();

	echo '<script type="text/javascript">window.print();</script>';
	?>
	</br>
	
		<cuerpo>
			<table width="100%" border="0">
				<tr>
					<td width="6%" rowspan="2"><img src= <? echo $encuesta_logo ?> width=50 height=50 border=0 alt="logo"></td>
					<td width="30%" rowspan="2" valign="bottom"><titulo><? echo $encuesta_nombre . " " . $encuesta_codigo ?></titulo></td>
					<td width="29%" height="25" align="left"><titulo>Fecha: <? echo $encuesta_fecha ?></titulo></td>
					<td width="35%" align="left"><titulo>Folio: <? echo $id;?></titulo></td>
				</tr>
				
				<tr>
					<td colspan="2" align="left"><titulo></titulo></td>
				</tr>
			</table>
		</cuerpo>

		<table border=1 bgcolor="#eeeeee">
		
			<tr>
				<td><cuerpo>Nombre del Cliente:</cuerpo></td>
				<td align="left"><cuerpo><? echo $fullname; ?></cuerpo></td>				
			</tr>
			
			<tr>
				<td><cuerpo>Documento que ampara su compra:</cuerpo></td>
				<td align="left"><cuerpo><? echo $doc_compra; ?></cuerpo></td>
			</tr>

			<tr>
				<td><cuerpo>Fecha de inicio de solicitud de servicio:</cuerpo></td>
				<td align="left"><cuerpo><? echo $fecha_solicitud_servicio; ?></cuerpo></td>
			</tr>
			
			<tr>
				<td><cuerpo>Fecha de cierre del servicio:</cuerpo></td>
				<td align="left"><cuerpo><? echo $fecha_cierre_servicio; ?></cuerpo></td>
			</tr>
			
			<tr>
				<td><cuerpo>Nombre CTS:</cuerpo></td>
				<td align="left"><cuerpo><? echo $nombre_cts; ?></cuerpo></td>
			</tr>

		</table>
	 
		<table border=1 bgcolor="#eeeeee">
			<tr>
				<td><pregunta>#</pregunta></td>
				<td align="center"><pregunta>PREGUNTA</pregunta></td>
				<td><pregunta>Respuesta</pregunta></td>
			</tr>
		
			<tr>
				<td><pregunta>1</pregunta></td>
				<td><pregunta>¿COMO CALIFICA EL SERVICIO DE POSVENTA BRINDADA POR EL CTS?</pregunta></td>
				<td><pregunta><? echo $respuesta['1']; ?></pregunta></td>
			</tr>

			<tr>
				<td><pregunta>2</pregunta></td>
				<td><pregunta>¿COMO CONSIDERA USTED EL TIEMPO DE RESPUESTA QUE EL CTS LE BRINDO EN SU REPRACION Y/O MANTENIMIENTO DE SU EQUIPO?</pregunta></td>
				<td><pregunta><? echo $respuesta['2']; ?></pregunta></td>
			</tr>

			<tr>
			<td><pregunta>3</pregunta></td>
				<td><pregunta>¿QUE LE PARECIO EL CONOCIMIENTO Y LA AMABILIDAD DEL SERVICIO QUE LE BRINDO EL PERSONAL QUE LE ATENDIO?</pregunta></td>
				<td><pregunta><? echo $respuesta['3']; ?></pregunta></td>
			</tr>

			<tr>
				<td><pregunta>4</pregunta></td>
				<td><pregunta>¿COMO CALIFICA LA ASISTENCIA TECNICA O ASESORIA QUE EL CTS LE BRINDO EN LA REPARACION Y/O MANTENIMIENTO DE SU EQUIPO?</pregunta></td>
				<td><pregunta><? echo $respuesta['4']; ?></pregunta></td>
			</tr>

			<tr>
				<td><pregunta>5</pregunta></td>
				<td><pregunta>¿COMO CALIFICA USTED LA CALIDAD DE NUESTROS SERVICIOS POSVENTA?</pregunta></td>
				<td><pregunta><? echo $respuesta['5']; ?></pregunta></td>
			</tr>

			<tr>
				<td><pregunta>6</pregunta></td>
				<td><pregunta>¿COMO CALIFICA USTED NUESTRA ATENCION TELEFONICA?</pregunta></td>
				<td><pregunta><? echo $respuesta['6']; ?></pregunta></td>
			</tr>
			
			<tr>
				<td><pregunta>7</pregunta></td>
				<td><pregunta>¿COMO PODEMOS MEJORAR NUESTRO SERVICIO DE POSVENTA QUE LE BRINDAMOS?</pregunta></td>
				<td><pregunta><? echo $respuesta['7']; ?></pregunta></td>
			</tr>
		</table>
		
		<!--<titulo><a href = "<? echo $encuesta_link ?>"> Nueva encuesta </a></titulo>-->
		<titulo><a href = ""> Nueva encuesta </a></titulo>
		
		</br>
		</br>
		
		<? include "encuesta_footer.php" ?>
		
	</BODY>
	
</HTML>
