<?php
session_start();
header("Expires: Mon, 26 Jul 1997 05:00:00 GMT");
// siempre modificado
header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");
// HTTP/1.1
header("Cache-Control: no-store, no-cache, must-revalidate");
header("Cache-Control: post-check=0, pre-check=0", false);
// HTTP/1.0
header("Pragma: no-cache");
if(isset($_GET['function']) && !empty($_GET['function'])){
    function grabar(){
        //Establecer la zona horaria a México
        date_default_timezone_set('America/Mexico_City');

        $fecha = date("Y-m-d");

        //Conexión al servidor
        $dbh = mysql_connect("mysql1047.servage.net", "cotizatv1", "cotizaTV2011") or die('problema servidor: ' . mysql_error());

        //Seleccionar base de datos
        mysql_select_db("cotizatv1", $dbh) or die("error base de datos: ".mysql_error());;;

        //Primero validar que si un código existe no permitir la grabación
        $strsql = "SELECT serie from ensamble_detalle";
        //Variable que controla que no exista código repetido; 0 no existe
        $ya_existe_codigo = 0;

        //Ejecutar consulta
        $query_id = mysql_query($strsql, $dbh) or die("problema query: ".mysql_error());

        //Validar las series contra cada uno de los nuevos códigos de cada linea
        if($_SESSION['linea1'] != 0 && $_SESSION['linea1'] != NULL)
        {
          for ($i = 1; $i <= $_SESSION['linea1']; $i++)
          {
            $numid = "num1_".$i;
            while($var = mysql_fetch_row($query_id))
            {
              $serie_base = $var[0];
              if ($serie_base == $_SESSION[$numid])
              {
                $ya_existe_codigo = 1;
              }
            }
          }
        }

        if($_SESSION['linea2'] != 0 && $_SESSION['linea2'] != NULL)
		{
		  for ($i = 1; $i <= $_SESSION['linea2']; $i++)
		  {
		    $numid = "num2_".$i;
		    while($var = mysql_fetch_row($query_id))
		    {
		      $serie_base = $var[0];
		      if ($serie_base == $_SESSION[$numid])
		      {
		        $ya_existe_codigo = 1;
		      }
		    }
		  }
        }

        if($_SESSION['linea3'] != 0 && $_SESSION['linea3'] != NULL)
		{
		  for ($i = 1; $i <= $_SESSION['linea3']; $i++)
		  {
		    $numid = "num3_".$i;
		    while($var = mysql_fetch_row($query_id))
		    {
		      $serie_base = $var[0];
		      if ($serie_base == $_SESSION[$numid])
		      {
		        $ya_existe_codigo = 1;
		      }
		    }
		  }
        }

        if($_SESSION['linea1'] != 0 && $_SESSION['linea1'] != NULL)
		{
		  for ($i = 1; $i <= $_SESSION['linea1']; $i++)
		  {
		    $numid = "num1_".$i;
		    while($var = mysql_fetch_row($query_id))
		    {
		      $serie_base = $var[0];
		      if ($serie_base == $_SESSION[$numid])
		      {
		        $ya_existe_codigo = 1;
		      }
		    }
		  }
        }

        //Si $ya_existe_codigo = 1 no grabar nada y regresar alert, else grabar
        if ($ya_existe_codigo == 1)
        {
          //Cerrar conexión a la base de datos
		  mysql_close($dbh);

		  $html_code = "<a href='http://www.mekatech.tv/ensamble'>Modificar reporte</a>";

		  echo "javascript:alert('Códigos ya existen en la base');";
          return 'document.getElementById("pepe").innerHTML="'.$html_code.'";';
        }
        else
        {
          //Cadena para insertar el encabezado de un nuevo ensamble
          $strsql = "INSERT INTO ensamble_encabezado(fecha, nombre_responsable, linea1, linea2, linea3, linea4) ";
          $strsql.= "VALUES('$fecha', '$_SESSION[responsable]', '$_SESSION[linea1]', '$_SESSION[linea2]', '$_SESSION[linea3]', ";
          $strsql.= "'$_SESSION[linea4]')";

          //Ejecutar consulta
          $query_id = mysql_query($strsql, $dbh) or die("problema query: ".mysql_error());

          //Leer el id que se asignó al ensamble para ligarlo con los números de serie
          $strsql = "SELECT id FROM ensamble_encabezado ORDER BY id DESC LIMIT 1";

          //Ejecutar query de lectura de id_curso
          $query_id = mysql_query($strsql, $dbh) or die ("problema consulta: ".mysql_error());

          //Leer id_ensamble
          while($var = mysql_fetch_row($query_id)){
            $id_ensamble = $var[0];
          };

          //Grabar cada número de serie asociado al encabezado
          if($_SESSION['linea1'] != 0 && $_SESSION['linea1'] != NULL)
		  {
		    for ($i = 1; $i <= $_SESSION['linea1']; $i++)
		    {
		      $selectid = "select1_".$i;
		      $numid = "num1_".$i;
		      $comid = "comm1_".$i;
		      $strsql = "INSERT INTO ensamble_detalle(id_encabezado, linea, modelo, serie, comentarios) ";
		      $strsql.= "VALUES('$id_ensamble', 1, '$_SESSION[$selectid]', '$_SESSION[$numid]', '$_SESSION[$comid]')";

		      //Ejecutar query de lectura de id_curso
		  	  $query_id = mysql_query($strsql, $dbh) or die ("problema consulta: ".mysql_error());
		    }
		  }

          if($_SESSION['linea2'] != 0 && $_SESSION['linea2'] != NULL)
		  {
		    for ($i = 1; $i <= $_SESSION['linea2']; $i++)
		    {
		      $selectid = "select2_".$i;
		      $numid = "num2_".$i;
		      $comid = "comm2_".$i;
		      $strsql = "INSERT INTO ensamble_detalle(id_encabezado, linea, modelo, serie, comentarios) ";
		      $strsql.= "VALUES('$id_ensamble', 2, '$_SESSION[$selectid]', '$_SESSION[$numid]', '$_SESSION[$comid]')";

		      //Ejecutar query de lectura de id_curso
		  	  $query_id = mysql_query($strsql, $dbh) or die ("problema consulta: ".mysql_error());
		    }
		  }

          if($_SESSION['linea3'] != 0 && $_SESSION['linea3'] != NULL)
		  {
		    for ($i = 1; $i <= $_SESSION['linea3']; $i++)
		    {
		      $selectid = "select3_".$i;
		      $numid = "num3_".$i;
		      $comid = "comm3_".$i;
		      $strsql = "INSERT INTO ensamble_detalle(id_encabezado, linea, modelo, serie, comentarios) ";
		      $strsql.= "VALUES('$id_ensamble', 3, '$_SESSION[$selectid]', '$_SESSION[$numid]', '$_SESSION[$comid]')";

		      //Ejecutar query de lectura de id_curso
		  	  $query_id = mysql_query($strsql, $dbh) or die ("problema consulta: ".mysql_error());
		    }
		  }

          if($_SESSION['linea4'] != 0 && $_SESSION['linea4'] != NULL)
		  {
		    for ($i = 1; $i <= $_SESSION['linea4']; $i++)
		    {
		      $selectid = "select4_".$i;
		      $numid = "num4_".$i;
		      $comid = "comm4_".$i;
		      $strsql = "INSERT INTO ensamble_detalle(id_encabezado, linea, modelo, serie, comentarios) ";
		      $strsql.= "VALUES('$id_ensamble', 4, '$_SESSION[$selectid]', '$_SESSION[$numid]', '$_SESSION[$comid]')";

		      //Ejecutar query de lectura de id_curso
		  	  $query_id = mysql_query($strsql, $dbh) or die ("problema consulta: ".mysql_error());
		    }
		  }

          //Cerrar conexión a la base de datos
		  mysql_close($dbh);

          $html_code = "<a href='http://www.mekatech.tv/ensamble'>Nuevo</a>";

          echo "javascript:window.print();";
          return 'document.getElementById("pepe").innerHTML="'.$html_code.'";';
        }
    }
switch($_GET['function']){
  case 'grabar': echo grabar();break;
}
exit;
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
  <meta content="text/html; charset=ISO-8859-1" http-equiv="content-type">
  <title>Reporte de Producción Diaria</title>
  <style type="text/css">
    body { font-family: Arial,Helvetica,sans-serif;
      font-size: 14px;
    }
    .1 {
      font-size: 25px;
    }
  </style>
  <script>
    function adjs(url){
      oldsc=document.getElementById("old_sc");
          if(oldsc)
              document.getElementsByTagName('body')[0].removeChild(oldsc);
      sc=document.createElement('script');
      sc.id="old_sc";
      sc.src=url+'&<?php echo SID ?>'+'&'+Math.random();
      document.getElementsByTagName('body')[0].appendChild(sc);
    }
  </script>
</head>

<body>
<?
//Establecer la zona horaria a México
date_default_timezone_set('America/Mexico_City');

$_SESSION['responsable'] = $HTTP_POST_VARS["responsable"];
$_SESSION['linea1'] = $HTTP_POST_VARS["linea1"];
$_SESSION['linea2'] = $HTTP_POST_VARS["linea2"];
$_SESSION['linea3'] = $HTTP_POST_VARS["linea3"];
$_SESSION['linea4'] = $HTTP_POST_VARS["linea4"];


//Para las líneas con valores != 0 leer los modelos y los números de serie
if($_SESSION['linea1'] != 0 && $_SESSION['linea1'] != NULL)
{
  for ($i = 1; $i <= $_SESSION['linea1']; $i++)
  {
    $selectid = "select1_".$i;
    $_SESSION[$selectid] = $HTTP_POST_VARS[$selectid];

    $comid = "comm1_".$i;
    $_SESSION[$comid] = $HTTP_POST_VARS[$comid];

    $numid = "num1_".$i;
    $_SESSION[$numid] = $HTTP_POST_VARS[$numid];
  }
}

if($_SESSION['linea2'] != 0 && $_SESSION['linea2'] != NULL)
{
  for ($i = 1; $i <= $_SESSION['linea2']; $i++)
  {
    $selectid = "select2_".$i;
    $_SESSION[$selectid] = $HTTP_POST_VARS[$selectid];

    $comid = "comm2_".$i;
    $_SESSION[$comid] = $HTTP_POST_VARS[$comid];

    $numid = "num2_".$i;
    $_SESSION[$numid] = $HTTP_POST_VARS[$numid];
  }
}

if($_SESSION['linea3'] != 0 && $_SESSION['linea3'] != NULL)
{
  for ($i = 1; $i <= $_SESSION['linea3']; $i++)
  {
    $selectid = "select3_".$i;
    $_SESSION[$selectid] = $HTTP_POST_VARS[$selectid];

    $comid = "comm3_".$i;
    $_SESSION[$comid] = $HTTP_POST_VARS[$comid];

    $numid = "num3_".$i;
    $_SESSION[$numid] = $HTTP_POST_VARS[$numid];
  }
}

if($_SESSION['linea4'] != 0 && $_SESSION['linea4'] != NULL)
{
  for ($i = 1; $i <= $_SESSION['linea4']; $i++)
  {
    $selectid = "select4_".$i;
    $_SESSION[$selectid] = $HTTP_POST_VARS[$selectid];

    $comid = "comm4_".$i;
    $_SESSION[$comid] = $HTTP_POST_VARS[$comid];

    $numid = "num4_".$i;
    $_SESSION[$numid] = $HTTP_POST_VARS[$numid];
  }
}
?>
<table>
  <tr>
    <td><img src="../ensamble/images/Mekatech.jpg" width=50 height=50 border=0 alt="logomekatech"></td>
    <td></td>
    <td align="center" valign="bottom"><b>REPORTE DE PRODUCCIÓN DIARIA</b></td>
  </tr>
  <tr>
    <td></td><td></td><td></td><td></td><td></td>
    <td valign="bottom"><b>Fecha</b></td>
    <td valign="bottom"><? echo date("d/m/Y"); ?></td>
  </tr>
  <tr>
    <td><br /></td>
  </tr>

  <tr>
    <td><b>Responsable:</b></td>
    <td align="left"><? echo $_SESSION['responsable'];?></td>
  </tr>
</table>

<table width="80%" border="0" cellpadding="0" cellspacing="0" style="text-align: left;">
 <tr style="text-align: center; color: #ffffff; font-weight: bold; background-color:#2083A4;">
  <td width="15%" align="left" widht="15%">Modelo</td>
  <td width="23%" align="left" widht="15%">Número de serie</td>
  <td width="23%" align="left" widht="15%">Comentario</td>
  <td colspan="15">
 </tr>
 <?
   if ($_SESSION['linea1'] !=0 && $_SESSION['linea1'] !=NULL) {
     echo "<tr style=text-align: center; font-weight: bold; background-color:#71A6DD;>";
     echo "<td>Línea 1</td>";
     echo "<td width=23%><td colspan=15>";
     echo "</tr>";
     for($i = 1; $i <= $_SESSION['linea1']; $i++) {
       echo "<tr style=text-align: center; background-color:#71A6DD;>";
       $selectid = "select1_".$i;
       echo "<td width=15% align=center style=background-color:#71A6DD;>$_SESSION[$selectid].HP</td>";
       $numid = "num1_".$i;
       echo "<td width=15% align=center style=background-color:#71A6DD;>$_SESSION[$numid]</td>";
       $comid = "comm1_".$i;
       echo "<td width=15% align=center style=background-color:#71A6DD;>$_SESSION[$comid]</td>";
       echo "<td colspan=15 style=background-color:#71A6DD;>";
       echo "</tr>";
     }
   }
 ?>
 <?
   if ($_SESSION['linea2'] !=0 && $_SESSION['linea2'] !=NULL) {
     echo "<tr style=text-align: center; font-weight: bold; background-color:#71A6DD;>";
	 echo "<td>Línea 2</td>";
	 echo "<td width=23%><td colspan=15>";
     echo "</tr>";
     for($i = 1; $i <= $_SESSION['linea2']; $i++) {
       echo "<tr style=text-align: center; background-color:#71A6DD;>";
       $selectid = "select2_".$i;
       echo "<td width=15% align=center style=background-color:#71A6DD;>$_SESSION[$selectid].HP</td>";
       $numid = "num2_".$i;
       echo "<td width=15% align=center style=background-color:#71A6DD;>$_SESSION[$numid]</td>";
       $comid = "comm2_".$i;
       echo "<td width=15% align=center style=background-color:#71A6DD;>$_SESSION[$comid]</td>";
       echo "<td colspan=15 style=background-color:#71A6DD;>";
       echo "</tr>";
     }
   }
 ?>
 <?
   if ($_SESSION['linea3'] !=0 && $_SESSION['linea3'] !=NULL) {
     echo "<tr style=text-align: center; font-weight: bold; background-color:#71A6DD;>";
     echo "<td>Línea 3</td>";
     echo "<td width=23%><td colspan=15>";
     echo "</tr>";
     for($i = 1; $i <= $_SESSION['linea3']; $i++) {
       echo "<tr style=text-align: center; background-color:#71A6DD;>";
       $selectid = "select3_".$i;
       echo "<td width=15% align=center style=background-color:#71A6DD;>$_SESSION[$selectid].HP</td>";
       $numid = "num3_".$i;
       echo "<td width=15% align=center style=background-color:#71A6DD;>$_SESSION[$numid]</td>";
       $comid = "comm3_".$i;
       echo "<td width=15% align=center style=background-color:#71A6DD;>$_SESSION[$comid]</td>";
       echo "<td colspan=15 style=background-color:#71A6DD;>";
       echo "</tr>";
     }
   }
 ?>
 <?
   if ($_SESSION['linea4'] !=0 && $_SESSION['linea4'] !=NULL) {
     echo "<tr style=text-align: center; font-weight: bold; background-color:#71A6DD;>";
     echo "<td>Línea 4</td>";
     echo "<td width=23%><td colspan=15>";
     echo "</tr>";
     for($i = 1; $i <= $_SESSION['linea4']; $i++) {
       echo "<tr style=text-align: center; background-color:#71A6DD;>";
       $selectid = "select4_".$i;
       echo "<td width=15% align=center style=background-color:#71A6DD;>$_SESSION[$selectid].HP</td>";
       $numid = "num4_".$i;
       echo "<td width=15% align=center style=background-color:#71A6DD;>$_SESSION[$numid]</td>";
       $comid = "comm4_".$i;
       echo "<td width=15% align=center style=background-color:#71A6DD;>$_SESSION[$comid]</td>";
       echo "<td colspan=15 style=background-color:#71A6DD;>";
       echo "</tr>";
     }
   }
 ?>

</table>
<br />
<div id="pepe"><a href="javascript:history.back(1);">Modificar</a>|<a href="javascript:adjs('?function=grabar');">Imprimir</a>
</div>
</body>
</html>