<?
//inclu�mos la clase ajax
require ('xajax/xajax.inc.php');

//instanciamos el objeto de la clase xajax
$xajax = new xajax();
$xajax->setCharEncoding('ISO-8859-1');
$xajax->decodeUTF8InputOn();

//conecto con la base de datos
$dbh = mysql_connect("mysql1051.servage.net", "cotizatv1", "cotizaTV2011") or die('problema conexi�n: '.mysql_error());
mysql_select_db("cotizatv1", $dbh) or die("error base de datos: ".mysql_error());;

function validar_nombre($nombre){
      $ssql = "select * from encabezado_satisfaccion where nombre_cliente like '%$nombre%'";
      $rs = mysql_query($ssql);
      if (mysql_num_rows($rs)==0){
         $validacion = "<cuerpo><font color=GREEN>Nombre V�lido</font></cuerpo>";
      }else{
         $validacion = "<cuerpo><font color=RED>Nombre No V�lido</font></cuerpo>";
      }

   $respuesta = new xajaxResponse('ISO-8859-1');
   $respuesta->addAssign("respuesta","innerHTML",$validacion);
   return $respuesta;
}

//registramos funciones
$xajax->registerFunction("validar_nombre");

//El objeto xajax tiene que procesar cualquier petici�n
$xajax->processRequests();
?>

<HTML>
<HEAD>

 <!--
 2015-04-28
 Se cambia el Titulo de:   
 <TITLE>Encuesta de satisfacci�n al Cliente</TITLE>
 A:
 <TITLE>Evaluaci�n de Seguimiento Posventa</TITLE>
 -->

 <!--
 2015-10-21
 Se cambia el Titulo de:   
 <TITLE>Evaluaci�n de Seguimiento Posventa</TITLE>
 A:
 <TITLE>ENCUESTA DE SATISFACCION AL CLIENTE POSVENTA</TITLE>
 -->

 <TITLE>Encuesta de Satisfacci�n al Cliente Posventas</TITLE>
  <style type="text/css">
	titulo {font-family: Arial,Helvetica,sans-serif;
        font-size: 18px;
	}
	cuerpo {font-family: Arial,Helvetica,sans-serif;
        font-size: 14px;
	}
	pregunta {font-family: Arial,Helvetica,sans-serif;
		font-size: 14px;
	}
  </style>

  <?
	//En el <head> indicamos al objeto xajax se encargue de generar el javascript necesario
	$xajax->printJavascript("xajax/");
  ?>

	<script language="javascript">
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
</HEAD>
<BODY>
	<table width="100%" border="0">
		<tr>
		<td width="6%" rowspan="2"><img src="../clientes/images/Mekatech.jpg" width=50 height=50 border=0 alt="logo"></td>

		<!--
		2015-04-28
		Se cambia: <titulo>Encuesta de Satisfacci�n al Cliente F-PSV-020.R1</titulo>
		A: <titulo>Evaluaci�n de Seguimiento Posventa F-PSV-020.R1</titulo>
		-->

		<!--
		2015-04-28
		Se cambia: <titulo>Evaluaci�n de Seguimiento Posventa F-PSV-020.R1</titulo>
		A: <titulo>Encuesta de Satisfacci�n al Cliente FPV-004</titulo>
		-->

		<td width="48%" rowspan="2" valign="bottom"><titulo>ENCUESTA DE SATISFACCION AL CLIENTE POSVENTAS FA-017</titulo></td>
		<td width="46%" height="25" align="left"><titulo></titulo></td>
		</tr>
		<tr>
			<td align="left"><titulo></titulo></td>
		</tr>
	</table>
 
	<form method="post" action="graba.php" name="cuestionario" id="cuestionario">
	
	<input type="hidden" name="version_formato" value="01"; />
	
		<table border=1 bgcolor="#eeeeee">
			<tr>
				<td><cuerpo>Nombre del Cliente</cuerpo></td>
					<td align="left">
						<input name="fullname" size="50" maxlength="100" type="text">
						<a style='cursor:pointer;text-decoration:underline; color:#0000ff;' onclick="xajax_validar_nombre(document.cuestionario.fullname.value);"><cuerpo>Validar nombre</cuerpo></a>
					</td>
				<td align="left">
					<div id="respuesta"></div>
				</td>
			</tr>
	   
			<tr>
				<td><cuerpo>Documento que ampare su compra:</cuerpo></td>
				<td align="left"><input name="documento" size="50" maxlength="100" type="text"></td>
			</tr>
			
			<tr>
				<td><cuerpo>Fecha de inicio de solicitud de servicio:</cuerpo></td>
				<td align="left"><input size="12" id="fc_1287699270" type="text" READONLY name="fecha_solicitud_servicio" title="DD/MM/YYYY" value="MM/DD/YYYY"> <a href="javascript:displayCalendarFor('fc_1287699270');"><img src="../clientes/images/cal.jpg" border="0"></a></td>
			</tr>
		
			<tr>
				<td><cuerpo>Fecha de cierre del servicio:</cuerpo></td>
				<td align="left"><input size="12" id="fc_1287699271" type="text" READONLY name="fecha_cierre_servicio" title="DD/MM/YYYY" value="MM/DD/YYYY"> <a href="javascript:displayCalendarFor('fc_1287699271');"><img src="../clientes/images/cal.jpg" border="0"></a></td>
			</tr>
			
			<tr>
				<td><cuerpo>Nombre CTS:</cuerpo></td>
				<td align="left">
					<!--<input name="nombre_cts" size="50" maxlength="100" type="text">-->
					<select name="nombre_cts">
						<option value="CTS Chignahuapan">CTS Chignahuapan</option>
						<option value="CTS Cuayucatepec">CTS Cuayucatepec</option>
						<option value="CTS de Tlatlauquitepec">CTS de Tlatlauquitepec</option>
						<option value="CTS Izucar de Matamoros">CTS Izucar de Matamoros</option>
						<option value="CTS Quechulac">CTS Quechulac</option>
						<option selected value="CTS San Martin Texmelucan">CTS San Martin Texmelucan</option>
						<option value="CTS Tecamachalco">CTS Tecamachalco</option>
						<option value="CTS Venustiano Carranza">CTS Venustiano Carranza</option>
						<option value="CTS Xochitlan">CTS Xochitlan</option>
					</select>
				</td>
			</tr>
			
		</table>
		
		<table border=1 bgcolor="#eeeeee">
			<tr>
				<td><pregunta>#</pregunta></td>
				<td align="center"><pregunta>PREGUNTA</pregunta></td>
			</tr>
			
			<tr>
				<td><pregunta>1</pregunta></td>
				<td><pregunta>�C�mo califica el servicio de posventa brindada por el CTS?</pregunta></td>
				<td>
					<pregunta>
						Excelente<input type="radio" name="radio_ask1" value="3">
						Bueno<input type="radio" name="radio_ask1" value="2">
						Regular<input type="radio" name="radio_ask1" value="1">
						Malo<input type="radio" name="radio_ask1" value="0">
					</pregunta>
				</td>
			</tr>
		
			<tr>
				<td><pregunta>2</pregunta></td>
				<td><pregunta>�C�mo considera usted el tiempo de respuesta que el CTS le brindo en su reparaci�n y/o mantenimiento de su equipo?</pregunta></td>
				<td>
					<pregunta>
						Excelente<input type="radio" name="radio_ask2" value="3">
						Bueno<input type="radio" name="radio_ask2" value="2">
						Regular<input type="radio" name="radio_ask2" value="1">
						Malo<input type="radio" name="radio_ask2" value="0">
					</pregunta>
				</td>
			</tr>
			<tr>
				<td><pregunta>3</pregunta></td>
				<td><pregunta>�Que le pareci� el conocimiento y la amabilidad del servicio que le brindo el personal que le atendi�?</pregunta></td>
				<td>
					<pregunta>
						Excelente<input type="radio" name="radio_ask3" value="3">
						Bueno<input type="radio" name="radio_ask3" value="2">
						Regular<input type="radio" name="radio_ask3" value="1">
						Malo<input type="radio" name="radio_ask3" value="0">
					</pregunta>
				</td>
			</tr>
   
			<tr>
				<td><pregunta>4</pregunta></td>
				<td><pregunta>�C�mo califica la asistencia t�cnica o asesor�a que el CTS le brindo en la reparaci�n y/o mantenimiento de su equipo?</pregunta></td>			
				<td>
					<pregunta>
						Excelente<input type="radio" name="radio_ask4" value="3">
						Bueno<input type="radio" name="radio_ask4" value="2">
						Regular<input type="radio" name="radio_ask4" value="1">
						Malo<input type="radio" name="radio_ask4" value="0">
					</pregunta>
				</td>			
			</tr>
			
			<tr>
				<td><pregunta>5</pregunta></td>
				<td><pregunta>�C�mo califica usted la calidad de nuestros servicios posventa?</pregunta></td>
				<!--<td align="left"><textarea name="comm_ask5" cols="30" rows="5"></textarea></td>-->
				<td>
					<pregunta>
						Excelente<input type="radio" name="radio_ask5" value="3">
						Bueno<input type="radio" name="radio_ask5" value="2">
						Regular<input type="radio" name="radio_ask5" value="1">
						Malo<input type="radio" name="radio_ask5" value="0">
					</pregunta>
				</td>
			</tr>
		
			<tr>
				<td><pregunta>6</pregunta></td>
				<td><pregunta>�C�mo califica usted nuestra atenci�n telef�nica?</pregunta></td>
				<td>
					<pregunta>
						Excelente<input type="radio" name="radio_ask6" value="3">
						Bueno<input type="radio" name="radio_ask6" value="2">
						Regular<input type="radio" name="radio_ask6" value="1">
						Malo<input type="radio" name="radio_ask6" value="0">
					</pregunta>
				</td>
			</tr>
			
			<tr>
				<td><pregunta>7</pregunta></td>
				<td><pregunta>�C�mo podemos mejorar nuestro servicio de posventa que le brindamos?</pregunta></td>
				<td align="left"><textarea name="comm_ask7" cols="30" rows="5"></textarea></td>
			</tr>

		</table>
		
		<input value="Guardar Encuesta" type="submit">
		
	</form>
</BODY>
</HTML>
