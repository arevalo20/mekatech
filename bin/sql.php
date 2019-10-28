<?
	function mySqlSelect ($db_url, $db_nombre, $db_user, $db_passwd, $sql_query){
		$db_conn = mysql_connect($db_url, $db_user, $db_passwd) or die('Existe un problema con la conexión: '.mysql_error());
		mysql_select_db($db_nombre, $db_conn) or die("Error al conectarse a la base de datos: ".mysql_error());;
		$resultado = mysql_query($sql_query, $db_conn) or die("Error al ejecutar el query: ".mysql_error());
		mysql_close($db_conn);
		return $resultado;
		
	}

	function mySqlInsert ($db_url, $db_nombre, $db_user, $db_passwd, $sql_query){

		/*echo "DB Url: " . var_dump($db_url);
		echo "DB Name: " . var_dump($db_nombre);
		echo "DB User: " . var_dump($db_user);
		echo "DB Passwd: " . var_dump( $db_passwd);
		echo "DB Query: " . var_dump($sql_query);*/

		$db_conn = mysql_connect($db_url, $db_user, $db_passwd) or die('Existe un problema con la conexión: '.mysql_error());
		mysql_select_db($db_nombre, $db_conn) or die("Error al conectarse a la base de datos: ".mysql_error());;
		$query = mysql_query($sql_query,$db_conn) or die("Error al ejecutar el query: ".mysql_error());;
		mysql_close($db_conn);
	}
	
?>