<?php

	error_reporting(E_ALL);
	ini_set("display_errors", 1);

	function printPrices ($categoriaProducto,$downPayment,$language){

		$dbUrl = "twmy.cloudapp.net";
		$dbUsername = "gp_comcom_db_usr";
		$dbPassword = "WZ9cKxMNkK8eSe1d";
		$dbName = "gpo_comercom";
		$dbPort = "9936";

		$enganche = $downPayment/100;

		echo '<div align="center">
				<table width="100"  border="0" cellpadding="0" cellspacing="0">';

		//Create Connection
		$mysqlConn = new mysqli($dbUrl, $dbUsername, $dbPassword, $dbName, $dbPort);
		//mysql_query("SET NAMES 'utf8'");
		
		/*
		if (!$mysqlConn->set_charset("utf8")) {
			printf("Error cargando el conjunto de caracteres utf8: %s\n", $mysqli->error);
			exit();
		}
		*/
		
		// Check Connection
		if ($mysqlConn->connect_error) {
			die("Connection failed: " . $mysqlConn->connect_error);
		}
		
		$mysqlConn->set_charset("utf8");
		
		//$acentos = $mysqlConn->query("SET NAMES 'utf8'");

				echo '<tr>
						<td height="18" colspan="2" class="Estilo20">
						
							<table width="800" border="0" align="center">';

		//Creating loop for array content
		foreach ($categoriaProducto as $categoria){

			$categoriaTmp = strtoupper($categoria);

			switch (strtoupper($language)){
				case "SPA":
					$currencyFactor = 1;
					$sqlQuery = "SELECT codigo, nombre, tipo, serie, categoria, precio FROM productos_mekatech WHERE categoria = '$categoriaTmp' AND publicar_financiamiento = 1";
					break;
					
				case "ENG";
					$currencyFactor = 1;
					$sqlQuery = "SELECT codigo, nombre, tipo, serie, categoriaIngles, producto, codigo, precio FROM productos_mekatech WHERE categoria = '$categoriaTmp'";
					break;
					
				default:
					echo "<p> Existe un error el idioma configurado </p>";

			}

			// Creating Result object for the query
			$result = $mysqlConn->query($sqlQuery);

			// If Rows are larger than 0
			if ($result->num_rows > 0) {

								echo '
									<tr>
										<td width="225"><span class="Estilo47" style="font-size:17px; color:#FF6600">' . $categoria . ' </span></td>
									</tr>
									<tr>
										<td width="225"><span class="Estilo47" style="font-size:17px">&emsp;</span></td>
									</tr>
									<tr>
										<td width="225"><span class="Estilo47" style="color:#FF6600">Producto</span></td>
										<td width="99" class="Estilo20"><div align="left"><span class="Estilo42" style="color:#FF6600">Tipo</span></div></td>
										<td width="99" class="Estilo20"><div align="left"><span class="Estilo42" style="color:#FF6600">Serie</span></div></td>
										<td width="120" class="Estilo20"><div align="left"><span class="Estilo42" style="color:#FF6600">Codigo</span></div></td>
										<td width="99" class="Estilo20"><div align="left"><span class="Estilo42" style="color:#FF6600">Precio de Lista</span></div></td>
										<td width="99" class="Estilo20"><div align="left"><span class="Estilo42" style="color:#FF6600">Enganche 35%</span></div></td>
										<td width="99" class="Estilo20"><div align="left"><span class="Estilo42" style="color:#FF6600">Mensualidades</span></div></td>
									</tr>';

				// Output data of each row
				while($row = $result->fetch_assoc()) {
											
					$precioEnganche = $row["precio"] * $currencyFactor * $enganche;
					$precioMensualidad = ($row["precio"] * (1 + $enganche)) / 12;

								echo '<tr>
										<td class="Estilo20">' . $row["nombre"] . '</td>
										<td class="Estilo20">' . $row["tipo"] . '</td>
										<td class="Estilo20">' . $row["serie"] . '</td>
										<td class="Estilo20">' . $row["codigo"] . '</td>
										<td class="Estilo20"><div>' . money_format('%(#10n',$row["precio"]) . '</div></td>
										<td class="Estilo20"><div>' . money_format('%(#10n',$precioEnganche) . '</div></td>
										<td class="Estilo20"><div>' . money_format('%(#10n',$precioMensualidad) . '</div></td>
									</tr>';

				}
			}
									
			// Else
			else {
											
			}
		
								echo '<tr>
										<td class="Estilo20">&nbsp;</td>
										<td class="Estilo20">&nbsp;</td>
										<td class="Estilo20">&nbsp;</td>
										<td class="Estilo20">&nbsp;</td>
										<td class="Estilo20">&nbsp;</td>
										<td class="Estilo20">&nbsp;</td>
										<td class="Estilo20">&nbsp;</td>
									</tr>'						;
		}

							
						echo '</table>
						</td>
					</tr>
				</table>
			</div>';
	}
?>