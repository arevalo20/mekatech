<?
  $archivo = fopen($_FILES['form_data']['tmp_name'],"r");
  $nombre = explode(".", $_FILES['form_data']['name']);

  echo $nombre[0]."<br>";  //Nombre del archivo y nombre de la entrega
  echo $nombre[1]."<br>";  //Extensión del archivo

  //Conectarse a la base de mekatech cotizatv1
  $dbh = mysql_connect("mysql1047.servage.net", "cotizatv1", "cotizaTV2011") or die('problema conexión: '.mysql_error());

  //Seleccionar base de datos
  mysql_select_db("cotizatv1", $dbh) or die("error base de datos: ".mysql_error());;

  //Lee toda una linea completa, e ingresa los datos en el array data
  //Insertar valores del vale de 50 y 150 hrs en entrega_cuerpo
  while (($data = fgetcsv($archivo, 10000, ",")) !== FALSE) {
      $strsql = "UPDATE entrega_cuerpo SET nombre_cliente = '".$data[1]."', 50hr_vale = '".$data[2]."', 150hr_vale = '".$data[3]."' WHERE id_cliente = '".$data[0]."'";
      $id++;

	  echo $strsql."<br>";  //Muestra la cadena para ejecutarse

      //Ejecutar inserción de los implementos
      $query_id = mysql_query($strsql, $dbh) or die("problema query: ".mysql_error());

  }

  fclose($archivo);
  mysql_close($dbh);
 ?>
