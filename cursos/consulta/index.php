<?php

 /**
  * @author victor.gutierrez
  * @copyright 2011
  */

 //AJAX
 session_start();
 header("Expires: Mon, 26 Jul 1997 05:00:00 GMT");
 //Siempre modificado
 header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");
 //HTTP/1.1
 header("Cache-Control: no-store, no-cache, must-revalidate");
 header("Cache-Control: post-check=0, pre-check=0", false);
 //HTTP/1.0
 header("Pragma: no-cache");
 if(isset($_GET['function']) && !empty($_GET['function'])){
  function lista(){
   //Conectarse a la base para leer y publicar la lista de los asistentes
   //Conexión al servidor
   $dbh1 = mysql_connect("mysql1047.servage.net", "cotizatv1", "cotizaTV2011") or die('problema conexión: '.mysql_error());

   //Seleccionar base de datos
   mysql_select_db("cotizatv1", $dbh1) or die("error base de datos: ".mysql_error());;

   //Leer el id_curso, la fecha y el lugar para publicarlos en el select, cursos solo abiertos 1
   $strsql1 = "SELECT * FROM curso_detalle WHERE id_curso = ".$_SESSION['$id_curso']." AND ";
   $strsql1.= "fecha = '".$_SESSION['$fecha']."' ORDER BY id_asistente";

   //Ejecutar query para obtener la lista de los asistentes
   $query_id1 = mysql_query($strsql1, $dbh1) or die ("problema consulta: ".mysql_error());

   $renglon = 1;

   //Crar tabla de return
   $html_code = "<titulo>Asistencia al curso #".$_SESSION['$id_curso']. " con fecha ".$_SESSION['$fecha']." del instructor ".$_SESSION['$instructor']." e impartido en ".$_SESSION['$lugar']."</titulo><br/>";
   $html_code.="<a href=javascript:window.print();>Imprimir</a>";
   $html_code.="<body><table style=text-align:left; width:100%; border=1 cellpadding=0 cellspacing=0>";
   $html_code.="<tbody>";
   $html_code.="<tr style=text-align:center; color:#ffffff; font-weight:bold; background-color:#2083A4>";
   $html_code.="<td>Participante</td>";
   $html_code.="<td>Asistente</td>";
   $html_code.="<td>Comentarios</td>";
   $html_code.="</tr>";

   //Leer id_curso
   while($var = mysql_fetch_row($query_id1)){
    $id_asistente = $var[0];
    $id_curso = $var[1];
    $fecha = $var[2];
    $cliente = $var[3];
    $asistente = $var[4];
    $comentarios = $var[5];

    $html_code.="<tr>";
    $html_code.="<td>$cliente</td>";
    $html_code.="<td>$asistente</td>";
    $html_code.="<td>$comentarios</td>";

    $renglon++;

    $html_code.="</tr>";
   };

   $html_code.="</tbody>";
   $html_code.="</table>";
   $html_code.="<a href=javascript:window.print();>Imprimir</a></body>";   

   mysql_close($dbh1);
   return 'document.getElementById("lista").innerHTML="'.$html_code.'";';
  }

  switch($_GET['function']){
   case 'lista': echo lista();
   break;
  }
  exit;
 }
?>
<head>
 <meta content="text/html; charset=ISO-8859-1" http-equiv="content-type">
 <title>Mekatech</title>

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

 <script>
  function adjs(url){
   oldsc=document.getElementById("old_sc");
   if(oldsc) document.getElementsByTagName('body')[0].removeChild(oldsc);
   sc=document.createElement('script');
   sc.id="old_sc";
   sc.src=url+'&<?php echo SID ?>'+'&'+Math.random();
   document.getElementsByTagName('body')[0].appendChild(sc);
  }
 </script>
</head>
<?
 //Leer los cursos cerrados desde la base y poblar el select para el html
 //Conexión a la base de datos
 $dbh = mysql_connect("mysql1047.servage.net", "cotizatv1", "cotizaTV2011") or die('problema conexión: '.mysql_error());

 //Seleccionar base de datos
 mysql_select_db("cotizatv1", $dbh) or die("error base de datos: ".mysql_error());;

 //Leer el id_curso, la fecha y el lugar para publicarlos en el select, cursos solo abiertos 1
 $strsql = "SELECT * FROM curso_encabezado WHERE estado = 0";

 //Ejecutar query de lectura de cursos abiertos
 $query_id = mysql_query($strsql, $dbh) or die ("problema consulta: ".mysql_error());

 echo "<body>Seleccione curso:";
 if (mysql_num_rows($query_id) > 0) {
  echo "<select name = curso OnChange = javascript:adjs('?function=lista');>";
  echo "<option>Cursos</option>";
  while($var = mysql_fetch_row($query_id)){
   $_SESSION['$id_curso'] = $var[0];
   $_SESSION['$fecha'] = $var[1];
   $_SESSION['$instructor'] = $var[2]; 
   $_SESSION['$lugar'] = $var[3];
   $option = "Curso ".$_SESSION['$id_curso']."=>".$_SESSION['$fecha'].".".$_SESSION['$lugar'];
   $value = $_SESSION['$id_curso'].",".$fecha;
   echo "<option value = $value>".$option."</option>";
  }
  echo "</select>";
 }
 else {
  echo "<select name = curso>";
   echo "<option>Cursos</option>";
   echo "<option>No hay cursos disponibles</option>";
  echo "</select></body>";
 }

 //Cerrar conexión a la base de datos
 mysql_close($dbh);
?>
<hr width="100%" size="5">
<div id="lista"></div>