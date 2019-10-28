<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<!-- Act-On Beacon -->
<script>/*<![CDATA[*/(function(w,a,b,d,s){w[a]=w[a]||{};w[a][b]=w[a][b]||{q:[],track:function(r,e,t){this.q.push({r:r,e:e,t:t||+new Date});}};var e=d.createElement(s);var f=d.getElementsByTagName(s)[0];e.async=1;e.src='//a18628.actonsoftware.com/cdnr/28/acton/bn/tracker/18628';f.parentNode.insertBefore(e,f);})(window,'ActOn','Beacon',document,'script');ActOn.Beacon.track();/*]]>*/</script>
<!-- Cierra Act-On Beacon -->

<!-- Meta Act-On -->
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link rel="stylesheet" type="text/css" href="//go.correoanalitico.com/acton/form.css">
<link rel="stylesheet" type="text/css" href="//go.correoanalitico.com/acton/formNegCap.css">
<script type="text/javascript" src="//go.correoanalitico.com/acton/form/18628/000e/form.js">
</script>
<script type="text/javascript">
function formElementSerializers() { function input(element) { switch (element.type.toLowerCase()) { case 'checkbox': case 'radio': return inputSelector(element); default: return valueSelector(element); } };
function inputSelector(element) { return element.checked ? element.value : null; };
function valueSelector(element) { return element.value; };
function select(element) { return (element.type === 'select-one' ? selectOne : selectMany)(element); };
function selectOne(element) { var index = element.selectedIndex; return index < 0 ? null : optionValue(element.options[index]); };
function selectMany(element) { var length = element.length; if (!length) return null; var values = []; for (var i = 0; i < length; i++) { var opt = element.options[i]; if (opt.selected) values.push(optionValue(opt)); } return values; };
function optionValue(opt) { if (document.documentElement.hasAttribute) return opt.hasAttribute('value') ? opt.value : opt.text; var element = document.getElementById(opt); if (element && element.getAttributeNode('value')) return opt.value; else return opt.text; };
return { input: input, inputSelector: inputSelector, textarea: valueSelector, select: select, selectOne: selectOne, selectMany: selectMany, optionValue: optionValue, button: valueSelector };
};
var requiredFields = new Array(); var requiredFieldGroups = new Array(); addRequiredField = function (id) { requiredFields.push (id); };
addRequiredFieldGroup = function (id, count) { requiredFieldGroups.push ([id, count]); };
missing = function (fieldName) { var f = document.getElementById(fieldName); var v = formElementSerializers()[f.tagName.toLowerCase()](f); if (v) { v = v.replace (/^\s*(.*)/, "$1"); v = v.replace (/(.*?)\s*$/, "$1"); } if (!v) { f.style.backgroundColor = '#FFFFCC'; return 1; } else { f.style.backgroundColor = ''; return 0; } };
missingGroup = function (fieldName, count) { var result = 1; var color = '#FFFFCC'; for (var i = 0; i < count; i++) { if (document.getElementById(fieldName+'-'+i).checked) { color = ''; result = 0; break; } } for (var i = 0; i < count; i++) document.getElementById(fieldName+'-'+i).parentNode.style.backgroundColor = color; return result; };
var validatedFields = new Array(); addFieldToValidate = function (id, validationType, arg1, arg2) { validatedFields.push ([ id, validationType, arg1, arg2 ]); };
validateField = function (id, fieldValidationValue, arg1, arg2) { var field = document.getElementById(id); var name = field.name; var value = formElementSerializers()[field.tagName.toLowerCase()](field); for (var i = 0; i < validators.length; i++) { var validationDisplay = validators[i][3]; var validationValue = validators[i][1]; var validationFunction	= validators[i][2]; if (validationValue === fieldValidationValue) { if (!validationFunction (value,arg1,arg2,id)) {	field.style.backgroundColor = '#FFFFCC'; alert (validationDisplay); return false; } else { field.style.backgroundColor = ''; } break; } } for (var i = 0; i < implicitValidators.length; i++) { var validationDisplay = implicitValidators[i][0]; var validationValue = implicitValidators[i][1]; var validationFunction	= implicitValidators[i][2]; if (validationValue === fieldValidationValue) { if (!validationFunction (value,arg1,arg2,id)) { field.style.backgroundColor = '#FFFFCC'; alert (validationDisplay); return false; } else { field.style.backgroundColor = ''; } break; } } return true; };
var r = ''; formElementById = function(form, id) { for (var i = 0; i < form.length; ++i) if (form[i].id === id) return form[i]; return null; };
doSubmit = function(form) { try { if (typeof(customSubmitProcessing) === "function") customSubmitProcessing(); } catch (err) { } var ao_jstzo = formElementById(form, "ao_jstzo"); if (ao_jstzo) ao_jstzo.value = new Date().getTimezoneOffset(); var submitButton = document.getElementById(form.id+'_ao_submit_button'); submitButton.style.visibility = 'hidden'; var missingCount = 0; for (var i = 0; i < requiredFields.length; i++) if (requiredFields[i].indexOf(form.id+'_') === 0) missingCount += missing (requiredFields[i]); for (var i = 0; i < requiredFieldGroups.length; i++) if (requiredFieldGroups[i][0].indexOf(form.id+'_') === 0) missingCount += missingGroup (requiredFieldGroups[i][0], requiredFieldGroups[i][1]); if (missingCount >
0) { alert ('Please fill all required fields. '); submitButton.style.visibility = 'visible'; return; } for (var i = 0; i < validatedFields.length; i++) { var ff = validatedFields[i]; if (ff[0].indexOf(form.id+'_') === 0 && !validateField (ff[0], ff[1], ff[2], ff[3])) { document.getElementById(ff[0]).focus(); submitButton.style.visibility = 'visible'; return; } } if (formElementById(form, 'ao_p').value === '1') { submitButton.style.visibility = 'visible'; return; } formElementById(form, 'ao_bot').value = 'nope'; form.submit(); };
</script>
<!-- Cierra Meta Act-On -->



<!-- Modal -->
<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

<script src="tech/js/modal.js"></script>

<!-- Cierra Modal-->



<!-- Add jQuery library -->
<script type="text/javascript" src="lib/jquery-1.10.1.min.js"></script>

<!-- Add fancyBox main JS and CSS files -->
<script type="text/javascript" src="source/jquery.fancybox.js?v=2.1.5"></script>
<link rel="stylesheet" type="text/css" href="source/jquery.fancybox.css?v=2.1.5" media="screen" />

<script type="text/javascript" src="file:///KINGSTON/embeddedcontent.js" defer="defer"></script>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />
<title>.:: MekaTech ::. Maquinaria con tecnolog&iacute;a de punta</title>
<link rel="stylesheet" href="tech/css/tech.css">
<META NAME="Title" CONTENT="Mekatech.">
<META NAME="Author" CONTENT="Omar Ramírez">
<META NAME="Subject" CONTENT="Tech Innovations Inc.">
<META NAME="DESCRIPTION" CONTENT="Motocultores, minitractores, accesorios, ">
<META NAME="KEYWORDS" CONTENT="multicultores, motocultores, tractores, tractor pequeño, apoyo al campo, credito, mexico">
<META NAME="OWNER" CONTENT="Tech Innovations">
<META NAME="EMAIL" CONTENT="luis.ramirez@tech-innovations.tv">
<META NAME="Designer" CONTENT="Omar Ramírez">
<META NAME="Publisher" CONTENT="Omar Ramírez">
<META NAME="Distribution" CONTENT="Global">
<META NAME="Robots" CONTENT="All">
<style type="text/css">
<!--

-->
</style>
<script type="text/javascript">
function MM_CheckFlashVersion(reqVerStr,msg){
  with(navigator){
    var isIE  = (appVersion.indexOf("MSIE") != -1 && userAgent.indexOf("Opera") == -1);
    var isWin = (appVersion.toLowerCase().indexOf("win") != -1);
    if (!isIE || !isWin){  
      var flashVer = -1;
      if (plugins && plugins.length > 0){
        var desc = plugins["Shockwave Flash"] ? plugins["Shockwave Flash"].description : "";
        desc = plugins["Shockwave Flash 2.0"] ? plugins["Shockwave Flash 2.0"].description : desc;
        if (desc == "") flashVer = -1;
        else{
          var descArr = desc.split(" ");
          var tempArrMajor = descArr[2].split(".");
          var verMajor = tempArrMajor[0];
          var tempArrMinor = (descArr[3] != "") ? descArr[3].split("r") : descArr[4].split("r");
          var verMinor = (tempArrMinor[1] > 0) ? tempArrMinor[1] : 0;
          flashVer =  parseFloat(verMajor + "." + verMinor);
        }
      }
      // WebTV has Flash Player 4 or lower -- too low for video
      else if (userAgent.toLowerCase().indexOf("webtv") != -1) flashVer = 4.0;

      var verArr = reqVerStr.split(",");
      var reqVer = parseFloat(verArr[0] + "." + verArr[2]);
  
      if (flashVer < reqVer){
        if (confirm(msg))
          window.location = "http://www.adobe.com/shockwave/download/download.cgi?P1_Prod_Version=ShockwaveFlash";
      }
    }
  } 
}
</script>
<script src="file:///KINGSTON/Scripts/AC_RunActiveContent.js" type="text/javascript"></script>

<script type="text/javascript">
	    $(document).ready(function() {
	    $("#news").fancybox({'overlayShow':true,frameWidth:800,frameHeight:400}).trigger('click');
	  });
</script>


</head>
<body onLoad="MM_CheckFlashVersion('8,0,0,0','El contenido de la p&aacute;gina requiere una nueva versi&oacute;n del reproductor Adobe Flash.  Desea descargarlo ahora?');">
<div class="row pop-up">

  <div class="box small-6 large-centered">
    <a href="#" class="close-button">&#10006;</a>
    <h3 class="suscribeteTxt">Bienvenido</h3>
     <div class="interModal">
     <form id="form_000e" method="post" enctype="multipart/form-data" action="//go.correoanalitico.com/acton/forms/userSubmit.jsp" accept-charset="UTF-8">
<input type="hidden" name="ao_a" value="18628"	>
<input type="hidden" name="ao_f" value="000e"	>
<input type="hidden" name="ao_d"	value="000e:d-0001"	>
<input type="hidden" name="ao_p" id="ao_p" value="0"	>
<input type="hidden" name="ao_jstzo"	id="ao_jstzo" value=""	>
<input type="hidden" name="ao_cuid" value=""	>
<input type="hidden" name="ao_srcid"	value=""	>
<input type="hidden" name="ao_bot"	id="ao_bot"	value="yes"	>
<input type="hidden" name="ao_camp"	value=""	>
<link rel="stylesheet" type="text/css" href="//go.correoanalitico.com/acton/form/18628/000e/form.css">
<div id="ao_alignment_container" class="aoFormContainer" align="center">
<table class="ao_tbl_container" border="0" cellspacing="0" cellpadding="0">
<tr>
<td class="ao_tbl_cell" style="padding-left: 10px; padding-right: 10px" align="center">
<div class="formField">
<div class="formSectionDescription">
<p style="text-align: center;">
<span style="font-size: 10pt;">
<span style="font-size: 12pt;">
<strong>
<span style="color: #ff6600;">
¡Hola!</span>
</strong>
</span>
<span style="font-size: 12pt;">
te invitamos a que recibas noticias de <strong>
Mekatech</strong>
 es muy sencillo!</span>
</span>
</p>
</div>
</div>
</td>
</tr>
<tr>
<td class="ao_tbl_cell" style="padding-left: 10px; padding-right: 10px" align="center">
<div class="formInputBlock">
<div align="left">
<div class="formField">
<table cellspacing="0" cellpadding="0">
<tr>
<td class="sideBySideCell formFieldLabel" >
<label for = "form_000e_fld_1_fn">
Nombre</label>
<b style="color: #FF0000; cursor: default" title="Required Field">
*</b>
</td>
<td class="sideBySideCell formFieldLabel" style="padding-left: 5px">
<label for = "form_000e_fld_1_ln">
Apellido</label>
<b style="color: #FF0000; cursor: default" title="Required Field">
*</b>
</td>
</tr>
<tr>
<td class="sideBySideCell" >
<input type="text" class="l6e formFieldText formFieldMediumLeft" id="form_000e_fld_1_fn" name="First Name" value="">
</td>
<td class="sideBySideCell" style="padding-left: 5px">
<input type="text" class="l6e formFieldText formFieldMediumRight" id="form_000e_fld_1_ln" name="Last Name" value="">
</td>
</tr>
<tr>
<td>
&nbsp;</td>
</tr>
<tr>
<td class="formFieldLabel sideBySideCell">
<label for = "form_000e_fld_1_em">
Correo Electronico</label>
<b style="color: #FF0000; cursor: default" title="Required Field">
*</b>
</td>
</tr>
<tr>
<td colspan="2">
<input type="Email" class="l6e formFieldText formFieldLarge" id="form_000e_fld_1_em" name="E-mail Address" value="">
</td>
</tr>
</table>
</div>
<script type="text/javascript">
if (typeof(addRequiredField) != 'undefined') { addRequiredField ('form_000e_fld_1_fn'); addRequiredField ('form_000e_fld_1_ln'); addRequiredField ('form_000e_fld_1_em'); } if (typeof(addFieldToValidate) != 'undefined') { addFieldToValidate ('form_000e_fld_1_em', 'EMAIL'); } </script>
</div>
</div>
</td>
</tr>
<!-- BUTTONS -->
<tr>
<td>
&nbsp;</td>
</tr>
<tr>
<td style="padding-bottom: 10px" align="center" id="form_000e_ao_submit_button">
<input id="form_000e_ao_submit_input" type="button" name="Submit" value="Submit" onClick="doSubmit(document.getElementById('form_000e'))">
</td>
</tr>
<tr class="formNegCap">
<td>
<input type="text" id="ao_form_neg_cap" name="ao_form_neg_cap" value="">
</td>
</tr>
</table>
</div>
<img src='//go.correoanalitico.com/acton/form/18628/000e:d-0001/pgend.gif' width='1' height='1'>
</form>
     
     
     </div>
    <!-- Continue     
    <a href="#" class="button">Continue</a>
     Continue -->
  </div>
</div>
<div align="center"  id="overlay" class="cover blur-in">
  <!--url's used in the movie-->
  <!--text used in the movie-->
  <!-- saved from url=(0013)about:internet -->
  <table width="100" height="189" border="0" align="center" cellpadding="0" cellspacing="0">
    <tr>
      <td width="800" height="50" colspan="2"><script type="text/javascript">
AC_FL_RunContent( 'codebase','http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=7,0,19,0','width','800','height','170','src','http://www.mekatech.tv/1','quality','high','pluginspage','http://www.macromedia.com/go/getflashplayer','movie','http://www.mekatech.tv/1' ); //end AC code
</script>

<div>
</div>






  <img src="http://www.mekatech.tv/image13/encabe01.jpg" width="800" height="58" border="0" usemap="#Map3"></td>
    </tr>
    <tr>
      <td height="18" colspan="2"><img src="http://www.mekatech.tv/image13/menugral.jpg" width="800" height="auto" border="0" usemap="#Map2" />
        <map name="Map2" id="Map2">
          <area shape="rect" coords="28,22,66,38" href="indeespa.php" />
          <area shape="rect" coords="147,23,209,38" href="mekatech.php" />
          <area shape="rect" coords="269,23,338,38" href="productos.php" />
          <area shape="rect" coords="387,24,492,39" href="financiamiento.php" />
          <area shape="rect" coords="387,8,437,22" href="financiamiento.php" />
          <area shape="rect" coords="509,5,565,20" href="noticias.php" />
          <area shape="rect" coords="510,25,603,38" href="testagricola.php" />
          <area shape="rect" coords="628,5,689,19" href="contacto.php" />
          <area shape="rect" coords="628,24,759,38" href="centrosservicio.php" />
          <area shape="rect" coords="628,41,756,54" href="guia.php" />
      </map>      </td>
    </tr>
    
    <tr>
      <td height="35" colspan="2"><img src="http://www.mekatech.tv/image13/PLANTILLAcotizador02.jpg" width="800" height="46" border="0" usemap="#Map"></td>
    </tr>
    <tr>
      <td height="18" colspan="2"><img src="http://www.mekatech.tv/image13/buscamos.jpg" width="801" height="170" /></td>
    </tr>
    <tr>
      <td height="18" colspan="2"><table width="792" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr>
          <td width="368"><img src="http://www.mekatech.tv/image/fotorectangular2.jpg" width="368" height="211" /></td>
          <td width="16">&nbsp;</td>
          <td width="408"><p class="Estilo13 Estilo14 Estilo25"><span class="Estilo27">Vanguardia y </span><span class="Estilo27">Tecnolog&iacute;a en </span><br>
                  <span class="Estilo27">Maquinaria Agr&iacute;cola</span></br>
            <p align="justify" class="Estilo9"><span class="Estilo14">Mekatech, </span>una empresa al servicio del campo mexicano, presenta nuevas soluci&oacute;nes a las necesidades de los productores. Los modernos equipos Mekatech son &aacute;giles y potentes, dise&ntilde;ados para realizar una gran variedad de tareas agr&iacute;colas de forma sencilla y rentable, para los que cultivan, cosechan, transforman, enriquecen y edifican sobre la tierra.</p></td>
        </tr>
      </table></td>
    </tr>
    <tr>
      <td height="14" colspan="2" bgcolor="#FFFFFF">&nbsp;</td>
    </tr>
    <tr>
      <td height="14" colspan="2" bgcolor="#FFFFFF"><span class="Estilo1"><span class="Estilo23">Linea</span> <span class="Estilo21">MekaTech</span> (55) 3688 7905 <strong>Fax:</strong> (55) 2700 3970 <strong>Lada sin Costo:</strong> 01 800 249 7905</span></td>
    </tr>
    <tr>
      <td colspan="2" bgcolor="#FFFFFF"><div align="center" class="style1">
        <div align="left"><a href="http://www.tech-innovations.tv" target="_blank"></a>Mekatech 2008, Todos los derechos reservados, es una marca registrada de Tech Innovations Inc,</div>
      </div></td>
    </tr>
  </table>  
</div>
<div class="conteIsoInicio"><img class="imgIsoInicio" src="img/certification.png" alt="Certificado ISO 9000"/></div>


<script type="text/javascript">
var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
</script>
<script type="text/javascript">
var pageTracker = _gat._getTracker("UA-3641311-16");
pageTracker._trackPageview();
</script>

<map name="Map3">
<area shape="rect" coords="716,16,746,47" href="https://www.facebook.com/mekatech.mecanizacioninteligente" target="_blank"><area shape="rect" coords="754,16,784,47" href="http://www.youtube.com/user/MotocultoresMekaTech/videos?shelf_id=1&sort=dd&view=0" target="_blank">
</map>
<map name="Map"><area shape="rect" coords="392,14,462,33" href="http://www.mekatech.tv/cotizador/" target="_blank">
  <area shape="rect" coords="555,12,698,33" href="trabajaconnosotros.php">
</map>


<!--
NO BORRAR NI MODIFICAR LA SIGUIENTE LINEA ES EL LINK PARA EL REGISTRO DEL NEWSLETTER
<a class="fancybox fancybox.iframe" id="news" href="newsletter.php"></a>
-->



</body>
</html>
