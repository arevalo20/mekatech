<?
//incluímos la clase ajax
require ('xajax/xajax.inc.php');

//instanciamos el objeto de la clase xajax
$xajax = new xajax();
$xajax->setCharEncoding('ISO-8859-1');
$xajax->decodeUTF8InputOn();

//conecto con la base de datos
$dbh = mysql_connect("mysql1047.servage.net", "cotizatv1", "cotizaTV2011") or die('problema conexión: '.mysql_error());
mysql_select_db("cotizatv1", $dbh) or die("error base de datos: ".mysql_error());;

function validar_serie($serie, $div_retorno){
  if ($serie!="") {
    $ssql = "select * from ensamble_detalle where serie = $serie";
    $rs = mysql_query($ssql);
    if (mysql_num_rows($rs)==0){
      $validacion = "<cuerpo><font color=GREEN>Número de serie válido</font></cuerpo>";
    }else{
      $validacion = "<cuerpo><font color=RED>Número de serie no válido</font></cuerpo>";
    }
  }

  $respuesta = new xajaxResponse('ISO-8859-1');
  $respuesta->addAssign($div_retorno,"innerHTML",$validacion);
  return $respuesta;
}

//registramos funciones
$xajax->registerFunction("validar_serie");

//El objeto xajax tiene que procesar cualquier petición
$xajax->processRequests();
?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<title>Reporte de Producción Diaria</title>
  <style type="text/css">
    body { font-family: Arial,Helvetica,sans-serif;
      font-size: 14px;
    }
    .1 {
      font-size: 25px;
    }
  </style>

<script type="text/javascript">
function borra_linea()
{
  lin1.innerHTML = '';
  lin2.innerHTML = '';
  lin3.innerHTML = '';
  lin4.innerHTML = '';

  document.forms["ensamble"]["linea1"].value = '';
  document.forms["ensamble"]["linea2"].value = '';
  document.forms["ensamble"]["linea3"].value = '';
  document.forms["ensamble"]["linea4"].value = '';
}

function actualiza_linea()
{
  if(ensamble.linea1.value!=0)
  {
    var tabla = '<table>';
	tabla += '<tr><td colspan=2><b>Línea 1</b></td></tr>'
	tabla += '<tr><td align=center><i>Modelo</i></td><td align=center><i>Comentario</i></td><td align=center><i># serie</i></td></tr>';
	tabla += '<tr><td><select name=select1_1><option>Modelo</option><option value=MKT-M144000A.V1>MKT-M144000A.V1</option><option value=MKT-M152000A.V1>MKT-M152000A.V1</option><option value=MKT-M133000A.V1>MKT-M133000A.V1</option><option value=MKT-12R190>MKT-12R190</option><option value=MKT-M113000C.V1>MKT-M113000C.V1</option><option value=MKT-M953000C.V1>MKT-M953000C.V1</option><option value=MKT-111100>MKT-111100</option><option value=MKT-00MP01>MKT-00MP01</option><option value=MKT-11MP03>MKT-11MP03</option><option value=MKT-95MP04>MKT-95MP04</option><option value=MKT-11MC07>MKT-11MC07</option><option value=MKT-11MC05>MKT-11MC05</option><option value=MKT-00EP15>MKT-00EP15</option></select></td>';
	tabla += '<td><input type=text name=comm1_1 size=20></td>';
	tabla += '<td><input type=text name=num1_1 size=10 onkeyup="xajax_validar_serie(this.value, \'resp_serie1_1\')"></td>';
	tabla += '<td><div id=resp_serie1_1></div></td></tr>';

    for(i=2; i<=ensamble.linea1.value; i++)
    {
      tabla += '<tr><td><select name=select1_' + i + '><option>Modelo</option><option value=MKT-M144000A.V1>MKT-M144000A.V1</option><option value=MKT-M152000A.V1>MKT-M152000A.V1</option><option value=MKT-M133000A.V1>MKT-M133000A.V1</option><option value=MKT-12R190>MKT-12R190</option><option value=MKT-M113000C.V1>MKT-M113000C.V1</option><option value=MKT-M953000C.V1>MKT-M953000C.V1</option><option value=MKT-111100>MKT-111100</option><option value=MKT-00MP01>MKT-00MP01</option><option value=MKT-11MP03>MKT-11MP03</option><option value=MKT-95MP04>MKT-95MP04</option><option value=MKT-11MC07>MKT-11MC07</option><option value=MKT-11MC05>MKT-11MC05</option><option value=MKT-00EP15>MKT-00EP15</option></select></td>';
      tabla += '<td><input type=text name=comm1_' + i + ' size=20></td>';
      tabla += '<td><input type=text name=num1_' + i + ' size=10 onkeyup="xajax_validar_serie(this.value, ' + '\'' + 'resp_serie1_' + i + '\')"></td>';
      tabla += '<td><div id=resp_serie1_' + i + '></div></td></tr>';
    }
    tabla += '</table>';
    lin1.innerHTML = tabla;
  }

  if(ensamble.linea2.value!=0)
  {
    var tabla = '<table border=0>';
  	tabla += '<tr><td colspan=2><b>Línea 2</b></td></tr>'
  	tabla += '<tr><td align=center><i>Modelo</i></td><td align=center><i>Comentario</i></td><td align=center><i># serie</i></td></tr>';
  	tabla += '<tr><td><select name=select2_1><option>Modelo</option><option value=MKT-M144000A.V1>MKT-M144000A.V1</option><option value=MKT-M152000A.V1>MKT-M152000A.V1</option><option value=MKT-M133000A.V1>MKT-M133000A.V1</option><option value=MKT-12R190>MKT-12R190</option><option value=MKT-M113000C.V1>MKT-M113000C.V1</option><option value=MKT-M953000C.V1>MKT-M953000C.V1</option><option value=MKT-111100>MKT-111100</option><option value=MKT-00MP01>MKT-00MP01</option><option value=MKT-11MP03>MKT-11MP03</option><option value=MKT-95MP04>MKT-95MP04</option><option value=MKT-11MC07>MKT-11MC07</option><option value=MKT-11MC05>MKT-11MC05</option><option value=MKT-00EP15>MKT-00EP15</option></select></td>';
  	tabla += '<td><input type=text name=comm2_1 size=20></td>';
  	tabla += '<td><input type=text name=num2_1 size=10 onkeyup="xajax_validar_serie(this.value, \'resp_serie2_1\')"></td>';
  	tabla += '<td><div id=resp_serie2_1></div></td></tr>';

    for(i=2; i<=ensamble.linea2.value; i++)
    {
      tabla += '<tr><td><select name=select2_' + i + '><option>Modelo</option><option value=MKT-M144000A.V1>MKT-M144000A.V1</option><option value=MKT-M152000A.V1>MKT-M152000A.V1</option><option value=MKT-M133000A.V1>MKT-M133000A.V1</option><option value=MKT-12R190>MKT-12R190</option><option value=MKT-M113000C.V1>MKT-M113000C.V1</option><option value=MKT-M953000C.V1>MKT-M953000C.V1</option><option value=MKT-111100>MKT-111100</option><option value=MKT-00MP01>MKT-00MP01</option><option value=MKT-11MP03>MKT-11MP03</option><option value=MKT-95MP04>MKT-95MP04</option><option value=MKT-11MC07>MKT-11MC07</option><option value=MKT-11MC05>MKT-11MC05</option><option value=MKT-00EP15>MKT-00EP15</option></select></td>';
      tabla += '<td><input type=text name=comm2_' + i + ' size=20></td>';
      tabla += '<td><input type=text name=num2_' + i + ' size=10 onkeyup="xajax_validar_serie(this.value, ' + '\'' + 'resp_serie2_' + i + '\')"></td>';
      tabla += '<td><div id=resp_serie2_' + i + '></div></td></tr>';
    }
    tabla += '</table>';
    lin2.innerHTML = tabla;
  }

  if(ensamble.linea3.value!=0)
  {
    var tabla = '<table border=0>';
	tabla += '<tr><td colspan=2><b>Línea 3</b></td></tr>'
	tabla += '<tr><td align=center><i>Modelo</i></td><td align=center><i>Comentario</i></td><td align=center><i># serie</i></td></tr>';
	tabla += '<tr><td><select name=select3_1><option>Modelo</option><option value=MKT-M144000A.V1>MKT-M144000A.V1</option><option value=MKT-M152000A.V1>MKT-M152000A.V1</option><option value=MKT-M133000A.V1>MKT-M133000A.V1</option><option value=MKT-12R190>MKT-12R190</option><option value=MKT-M113000C.V1>MKT-M113000C.V1</option><option value=MKT-M953000C.V1>MKT-M953000C.V1</option><option value=MKT-111100>MKT-111100</option><option value=MKT-00MP01>MKT-00MP01</option><option value=MKT-11MP03>MKT-11MP03</option><option value=MKT-95MP04>MKT-95MP04</option><option value=MKT-11MC07>MKT-11MC07</option><option value=MKT-11MC05>MKT-11MC05</option><option value=MKT-00EP15>MKT-00EP15</option></select></td>';
	tabla += '<td><input type=text name=comm3_1 size=20></td>';
	tabla += '<td><input type=text name=num3_1 size=10 onkeyup="xajax_validar_serie(this.value, \'resp_serie3_1\')"></td>';
	tabla += '<td><div id=resp_serie3_1></div></td></tr>';

    for(i=2; i<=ensamble.linea3.value; i++)
    {
      tabla += '<tr><td><select name=select3_' + i + '><option>Modelo</option><option value=MKT-M144000A.V1>MKT-M144000A.V1</option><option value=MKT-M152000A.V1>MKT-M152000A.V1</option><option value=MKT-M133000A.V1>MKT-M133000A.V1</option><option value=MKT-12R190>MKT-12R190</option><option value=MKT-M113000C.V1>MKT-M113000C.V1</option><option value=MKT-M953000C.V1>MKT-M953000C.V1</option><option value=MKT-111100>MKT-111100</option><option value=MKT-00MP01>MKT-00MP01</option><option value=MKT-11MP03>MKT-11MP03</option><option value=MKT-95MP04>MKT-95MP04</option><option value=MKT-11MC07>MKT-11MC07</option><option value=MKT-11MC05>MKT-11MC05</option><option value=MKT-00EP15>MKT-00EP15</option></select></td>';
      tabla += '<td><input type=text name=comm3_' + i + ' size=20></td>';
      tabla += '<td><input type=text name=num3_' + i + ' size=10 onkeyup="xajax_validar_serie(this.value, ' + '\'' + 'resp_serie3_' + i + '\')"></td>';
      tabla += '<td><div id=resp_serie3_' + i + '></div></td></tr>';
    }
    tabla += '</table>';
    lin3.innerHTML = tabla;
  }

  if(ensamble.linea4.value!=0)
  {
    var tabla = '<table border=0>';
	tabla += '<tr><td colspan=2><b>Línea 4</b></td></tr>'
	tabla += '<tr><td align=center><i>Modelo</i></td><td align=center><i>Comentario</i></td><td align=center><i># serie</i></td></tr>';
	tabla += '<tr><td><select name=select4_1><option>Modelo</option><option value=MKT-M144000A.V1>MKT-M144000A.V1</option><option value=MKT-M152000A.V1>MKT-M152000A.V1</option><option value=MKT-M133000A.V1>MKT-M133000A.V1</option><option value=MKT-12R190>MKT-12R190</option><option value=MKT-M113000C.V1>MKT-M113000C.V1</option><option value=MKT-M953000C.V1>MKT-M953000C.V1</option><option value=MKT-111100>MKT-111100</option><option value=MKT-00MP01>MKT-00MP01</option><option value=MKT-11MP03>MKT-11MP03</option><option value=MKT-95MP04>MKT-95MP04</option><option value=MKT-11MC07>MKT-11MC07</option><option value=MKT-11MC05>MKT-11MC05</option><option value=MKT-00EP15>MKT-00EP15</option></select></td>';
	tabla += '<td><input type=text name=comm4_1 size=20></td>';
	tabla += '<td><input type=text name=num4_1 size=10 onkeyup="xajax_validar_serie(this.value, \'resp_serie4_1\')"></td>';
	tabla += '<td><div id=resp_serie4_1></div></td></tr>';

	for(i=2; i<=ensamble.linea4.value; i++)
	{
	  tabla += '<tr><td><select name=select4_' + i + '><option>Modelo</option><option value=MKT-M144000A.V1>MKT-M144000A.V1</option><option value=MKT-M152000A.V1>MKT-M152000A.V1</option><option value=MKT-M133000A.V1>MKT-M133000A.V1</option><option value=MKT-12R190>MKT-12R190</option><option value=MKT-M113000C.V1>MKT-M113000C.V1</option><option value=MKT-M953000C.V1>MKT-M953000C.V1</option><option value=MKT-111100>MKT-111100</option><option value=MKT-00MP01>MKT-00MP01</option><option value=MKT-11MP03>MKT-11MP03</option><option value=MKT-95MP04>MKT-95MP04</option><option value=MKT-11MC07>MKT-11MC07</option><option value=MKT-11MC05>MKT-11MC05</option><option value=MKT-00EP15>MKT-00EP15</option></select></td>';
	  tabla += '<td><input type=text name=comm4_' + i + ' size=20></td>';
	  tabla += '<td><input type=text name=num4_' + i + ' size=10 onkeyup="xajax_validar_serie(this.value, ' + '\'' + 'resp_serie4_' + i + '\')"></td>';
	  tabla += '<td><div id=resp_serie4_' + i + '></div></td></tr>';
	}
	tabla += '</table>';
	lin4.innerHTML = tabla;
  }
}

function validateForm()
{
  var x=document.forms["ensamble"]["responsable"].value
  if (x=="Seleccione un nombre")
  {
    alert("No se seleccionó un Responsable");
    return false;
  }

  if (ensamble.linea1.value != 0)
  {
    for(i=1; i<=ensamble.linea1.value; i++)
    {
      if(document.forms["ensamble"]["select1_" + i].value == "Modelo")
      {
        alert("No se seleccionó un Modelo");
        return false;
      }
    }
  }

  if (ensamble.linea2.value != 0)
    {
      for(i=1; i<=ensamble.linea2.value; i++)
      {
        if(document.forms["ensamble"]["select2_" + i].value == "Modelo")
        {
          alert("No se seleccionó un Modelo");
          return false;
        }
      }
  }

  if (ensamble.linea3.value != 0)
    {
      for(i=1; i<=ensamble.linea3.value; i++)
      {
        if(document.forms["ensamble"]["select3_" + i].value == "Modelo")
        {
          alert("No se seleccionó un Modelo");
          return false;
        }
      }
  }

  if (ensamble.linea4.value != 0)
    {
      for(i=1; i<=ensamble.linea4.value; i++)
      {
        if(document.forms["ensamble"]["select4_" + i].value == "Modelo")
        {
          alert("No se seleccionó un Modelo");
          return false;
        }
      }
  }
}
</script>

<?
//En el <head> indicamos al objeto xajax se encargue de generar el javascript necesario
$xajax->printJavascript("xajax/");
?>
</head>
<body>
<?
//Establecer la zona horaria a México
date_default_timezone_set('America/Mexico_City');
?>

<img src="../ensamble/images/Mekatech.jpg" width=50 height=50 border=0 alt="logo">
<h1>Reporte de Producción Diaria</h1>

<form action="ver.php" method="post" onSubmit="return validateForm()" name="ensamble" id="ensamble">
<table bgcolor="#eeeeee" size="100%">
  <tr>
    <td width="169"></td>
    <td width="193"></td>
    <td width="97">Fecha</td>
    <td width="111" align="left"><? echo date("d/m/Y") . "<br />"; ?></td>
  </tr>

  <tr>
    <td><b>Responsable:</b></td>
    <td align="left">
      <select name="responsable">
        <option>Seleccione un nombre</option>
        <option value="Ivan Reyes Pulido">Ivan Reyes Pulido</option>
      </select>
    </td>
  </tr>

  <tr>
    <td colspan="4"><hr></td>
  </tr>

  <tr>
    <td colspan="4" align="left"><b>Número de equipos ensamblados por línea</b></td>
  </tr>

  <tr>
    <td align="center">Línea 1</td>
    <td align="center">Línea 2</td>
    <td align="center">Línea 3</td>
    <td align="center">Línea 4</td>
  </tr>

  <tr>
      <td align="center"><input name="linea1" size="1" maxlength="3" type="text"></td>
      <td align="center"><input name="linea2" size="1" maxlength="3" type="text"></td>
      <td align="center"><input name="linea3" size="1" maxlength="3" type="text"></td>
      <td align="center"><input name="linea4" size="1" maxlength="3" type="text"></td>
  </tr>

  <tr>
    <td align="right" colspan="4">
    <input value="Borrar" type="button" onClick="borra_linea()">
    <input value="Actualizar" type="button" onClick="actualiza_linea()"></td>
  </tr>

  <tr>
    <td colspan="4"><hr></td>
  </tr>

  <tr><td colspan="4"><div id="lin1"></div></td></tr>

  <tr><td colspan="4"><div id="lin2"></div></td></tr>

  <tr><td colspan="4"><div id="lin3"></div></td></tr>

  <tr><td colspan="4"><div id="lin4"></div></td></tr>

  <tr>
    <td colspan="2"><input value="Enviar!" type="submit"></td>
  </tr>
  </table>
</form>
</body>
</html>