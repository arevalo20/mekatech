<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />
	<link rel="stylesheet" type="text/css" href="2019/styles/main_styles.css">
	

	<div class="iframe-modal">
		<!-- Note :
   - You can modify the font style and form style to suit your website. 
   - Code lines with comments ���Do not remove this code���  are required for the form to work properly, make sure that you do not remove these lines of code. 
   - The Mandatory check script can modified as to suit your business needs. 
   - It is important that you test the modified form before going live.-->
		<div id='crmWebToEntityForm' style='width:100%; margin:auto;'>
			<META HTTP-EQUIV='content-type' CONTENT='text/html;charset=UTF-8'>
			<form action='https://crm.zoho.com/crm/WebToLeadForm' name=WebToLeads2117231000000208065 method='POST' onSubmit='javascript:document.charset="UTF-8"; return checkMandatory2117231000000208065()' accept-charset='UTF-8'>
				<input type='text' style='display:none;' name='xnQsjsdp' value='aee5de623a0dfdee01bef0c65193646757779f1650f6dacaab77624acfa8f4ae'></input>
				<input type='hidden' name='zc_gad' id='zc_gad' value=''></input>
				<input type='text' style='display:none;' name='xmIwtLD' value='c1fe7d833738464f91b2b049c051a3ea6e7acd0050a8b35da1c5c8d1c21042c2'></input>
				<input type='text' style='display:none;' name='actionType' value='TGVhZHM='></input>
				<input type='text' style='display:none;' name='returnURL' value='http://mekatech.tv/newsletterzoho2.php'> </input>
				<!-- Do not remove this code. -->
				<input type='text' style='display:none;' id='ldeskuid' name='ldeskuid'></input>
				<input type='text' style='display:none;' id='LDTuvid' name='LDTuvid'></input>
				<!-- Do not remove this code. -->
				<style>
					/* #crmWebToEntityForm tr,
					#crmWebToEntityForm td {
						padding: 6px;
						border-spacing: 0px;
						border-width: 0px;
					} */
				</style>
				<table style="width: 100%;">
					<tr>
						<td width="100%"><img src="http://www.mekatech.tv/image13/suscripcion_01.jpg" style="width: 160px;" /></td>
					</tr>
					<tr>
						<td width="100%"><img src="http://www.mekatech.tv/image13/suscripcion_02.jpg" style="width: 350px;" /></td>
					</tr>
				</table>
				<table class='modal-form' style="width: 100%;">
					<tr>
						<td colspan='2' class='titulo'><strong>Datos Mekatech</strong></td>
					</tr>
					<tr>
						<td class='nombre'>Nombre<span style='color:red;'>*</span></td>
						<td class='campo'><input type='text' style='width:100%;box-sizing:border-box;' maxlength='40' name='First Name' /></td>
					</tr>
					<tr>
						<td class='nombre'>Apellidos<span style='color:red;'>*</span></td>
						<td class='campo'><input type='text' style='width:100%;box-sizing:border-box;' maxlength='80' name='Last Name' /></td>
					</tr>
					<tr>
						<td class='nombre'>Correo electrónico<span style='color:red;'>*</span></td>
						<td class='campo'><input type='text' style='width:100%;box-sizing:border-box;' maxlength='100' name='Email' /></td>
					</tr>
					<tr>
						<td class='nombre'>Tel&eacute;fono</td>
						<td class='campo'><input type='text' style='width:100%;box-sizing:border-box;' maxlength='30' name='Phone' /></td>
					</tr>
					<tr>
						<td class='nombre'>Empresa</td>
						<td class='campo'><input type='text' style='width:100%;box-sizing:border-box;' maxlength='100' name='Company' /></td>
					</tr>

					<tr>
						<td class="botones" colspan='2'>
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
				<script type='text/javascript' id='VisitorTracking'>
					var $zoho = $zoho || {};
					$zoho.salesiq = $zoho.salesiq || {
						widgetcode: 'bd02d54e3ca6ddb1d0fd275f2278070e5de8c5a45ac78dd76c831075820771c0b783a0492330ec6f9f7e88b3708c69a8',
						values: {},
						ready: function() {
							$zoho.salesiq.floatbutton.visible('hide');
						}
					};
					var d = document;
					s = d.createElement('script');
					s.type = 'text/javascript';
					s.id = 'zsiqscript';
					s.defer = true;
					s.src = 'https://salesiq.zoho.com/widget';
					t = d.getElementsByTagName('script')[0];
					t.parentNode.insertBefore(s, t);

					function trackVisitor() {
						try {
							if ($zoho) {
								var LDTuvidObj = document.forms['WebToLeads2117231000000208065']['LDTuvid'];
								if (LDTuvidObj) {
									LDTuvidObj.value = $zoho.salesiq.visitor.uniqueid();
								}
								var firstnameObj = document.forms['WebToLeads2117231000000208065']['First Name'];
								if (firstnameObj) {
									name = firstnameObj.value + ' ' + name;
								}
								$zoho.salesiq.visitor.name(name);
								var emailObj = document.forms['WebToLeads2117231000000208065']['Email'];
								if (emailObj) {
									email = emailObj.value;
									$zoho.salesiq.visitor.email(email);
								}
							}
						} catch (e) {}
					}
				</script>
			</form>
		</div>
	</div>
</head>