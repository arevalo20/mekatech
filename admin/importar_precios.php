<?php

	//Setting México Timezone
	date_default_timezone_set('America/Mexico_City');

	$fileName = "PRECIOS.xlsx";
	
	// Include path
	set_include_path(get_include_path() . PATH_SEPARATOR . '../lib/');
	
	// PHPExcel_IOFactory
	require '../lib/PHPExcel/PHPExcel/IOFactory.php';

	// New  Excel File to read
	$inputFileName = "./tmp_files/" . $fileName;

	$errorDetail = "";
	
	
 	// Read your Excel workbook
	try {
		$inputFileType = PHPExcel_IOFactory::identify($inputFileName);
		$objReader = PHPExcel_IOFactory::createReader($inputFileType);
		$objPHPExcel = $objReader->load($inputFileName);
	}
	
	catch(Exception $e) {
		die('Error loading file "' . pathinfo($inputFileName,PATHINFO_BASENAME) . '": '. $e->getMessage());
	}
	
	// Get Excel File version
	if (strcmp($inputFileType,"Excel5") == 0) {
		$fileExcelVersion = "Excel 97-2003";
	}

	if (strcmp($inputFileType,"Excel2007") == 0) {
		$fileExcelVersion = "Excel 2007-Superior";
	}
	
	//  Get worksheet dimensions
	$sheet = $objPHPExcel->getSheet(0); 
	$highestRow = $sheet->getHighestRow(); 
	$highestColumn = $sheet->getHighestColumn();

	$sql = ''; // query
	$rowData = '';
	$DataArr ='';
	$sqlCreate = '';
	$result_insert = '';
 
	$path_parts = pathinfo($inputFileName);
	$excelFileName = $path_parts['filename']; // since PHP 5.2.0

	$tableName = 'excel_reader_'.$excelFileName;

	// Creating DataBase Connection
	// TESTING Connection
	//$mysqlConn = new mysqli("localhost", "root", "", "cotizatv1");
	$mysqlConn = new mysqli("mysql1047.servage.net", "cotizatv1", "cotizaTV2011", "cotizatv1");
	
	// Check connection
	if ($mysqlConn->connect_error) {
		die("Conexion fallida: " . $mysqlConnconnect_error);
		exit();
	}

	else {
		// Grabbing DateTime 
		$date = date("Y/m/d H:i:s",time());	

		if ($mysqlStmt = $mysqlConn -> prepare ("INSERT INTO productos_mekatech (codigo, producto, tipo, serie, precio, categoria, fecha_alta) VALUES (?, ?, ?, ?, ?, ?, ?)")) {
			
			$mysqlStmt -> bind_param("sssssss",$codigo, $producto, $tipo, $serie, $precio, $categoria, $fecha_alta);
			
			//  Loop through each row of the worksheet in turn
			for ($row = 1; $row <= $highestRow; $row++){
			
				//  Read a row of data into an array
				$rowData = $sheet->rangeToArray('A' . $row . ':' . $highestColumn . $row,NULL,TRUE,FALSE);
			
				$DataArr = $rowData[0];
					
				if($row==1) {

					// Setting Excel Column names
					$columnNameArray = array("CODIGO","PRODUCTO","TIPO","SERIE","PRECIO","CATEGORIA");
					
					if (strcmp($columnNameArray[0],strtoupper($DataArr[0])) !== 0) {
						$errorDetail.= " La columna del archivo intenta importar \"" . $DataArr[0] .  "\" no corresponde a la esperada por el sistema: \"" . $columnNameArray[0] . "\".";				
					}
					
					if (strcmp($columnNameArray[1],strtoupper($DataArr[1])) !== 0) {
						$errorDetail.= ' La columna del archivo intenta importar "' . $DataArr[1] .  '" no corresponde a la esperada por el sistema: "' . $columnNameArray[1] . '".';
					}
					
					if (strcmp($columnNameArray[2],strtoupper($DataArr[2])) !== 0) {
						$errorDetail.= ' La columna del archivo intenta importar "' . $DataArr[2] . '" no corresponde a la esperada por el sistema: "' . $columnNameArray[2] . '".';
					}

					if (strcmp($columnNameArray[3],strtoupper($DataArr[3])) !== 0) {
						$errorDetail.= ' La columna del archivo intenta importar "' . $DataArr[3] . '" no corresponde a la esperada por el sistema: "' . $columnNameArray[3] . '".';
					}

					if (strcmp($columnNameArray[4],strtoupper($DataArr[4])) !== 0) {
						$errorDetail.= ' La columna del archivo intenta importar "' . $DataArr[4] . '" no corresponde a la esperada por el sistema: "' . $columnNameArray[4] . '".';
					}

					if (strcmp($columnNameArray[5],strtoupper($DataArr[5])) !== 0) {
						$errorDetail.= ' La columna del archivo intenta importar "' . $DataArr[5] . '" no corresponde a la esperada por el sistema: "' . $columnNameArray[5] . '".';
					}

					if (!empty($errorDetail)){
						echo $errorDetail . "\r\n Verifique el contenido del archivo y vuelva a intentarlo.\r\n";
						exit(0);
					}
				}

				else {
				
					$codigo = $DataArr[0];
					$producto = $DataArr[1];
					$tipo = $DataArr[2];
					$serie = $DataArr[3];
					$precio = $DataArr[4];
					$categoria = strtoupper($DataArr[5]);
					$fecha_alta = $date;

					
					echo "<table style=\"width:100%\">";

					
					if (!$mysqlStmt -> execute()){
						$errorDetail.= "<p>No se pudo insertar el siguiente registro: \" Codigo: $codigo  Producto: $producto \". $mysqlConn->error";
					}			
				}
			}

			if(!empty($errorDetail)){
				echo $errorDetail;
			}
			
			$mysqlConn->close();
		}
		
		else {
			echo "Error al crear el procedimiento."; 
			
		}
	}

	/*
	// Deletes Temporary Filename
	if (!unlink($inputFileName)) {
		echo "Error al eliminar el archivo." . $fileName;
		}
	else {
		echo "Deleted" . $inputFileName;
	}
	*/
?>
