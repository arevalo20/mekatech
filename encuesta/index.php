<HTML>
<HEAD>
 <TITLE>Encuesta del Grado de Satisdacci&oacute;n del Cliente</TITLE>
  <style type="text/css">
   titulo {font-family: Arial,Helvetica,sans-serif;
           font-size: 18px;
   }
   cuerpo {font-family: Arial,Helvetica,sans-serif;
           font-size: 12px;
   }
   pregunta {font-family: Arial,Helvetica,sans-serif;
             font-size: 10px;
   }
  .style1 {color: #F0F0F0}
  </style>

</HEAD>
<BODY>
   <table border=0 width="100%">
  <tr>
    <td width="6%" rowspan="2"><img src="../encuesta/img/Mekatech.jpg" width=50 height=50 border=0 alt="logo"></td>
    <td width="50%" rowspan="2" valign="bottom"><titulo>Encuesta del Grado de Satisfacci�n del Cliente F-PSV-020.R0</titulo></td>
    <td width="44%"><titulo>Fecha: <? echo date("d/m/Y"); ?></titulo></td>
  </tr>
 </table>
 <form method="post" action="graba.php" name="encuesta" id="encuesta">
  <table border=1 bgcolor="#eeeeee" width="93%">
   <tr>
    <td align="center" colspan=2>
	  <titulo>CLIENTE</titulo>
	</td>
   </tr>
   <tr>
    <td width="37%"><cuerpo>�Es usted beneficiario u operador del Motorcultor Mekatech?</cuerpo></td>
	<td width="63%" align="left">
	 <cuerpo>Beneficiario<input type="radio" name="cliente_1" value="Beneficiario">
     Operador<input type="radio" name="cliente_1" value="Operador"></cuerpo>
	</td>
   </tr>
   <tr>
    <td><cuerpo>�Cu�l es su nombre?</cuerpo></td>
    <td align="left">
      <input name="cliente_2" size="85" maxlength="100" type="text">
    </td>
  <tr>
   <td><cuerpo>�Cu�l es su edad?</cuerpo></td>
    <td align="left">
      <input name="cliente_3" size="5" maxlength="100" type="text">
    </td>
  </tr>
  <tr>
   <td><cuerpo>�Cu�l es su direcci�n?</cuerpo></td>
    <td align="left">
     <input name="cliente_4" size="85" maxlength="100" type="text">
   </td>
  </tr>
  <tr>
   <td><cuerpo>�Cu�l es su tel�fono?</cuerpo></td>
    <td align="left">
      <input name="cliente_5" size="15" maxlength="100" type="text">
   </td>
  </tr>	
  </table>

  <table border=1 bgcolor="#eeeeee" width="93%">
   <tr>
    <td width="37%"><cuerpo>�Cu�ntas personas hacen uso del motocultor?</cuerpo></td>
    <td width="63%">
	 <cuerpo>1<input type="radio" name="cliente_6" value="1">2-4<input type="radio" name="cliente_6" value="2-4">m�s de 5<input type="radio" name="cliente_6" value="+5"></cuerpo>
	</td>
   </tr>
   <tr>
    <td><cuerpo>�Qu� equipos recibi� usted o el Beneficiario?</cuerpo></td>
    <td>
	 <cuerpo>Motocultor �Caballaje?</cuerpo><input name="cliente_7-1" size="3" type="text"><cuerpo> Arado</cuerpo><input type="checkbox" name="cliente_7-2" value="arado"><cuerpo> Remolque</cuerpo><input type="checkbox" name="cliente_7-3" value="remolque"><cuerpo> Sistema de Fumigaci�n</cuerpo><input type="checkbox" name="cliente_7-4" value="sistema"><cuerpo> Implemento Opcional</cuerpo><input type="checkbox" name="cliente_7-5" value="implemento"> <cuerpo>�Cu�l?</cuerpo><input name="cliente_7-5t" size="30" type="text"> <cuerpo>�Alg�n otro?</cuerpo><input name="cliente_7-6" size="30" type="text"></td>
   </tr>
   <tr>
    <td><cuerpo>�Cu�ndo recibi� sus equipos?</cuerpo></td>
    <td><input name="cliente_8" size="30" type="text"></td>
   </tr>
   <tr>
    <td><cuerpo>Antes de adquirir su motocultor, �C�mo trabajaba sus tierras?</cuerpo></td>
    <td>
	 <cuerpo>Tractor-> Si<input type="radio" name="cliente_9-1" value="si"> No<input type="radio" name="cliente_9-1" value="no">Propio<input type="radio" name="cliente_9-2" value="propio"> Rentado<input type="radio" name="cliente_9-2" value="rentado"> �Utiliza la yunta?-> Si<input type="radio" name="cliente_9-3" value="si"> No<input type="radio" name="cliente_9-3" value="no"> Otro<input name="cliente_9-4" size="30" type="text"></cuerpo>
	 </td>
   </tr>
   <tr>
    <td><cuerpo>�Cu�ntas has trabajado con su yunta?</cuerpo></td>
    <td><input name="cliente_10" size="30" type="text"></td>   
   </tr>
   <tr>
    <td><cuerpo>�Cu�nto gasta en la alimentaci�n de la yunta?</cuerpo></td>
    <td><input name="cliente_11" size="30" type="text"></td>    
   </tr>
   <tr>
    <td><cuerpo>�Cu�ntas veces por semana hace de uso equipos?</cuerpo></td>
    <td>
	 <cuerpo>No lo ocupa<input type="radio" name="cliente_12" value="no"> Una vez por semana<input type="radio" name="cliente_12" value="una"> 2 a 4 veces por semana<input type="radio" name="cliente_12" value="2-4"> Cada vez que lo requiere<input type="radio" name="cliente_12" value="cada"> S�lo con el implemento<input type="radio" name="cliente_12" value="solo"></cuerpo></td>
   </tr>
   <tr>
    <td><cuerpo>Adem�s del Motocultor, �cuenta usted con alg�n otro medio de transporte?</cuerpo></td>
    <td>
	 <cuerpo>Si<input type="radio" name="cliente_13" value="si"> No<input type="radio" name="cliente_13" value="no"> �Cu�(es)?<input name="cliente_13-1" size="30" type="text"></cuerpo></td>
   </tr>
   <tr>
    <td><cuerpo>Para usted, �qu� es el Motocultor??</cuerpo></td>
    <td>
	 <cuerpo>Una m�quina para trabajar el suelo<input type="radio" name="cliente_14" value="maquina"> Una fuente de poder<input type="radio" name="cliente_14" value="fuente"> Su medio de transpote<input type="radio" name="cliente_14" value="mnedio"> Otro <input name="cliente_14-1" size="30" type="text"></cuerpo></td>
   </tr>
   <tr>
    <td><cuerpo>�Cu�nta superficie trabaja con el Motorcultor?</cuerpo></td>
    <td><input name="cliente_15" size"30" type="text"></td>
   </tr>
   <tr>
    <td><cuerpo>�Qu� productos cultiva?</cuerpo></td>
    <td><input name="cliente_15" size"30" type="text"></td>
   </tr>
  </table>
  <table border=1 bgcolor="#eeeeee" width="93%">
   <tr>
    <td colspan="2" align="center"><titulo>CAPACITACI�N</titulo></td>
   </tr>
   <tr>
    <td><cuerpo>�Recibi� usted capacitaci�n respecto a?</cuerpo></td>
	<td>
	 <cuerpo>
	   <p>Mantenimiento preventivo del equipo
	     <input type="checkbox" name="capacitacion_1-1" value="mantinimiento">
	     </p>
	   <p>Ajustes de la m�quina
	     <input type="checkbox" name="capacitacion_1-2" value="ajustes">
	     </p>
	   <p>Calibraci�n y uso de Implementos
	     <input type="checkbox" name="capacitacion_1-3" value="calibra"> 
	     </p>
	   <p>Manejo adecuado
	     <input type="checkbox" name="capacitacion_1-4" value="manejo">
	   </p>
	   <p> No recibi� ninguna capacitaci�n
	     <input type="checkbox" name="capacitacion_1-5" value="nada">
	     </p>
	 </cuerpo></td>
   </tr>
  </table>
  <input value="Guardar Encuesta" type="submit">
 </form>
</BODY>
</HTML>
