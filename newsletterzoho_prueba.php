<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />
<!-- Note :
   - You can modify the font style and form style to suit your website. 
   - Code lines with comments “Do not remove this code”  are required for the form to work properly, make sure that you do not remove these lines of code. 
   - The Mandatory check script can modified as to suit your business needs. 
   - It is important that you test the modified form before going live.-->
<div id='crmWebToEntityForm' style='width:800px;margin:auto;'>
   <META HTTP-EQUIV ='content-type' CONTENT='text/html;charset=UTF-8'>
   
   
   
   <form action='https://forms.zohopublic.com/enriquemenchaca/form/DatosMekatech/formperma/ApwGIRpAVb43FoRhowd4fP5rORf3cXxErlTshoLvCbQ/htmlRecords/submit' name='form' id='form' method='POST' accept-charset='UTF-8' enctype='multipart/form-data' onSubmit="zf_validateandsubmitdata();">

	 <!-- Do not remove this code. -->
	<input type="hidden" name="zf_referrer_name" value=""><!-- To Track referrals , place the referrer name within the " " in the above hidden input field -->
<input type="hidden" name="zf_redirect_url" value=""><!-- To redirect to a specific page after record submission , place the respective url within the " " in the above hidden input field -->
<input type="hidden" name="zc_gad" value=""><!-- If GCLID is enabled in Zoho CRM Integration, click details of AdWords Ads will be pushed to Zoho CRM -->
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

    

<tr><td colspan='2' style='text-align:center; padding-top:15px;'>

<iframe frameborder="0" style="height:500px;width:99%;border:none;" src='https://forms.zohopublic.com/enriquemenchaca/form/DatosMekatech/formperma/ApwGIRpAVb43FoRhowd4fP5rORf3cXxErlTshoLvCbQ'></iframe>

	    </td>
	</tr>    
   </table>
	<script>
 	  var mndFileds=new Array('First Name','Last Name','Email','Phone');
 	  var fldLangVal=new Array('Nombre','Apellidos','Correo electrónico','Teléfono');
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
			alert(fldLangVal[i] +' no puede estar vacío.'); 
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
