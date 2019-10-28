<style type="text/css">
 body {
  font-family: Arial,Helvetica,sans-serif;
  font-size: 14px;
 }
 titulo {
  font-family: Arial bold,Helvetica,sans-serif;
  font-size: 16px;
 }
</style>

<?php

 /**
  * @author victor.gutierrez
  * @copyright 2011
  */

 //Leer id_curso desde el post del form, el número de renglones
 $id_curso = $HTTP_POST_VARS['id_curso'];
 $renglon = $HTTP_POST_VARS['renglon'] - 1;

 //Conexión al servidor
 $dbh = mysql_connect("mysql1047.servage.net", "cotizatv1", "cotizaTV2011") or die('problema: ' . mysql_error());

 //Seleccionar base de datos
 mysql_select_db("cotizatv1", $dbh);

 //Actualizar el estado del curso a 0, curso cerrado
 $strsql = "UPDATE curso_encabezado SET estado = 0 WHERE id_curso = $HTTP_POST_VARS[id_curso]";

 //Ejecutar query
 $query_id = mysql_query($strsql, $dbh) or die ("problema consulta: ".mysql_error());

 //Grabar a la base los asistentes y los comentarios, si no hay nada en otro asistente, grabar
 //el nombre del cliente
 for($i = 1; $i <= $renglon; $i++) {
  //Grabar el asistente
  if($HTTP_POST_VARS[otro.$i] != ""){
   //Cadena para grabar a otro asistente diferente del cliente
   $strsql = "UPDATE curso_detalle SET asistente = '".$HTTP_POST_VARS[otro.$i]."' ";
   $strsql.= "WHERE id_asistente = ".$HTTP_POST_VARS[id_asistente.$i];

   //Ejecutar query
   $query_id = mysql_query($strsql, $dbh) or die ("problema consulta: ".mysql_error());
  }
  else {
   //Cadena para grabar al mismo cliente como asistente
   $strsql = "UPDATE curso_detalle SET asistente = '".$HTTP_POST_VARS[cliente.$i]."' ";
   $strsql.= "WHERE id_asistente = ".$HTTP_POST_VARS[id_asistente.$i];

   //Ejecutar query
   $query_id = mysql_query($strsql, $dbh) or die ("problema consulta: ".mysql_error());
  }

  //Grabar comentario para cada renglón
  if($HTTP_POST_VARS[comentarios.$i] != ""){
   //Cadena para grabar el comentario de cada renglón
   $strsql = "UPDATE curso_detalle SET comentarios = '".$HTTP_POST_VARS[comentarios.$i]."' ";
   $strsql.= "WHERE id_asistente = ".$HTTP_POST_VARS[id_asistente.$i];

   //Ejecutar query
   $query_id = mysql_query($strsql, $dbh) or die ("problema consulta: ".mysql_error());
  }
 }

 //Visualizar los datos que se grabaron para el curso actual
 //Cadena para leer el encabezado del curso actual
 $strsql = "SELECT * FROM curso_encabezado WHERE id_curso = $id_curso";

 //Ejecutar query
 $query_id = mysql_query($strsql, $dbh) or die ("problema consulta: ".mysql_error());

 //Mandar a pantalla datos del encabezado del curso
 while($var = mysql_fetch_row($query_id)){
  echo "<titulo>Asistencia al curso #$var[0] con fecha $var[1] del instructor $var[2] e impartido en $var[3]</titulo><br/>";
 }

 //Cadena para leer los datos de los asistentes al curso actual
 $strsql = "SELECT * FROM curso_detalle WHERE id_curso = $id_curso ORDER BY id_asistente";

 //Ejecutar query
 $query_id = mysql_query($strsql, $dbh) or die ("problema consulta: ".mysql_error());

 ?>
 <body>
 <a href="javascript:window.print();">Imprimir</a>
 <br/>
 <table style="text-align:left;" border="1" cellpadding="0" cellspacing="0">
  <tr>
   <td>Participante</td>
   <td>Asistente</td>
   <td>Comentarios</td>
  </tr>
  <?
   //Mandar a pantalla los datos de los asistentes
   while($var = mysql_fetch_row($query_id)){
    echo "<tr>";
     echo "<td>$var[3]</td>";
     echo "<td>$var[4]</td>";
     echo "<td>$var[5]</td>";
    echo "</tr>" ;
   }
  ?>
 </table>
 <a href="javascript:window.print();">Imprimir</a>
 </body>
 <?
 //Cerrar conexión al servidor
 mysql_close($dbh);
?>