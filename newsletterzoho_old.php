<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />
	<link rel="stylesheet" type="text/css" href="2019/styles/main_styles.css">
	<!-- Note :
   - You can modify the font style and form style to suit your website. 
   - Code lines with comments Do not remove this code  are required for the form to work properly, make sure that you do not remove these lines of code. 
   - The Mandatory check script can modified as to suit your business needs. 
   - It is important that you test the modified form before going live.-->
	<div id='crmWebToEntityForm' class='form-modal'>
		<META HTTP-EQUIV='content-type' CONTENT='text/html;charset=UTF-8'>
		<table>
			<tr>
				<td width="150"><img src="http://www.mekatech.tv/image13/suscripcion_01.jpg" width="150" /></td>
			</tr>
			<tr>
				<td width="515"><img src="http://www.mekatech.tv/image13/suscripcion_02.jpg" width="350" /></td>
			</tr>
		</table>
	</div>

	<div class='iframe-modal'>
		<!-- Note :
   - You can modify the font style and form style to suit your website. 
   - Code lines with comments ���Do not remove this code���  are required for the form to work properly, make sure that you do not remove these lines of code. 
   - The Mandatory check script can modified as to suit your business needs. 
   - It is important that you test the modified form before going live.-->
		<div id='crmWebToEntityForm' class='formulario-modal'>
			<META HTTP-EQUIV='content-type' CONTENT='text/html;charset=UTF-8'>
			<form action='https://crm.zoho.com/crm/WebToLeadForm' name=WebToLeads2117231000000208065 method='POST' onSubmit='javascript:document.charset="UTF-8"; return checkMandatory2117231000000208065()' accept-charset='UTF-8'>
				<input type='text' style='display:none;' name='xnQsjsdp' value='aee5de623a0dfdee01bef0c65193646757779f1650f6dacaab77624acfa8f4ae'></input>
				<input type='hidden' name='zc_gad' id='zc_gad' value=''></input>
				<input type='text' style='display:none;' name='xmIwtLD' value='c1fe7d833738464f91b2b049c051a3ea6e7acd0050a8b35da1c5c8d1c21042c2'></input>
				<input type='text' style='display:none;' name='actionType' value='TGVhZHM='></input>
				<input type='text' style='display:none;' name='returnURL' value='http://mekatech.tv/newsletterzoho2.php'></input>
				<!-- Do not remove this code. -->
				<input type='text' style='display:none;' id='ldeskuid' name='ldeskuid'></input>
				<input type='text' style='display:none;' id='LDTuvid' name='LDTuvid'></input>
				<!-- Do not remove this code. -->
				<!-- <style>
					tr,
					td {
						padding: 6px;
						border-spacing: 0px;
						border-width: 0px;
					}
				</style> -->
				<table class='modal-form'>
					<tr>
						<td colspan='2' align='left' class='titulo'><strong>Datos Mekatech</strong></td>
					</tr>
					<tr>
						<td class='nombre'>Nombre<span style='color:red;'>*</span></td>
						<td class='campo'><input type='text' class='input-text' maxlength='40' name='First Name' /></td>
					</tr>
					<tr>
						<td class='nombre'>Apellidos<span style='color:red;'>*</span></td>
						<td class='campo'><input type='text' class='input-text' maxlength='80' name='Last Name' /></td>
					</tr>
					<tr>
						<td class='nombre'>Correo electrónico<span style='color:red;'>*</span></td>
						<td class='campo'><input type='text' class='input-text' maxlength='100' name='Email' /></td>
					</tr>
					<tr>
						<td class='nombre'>Tel&eacute;fono</td>
						<td class='campo'><input type='text' class='input-text' maxlength='30' name='Phone' /></td>
					</tr>
					<tr>
						<td class='nombre'>Empresa</td>
						<td class='campo'><input type='text' class='input-text' maxlength='100' name='Company' /></td>
					</tr>
					<tr>
						<td colspan='2' class='botones'>
							<input id='formsubmit' type='submit' value='Enviar'></input>
							<input type='reset' name='reset' value='Restablecer'></input>
						</td>
					</tr>
				</table>
				<script>
					var mndFileds = new Array('First Name', 'Last Name', 'Email');
					var fldLangVal = new Array('Nombre', 'Apellidos', 'Correo electrónico');
					var name = '';
					var email = '';

					function checkMandatory2117231000000208065() {
						for (i = 0; i < mndFileds.length; i++) {
							var fieldObj = document.forms['WebToLeads2117231000000208065'][mndFileds[i]];
							if (fieldObj) {
								if (((fieldObj.value).replace(/^\s+|\s+$/g, '')).length == 0) {
									if (fieldObj.type == 'file') {
										alert('Seleccione un archivo para cargar.');
										fieldObj.focus();
										return false;
									}
									alert(fldLangVal[i] + ' no puede estar vacío.');
									fieldObj.focus();
									return false;
								} else if (fieldObj.nodeName == 'SELECT') {
									if (fieldObj.options[fieldObj.selectedIndex].value == '-None-') {
										alert(fldLangVal[i] + ' no puede ser nulo.');
										fieldObj.focus();
										return false;
									}
								} else if (fieldObj.type == 'checkbox') {
									if (fieldObj.checked == false) {
										alert('Please accept  ' + fldLangVal[i]);
										fieldObj.focus();
										return false;
									}
								}
								try {
									if (fieldObj.name == 'Last Name') {
										name = fieldObj.value;
									}
								} catch (e) {}
							}
						}
						trackVisitor();
						document.getElementById('formsubmit').disabled = true;
					}
				</script>
			</form>
		</div>

	</div>
</head>