 <? if($_POST){
                include('carga.php');
 	}
 	else{
 ?>
     <form method="post" action="" enctype="multipart/form-data">
      <input type="hidden" id="MAX_FILE_SIZE" name="MAX_FILE_SIZE" value="1000000">
      Archivo nuevo:<em>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(Tama&ntilde;o menos de 1M) </em><br />
      <input type="file" name="form_data"  size="40" accept="text/csv">
      <p><input name="" type="submit" id="" value="Enviar"> </p>
     </form>
     Formato del archivo</p>
     ID CLIENTE,FACTURA,# SERIE ENTREGADO, # SERIE, IMPORTE, NOMBRE CLIENTE , SERVICIOS A, SERVICIOS B, MUNICIPIO, LOCALIDAD, Motocultor 11 HP,Arado Sencillo,Vagón de volteo con freno,Rastra 18 Cuchillas ,Sistema de Riego ,Sistema de fumigación,Generador de energía,Segadora,Sembradora / Fertilizadora,Desgranador de Maiz
 <? } ?>
