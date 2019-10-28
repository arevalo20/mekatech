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

        //Conexión a la base de datos
        $dbh = mysql_connect("mysql1047.servage.net", "cotizatv1", "cotizaTV2011") or die('problema: ' . mysql_error());

        //Seleccionar base de datos
        mysql_select_db("cotizatv1", $dbh);

        //Primero revisar el id que va para grabar el siguiente
        $strsql = "SELECT id FROM encabezado ORDER BY id DESC LIMIT 1";

        //Ejecutar query
        $query_id = mysql_query($strsql, $dbh) or die ("problema consulta");

        //Obtener id
        while($var = mysql_fetch_row($query_id)){
          $id = $var[0];
        };

        $id = $id + 1;
        $fecha = date("Y/m/d H:i:s",time());

        if($_SESSION['encabezado'] == 1)
        {
          //Cadena para grabar el encabezado
          $strsql = "INSERT INTO encabezado(id, nombre, calle, colonia, delegacion, entidad, cp, tel, proyecto, fecha) ";
          $strsql.= "VALUES(".$id.", '".$_SESSION["fullname"]."', '".$_SESSION["calle"]."', '".$_SESSION["colonia"];
          $strsql.= "', '".$_SESSION["municipio"]."', '".$_SESSION["estado"]."', '".$_SESSION["cp"];
          $strsql.= "', '".$_SESSION["tel"]."', '".$_SESSION["proyecto"]."', '".$fecha."')";

          //Ejecutar query
          $query = mysql_query($strsql,$dbh);

          $_SESSION['encabezado'] = 0;
        }

        //Crear cadena para grabar cada renglón
        //1.Motocultores 2.Arados 3.Rastras 4.Implemento_1 5.Implemento_2 6.Implemento_3 7.Implemento_4 8.Implemento_5 9.Capacitación 10.Servicio_1 11.Servicio_2

        //1.Motocultores
        if($_SESSION['equipos_renglon'] == 1)
        {
          $strsql = "INSERT INTO detalle(id, renglon, descripcion, cantidad, precio) ";
          $strsql.= "VALUES(".$id.", ".$_SESSION['equipos_renglon'].", '".$_SESSION['equipos_desc'];
          $strsql.= "', ".$_SESSION['cantequipos'].", ".$_SESSION['equipos_precio'].")";

          echo $strsql;

          //Ejecutar query
		  $query = mysql_query($strsql,$dbh);

		  $_SESSION['equipos_renglon'] = 0;
         }

         //2.Arados
		 if($_SESSION['arados_renglon'] == 2)
		 {
		   $strsql = "INSERT INTO detalle(id, renglon, descripcion, cantidad, precio) ";
		   $strsql.= "VALUES(".$id.", ".$_SESSION['arados_renglon'].", '".$_SESSION['arados_desc'];
		   $strsql.= "', ".$_SESSION['cantarados'].", ".$_SESSION['arados_precio'].")";

           //Ejecutar query
 		   $query = mysql_query($strsql,$dbh);

 		   $_SESSION['arados_renglon'] = 0;
         }

         //3.Rastras
		 if($_SESSION['rastras_renglon'] == 3)
		 {
		   $strsql = "INSERT INTO detalle(id, renglon, descripcion, cantidad, precio) ";
		   $strsql.= "VALUES(".$id.", ".$_SESSION['rastras_renglon'].", '".$_SESSION['rastras_desc'];
		   $strsql.= "', ".$_SESSION['cantrastras'].", ".$_SESSION['rastras_precio'].")";

		   //Ejecutar query
		   $query = mysql_query($strsql,$dbh);

		   $_SESSION['rastras_renglon'] = 0;
         }

         //4.Implementos_1
		 if($_SESSION['implementos_renglon_1'] == 4)
		 {
		   $strsql = "INSERT INTO detalle(id, renglon, descripcion, cantidad, precio) ";
		   $strsql.= "VALUES(".$id.", ".$_SESSION['implementos_renglon_1'].", '".$_SESSION['implementos_desc_1'];
		   $strsql.= "', ".$_SESSION['cantimplementos_1'].", ".$_SESSION['implementos_precio_1'].")";

		   //Ejecutar query
		   $query = mysql_query($strsql,$dbh);


		   $_SESSION['implementos_renglon_1'] = 0;
         }

         //5.Implementos_2
		 if($_SESSION['implementos_renglon_2'] == 5)
		 {
		   $strsql = "INSERT INTO detalle(id, renglon, descripcion, cantidad, precio) ";
		   $strsql.= "VALUES(".$id.", ".$_SESSION['implementos_renglon_2'].", '".$_SESSION['implementos_desc_2'];
		   $strsql.= "', ".$_SESSION['cantimplementos_2'].", ".$_SESSION['implementos_precio_2'].")";

		   //Ejecutar query
		   $query = mysql_query($strsql,$dbh);


		   $_SESSION['implementos_renglon_2'] = 0;
         }

         //6.Implementos_3
		 if($_SESSION['implementos_renglon_3'] == 6)
		 {
		   $strsql = "INSERT INTO detalle(id, renglon, descripcion, cantidad, precio) ";
		   $strsql.= "VALUES(".$id.", ".$_SESSION['implementos_renglon_3'].", '".$_SESSION['implementos_desc_3'];
		   $strsql.= "', ".$_SESSION['cantimplementos_3'].", ".$_SESSION['implementos_precio_3'].")";

		   //Ejecutar query
		   $query = mysql_query($strsql,$dbh);


		   $_SESSION['implementos_renglon_3'] = 0;
         }

         //7.Implementos_4
		 if($_SESSION['implementos_renglon_4'] == 7)
		 {
		   $strsql = "INSERT INTO detalle(id, renglon, descripcion, cantidad, precio) ";
		   $strsql.= "VALUES(".$id.", ".$_SESSION['implementos_renglon_4'].", '".$_SESSION['implementos_desc_4'];
		   $strsql.= "', ".$_SESSION['cantimplementos_4'].", ".$_SESSION['implementos_precio_4'].")";

		   //Ejecutar query
		   $query = mysql_query($strsql,$dbh);


		   $_SESSION['implementos_renglon_4'] = 0;
         }

         //8.Implementos_5
		 if($_SESSION['implementos_renglon_5'] == 8)
		 {
		   $strsql = "INSERT INTO detalle(id, renglon, descripcion, cantidad, precio) ";
		   $strsql.= "VALUES(".$id.", ".$_SESSION['implementos_renglon_5'].", '".$_SESSION['implementos_desc_5'];
		   $strsql.= "', ".$_SESSION['cantimplementos_5'].", ".$_SESSION['implementos_precio_5'].")";

		   //Ejecutar query
		   $query = mysql_query($strsql,$dbh);


		   $_SESSION['implementos_renglon_5'] = 0;
         }


         //9.Capacitación
		 if($_SESSION['capac_renglon'] == 9)
		 {
		   $strsql = "INSERT INTO detalle(id, renglon, descripcion, cantidad, precio) ";
		   $strsql.= "VALUES(".$id.", ".$_SESSION['capac_renglon'].", '".$_SESSION['capac_desc'];
	       $strsql.= "', ".$_SESSION['cantcapac'].", ".$_SESSION['capac_precio'].")";

		   //Ejecutar query
		   $query = mysql_query($strsql,$dbh);

		   $_SESSION['capac_renglon'] = 0;
         }

         //10.Servicio_1
		 if($_SESSION['servicio_renglon_1'] == 10)
		 {
		   $strsql = "INSERT INTO detalle(id, renglon, descripcion, cantidad, precio) ";
		   $strsql.= "VALUES(".$id.", ".$_SESSION['servicio_renglon_1'].", '".$_SESSION['servicio_desc_1'];
	       $strsql.= "', ".$_SESSION['cantservicio_1'].", ".$_SESSION['servicio_precio_1'].")";

		   //Ejecutar query
		   $query = mysql_query($strsql,$dbh);

		   $_SESSION['servicio_renglon_1'] = 0;
         }


         //11.Servicio_2
		 if($_SESSION['servicio_renglon_2'] == 11)
		 {
		   $strsql = "INSERT INTO detalle(id, renglon, descripcion, cantidad, precio) ";
		   $strsql.= "VALUES(".$id.", ".$_SESSION['servicio_renglon_2'].", '".$_SESSION['servicio_desc_2'];
	       $strsql.= "', ".$_SESSION['cantservicio_2'].", ".$_SESSION['servicio_precio_2'].")";

		   //Ejecutar query
		   $query = mysql_query($strsql,$dbh);

		   $_SESSION['servicio_renglon_2'] = 0;
         }


         $html_code = "<a href='http://www.mekatech.tv/cotizador'>Nueva</a>";

        //$_SESSION['contador']=isset($_SESSION['contador'])?$_SESSION['contador']+=1:1;
        //return 'document.getElementById("pepe").innerHTML="'.$_SESSION['contador'].'";';
        echo "javascript:window.print();";
        return 'document.getElementById("pepe").innerHTML="'.$html_code.'";';
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
  <title>Grupo Comercom SA de CV</title>
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
<table>
  <tr>
    <td><img src="../cotizador/images/Mekatech.jpg" width=50 height=50 border=0 alt="logomekatech"></td>
    <td style="body">GRUPO COMERCOM SA DE CV</td>
    <td><img src="../cotizador/images/GC.jpg" width=60 height=60 border=0 alt="logocomercom"></td>
  </tr>
</table>
<?php
//Establecer la zona horaria a México
date_default_timezone_set('America/Mexico_City');

//Array para poner en español el día y el mes
$dias = array("Domingo","Lunes","Martes","Miercoles","Jueves","Viernes","Sabado");
$meses = array("Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre");

$_SESSION['encabezado'] = 1;
$_SESSION['fullname'] = $HTTP_POST_VARS["fullname"];
$_SESSION['calle'] = $HTTP_POST_VARS["calle"];
$_SESSION['colonia'] = $HTTP_POST_VARS["colonia"];
$_SESSION['municipio'] = $HTTP_POST_VARS["municipio"];
$_SESSION['estado'] = $HTTP_POST_VARS["estado"];
$_SESSION['cp'] = $HTTP_POST_VARS["cp"];
$_SESSION['tel'] = $HTTP_POST_VARS["tel"];
$_SESSION['proyecto'] = $HTTP_POST_VARS["proyecto"];

echo "Orden procesada a las ".date("h:i a. ")."del d&iacute;a ".$dias[date('w')]." ".date("j").
" de ".$meses[date('n') - 1]." de ".date("Y")."<p>";
echo "<b>Cotizaci&oacute;n a nombre de:</b> ";
echo $HTTP_POST_VARS["fullname"];
echo "<br>";
echo "<b>Calle y n&uacute;mero:</b> ".$HTTP_POST_VARS["calle"]."<br>";
echo "<b>Colonia:</b> ".$HTTP_POST_VARS["colonia"]."<br>";
echo "<b>Delegaci&oacuten o Municipio:</b> ".$HTTP_POST_VARS["municipio"]."<br>";
echo "<b>Entidad Federativa:</b> ".$HTTP_POST_VARS["estado"]."<br>";
echo "<b>CP:</b> ".$HTTP_POST_VARS["cp"]."<br>";
echo "<b>Tel&eacute;fono:</b> ".$HTTP_POST_VARS["tel"]."<br>";
echo "<b>Proyecto:</b> ".$HTTP_POST_VARS["proyecto"]."<br>";

//Leer cantidades y descripciones de los artículos
//Equipos
$cantequipos = $HTTP_POST_VARS["cantequipos"];
$equipos = $HTTP_POST_VARS["equipos"];

//Arados
$cantarados = $HTTP_POST_VARS["cantarados"];
$arados = $HTTP_POST_VARS["arados"];

//Rastras
$cantrastras = $HTTP_POST_VARS["cantrastras"];
$rastras = $HTTP_POST_VARS["rastras"];

//Implementos del 1 al 5
$cantimplementos_1 = $HTTP_POST_VARS["cantimplementos_1"];
$implementos_1 = $HTTP_POST_VARS["implementos_1"];
$cantimplementos_2 = $HTTP_POST_VARS["cantimplementos_2"];
$implementos_2 = $HTTP_POST_VARS["implementos_2"];
$cantimplementos_3 = $HTTP_POST_VARS["cantimplementos_3"];
$implementos_3 = $HTTP_POST_VARS["implementos_3"];
$cantimplementos_4 = $HTTP_POST_VARS["cantimplementos_4"];
$implementos_4 = $HTTP_POST_VARS["implementos_4"];
$cantimplementos_5 = $HTTP_POST_VARS["cantimplementos_5"];
$implementos_5 = $HTTP_POST_VARS["implementos_5"];

//Capacitación
$cantcapac = $HTTP_POST_VARS["cantcapac"];
$capac = $HTTP_POST_VARS["capac"];

//Servicio del 1 al 2
$cantservicio_1 = $HTTP_POST_VARS["cantservicio_1"];
$servicio_1 = $HTTP_POST_VARS["servicio_1"];
$cantservicio_2 = $HTTP_POST_VARS["cantservicio_2"];
$servicio_2 = $HTTP_POST_VARS["servicio_2"];

?>

<p align="center" class="1">Su pedido es el siguiente</p>
<table style="text-align: left; width: 100%;" border="0" cellpadding="0" cellspacing="0">
<tbody>
<tr style="text-align: center; color: #ffffff; font-weight: bold; background-color:#2083A4;">
<td width="50%">Producto</td>
<td width="10%">Cantidad</td>
<td width="20%">Valor unitario</td>
<td width="20%">Valor Total</td>
</tr>

<?
//Validar que seleccionaron algo y separar el precio de la descripción para cada caso
if($equipos != "Equipos" && ($cantequipos != null || $cantequipos !=""))
{
  list($equipos_desc, $equipos_precio) = explode("$", $equipos);
  $equipos_precio = str_replace(',', '', $equipos_precio);
  $subtotal_equipos = $cantequipos * $equipos_precio;
  //Subir las variables a nivel sesión para el grabado
  $_SESSION['equipos_renglon'] = 1;
  $_SESSION['equipos_desc'] = $equipos_desc;
  $_SESSION['cantequipos'] = $cantequipos;
  $_SESSION['equipos_precio'] = $equipos_precio;
?>
<tr>
<td style="text-align: left; background-color:#71A6DD;"><? echo $equipos_desc; ?></td>
<td style="text-align: right;"><? echo number_format($cantequipos, 0); ?></td>
<td style="text-align: right;"><? echo number_format($equipos_precio, 0); ?></td>
<td style="text-align: right;"><? echo number_format($subtotal_equipos, 0); ?></td>
</tr>
<?
}

if($arados != "Arados" && ($cantarados != null || $cantarados !=""))
{
  list($arados_desc, $arados_precio) = explode("$", $arados);
  $arados_precio = str_replace(',', '', $arados_precio);
  $subtotal_arados = $cantarados * $arados_precio;
  //Subir las variables a nivel sesión para el grabado
  $_SESSION['arados_renglon'] = 2;
  $_SESSION['arados_desc'] = $arados_desc;
  $_SESSION['cantarados'] = $cantarados;
  $_SESSION['arados_precio'] = $arados_precio;
?>
<tr>
<td style="text-align: left; background-color:#71A6DD;"><? echo $arados_desc; ?></td>
<td style="text-align: right;"><? echo number_format($cantarados, 0); ?></td>
<td style="text-align: right;"><? echo number_format($arados_precio, 0); ?></td>
<td style="text-align: right;"><? echo number_format($subtotal_arados, 0); ?></td>
</tr>
<?
}

if($rastras != "Rastras" && ($cantrastras != null || $cantrastras !=""))
{
  list($rastras_desc, $rastras_precio) = explode("$", $rastras);
  $rastras_precio = str_replace(',', '', $rastras_precio);
  $subtotal_rastras = $cantrastras * $rastras_precio;
  //Subir las variables a nivel sesión para el grabado
  $_SESSION['rastras_renglon'] = 3;
  $_SESSION['rastras_desc'] = $rastras_desc;
  $_SESSION['cantrastras'] = $cantrastras;
  $_SESSION['rastras_precio'] = $rastras_precio;
?>
<tr>
<td style="text-align: left; background-color:#71A6DD;"><? echo $rastras_desc; ?></td>
<td style="text-align: right;"><? echo number_format($cantrastras, 0); ?></td>
<td style="text-align: right;"><? echo number_format($rastras_precio, 0); ?></td>
<td style="text-align: right;"><? echo number_format($subtotal_rastras, 0); ?></td>
</tr>
<?
}

//AQUI DEBE IR LA FUNCION PARA TODOS LOS IMPLEMENTOS PERO AHORITA ASI DE UNO POR UNO :D
if($implementos_1 != "Implemento 1" && ($cantimplentos_1 != null || $cantimplementos_1 !=""))
{
  list($implementos_desc_1, $implementos_precio_1) = explode("$", $implementos_1);
  $implementos_precio_1 = str_replace(',', '', $implementos_precio_1);
  $subtotal_implementos_1 = $cantimplementos_1 * $implementos_precio_1;
  //Subir las variables a nivel sesión para el grabado
  $_SESSION['implementos_renglon_1'] = 4;
  $_SESSION['implementos_desc_1'] = $implementos_desc_1;
  $_SESSION['cantimplementos_1'] = $cantimplementos_1;
  $_SESSION['implementos_precio_1'] = $implementos_precio_1;
?>
<tr>
<td style="text-align: left; background-color:#71A6DD;"><? echo $implementos_desc_1; ?></td>
<td style="text-align: right;"><? echo number_format($cantimplementos_1, 0); ?></td>
<td style="text-align: right;"><? echo number_format($implementos_precio_1, 0); ?></td>
<td style="text-align: right;"><? echo number_format($subtotal_implementos_1, 0); ?></td>
</tr>
<?
}

if($implementos_2 != "Implemento 2" && ($cantimplentos_2 != null || $cantimplementos_2 !=""))
{
  list($implementos_desc_2, $implementos_precio_2) = explode("$", $implementos_2);
  $implementos_precio_2 = str_replace(',', '', $implementos_precio_2);
  $subtotal_implementos_2 = $cantimplementos_2 * $implementos_precio_2;
  //Subir las variables a nivel sesión para el grabado
  $_SESSION['implementos_renglon_2'] = 5;
  $_SESSION['implementos_desc_2'] = $implementos_desc_2;
  $_SESSION['cantimplementos_2'] = $cantimplementos_2;
  $_SESSION['implementos_precio_2'] = $implementos_precio_2;
?>
<tr>
<td style="text-align: left; background-color:#71A6DD;"><? echo $implementos_desc_2; ?></td>
<td style="text-align: right;"><? echo number_format($cantimplementos_2, 0); ?></td>
<td style="text-align: right;"><? echo number_format($implementos_precio_2, 0); ?></td>
<td style="text-align: right;"><? echo number_format($subtotal_implementos_2, 0); ?></td>
</tr>
<?
}

if($implementos_3 != "Implemento 3" && ($cantimplentos_3 != null || $cantimplementos_3 !=""))
{
  list($implementos_desc_3, $implementos_precio_3) = explode("$", $implementos_3);
  $implementos_precio_3 = str_replace(',', '', $implementos_precio_3);
  $subtotal_implementos_3 = $cantimplementos_3 * $implementos_precio_3;
  //Subir las variables a nivel sesión para el grabado
  $_SESSION['implementos_renglon_3'] = 6;
  $_SESSION['implementos_desc_3'] = $implementos_desc_3;
  $_SESSION['cantimplementos_3'] = $cantimplementos_3;
  $_SESSION['implementos_precio_3'] = $implementos_precio_3;
?>
<tr>
<td style="text-align: left; background-color:#71A6DD;"><? echo $implementos_desc_3; ?></td>
<td style="text-align: right;"><? echo number_format($cantimplementos_3, 0); ?></td>
<td style="text-align: right;"><? echo number_format($implementos_precio_3, 0); ?></td>
<td style="text-align: right;"><? echo number_format($subtotal_implementos_3, 0); ?></td>
</tr>
<?
}

if($implementos_4 != "Implemento 4" && ($cantimplentos_4 != null || $cantimplementos_4 !=""))
{
  list($implementos_desc_4, $implementos_precio_4) = explode("$", $implementos_4);
  $implementos_precio_4 = str_replace(',', '', $implementos_precio_4);
  $subtotal_implementos_4 = $cantimplementos_4 * $implementos_precio_4;
  //Subir las variables a nivel sesión para el grabado
  $_SESSION['implementos_renglon_4'] = 7;
  $_SESSION['implementos_desc_4'] = $implementos_desc_4;
  $_SESSION['cantimplementos_4'] = $cantimplementos_4;
  $_SESSION['implementos_precio_4'] = $implementos_precio_4;
?>
<tr>
<td style="text-align: left; background-color:#71A6DD;"><? echo $implementos_desc_4; ?></td>
<td style="text-align: right;"><? echo number_format($cantimplementos_4, 0); ?></td>
<td style="text-align: right;"><? echo number_format($implementos_precio_4, 0); ?></td>
<td style="text-align: right;"><? echo number_format($subtotal_implementos_4, 0); ?></td>
</tr>
<?
}

if($implementos_5 != "Implemento 5" && ($cantimplentos_5 != null || $cantimplementos_5 !=""))
{
  list($implementos_desc_5, $implementos_precio_5) = explode("$", $implementos_5);
  $implementos_precio_5 = str_replace(',', '', $implementos_precio_5);
  $subtotal_implementos_5 = $cantimplementos_5 * $implementos_precio_5;
  //Subir las variables a nivel sesión para el grabado
  $_SESSION['implementos_renglon_5'] = 8;
  $_SESSION['implementos_desc_5'] = $implementos_desc_5;
  $_SESSION['cantimplementos_5'] = $cantimplementos_5;
  $_SESSION['implementos_precio_5'] = $implementos_precio_5;
?>
<tr>
<td style="text-align: left; background-color:#71A6DD;"><? echo $implementos_desc_5; ?></td>
<td style="text-align: right;"><? echo number_format($cantimplementos_5, 0); ?></td>
<td style="text-align: right;"><? echo number_format($implementos_precio_5, 0); ?></td>
<td style="text-align: right;"><? echo number_format($subtotal_implementos_5, 0); ?></td>
</tr>
<?
}
//HASTA AQUI VA LA FUNCION PARA CADA UNO DE LOS IMPLEMENTOS


if($capac != "Capacitación" && ($cantcapac != null || $cantcapac !=""))
{
  list($capac_desc, $capac_precio) = explode("$", $capac);
  $capac_precio = str_replace(',', '', $capac_precio);
  $subtotal_capac = $cantcapac * $capac_precio;
  //Subir las variables a nivel sesión para el grabado
  $_SESSION['capac_renglon'] = 9;
  $_SESSION['capac_desc'] = $capac_desc;
  $_SESSION['cantcapac'] = $cantcapac;
  $_SESSION['capac_precio'] = $capac_precio;
?>
<tr>
<td style="text-align: left; background-color:#71A6DD;"><? echo $capac_desc; ?></td>
<td style="text-align: right;"><? echo number_format($cantcapac, 0); ?></td>
<td style="text-align: right;"><? echo number_format($capac_precio, 0); ?></td>
<td style="text-align: right;"><? echo number_format($subtotal_capac, 0); ?></td>
</tr>
<?
}

if($servicio_1 != "Servicio 1" && ($cantservicio_1 != null || $cantservicio_1 !=""))
{
  list($servicio_desc_1, $servicio_precio_1) = explode("$", $servicio_1);
  $servicio_precio_1 = str_replace(',', '', $servicio_precio_1);
  $subtotal_servicio_1 = $cantservicio_1 * $servicio_precio_1;
  //Subir las variables a nivel sesión para el grabado
  $_SESSION['servicio_renglon_1'] = 10;
  $_SESSION['servicio_desc_1'] = $servicio_desc_1;
  $_SESSION['cantservicio_1'] = $cantservicio_1;
  $_SESSION['servicio_precio_1'] = $servicio_precio_1;
?>
<tr>
<td style="text-align: left; background-color:#71A6DD;"><? echo $servicio_desc_1; ?></td>
<td style="text-align: right;"><? echo number_format($cantservicio_1, 0); ?></td>
<td style="text-align: right;"><? echo number_format($servicio_precio_1, 0); ?></td>
<td style="text-align: right;"><? echo number_format($subtotal_servicio_1, 0); ?></td>
</tr>
<?
}

if($servicio_2 != "Servicio 2" && ($cantservicio_2 != null || $cantservicio_2 !=""))
{
  list($servicio_desc_2, $servicio_precio_2) = explode("$", $servicio_2);
  $servicio_precio_2 = str_replace(',', '', $servicio_precio_2);
  $subtotal_servicio_2 = $cantservicio_2 * $servicio_precio_2;
  //Subir las variables a nivel sesión para el grabado
  $_SESSION['servicio_renglon_2'] = 11;
  $_SESSION['servicio_desc_2'] = $servicio_desc_2;
  $_SESSION['cantservicio_2'] = $cantservicio_2;
  $_SESSION['servicio_precio_2'] = $servicio_precio_2;
?>
<tr>
<td style="text-align: left; background-color:#71A6DD;"><? echo $servicio_desc_2; ?></td>
<td style="text-align: right;"><? echo number_format($cantservicio_2, 0); ?></td>
<td style="text-align: right;"><? echo number_format($servicio_precio_2, 0); ?></td>
<td style="text-align: right;"><? echo number_format($subtotal_servicio_2, 0); ?></td>
</tr>
<?
}
?>

<tr style="text-align: center; color: #ffffff; font-weight: bold; background-color:#2083A4;">
<td style="text-align: right; marginright:10px;">Total Productos</td>
<td style="text-align: right;"><? echo number_format($cantequipos + $cantarados + $cantrastras + $cantimplementos_1 +  $cantimplementos_2 + $cantimplementos_3 + $cantimplementos_4 + $cantimplementos_5 + $cantcapac + $cantservicio_1 + $cantservicio_2 , 0); ?></td>
<td style="text-align: right;">Subtotal</td>
<td style="text-align: right;"><? echo number_format($subtotal_equipos + $subtotal_arados + $subtotal_rastras + $subtotal_implementos_1 + $subtotal_implementos_2 + $subtotal_implementos_3 + $subtotal_implementos_4 + $subtotal_implementos_5 + $subtotal_capac + $subtotal_servicio_1 + $subtotal_servicio_2, 0); ?></td>
</tr>
</tbody>
</table><br>
<?php
$total=$subtotal_equipos + $subtotal_arados + $subtotal_rastras + $subtotal_implementos_1 + $subtotal_implementos_2 + $subtotal_implementos_3 +  $subtotal_implementos_4  + $subtotal_implementos_5 + $subtotal_capac + $subtotal_servicio_1 + $subtotal_servicio_2;
?>
<table style="text-align: left; width: 100%;" border="0"
cellpadding="0" cellspacing="0">
<tbody>
<tr>
<td width="50%" style="text-align: right;"></td>
<td style="text-align: right;" width="20%">Total</td>
<td style="text-align: right;" width="20%"><b><? echo number_format($total, 0); ?></b></td>
</tr>
</tbody>
</table><p>
<img src="../cotizador/images/pie_cotiza.jpg" width=724 height=106 border=0 alt="logomekatech">
<div id="pepe"><a href="javascript:history.back(1);">Modificar</a>|<a href="javascript:adjs('?function=grabar');">Imprimir</a>
</div>
</body>
</html>