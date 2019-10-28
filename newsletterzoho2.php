<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />

<!-- Note :
   - You can modify the font style and form style to suit your website. 
   - Code lines with comments �Do not remove this code�  are required for the form to work properly, make sure that you do not remove these lines of code. 
   - The Mandatory check script can modified as to suit your business needs. 
   - It is important that you test the modified form before going live.-->
<div id='crmWebToEntityForm' style='width:800px;margin:auto;'>
   <META HTTP-EQUIV ='content-type' CONTENT='text/html;charset=UTF-8'>
   <form action='https://crm.zoho.com/crm/WebToLeadForm' name=WebToLeads2117231000000208065 method='POST' onSubmit='javascript:document.charset="UTF-8"; return checkMandatory()' accept-charset='UTF-8'>

	 <!-- Do not remove this code. -->
	<input type='text' style='display:none;' name='xnQsjsdp' value='aee5de623a0dfdee01bef0c65193646757779f1650f6dacaab77624acfa8f4ae'/>
	<input type='hidden' name='zc_gad' id='zc_gad' value=''/>
	<input type='text' style='display:none;' name='xmIwtLD' value='c1fe7d833738464f91b2b049c051a3ea6e7acd0050a8b35da1c5c8d1c21042c2'/>
	<input type='text' style='display:none;'  name='actionType' value='TGVhZHM='/>

	<input type='text' style='display:none;' name='returnURL' value='http&#x3a;&#x2f;&#x2f;mekatech.tv&#x2f;newresp.php' /> 
	 <!-- Do not remove this code. -->
	<input type='text' style='display:none;' id='ldeskuid' name='ldeskuid'></input>
	<input type='text' style='display:none;' id='LDTuvid' name='LDTuvid'></input>
	 <!-- Do not remove this code. -->
	<style>
		tr , td { 
			padding:6px;
			border-spacing:0px;
			border-width:0px;
			}
	</style>
	<table style='width:450px;background-color:#fcfcfc;color:black'>
	 <td width="150"><img src="http://www.mekatech.tv/image13/suscripcion_01.jpg" width="150" /></td>
 
	
	 <tr>
        <td width="515"><img src="http://www.mekatech.tv/image13/suscripcion_02.jpg" width="350"  /></td>

	<tr>
	
	<td>Gracias por enviarnos tus datos nos comunicaremos lo antes posible</td>
	
	
	<td colspan='2' style='text-align:center; padding-top:15px;'>
		
		
	    </td>
	</tr>
   </table>
	<script>
 	  var mndFileds=new Array('Company','Last Name');
 	  var fldLangVal=new Array('Empresa','Apellidos');
		var name='';
		var email='';

 	  function checkMandatory() {
		for(i=0;i<mndFileds.length;i++) {
		  var fieldObj=document.forms['WebToLeads2117231000000208065'][mndFileds[i]];
		  if(fieldObj) {
			if (((fieldObj.value).replace(/^\s+|\s+$/g, '')).length==0) {
			 if(fieldObj.type =='file')
				{ 
				 alert('Seleccione un archivo para cargar.'); 
				 fieldObj.focus(); 
				 return false;
				} 
			alert(fldLangVal[i] +' no puede estar vac�o.'); 
   	   	  	  fieldObj.focus();
   	   	  	  return false;
			}  else if(fieldObj.nodeName=='SELECT') {
  	   	   	 if(fieldObj.options[fieldObj.selectedIndex].value=='-None-') {
				alert(fldLangVal[i] +' no puede ser nulo.'); 
				fieldObj.focus();
				return false;
			   }
			} else if(fieldObj.type =='checkbox'){
 	 	 	 if(fieldObj.checked == false){
				alert('Please accept  '+fldLangVal[i]);
				fieldObj.focus();
				return false;
			   } 
			 } 
			 try {
			     if(fieldObj.name == 'Last Name') {
				name = fieldObj.value;
 	 	 	    }
			} catch (e) {}
		    }
		}
		trackVisitor();
	}
</script><script type='text/javascript' id='VisitorTracking'>var $zoho= $zoho || {salesiq:{values:{},ready:function(){$zoho.salesiq.floatbutton.visible('hide');}}};var d=document;s=d.createElement('script');s.type='text/javascript';s.defer=true;s.src='https://salesiq.zoho.com/grupocomercom/float.ls?embedname=grupocomercom';t=d.getElementsByTagName('script')[0];t.parentNode.insertBefore(s,t);function trackVisitor(){try{if($zoho){var LDTuvidObj = document.forms['WebToLeads2117231000000208065']['LDTuvid'];if(LDTuvidObj){LDTuvidObj.value = $zoho.salesiq.visitor.uniqueid();}var firstnameObj = document.forms['WebToLeads2117231000000208065']['First Name'];if(firstnameObj){name = firstnameObj.value +' '+name;}$zoho.salesiq.visitor.name(name);var emailObj = document.forms['WebToLeads2117231000000208065']['Email'];if(emailObj){email = emailObj.value;$zoho.salesiq.visitor.email(email);}}} catch(e){}}</script>
	</form>
</div>
</body>
</html>
