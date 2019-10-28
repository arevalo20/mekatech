<?
//inclu�mos la clase ajax
require ('xajax/xajax.inc.php');

//instanciamos el objeto de la clase xajax
$xajax = new xajax();
$xajax->setCharEncoding('ISO-8859-1');
$xajax->decodeUTF8InputOn();

function lectura($entrega_id, $cliente_nombre){
  //conecto con la base de datos
  $db = mysql_connect("mysql1047.servage.net", "cotizatv1", "cotizaTV2011") or die('problema conexi�n: '.mysql_error());
  mysql_select_db("cotizatv1", $db) or die("error base de datos: ".mysql_error());;

  //Si hicieron una solicitud por entrega
  if($entrega_id !="") {
    //Consulta para el nombre de la entrega
    $strsql = "SELECT * from entrega_encabezado WHERE id_entrega = ".$entrega_id;
    //Ejecutar consulta
    $rs = mysql_query($strsql, $db);
    while($var = mysql_fetch_row($rs)){
      $nombre_entrega = $var[1];
    }

    //Cargar datos de los clientes
    $strsql = "SELECT entrega_encabezado.nombre, entrega_cuerpo.id_cliente, entrega_cuerpo.nombre_cliente, entrega_cuerpo.fact_cliente, ";
    $strsql.= "entrega_cuerpo.serie_entregado, entrega_cuerpo.50hr_vale, entrega_cuerpo.50hr_fecha, entrega_cuerpo.150hr_vale, entrega_cuerpo.150hr_fecha,";
    $strsql.= "entrega_implementos.moto_11hp, entrega_implementos.arado_sencillo, entrega_implementos.vagon_freno, ";
    $strsql.= "entrega_implementos.rastra_16cuchillas, entrega_implementos.sistema_riego, entrega_implementos.sistema_fumiga, ";
    $strsql.= "entrega_implementos.generador, entrega_implementos.segadora, entrega_implementos.sembradora, entrega_implementos.desgrana_maiz ";
    $strsql.= "FROM entrega_encabezado ";
    $strsql.= "INNER JOIN entrega_cuerpo ON entrega_encabezado.id_entrega = entrega_cuerpo.id_entrega ";
    $strsql.= "INNER JOIN entrega_implementos ON entrega_cuerpo.id_implementos = entrega_implementos.id_implementos ";
    $strsql.= "WHERE entrega_encabezado.id_entrega = ".$entrega_id;

    //Ejecutar consulta
    $rs = mysql_query($strsql, $db);

    $html_code="<table border=1>";
    $html_code.="<tr>";
    $html_code.="<td colspan=18><b>Entrega:</b>".$nombre_entrega."</td>";
    $html_code.="</tr>";
    $html_code.="<tr>";
    $html_code.="<th style=font-size:12px; align=center>Clave Cliente</th>";
    $html_code.="<th style=font-size:12px; align=center>Nombre Cliente</th>";
    $html_code.="<th style=font-size:12px; align=center>Factura</th>";
    $html_code.="<th style=font-size:12px; align=center>Serie Entregada</th>";
    $html_code.="<th style=font-size:12px; align=center>Vale Servicio 50hrs</th>";
    $html_code.="<th style=font-size:12px; align=center>Fecha Servicio 50hrs</th>";
    $html_code.="<th style=font-size:12px; align=center>Vale Servicio 150hrs</th>";
    $html_code.="<th style=font-size:12px; align=center>Fecha Servicio 150hrs</th>";
    $html_code.="<th style=font-size:12px; align=center>Motocultor 11HP</th>";
    $html_code.="<th style=font-size:12px; align=center>Arado</th>";
    $html_code.="<th style=font-size:12px; align=center>Vag�n con freno</th>";
    $html_code.="<th style=font-size:12px; align=center>Rastra 16 cuchillas</th>";
    $html_code.="<th style=font-size:12px; align=center>Sistema de riego</th>";
    $html_code.="<th style=font-size:12px; align=center>Sistema de fumigaci�n</th>";
    $html_code.="<th style=font-size:12px; align=center>Generador de energ�a</th>";
    $html_code.="<th style=font-size:12px; align=center>Segadora</th>";
    $html_code.="<th style=font-size:12px; align=center>Sembradora</th>";
    $html_code.="<th style=font-size:12px; align=center>Desgranadora de ma�z</th>";
    $html_code.="</tr>";

    //Leer datos de la entrega
    while($var = mysql_fetch_row($rs)){
      $html_code.= "<tr>";
      $html_code.= "<td>".$var[1]."</td><td>".$var[2]."</td><td>".$var[3]."</td><td>".$var[4]."</td><td>".$var[5]."</td>";
      $html_code.= "<td>".$var[6]."</td><td>".$var[7]."</td><td>".$var[8]."</td>";
      $html_code.= "<td>".$var[9]."</td><td>".$var[10]."</td><td>".$var[11]."</td><td>".$var[12]."</td>";
      $html_code.= "<td>".$var[13]."</td><td>".$var[14]."</td><td>".$var[15]."</td><td>".$var[16]."</td>";
      $html_code.= "<td>".$var[17]."</td><td>".$var[18]."</td>";
      $html_code.= "</tr>";
    }
    $html_code.="</table>";
  }
  else{
    //Consulta para obtener datos del cliente solicitado
	$strsql = "SELECT entrega_cuerpo.id_implementos, entrega_cuerpo.id_cliente, entrega_cuerpo.nombre_cliente, ";
	$strsql.= "entrega_cuerpo.fact_cliente, entrega_cuerpo.serie_entregado, entrega_cuerpo.50hr_vale, ";
	$strsql.= "entrega_cuerpo.50hr_fecha, entrega_cuerpo.150hr_vale, entrega_cuerpo.150hr_fecha, entrega_implementos.moto_11hp, ";
	$strsql.= "entrega_implementos.arado_sencillo, entrega_implementos.vagon_freno, entrega_implementos.rastra_16cuchillas, ";
	$strsql.= "entrega_implementos.sistema_riego, entrega_implementos.sistema_fumiga, entrega_implementos.generador, ";
	$strsql.= "entrega_implementos.segadora, entrega_implementos.sembradora, entrega_implementos.desgrana_maiz ";
	$strsql.= "FROM entrega_cuerpo ";
	$strsql.= "INNER JOIN entrega_implementos ON entrega_cuerpo.id_implementos = entrega_implementos.id_implementos ";
	$strsql.= "WHERE entrega_cuerpo.nombre_cliente LIKE '%".$cliente_nombre."%'";

	//Ejecutar consulta
	$rs = mysql_query($strsql, $db);

	$html_code="<table border=1>";
	$html_code.="<tr>";
	$html_code.="<td colspan=18><b>Cliente:</b>".$cliente_nombre."</td>";
	$html_code.="</tr>";
	$html_code.="<tr>";
	$html_code.="<th style=font-size:12px; align=center>Clave Cliente</th>";
	$html_code.="<th style=font-size:12px; align=center>Nombre Cliente</th>";
	$html_code.="<th style=font-size:12px; align=center>Factura</th>";
	$html_code.="<th style=font-size:12px; align=center>Serie Entregada</th>";
	$html_code.="<th style=font-size:12px; align=center>Vale Servicio 50hrs</th>";
	$html_code.="<th style=font-size:12px; align=center>Fecha Servicio 50hrs</th>";
	$html_code.="<th style=font-size:12px; align=center>Vale Servicio 150hrs</th>";
	$html_code.="<th style=font-size:12px; align=center>Fecha Servicio 150hrs</th>";
	$html_code.="<th style=font-size:12px; align=center>Motocultor 11HP</th>";
	$html_code.="<th style=font-size:12px; align=center>Arado</th>";
	$html_code.="<th style=font-size:12px; align=center>Vag�n con freno</th>";
	$html_code.="<th style=font-size:12px; align=center>Rastra 16 cuchillas</th>";
	$html_code.="<th style=font-size:12px; align=center>Sistema de riego</th>";
	$html_code.="<th style=font-size:12px; align=center>Sistema de fumigaci�n</th>";
	$html_code.="<th style=font-size:12px; align=center>Generador de energ�a</th>";
	$html_code.="<th style=font-size:12px; align=center>Segadora</th>";
	$html_code.="<th style=font-size:12px; align=center>Sembradora</th>";
	$html_code.="<th style=font-size:12px; align=center>Desgranadora de ma�z</th>";
    $html_code.="</tr>";

    //Leer datos del cliente
    while($var = mysql_fetch_row($rs)){
      if ($var[6]=='')
      {
        $html_code.="vacio";
      }
      $html_code.= "<tr>";
      $html_code.= "<td>".$var[1]."</td><td>".$var[2]."</td><td>".$var[3]."</td><td>".$var[4]."</td><td>".$var[5]."</td>";
      $html_code.= "<td><img src=images/cal.jpg border=0></td>";
      //<input size="12" id="fc_1287699270" type="text" READONLY name="fecha_adq" title="DD/MM/YYYY" value="MM/DD/YYYY"> <a href="javascript:displayCalendarFor('fc_1287699270');"><img src="../clientes/images/cal.jpg" border="0"></a></td>
      $html_code.= "<td>".$var[7]."</td>";
      $html_code.= "<td></td>";
      $html_code.= "<td>".$var[9]."</td><td>".$var[10]."</td><td>".$var[11]."</td><td>".$var[12]."</td>";
      $html_code.= "<td>".$var[13]."</td><td>".$var[14]."</td><td>".$var[15]."</td><td>".$var[16]."</td>";
      $html_code.= "<td>".$var[17]."</td><td>".$var[18]."</td>";
      $html_code.= "</tr>";
    }
    $html_code.="</table>";
  }

  //Cerrar conexi�n a la base de datos
  mysql_close($db);

  //Regresar la respuesta
  $respuesta = new xajaxResponse('ISO-8859-1');
  $respuesta->addAssign("datos","innerHTML",$html_code);
  return $respuesta;
}

//registramos funciones
$xajax->registerFunction("lectura");

//El objeto xajax tiene que procesar cualquier petici�n
$xajax->processRequests();
?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<title>Reporte de entregas</title>
  <style type="text/css">
    body { font-family: Arial,Helvetica,sans-serif;
      font-size: 14px;
    }
    .1 {
      font-size: 25px;
    }
  </style>

<script type="text/javascript">
function validateForm()
{
  var entrega_valor=document.entrega.entregas.value;
  var cliente_valor=document.entrega.cliente.value;

  if (entrega_valor == "" && cliente_valor == "")
  {
    alert("No se selecciono una entrega válida o un cliente válido");
    return false;
  }
  else
  {
    xajax_lectura(entrega_valor, cliente_valor);
  }
}

function habilita_texto()
{
  document.entrega.cliente.disabled=false;
  document.entrega.entregas.disabled=true;
  document.entrega.entregas.options[0].selected=true;
  document.entrega.cliente.focus();
}

function deshabilita_texto()
{
  document.entrega.cliente.disabled=true;
  document.entrega.entregas.disabled=false;
  document.entrega.cliente.value="";
  document.entrega.entregas.focus();
}

// Flooble Dynamic  Calendar.
// Copyright (c) 2004 by Animus Pactum Consulting Inc.
//---------------------------------------------------------------------
// You may use this code freely on your site as long as you do not make
// modifications to it other than editing the stylesheet settings to
// make it fit your design. You may not remove this notice or any links
// to flooble.com.
// More information about this script is available at
//    http://www.flooble.com/scripts/calendar.php
//--Global Stuff-------------------------------------------------------
var fc_ie = false;
if (document.all) { fc_ie = true; }

var calendars = Array();
var fc_months = Array('Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec');
var fc_openCal;

var fc_calCount = 0;

function getCalendar(fieldId) {
  return calendars[fieldId];
}

function displayCalendarFor(fieldId) {
  var formElement = fc_getObj(fieldId);
  displayCalendar(formElement);
}

function displayCalendar(formElement) {
  if (!formElement.id) {
  formElement.id = fc_calCount++;
}
var cal = calendars[formElement.id];
if (typeof(cal) == 'undefined') {
  cal = new floobleCalendar();
  cal.setElement(formElement);
  calendars[formElement.id] = cal;
}
      if (cal.shown) {
        cal.hide();

      } else {
        cal.show();
      }
    }

    function display3FieldCalendar(me, de, ye) {
      if (!me.id) { me.id = fc_calCount++; }
      if (!de.id) { de.id = fc_calCount++; }
      if (!ye.id) { ye.id = fc_calCount++; }
      var id = me.id + '-' + de.id + '-' + ye.id;
      var cal = calendars[id];
      if (typeof(cal) == 'undefined') {
        cal = new floobleCalendar();
	cal.setElements(me, de, ye);
	calendars[id] = cal;
      }
      if (cal.shown) {
        cal.hide();
      } else {
	cal.show();
      }
    }

    //--Class Stuff--------------------------------------------------
    function floobleCalendar() {
      // Define Methods
     this.setElement = fc_setElement;
     this.setElements = fc_setElements;
     this.parseDate = fc_parseDate;
     this.generateHTML = fc_generateHTML;
     this.show = fc_show;
     this.hide = fc_hide;
     this.moveMonth = fc_moveMonth;
     this.setDate = fc_setDate;
     this.formatDate = fc_formatDate;
     this.setDateFields = fc_setDateFields;
     this.parseDateFields = fc_parseDateFields;

     this.shown = false;
    }

    function fc_setElement(formElement) {
      this.element = formElement;
      this.format = this.element.title;
      this.value = this.element.value;
      this.id = this.element.id;
      this.mode = 1;
    }

    function fc_setElements(monthElement, dayElement, yearElement) {
      this.mElement = monthElement;
      this.dElement = dayElement;
      this.yElement = yearElement;
      this.id = this.mElement.id + '-' + this.dElement.id + '-' + this.yElement.id;
      this.element = this.mElement;
      if (fc_absoluteOffsetLeft(this.dElement) < fc_absoluteOffsetLeft(this.element)) {
        this.element = this.dElement;
      }
      if (fc_absoluteOffsetLeft(this.yElement) < fc_absoluteOffsetLeft(this.element)) {
	this.element = this.yElement;
      }
      if (fc_absoluteOffsetTop(this.mElement) > fc_absoluteOffsetTop(this.element)) {
	this.element = this.mElement;
      }
      if (fc_absoluteOffsetTop(this.dElement) > fc_absoluteOffsetTop(this.element)) {
	this.element = this.dElement;
      }
      if (fc_absoluteOffsetTop(this.yElement) > fc_absoluteOffsetTop(this.element)) {
	this.element = this.yElement;
      }

      this.mode = 2;
    }

    function fc_parseDate() {
      if (this.element.value) {
	this.date = new Date();
	var out = '';
	var token = '';
	var lastCh, ch;
	var start = 0;
	lastCh = this.format.substring(0, 1);
	for (i = 0; i < this.format.length; i++) {
	  ch = this.format.substring(i, i+1);
	  if (ch == lastCh) {
	    token += ch;
	    } else {
	      fc_parseToken(this.date, token, this.element.value, start);
	      start += token.length;
	      token = ch;
	    }
	    lastCh = ch;
	  }
	  fc_parseToken(this.date, token, this.element.value, start);
	  } else {
	    this.date = new Date();
	  }
	if ('' + this.date.getMonth() == 'NaN') {
	  this.date = new Date();
	}
     }

	function fc_parseDateFields() {
		this.date = new Date();
		if (this.mElement.value) this.date.setMonth(fc_getFieldValue(this.mElement) - 1);
		if (this.dElement.value) this.date.setDate(fc_getFieldValue(this.dElement));
		if (this.yElement.value) this.date.setFullYear(fc_getFieldValue(this.yElement));
		if ('' + this.date.getMonth() == 'NaN') {
			this.date = new Date();
		}
	}

	function fc_setDate(d, m, y) {
		this.date.setYear(y);
		this.date.setMonth(m);
		this.date.setDate(d);
		if (this.mode == 1) {
			this.element.value = this.formatDate();
		} else {
			this.setDateFields();
		}
		this.hide();
	}

	function fc_setDateFields() {
		fc_setFieldValue(this.mElement, fc_zeroPad(this.date.getMonth() + 1));
		fc_setFieldValue(this.dElement, fc_zeroPad(this.date.getDate()));
		fc_setFieldValue(this.yElement, this.date.getFullYear());
	}

	function fc_formatDate() {
		var out = '';
		var token = '';
		var lastCh, ch;
		lastCh = this.format.substring(0, 1);
		for (i = 0; i < this.format.length; i++) {
			ch = this.format.substring(i, i+1);
			if (ch == lastCh) {
				token += ch;
			} else {
				out += fc_formatToken(this.date, token);
				token = ch;
			}
			lastCh = ch;
		}
		out += fc_formatToken(this.date, token);
		return out;
	}

	function fc_show() {
		if (typeof(fc_openCal) != 'undefined') { fc_openCal.hide(); }

		if (this.mode == 1) {
			this.parseDate();
		} else {
			this.parseDateFields();
		}
		this.showDate = new Date(this.date.getTime());
		if (typeof(this.div) != 'undefined') {
			this.div.innerHTML = this.generateHTML();
		}

		if (typeof(this.div) == 'undefined') {
			this.div = document.createElement('DIV');
			this.div.style.position = 'absolute';
			this.div.style.display = 'none';
			this.div.className = 'fc_main';
			this.div.innerHTML = this.generateHTML();
			this.div.style.left = fc_absoluteOffsetLeft(this.element);
			this.div.style.top = fc_absoluteOffsetTop(this.element) + this.element.offsetHeight + 1;
			document.body.appendChild(this.div);
		}
		this.div.style.display = 'block';
		this.shown = true;
		fc_openCal = this;
	}

	function fc_generateHTML() {
		var html = '<TABLE><TR><TD CLASS="fc_head" COLSPAN="6"><DIV STYLE="float: right"><a class="fc_head" href="http://www.flooble.com/scripts/calendar.php" target="_blank">�</a></DIV>CALENDAR:</TD><TD CLASS="fc_date" onMouseover="this.className = \'fc_dateHover\';" onMouseout="this.className=\'fc_date\';" onClick="getCalendar(\'' + this.id + '\').hide();"><B>X</B></TD></TR>';
		html += '<TR><TD CLASS="fc_date" onMouseover="this.className = \'fc_dateHover\';" onMouseout="this.className=\'fc_date\';" onClick="getCalendar(\'' + this.id + '\').moveMonth(-12);"><B><<</B></TD><TD CLASS="fc_date" onMouseover="this.className = \'fc_dateHover\';" onMouseout="this.className=\'fc_date\';" onClick="getCalendar(\'' + this.id + '\').moveMonth(-1);"><B><</B></TD><TD COLSPAN="3" CLASS="fc_wk">' + fc_months[this.showDate.getMonth()] + ' ' + fc_getYear(this.showDate) + '</TD><TD CLASS="fc_date" onMouseover="this.className = \'fc_dateHover\';" onMouseout="this.className=\'fc_date\';" onClick="getCalendar(\'' + this.id + '\').moveMonth(1);"><B>></B></TD><TD CLASS="fc_date" onMouseover="this.className = \'fc_dateHover\';" onMouseout="this.className=\'fc_date\';" onClick="getCalendar(\'' + this.id + '\').moveMonth(12);"><B>>></B></TD></TR>';
		html += '<TR><TD WIDTH="14%" CLASS="fc_wk">Mo</TD><TD WIDTH="14%" CLASS="fc_wk">Tu</TD><TD WIDTH="14%" CLASS="fc_wk">We</TD><TD WIDTH="14%" CLASS="fc_wk">Th</TD><TD WIDTH="14%" CLASS="fc_wk">Fr</TD><TD class="fc_wknd" WIDTH="14%">Sa</TD><TD class="fc_wknd" WIDTH="14%">Su</TD></TR>';
		html += '<TR>';
		var dow = 0;
		var i, style;
		var totald = fc_monthLength(this.showDate);
		for (i = 0; i < fc_firstDOW(this.showDate); i++) {
			dow++;
			html += '<TD>�</TD>';
		}
		for (i = 1; i <= totald; i++) {
			if (dow == 0) { html += '<TR>'; }
			if (this.showDate.getMonth() == this.date.getMonth() && this.showDate.getYear() == this.date.getYear() && this.date.getDate() == i) {
				style = ' style="font-weight: bold;"';
			} else {
				style = '';
			}
			html += '<TD CLASS="fc_date" onMouseover="this.className = \'fc_dateHover\';" onMouseout="this.className=\'fc_date\';" onClick="getCalendar(\'' + this.id + '\').setDate(' + i + ', ' + this.showDate.getMonth() + ', ' + this.showDate.getFullYear() + ');" ' + style + '>' + i + '</TD>';
			dow++;
			if (dow == 7) {
				html += '</TR>';
				dow = 0;
			}
		}
		if (dow != 0) {
			for (i = dow; i < 7; i++) {
				html += '<TD>�</TD>';
			}
		}
		html +='</TR>';
		html += '</TABLE>';
		return html;
	}

	function fc_hide() {
		if (this.div != false) {
			this.div.style.display = 'none';
		}
		this.shown = false;
		fc_openCal = undefined;
	}

	function fc_moveMonth(amount) {
		var m = this.showDate.getMonth();
		var y = fc_getYear(this.showDate);
		if (amount == 1)  {
			if (m == 11)  {
				this.showDate.setMonth(0);
				this.showDate.setYear(y + 1);
			} else {
				this.showDate.setMonth(m + 1);
			}
		} else if (amount == -1)  {
			if (m == 0)  {
				this.showDate.setMonth(11);
				this.showDate.setYear(y - 1);
			} else {
				this.showDate.setMonth(m - 1);
			}
		} else if (amount == 12) {
			this.showDate.setYear(y + 1);
		} else if (amount == -12) {
			this.showDate.setYear(y - 1);
		}
		this.div.innerHTML = this.generateHTML();
	}

	//--Utils-------------------------------------------------------------
	function fc_absoluteOffsetTop(obj) {
     	var top = obj.offsetTop;
     	var parent = obj.offsetParent;
     	while (parent != document.body) {
     		top += parent.offsetTop;
     		parent = parent.offsetParent;
     	}
     	return top;
     }

     function fc_absoluteOffsetLeft(obj) {
     	var left = obj.offsetLeft;
     	var parent = obj.offsetParent;
     	while (parent != document.body) {
     		left += parent.offsetLeft;
     		parent = parent.offsetParent;
     	}
     	return left;
     }

     function fc_firstDOW(date) {
     	var dow = date.getDay();
     	var day = date.getDate();
 		if (day % 7 == 0) return dow;
     	return (7 + dow - (day % 7)) % 7;
     }

     function fc_getYear(date) {
     	var y = date.getYear();
     	if (y > 1900) return y;
     	return 1900 + y;
     }

     function fc_monthLength(date) {
		var month = date.getMonth();
		var totald = 30;
		if (month == 0
			|| month == 2
			|| month == 4
			|| month == 6
			|| month == 7
			|| month == 9
			|| month == 11) totald = 31;
		if (month == 1) {
			var year = date.getYear();
			if (year % 4 == 0 && (year % 400 == 0 || year % 100 != 0))
		 		totald = 29;
			else
				totald = 28;
		}
		return totald;
     }

     function fc_formatToken(date, token) {
		var command = token.substring(0, 1);
		if (command == 'y' || command == 'Y') {
			if (token.length == 2) { return fc_zeroPad(date.getFullYear() % 100); }
			if (token.length == 4) { return date.getFullYear(); }
		}
		if (command == 'd' || command == 'D') {
			if (token.length == 2) { return fc_zeroPad(date.getDate()); }
		}
		if (command == 'm' || command == 'M') {
			if (token.length == 2) { return fc_zeroPad(date.getMonth() + 1); }
			if (token.length == 3) { return fc_months[date.getMonth()]; }
		}
		return token;
     }

     function fc_parseToken(date, token, value, start) {
		var command = token.substring(0, 1);
		var v;
		if (command == 'y' || command == 'Y') {
			if (token.length == 2) {
				v = value.substring(start, start + 2);
				if (v < 70) { date.setFullYear(2000 + parseInt(v)); } else { date.setFullYear(1900 + parseInt(v)); }
			}
			if (token.length == 4) { v = value.substring(start, start + 4); date.setFullYear(v);}
		}
		if (command == 'd' || command == 'D') {
			if (token.length == 2) { v = value.substring(start, start + 2); date.setDate(v); }
		}
		if (command == 'm' || command == 'M') {
			if (token.length == 2) { v = value.substring(start, start + 2); date.setMonth(v - 1); }
			if (token.length == 3) {
				v = value.substring(start, start + 3);
				var i;
				for (i = 0; i < fc_months.length; i++) {
					if (fc_months[i].toUpperCase() == v.toUpperCase()) { date.setMonth(i); }
				}
			}
		}
     }

     function fc_zeroPad(num) {
		if (num < 10) { return '0' + num; }
		return num;
     }

	function fc_getObj(id) {
		if (fc_ie) { return document.all[id]; }
		else { return document.getElementById(id);	}
	}

      function fc_setFieldValue(field, value) {
                if (field.type.substring(0,6) == 'select') {
                        var i;
                        for (i = 0; i < field.options.length; i++) {
                                if (fc_equals(field.options[i].value, value)) {
                                        field.selectedIndex = i;
                                }
                        }
                } else {
                        field.value = value;
                }
      }

      function fc_getFieldValue(field) {
                if (field.type.substring(0,6) == 'select') {
                        return field.options[field.selectedIndex].value;
                } else {
                        return field.value;
                }
      }

      function fc_equals(val1, val2) {
      		if (val1 == val2) return true;
      		if (1 * val1 == 1 * val2) return true;
      		return false;
      }


</script>

  <style>
  .fc_main { background: #DDDDDD; border: 1px solid #000000; font-family: Verdana; font-size: 10px; }
  .fc_date { border: 1px solid #D9D9D9;  cursor:pointer; font-size: 10px; text-align: center;}
  .fc_dateHover, TD.fc_date:hover { cursor:pointer; border-top: 1px solid #FFFFFF; border-left: 1px solid #FFFFFF; border-right: 1px solid #999999; border-bottom: 1px solid #999999; background: #E7E7E7; font-size: 10px; text-align: center; }
  .fc_wk {font-family: Verdana; font-size: 10px; text-align: center;}
  .fc_wknd { color: #FF0000; font-weight: bold; font-size: 10px; text-align: center;}
  .fc_head { background: #000066; color: #FFFFFF; font-weight:bold; text-align: left;  font-size: 11px; }
  </style>

<?
//En el <head> indicamos al objeto xajax se encargue de generar el javascript necesario
$xajax->printJavascript("xajax/");
?>
</head>

<body onload="document.entrega.cliente.disabled=true">
<?
//Establecer la zona horaria a M�xico
date_default_timezone_set('America/Mexico_City');
?>

<table>
  <tr>
    <td><img src="../ensamble/images/Mekatech.jpg" width=50 height=50 border=0 alt="logo"></td>
    <td><h1>Reporte de Entregas F-PSV-023.R0</h1></td>
</table>

<form action="" method="post" name="entrega" id="entrega">
  <table bgcolor="#eeeeee" size="100%">
    <tr>
      <td width="103"></td>
      <td width="322"></td>
      <td width="68">Fecha</td>
      <td width="184" align="left"><? echo date("d/m/Y") . "<br />"; ?></td>
    </tr>

    <tr>
      <td><b><input type="radio" name="filtro" value="entrega_full" checked onClick="deshabilita_texto();">Entrega:</b></td>
      <td align="left">
        <select name="entregas" id="entregas">
          <option>Seleccione una entrega</option>
          <?
            //Conectarse a la base de datos para sacar los nombres de las entregas y subirlos al select
   		    $dbhx = mysql_connect("mysql1047.servage.net", "cotizatv1", "cotizaTV2011") or die('problema conexi�n: '.mysql_error());
		    mysql_select_db("cotizatv1", $dbhx) or die("error base de datos: ".mysql_error());;
            $ssqlx = "SELECT * FROM entrega_encabezado";
            $rsx = mysql_query($ssqlx, $dbhx);

            //Leer cada entrega para subirla al select
		    while($varx = mysql_fetch_row($rsx)){
              echo '<option value='.$varx[0].'>'.$varx[1].'</option>';
		    };

		    mysql_close($dbhx);
          ?>
        </select>
      </td>
    </tr>

    <tr>
      <td><b><input type="radio" name="filtro" value="nombre_cliente" onClick="habilita_texto();">Cliente:</b></td>
      <td align="left"><input name="cliente" id="cliente" size="50" type="text"></td>
      <td align="left"><input value="Enviar!" type="button" onClick="validateForm()"></td>
    </tr>

    <tr>
      <td colspan="4"><hr></td>
    </tr>
  </table>

  <div id="datos"></div>
</form>
</body>
</html>