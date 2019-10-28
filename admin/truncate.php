<?php

	//Setting México Timezone
	date_default_timezone_set('America/Mexico_City');

	
	// Include path
	set_include_path(get_include_path() . PATH_SEPARATOR . '../lib/');
	
	$errorDetail = "";
	
	
 	// Read your Excel workbook

	// Creating DataBase Connection
	// TESTING Connection
	//$mysqlConn = new mysqli("localhost", "root", "", "cotizatv1");
	$mysqlConn = new mysqli("mysql1047.servage.net", "cotizatv1", "cotizaTV2011", "cotizatv1");
	

// Check connection
        if (mysqli_connect_errno($mysqlConn))
        {
            echo "Failed to connect to MySQL: " . mysqli_connect_error();
        }    

    $query = "TRUNCATE TABLE productos_mekatech";
    mysqli_query($mysqlConn,$query);
?>
	

