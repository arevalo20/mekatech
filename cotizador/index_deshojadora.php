<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<title>Cotizador Mekatech</title>
  <style type="text/css">
    body { font-family: Arial,Helvetica,sans-serif;
      font-size: 14px;
    }
    .1 {
      font-size: 25px;
    }
  </style>

<script type="text/javascript">
function validateForm()
{
  var x=document.forms["cotizador"]["fullname"].value
  if (x==null || x=="")
  {
    alert("Nombre completo no puede ser vac�o");
    return false;
  }

  var x=document.forms["cotizador"]["calle"].value
  if (x==null || x=="")
  {
    alert("Calle y N�mero no puede ser vac�o");
    return false;
  }

  var x=document.forms["cotizador"]["colonia"].value
  if (x==null || x=="")
  {
    alert("Colonia no puede ser vac�o");
    return false;
  }

  var x=document.forms["cotizador"]["municipio"].value
  if (x==null || x=="")
  {
    alert("Delegaci�n o Municipio no puede ser vac�o");
    return false;
  }

  var x=document.forms["cotizador"]["estado"].value
  if (x==null || x=="")
  {
    alert("Entidad Federativa no puede ser vac�o");
    return false;
  }
}
</script>
</head>
<body>

<img src="../cotizador/images/Mekatech.jpg" width=50 height=50 border=0 alt="logo">
<h1>Cotizaci&oacute;n</h1>

<form action="ver.php" method="post" onsubmit="return validateForm()" name="cotizador" id="cotizador">
<table bgcolor="#eeeeee">
  <tr>
    <td style="body">Nombre Completo</td>
    <td align="left"><input name="fullname" size="30" maxlength="100" type="text"><font color="red">(*)</font></td>
  </tr>

  <tr>
    <td>Calle y N&uacute;mero</td>
    <td align="left"><input name="calle" size="30" maxlength="100" type="text"><font color="red">(*)</font></td>

    <td>Colonia</td>
    <td align="left"><input name="colonia" size="30" maxlength="100" type="text"><font color="red">(*)</font></td>
  </tr>

  <tr>
    <td>Delegaci&oacute;n o Municipio</td>
    <td align="left"><input name="municipio" size="30" maxlength="100" type="text"><font color="red">(*)</font></td>

    <td>Entidad Federativa</td>
    <td align="left"><input name="estado" size="30" maxlength="100" type="text"><font color="red">(*)</font></td>
  </tr>

  <tr>
    <td>C&oacute;digo Postal</td>
    <td align="left"><input name="cp" size="30" maxlength="100" type="text"></td>

    <td>Tel&eacute;fono</td>
    <td align="left"><input name="tel" size="30" maxlength="100" type="text"></td>
  </tr>

  <tr>
    <td>Su proyecto es para:</td>
    <td align="left"><input name="proyecto" size="30" maxlength="100" type="text"></td>
  </tr>

  <tr>
    <td width="62">Cantidad<br> </td>
    <td width="234">Producto</td>
  </tr>

  <tr>
    <td><input name="cantequipos" size="5" maxlength="3" type="text"> <br> </td>
    <td><select name="equipos" id="equipos">
        <option>Equipos</option>
        <option>Mototractor 9.5 Hp Serie 3000 C MKT-95190N. $79,900</option>
	<option>Mototractor 11 Hp Serie 2000 B MKT-11195N. $89,900</option>
	<option>Mototractor 11 Hp Serie 3000 C MKT-11195N 3000C. $99,900</option>
	<option>Mototractor 12 Hp  MKT-M121000.V1 $44,900</option>
	<option>Mototractor 13 Hp Serie 3000 MKT-13CP120 3000A $105,900</option>
	<option>Mototractor 14 Hp Serie 4000 MKT-M144000A.V1 $115,900</option>
	<option>Rotocultivador 7 Hp color Rojo  MKT-RT75R.V1 $52,590</option>
	<option>Rotocultivador 7 Hp color Azul  MKT-RT75A.V1 $52,590</option>
	<option>Rotocultivador 7 Hp color Naranja  MKT-RT75N.V1 $52,590</option>
	<option>Rotocultivador 7 Hp color Amarillo  MKT-RT75M.V1 $52,590</option>
	<option>Rotocultivador 7 Hp color Verde  MKT-RT75V.V1 $52,590</option>
	<option>Rotocultivador 9 Hp color Rojo  MKT-RT95R.V1 $59,990</option>
	<option>Rotocultivador 9 Hp color Azul  MKT-RT95A.V1 $59,990</option>
	<option>Rotocultivador 9 Hp color Naranja  MKT-RT95N.V1 $59,990</option>
	<option>Rotocultivador 9 Hp color Amarillo  MKT-RT95M.V1 $59,990</option>
	<option>Rotocultivador 9 Hp color Verde  MKT-RT95V.V1 $59,990</option>
	<option>Tractor Ligero Serie 4000 MKT-MTL-14 $129,900.00</option>
      </select>
    </td>
  </tr>

  <tr>
    <td><input name="cantarados" size="5" maxlength="3" type="text"> <br> </td>
    <td><select name="arados" id="arados">
        <option>Arados</option>
	<option>Arado de Ala MKT-00MC07.V1 $4,999</option>
	<option>Arado Sencillo MKT-00MP01 $2,999</option>
	<option>Arado Surcador MKT-00MC09.V1 $2,999</option>
	<option>Arado de Discos MKT-00MC10.V1 $7,490</option>
	<option>Pala Niveladora MKT-00MC11.V1 $9,990</option>
      </select>
    </td>
  </tr>

  <tr>
    <td><input name="cantrastras" size="5" maxlength="3" type="text"> <br> </td>
    <td><select name="rastras" id="rastras">
        <option>Rastras</option>
	<option>Rastra de 16 cuchillas  MKT-95MP04 $16,890</option>
	<option>Rastra de 18 cuchillas equipos 9,5 y 11 Hp Tipo C MKT- 11MC05 $21,390</option>
	<option>Rastra de 18 cuchillas equipos 13 y 15 Hp Tipo A MKT-11MC07 $21,390</option>
	<option>Rastra de 22 cuchillas Tipo A MKT-00MP03A.V1 $24,990</option>
	<option>Acamadora Tipo C MKT-00MP05C.V1 $21,390</option>
	<option>Deshierbadora Tipo A MKT-00MP04A.V1 $27,590</option>
      </select>
    </td>
  </tr>

  <tr>
    <td><input name="cantimplementos_1" size="5" maxlength="3" type="text"> <br> </td>
    <td><select name="implementos_1" id="implementos_1">
        <option>Implemento 1</option>
    <!--
	<option>Molino de martillo ensilador AP-38 MKT-MOL-1MP $20,299</option>
    -->
     <option>Sembradora de precisi�n para Mototractor $62,990</option>
	<option>Bomba centr�fuga para Mototractor AP-34 MKT-00EP11 $17,590</option>
	<option>Asiento Independiente con sujeci�n de implemento  MKT-00MC02.V1 $16,390</option>
    <option>Molino para verde y seco implemento  MKT-MOL-1MP $20,192</option>
    <!--
	<option>Vag�n multiusos 600Kg  MKT-00MC01.V1 $17,299</option>
    -->
	<option>Vag�n multiusos 1000Kg  MKT-00MC03.V1 $24,990</option>
	<option>Deshojadora y desgranadora de ma�z  MKT-00EP03.V1 $28,908</option>
	<option>Sembradora y fertilizadora de minima labranza Tipo A MKT-00MP01A.V1 $38,990</option>
	<option>Sembradora de Bangladesh Tipo A MKT-00MP02A.V1 $37,690</option>
	<option>Cosechadora de papa Tipo C MKT-00MC05.V1 $37,690</option>
	<option>Acolchadora  MKT-00MC04.V1 $10,990</option>
	<option>Segadoras reaper 4GL-100 Tipo C MKT-00EP04C.V1 $23,890</option>
	<option>Segadoras reaper 4GL-120 2 modelos Tipo A MKT-00EP05A.V1 $24,990</option>
	<option>Sistema de riego individual  MKT-00EP07.V1 $21,390</option>
	<option>Sistema de riego 14 aspersores  MKT-00EP08.V1 $62,690</option>
	<option>Bomba aspersora  MKT-00EP01.V1 $15,290</option>
	<option>Generador de Energ�a  MKT-00EP02.V1 $18,862</option>
	<option>Segadora de alfalfa Tipo C MKT-00EP06C.V1 $27,590</option>
	<option>Zanjadora Tipo C MKT-00MP09C $20,990</option>
	<option>Zanjadora Tipo A MKT-00MP10A $20,990</option>
	<option>Ruedas antiderrapantes  MKT-00EI91.V1 $5,899</option>
	<option>Kit Herramientas P MKT-00TK02.V1 $4,990</option>
    <!--
	<option>Kit Herramientas G  MKT-00TK01.V1 $5,799</option>
    -->
      </select>
    </td>
  </tr>

  <tr>
    <td><input name="cantimplementos_2" size="5" maxlength="3" type="text"> <br> </td>
    <td><select name="implementos_2" id="implementos_2">
        <option>Implemento 2</option>
        <!--
	<option>Molino de martillo ensilador AP-38 MKT-MOL-1MP $20,299</option>
    -->
     <option>Sembradora de precisi�n para Mototractor $62,990</option>
	<option>Bomba centr�fuga para Mototractor AP-34 MKT-00EP11 $17,590</option>
	<option>Asiento Independiente con sujeci�n de implemento  MKT-00MC02.V1 $16,390</option>
    <option>Molino para verde y seco implemento  MKT-MOL-1MP $20,192</option>
    <!--
	<option>Vag�n multiusos 600Kg  MKT-00MC01.V1 $17,299</option>
    -->
	<option>Vag�n multiusos 1000Kg  MKT-00MC03.V1 $24,990</option>
	<option>Deshojadora y desgranadora de ma�z  MKT-00EP03.V1 $28,908</option>
	<option>Sembradora y fertilizadora de minima labranza Tipo A MKT-00MP01A.V1 $38,990</option>
	<option>Sembradora de Bangladesh Tipo A MKT-00MP02A.V1 $37,690</option>
	<option>Cosechadora de papa Tipo C MKT-00MC05.V1 $37,690</option>
	<option>Acolchadora  MKT-00MC04.V1 $10,990</option>
	<option>Segadoras reaper 4GL-100 Tipo C MKT-00EP04C.V1 $23,890</option>
	<option>Segadoras reaper 4GL-120 2 modelos Tipo A MKT-00EP05A.V1 $24,990</option>
	<option>Sistema de riego individual  MKT-00EP07.V1 $21,390</option>
	<option>Sistema de riego 14 aspersores  MKT-00EP08.V1 $62,690</option>
	<option>Bomba aspersora  MKT-00EP01.V1 $15,290</option>
	<option>Generador de Energ�a  MKT-00EP02.V1 $18,862</option>
	<option>Segadora de alfalfa Tipo C MKT-00EP06C.V1 $27,590</option>
	<option>Zanjadora Tipo C MKT-00MP09C $20,990</option>
	<option>Zanjadora Tipo A MKT-00MP10A $20,990</option>
	<option>Ruedas antiderrapantes  MKT-00EI91.V1 $5,899</option>
	<option>Kit Herramientas P MKT-00TK02.V1 $4,990</option>
    <!--
	<option>Kit Herramientas G  MKT-00TK01.V1 $5,799</option>
    -->
	
      </select>
    </td>
  </tr>

  <tr>
    <td><input name="cantimplementos_3" size="5" maxlength="3" type="text"> <br> </td>
    <td><select name="implementos_3" id="implementos_3">
        <option>Implemento 3</option>
	<!--
	<option>Molino de martillo ensilador AP-38 MKT-MOL-1MP $20,299</option>
    -->
     <option>Sembradora de precisi�n para Mototractor $62,990</option>
	<option>Bomba centr�fuga para Mototractor AP-34 MKT-00EP11 $17,590</option>
	<option>Asiento Independiente con sujeci�n de implemento  MKT-00MC02.V1 $16,390</option>
    <option>Molino para verde y seco implemento  MKT-MOL-1MP $20,192</option>
    <!--
	<option>Vag�n multiusos 600Kg  MKT-00MC01.V1 $17,299</option>
    -->
	<option>Vag�n multiusos 1000Kg  MKT-00MC03.V1 $24,990</option>
	<option>Deshojadora y desgranadora de ma�z  MKT-00EP03.V1 $28,908</option>
	<option>Sembradora y fertilizadora de minima labranza Tipo A MKT-00MP01A.V1 $38,990</option>
	<option>Sembradora de Bangladesh Tipo A MKT-00MP02A.V1 $37,690</option>
	<option>Cosechadora de papa Tipo C MKT-00MC05.V1 $37,690</option>
	<option>Acolchadora  MKT-00MC04.V1 $10,990</option>
	<option>Segadoras reaper 4GL-100 Tipo C MKT-00EP04C.V1 $23,890</option>
	<option>Segadoras reaper 4GL-120 2 modelos Tipo A MKT-00EP05A.V1 $24,990</option>
	<option>Sistema de riego individual  MKT-00EP07.V1 $21,390</option>
	<option>Sistema de riego 14 aspersores  MKT-00EP08.V1 $62,690</option>
	<option>Bomba aspersora  MKT-00EP01.V1 $15,290</option>
	<option>Generador de Energ�a  MKT-00EP02.V1 $18,862</option>
	<option>Segadora de alfalfa Tipo C MKT-00EP06C.V1 $27,590</option>
	<option>Zanjadora Tipo C MKT-00MP09C $20,990</option>
	<option>Zanjadora Tipo A MKT-00MP10A $20,990</option>
	<option>Ruedas antiderrapantes  MKT-00EI91.V1 $5,899</option>
	<option>Kit Herramientas P MKT-00TK02.V1 $4,990</option>
    <!--
	<option>Kit Herramientas G  MKT-00TK01.V1 $5,799</option>
    -->
      </select>
    </td>
  </tr>

  <tr>
    <td><input name="cantimplementos_4" size="5" maxlength="3" type="text"> <br> </td>
    <td><select name="implementos_4" id="implementos_4">
        <option>Implemento 4</option>
	<!--
	<option>Molino de martillo ensilador AP-38 MKT-MOL-1MP $20,299</option>
    -->
     <option>Sembradora de precisi�n para Mototractor $62,990</option>
	<option>Bomba centr�fuga para Mototractor AP-34 MKT-00EP11 $17,590</option>
	<option>Asiento Independiente con sujeci�n de implemento  MKT-00MC02.V1 $16,390</option>
    <option>Molino para verde y seco implemento  MKT-MOL-1MP $20,192</option>
    <!--
	<option>Vag�n multiusos 600Kg  MKT-00MC01.V1 $17,299</option>
    -->
	<option>Vag�n multiusos 1000Kg  MKT-00MC03.V1 $24,990</option>
	<option>Deshojadora y desgranadora de ma�z  MKT-00EP03.V1 $28,908</option>
	<option>Sembradora y fertilizadora de minima labranza Tipo A MKT-00MP01A.V1 $38,990</option>
	<option>Sembradora de Bangladesh Tipo A MKT-00MP02A.V1 $37,690</option>
	<option>Cosechadora de papa Tipo C MKT-00MC05.V1 $37,690</option>
	<option>Acolchadora  MKT-00MC04.V1 $10,990</option>
	<option>Segadoras reaper 4GL-100 Tipo C MKT-00EP04C.V1 $23,890</option>
	<option>Segadoras reaper 4GL-120 2 modelos Tipo A MKT-00EP05A.V1 $24,990</option>
	<option>Sistema de riego individual  MKT-00EP07.V1 $21,390</option>
	<option>Sistema de riego 14 aspersores  MKT-00EP08.V1 $62,690</option>
	<option>Bomba aspersora  MKT-00EP01.V1 $15,290</option>
	<option>Generador de Energ�a  MKT-00EP02.V1 $18,862</option>
	<option>Segadora de alfalfa Tipo C MKT-00EP06C.V1 $27,590</option>
	<option>Zanjadora Tipo C MKT-00MP09C $20,990</option>
	<option>Zanjadora Tipo A MKT-00MP10A $20,990</option>
	<option>Ruedas antiderrapantes  MKT-00EI91.V1 $5,899</option>
	<option>Kit Herramientas P MKT-00TK02.V1 $4,990</option>
    <!--
	<option>Kit Herramientas G  MKT-00TK01.V1 $5,799</option>
    -->
      </select>
    </td>
  </tr>

  <tr>
    <td><input name="cantimplementos_5" size="5" maxlength="3" type="text"> <br> </td>
    <td><select name="implementos_5" id="implementos_5">
        <option>Implemento 5</option>
	<!--
	<option>Molino de martillo ensilador AP-38 MKT-MOL-1MP $20,299</option>
    -->
     <option>Sembradora de precisi�n para Mototractor $62,990</option>
	<option>Bomba centr�fuga para Mototractor AP-34 MKT-00EP11 $17,590</option>
	<option>Asiento Independiente con sujeci�n de implemento  MKT-00MC02.V1 $16,390</option>
    <option>Molino para verde y seco implemento  MKT-MOL-1MP $20,192</option>
    <!--
	<option>Vag�n multiusos 600Kg  MKT-00MC01.V1 $17,299</option>
    -->
	<option>Vag�n multiusos 1000Kg  MKT-00MC03.V1 $24,990</option>
	<option>Deshojadora y desgranadora de ma�z  MKT-00EP03.V1 $28,908</option>
	<option>Sembradora y fertilizadora de minima labranza Tipo A MKT-00MP01A.V1 $38,990</option>
	<option>Sembradora de Bangladesh Tipo A MKT-00MP02A.V1 $37,690</option>
	<option>Cosechadora de papa Tipo C MKT-00MC05.V1 $37,690</option>
	<option>Acolchadora  MKT-00MC04.V1 $10,990</option>
	<option>Segadoras reaper 4GL-100 Tipo C MKT-00EP04C.V1 $23,890</option>
	<option>Segadoras reaper 4GL-120 2 modelos Tipo A MKT-00EP05A.V1 $24,990</option>
	<option>Sistema de riego individual  MKT-00EP07.V1 $21,390</option>
	<option>Sistema de riego 14 aspersores  MKT-00EP08.V1 $62,690</option>
	<option>Bomba aspersora  MKT-00EP01.V1 $15,290</option>
	<option>Generador de Energ�a  MKT-00EP02.V1 $18,862</option>
	<option>Segadora de alfalfa Tipo C MKT-00EP06C.V1 $27,590</option>
	<option>Zanjadora Tipo C MKT-00MP09C $20,990</option>
	<option>Zanjadora Tipo A MKT-00MP10A $20,990</option>
	<option>Ruedas antiderrapantes  MKT-00EI91.V1 $5,899</option>
	<option>Kit Herramientas P MKT-00TK02.V1 $4,990</option>
    <!--
	<option>Kit Herramientas G  MKT-00TK01.V1 $5,799</option>
    -->
      </select>
    </td>
  </tr>

  <tr>
    <td><input name="cantcapac" size="5" maxlength="3" type="text"> <br> </td>
    <td><select name="capac" id="capac">
        <option>Capacitaci&oacute;n</option>
        <option>Curso de capacitaci&oacute;n de 8 horas $5,699</option>
      </select>
    </td>
  </tr>

  <tr>
      <td><input name="cantservicio_1" size="5" maxlength="3" type="text"> <br> </td>
      <td><select name="servicio_1" id="servicio_1">
          <option>Servicio 1</option>
          <option>Servicio 50 horas $1,099</option>
          <option>Servicio 150 horas $1,299</option>
        </select>
      </td>
  </tr>

  <tr>
      <td><input name="cantservicio_2" size="5" maxlength="3" type="text"> <br> </td>
      <td><select name="servicio_2" id="servicio_2">
          <option>Servicio 2</option>
          <option>Servicio 50 horas $1,099</option>
          <option>Servicio 150 horas $1,299</option>
        </select>
      </td>
  </tr>

  <tr>
    <td colspan="2"><input value="Cotizar" type="submit"></td>
  </tr>
    <td><font color="red">(*) Campos Obligatorios</font></td>
  <tr>
  </tr>
</table>
</form>
</body>
</html>