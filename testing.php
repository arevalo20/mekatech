
<?php

	$servername = "mysql1047.servage.net";
	$username = "cotizatv1";
	$password = "cotizaTV2011";
	$dbname = "cotizatv1";

	$company = $_POST['company'];
	$year = $_POST['year'];
	
	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);
	// Check connection
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	} 

	$sql = "SELECT web, fecha, email FROM newsletter";
	
	
	$sql .= " ORDER BY fecha DESC";
	$result = $conn->query($sql);

	if ($result->num_rows > 0) {
		// output data of each row
		while($row = $result->fetch_assoc()) {
			echo "id: " . $row["web"]. " - Name: " . $row["fecha"]. " " . $row["email"]. "<br>";
		}
	} 

	else {
		echo "No se encontraron resultados.";
	}
	$conn->close();

?>