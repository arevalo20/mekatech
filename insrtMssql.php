<?php

	$company = $_POST['company'];
	$year = $_POST['year'];

	phpinfo();
	
	$mysqlServerName = "mysql1047.servage.net";
	$mysqlUsername = "cotizatv1";
	$mysqlPassword = "cotizaTV2011";
	$mysqlDbname = "cotizatv1";
	
	// Create connection
	$conn = new mysqli($mysqlServerName, $mysqlUsername, $mysqlPassword, $mysqlDbname);
	// Check connection
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	} 

	$sql = "SELECT * FROM newsletter";
	
	//$sql .= " ORDER BY fecha DESC";
	$result = $conn->query($sql);

	if ($result->num_rows > 0) {
		// output data of each row
		while($row = $result->fetch_assoc()) {
			
			$id = $row["id"];
			$email = $row["email"];
			$web = $row["web"];
			$fecha =$row["fecha"];
			
			echo "WEB: " . $row["web"]. " - DATE: " . $row["fecha"]. " " . $row["email"]. "<br>";
			
			$mssqlServerName = "twmy.sytes.net\sqlexpress";
			$mssqlConnectionInfo = array( "Database"=>"iReports_tst", "UID"=>"sa", "PWD"=>"7pgu3Bcw" );
			$mssqlConnection = sqlsrv_connect( $serverName, $mssqlConnectionInfo);
			
			if( $mssqlConnection === false ) {
			 die( print_r( sqlsrv_errors(), true));
			}

			$mssqlQuery = "INSERT INTO newsletterSuscriptors (id, email, web, fecha) VALUES ('$id','email','web','fecha')";
			$params = array(1, "some data");

			$mssqlStmt = sqlsrv_query( $mssqlConnection, $mssqlQuery, $params);
			if( $mssqlStmt === false ) {
				die( print_r( sqlsrv_errors(), true));
			}

			}
	} 

	else {
		echo "No se encontraron resultados.";
	}
	$conn->close();
?>