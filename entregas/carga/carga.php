<?
  $archivo = fopen($_FILES['form_data']['tmp_name'],"r");
  $nombre = explode(".", $_FILES['form_data']['name']);

  echo $nombre[0]."<br>";  //Nombre del archivo y nombre de la entrega
  echo $nombre[1]."<br>";  //Extensión del archivo

  //Conectarse a la base de mekatech cotizatv1
  $dbh = mysql_connect("mysql1047.servage.net", "cotizatv1", "cotizaTV2011") or die('problema conexión: '.mysql_error());

  //Seleccionar base de datos
  mysql_select_db("cotizatv1", $dbh) or die("error base de datos: ".mysql_error());;


  //Insertar el encabezado con el nombre del archivo
  $strsql = "INSERT INTO entrega_encabezado(nombre) VALUES('$nombre[0]')";
  //Ejecutar inserción del encabezado
  $query_id = mysql_query($strsql, $dbh) or die("problema query: ".mysql_error());


  //Obtener el id que se le asignó a la entrega
  $strsql = "SELECT id_entrega FROM entrega_encabezado ORDER BY id_entrega DESC LIMIT 1";
  //Ejecutar consulta
  $query_id = mysql_query($strsql, $dbh) or die("problema query: ".mysql_error());
  //Leer id_entrega desde la consulta
  while($var = mysql_fetch_row($query_id)){
    $id_entrega = $var[0];
  };

  //Leer cada renglón del archivo exceptuando el primero que lleva los encabezados
  $row = 0;
  //Lee toda una linea completa, e ingresa los datos en el array data
  //Primero insertar los valores de entrega_implementos y luego entrega_cuerpo
  while (($data = fgetcsv($archivo, 10000, ",")) !== FALSE) {
    if ($row != 0)
    {
      //Cuenta cuantos campos contiene la linea
      $num = count($data);
      //Cadena para insertar los valores de entrega implementos
      $strsql = "INSERT INTO entrega_implementos(moto_11hp, arado_sencillo, vagon_freno, rastra_16cuchillas, ";
      $strsql.= "sistema_riego, sistema_fumiga, generador, segadora, sembradora, desgrana_maiz) VALUES(";
      //Aquí va colocando los campos en la cadena, si no es el último campo, le agrega la coma (,) para separar los datos
      for ($c = 10; $c < ($num-1); $c++) {
        if ($c==($num-2))
          $strsql.= "'".$data[$c] . "'";
        else
          $strsql.= "'".$data[$c] . "',";
      }

      //Termina de armar la cadena para poder ser ejecutada
      $strsql.= ");";
      //Ejecutar inserción de los implementos
      $query_id = mysql_query($strsql, $dbh) or die("problema query: ".mysql_error());

      //Obtener el id que se le asignó a los implementos
      $strsql = "SELECT id_implementos FROM entrega_implementos ORDER BY id_implementos DESC LIMIT 1";
      //Ejecutar consulta
      $query_id = mysql_query($strsql, $dbh) or die("problema query: ".mysql_error());
      //Leer id_implementos desde la consulta
      while($var = mysql_fetch_row($query_id)){
        $id_implementos = $var[0];
      };

      echo $id_implementos."<br>";

      //Cadena para insertar los valores de entrega cuerpo
	  $strsql = "INSERT INTO entrega_cuerpo(id_entrega, id_implementos, id_cliente, nombre_cliente, fact_cliente, ";
	  $strsql.= "serie_entregado, 50hr_vale, 150hr_vale) ";
	  $strsql.= "VALUES('".$id_entrega."','".$id_implementos."','".$data[0]."','".$data[5]."','".$data[1]."','".$data[2]."','".$data[6]."','".$data[7]."')";

	  echo $strsql."<br>";  //Muestra la cadena para ejecutarse
	  //Ejecutar inserción del cuerpo
      $query_id = mysql_query($strsql, $dbh) or die("problema query: ".mysql_error());
    }
    $row++;
  }

  fclose($archivo);
  mysql_close($dbh);
 ?>
