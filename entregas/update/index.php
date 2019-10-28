 <? if($_POST){
                include('carga.php');
 	}
 	else{
 ?>
     <form method="post" action="" enctype="multipart/form-data">
      <input type="hidden" id="MAX_FILE_SIZE" name="MAX_FILE_SIZE" value="1000000">
      Archivo nuevo:<em>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(Tama&ntilde;o menos de 1M) </em><br />
      <input type="file" name="form_data"  size="40">
      <p><input name="" type="submit" id="" value="Enviar"> </p>
     </form>
 <? } ?>
