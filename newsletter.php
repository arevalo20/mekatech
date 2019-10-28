<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />


<!-- Código Act-On -->

<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link rel="stylesheet" type="text/css" href="//a18628.actonsoftware.com/acton/form.css">
<link rel="stylesheet" type="text/css" href="//a18628.actonsoftware.com/acton/formNegCap.css">
<script type="text/javascript" src="//a18628.actonsoftware.com/acton/form/18628/000e/form.js">
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

<!-- Cierra código Act-On -->







<title>Newsletter</title>
<style type="text/css">
<!--
.Estilo1 {font-family: Arial, Helvetica, sans-serif}
-->
</style>
</head>

<body>
<table width="689" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td width="223"><img src="http://www.mekatech.tv/image13/suscripcion_01.jpg" width="223" height="167" /></td>
    <td width="466"><table width="459" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td width="515"><img src="http://www.mekatech.tv/image13/suscripcion_02.jpg" width="459" height="64" /></td>
      </tr>
      <tr>
        <td height="67">
        <!-- Form Act On -->
        <form id="form_000e" method="post" enctype="multipart/form-data" action="//a18628.actonsoftware.com/acton/forms/userSubmit.jsp" accept-charset="UTF-8">
<input type="hidden" name="ao_a" value="18628"	>
<input type="hidden" name="ao_f" value="000e"	>
<input type="hidden" name="ao_d"	value="000e:d-0001"	>
<input type="hidden" name="ao_p" id="ao_p" value="0"	>
<input type="hidden" name="ao_jstzo"	id="ao_jstzo" value=""	>
<input type="hidden" name="ao_cuid" value=""	>
<input type="hidden" name="ao_srcid"	value=""	>
<input type="hidden" name="ao_bot"	id="ao_bot"	value="yes"	>
<input type="hidden" name="ao_camp"	value=""	>
<link rel="stylesheet" type="text/css" href="//a18628.actonsoftware.com/acton/form/18628/000e/form.css">
<div id="ao_alignment_container" class="aoFormContainer" align="center">
<table class="ao_tbl_container" border="0" cellspacing="0" cellpadding="0">
<tr>
<td class="ao_tbl_cell" style="padding-left: 10px; padding-right: 10px" align="center">
<div class="formField">
<div class="formSectionDescription">
<p style="text-align: center;">
<span style="font-size: 10pt;">
<strong>
<span style="color: #ff6600;">
Hola!</span>
</strong>
te invitamos a que recibas noticias de <strong>
Mekatech</strong>
 es muy sencillo!</span>
</p>
</div>
</div>
</td>
</tr>
<tr>
<td class="ao_tbl_cell" style="padding-left: 10px; padding-right: 10px" align="center">
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
<img src='//a18628.actonsoftware.com/acton/form/18628/000e:d-0001/pgend.gif' width='1' height='1'>
</form>
        
        
        <!-- Cierra Form Act On -->
        
        </td>
      </tr>
      <tr>
        <td height="65"><img src="http://www.mekatech.tv/image13/suscripcion_04.jpg" width="459" height="48" /></td>
      </tr>
    </table></td>
  </tr>
</table>
</body>
</html>
