<style type="text/css">
 body {
  font-family: Arial,Helvetica,sans-serif;
  font-size: 14px;
 }
 titulo {
  font-family: Arial bold,Helvetica,sans-serif;
  font-size: 18px;
 }
</style>

<?php
 /**
 * @author victor.gutierrez
 * @copyright 2011
 */

 //Voltear parámetro de fecha para que se grabe en MySQL
 $fecha = implode("-", array_reverse(explode("/", $_POST['fecha'])));

 //Primero grabar el encabezado en la base, que incluye fecha y nombre, campo id, autoincrementable
 //Establecer la zona horaria a México
 date_default_timezone_set('America/Mexico_City');

 //Conexión a la base de datos
 $dbh = mysql_connect("mysql1047.servage.net", "cotizatv1", "cotizaTV2011") or die('problema conexión: '.mysql_error());

 //Seleccionar base de datos
 mysql_select_db("cotizatv1", $dbh) or die("error base de datos: ".mysql_error());;

 //Cadena para insertar el encabezado de un nuevo curso
 $strsql = "INSERT INTO curso_encabezado(fecha, nombre, lugar, estado)";
 $strsql.= "VALUES('$fecha', '$_POST[nombre]', '$_POST[lugar]', 1)";

 //Ejecutar consulta
 $query_id = mysql_query($strsql, $dbh) or die("problema query: ".mysql_error());

 //Leer el id que se asignó al curso para ligarlo con los asistentes
 $strsql = "SELECT id_curso FROM curso_encabezado ORDER BY id_curso DESC LIMIT 1";

 //Ejecutar query de lectura de id_curso
 $query_id = mysql_query($strsql, $dbh) or die ("problema consulta: ".mysql_error());

 //Leer id_curso
 while($var = mysql_fetch_row($query_id)){
  $id_curso = $var[0];
 };

 //Abrir archivo y procesar listado de asistentes al curso
 $archivo = fopen($_FILES['form_data']['tmp_name'],"r");
 while(!feof($archivo)){
  $linea = fgets($archivo,4096);   //4096 máximo de lectura

  //Si la línea es diferente de vacío, se procesa
  if($linea<>'') {
   //Leer el campo del nombre
   $valores = preg_split('[,]', $linea);

   //Cadena para insertar cada nombre de cliente a la base asociado con el id_curso
   $strsql = "INSERT INTO curso_detalle(id_curso, fecha, cliente)";
   $strsql.= "VALUES('$id_curso', '$fecha', '$valores[0]')";

   //Ejecutar consulta
   $query_id = mysql_query($strsql, $dbh) or die("problema query: ".mysql_error());
   }
  }

  fclose($archivo);

 //Cerrar conexión a la base de datos
 mysql_close($dbh);

 echo "<body>Curso #".$id_curso." con fecha ".$fecha." creado con éxito";
 echo "</br>";
 echo "<a href=http://www.mekatech.com/cursos/carga>Cargar otro curso</a></body>";
?>