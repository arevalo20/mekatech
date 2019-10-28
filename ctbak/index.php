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
    alert("Nombre completo no puede ser vacío");
    return false;
  }

  var x=document.forms["cotizador"]["calle"].value
  if (x==null || x=="")
  {
    alert("Calle y Número no puede ser vacío");
    return false;
  }

  var x=document.forms["cotizador"]["colonia"].value
  if (x==null || x=="")
  {
    alert("Colonia no puede ser vacío");
    return false;
  }

  var x=document.forms["cotizador"]["municipio"].value
  if (x==null || x=="")
  {
    alert("Delegación o Municipio no puede ser vacío");
    return false;
  }

  var x=document.forms["cotizador"]["estado"].value
  if (x==null || x=="")
  {
    alert("Entidad Federativa no puede ser vacío");
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
        <option>Motocultor 12Hp Serie 1000 C MKT-12R190H $49,900</option>
	<option>Motocultor 9,5Hp Serie 2000 C MKT-95190N $59,900</option>
	<option>Motocultor 11Hp Serie 2000 B MKT-11195N $69,900</option>
	<option>Motocultor 11Hp Serie 2000 C MKT-111100 $69,900</option>
	<option>Motocultor 12Hp Serie 2000 A MKT-12R190 $76,900</option>
	<option>Motocultor 15Hp Serie 2000 A MKT-151100N $79,900</option>
	<option>Motocultor 9.5Hp Serie 3000 C MKT-95CP95-2 $69,900</option>
	<option>Motocultor 11Hp Serie 3000 C MKT-11195N $79,900</option>
	<option>Motocultor 13Hp Serie 3000 C MKT-13CPD120-2 $89,900</option>
	<option>Motosegadora  MKT-651002 $39,900</option>
	<option>Rotocultor 6.5Hp  MKT-65G2A $41,900</option>
	<option>Rotocultor 9.5Hp  MKT-9G07 $47,900</option>
      </select>
    </td>
  </tr>

  <tr>
    <td><input name="cantarados" size="5" maxlength="3" type="text"> <br> </td>
    <td><select name="arados" id="arados">
        <option>Arados</option>
	<option>Arado de ala MKT-00MP02 $3,999</option>
	<option>Arado Sencillo MKT-00MP01 $2,399</option>
	<option>Arado Doble MKT-00MP03 $3,999</option>
	<option>Arado de Discos MKT-00MP05 $5,999</option>
	<option>Raspadora de suelos MKT-00HW01 $2,999</option>
      </select>
    </td>
  </tr>

  <tr>
    <td><input name="cantrastras" size="5" maxlength="3" type="text"> <br> </td>
    <td><select name="rastras" id="rastras">
        <option>Rastras</option>
        <option>Rastra de 16 cuchillas Tipo C $13,430</option>
	<option>Rastra de 18 cuchillas Tipo B $16,999</option>
	<option>Rastra de 18 cuchillas Tipo A $16,999</option>
	<option>Rastra de 22 cuchillas Tipo A $19,999</option>
	<option>Acamadora Tipo C $16,990</option>
	<option>Deshierbadora / Chapeadora Tipo A $21,999</option>
      </select>
    </td>
  </tr>

  <tr>
    <td><input name="cantimplementos_1" size="5" maxlength="3" type="text"> <br> </td>
    <td><select name="implementos_1" id="implementos_1">
        <option>Implemento 1</option>
	<option>Asiento Independiente $3,990</option>
	<option>Asiento con sistema de sujeción de implemento $12,999</option>
	<option>Chasis con asiento independiente $7,999</option>
	<option>Vagón volteo 600Kg/con freno $15,000</option>
	<option>Vagón volteo 1,000Kg/con freno $19,900</option>
	<option>Desgranadora/Deshojadora de maíz $22,990</option>
	<option>Sembradora/Fertili. Agricul. Cons. 1mto Tipo A $31,199</option>
	<option>Cosechadora Papa Tipo C $29,990</option>
	<option>Acolchadora $8,990</option>
	<option>Segadora $19,990</option>
	<option>Bomba Autosebante 200 ltos/min. $3,499</option>
	<option>Accesorios para bomba $12,499</option>
	<option>Bomba Autosebante kit individual $16,990</option>
	<option>Bomba Autosebante 14 aspersores $49,990</option>
	<option>Sistema Fumigación $12,155</option>
	<option>Generador de Energía $14,990</option>
	<option>Segadora de alfalfa Tipo C $21,999</option>
	<option>Ruedas antiderrapantes $5,128</option>
      </select>
    </td>
  </tr>

  <tr>
    <td><input name="cantimplementos_2" size="5" maxlength="3" type="text"> <br> </td>
    <td><select name="implementos_2" id="implementos_2">
        <option>Implemento 2</option>
	<option>Asiento Independiente $3,990</option>
	<option>Asiento con sistema de sujeción de implemento $12,999</option>
	<option>Chasis con asiento independiente $7,999</option>
	<option>Vagón volteo 600Kg/con freno $15,000</option>
	<option>Vagón volteo 1,000Kg/con freno $19,900</option>
	<option>Desgranadora/Deshojadora de maíz $22,990</option>
	<option>Sembradora/Fertili. Agricul. Cons. 1mto Tipo A $31,199</option>
	<option>Cosechadora Papa Tipo C $29,990</option>
	<option>Acolchadora $8,990</option>
	<option>Segadora $19,990</option>
	<option>Bomba Autosebante 200 ltos/min. $3,499</option>
	<option>Accesorios para bomba $12,499</option>
	<option>Bomba Autosebante kit individual $16,990</option>
	<option>Bomba Autosebante 14 aspersores $49,990</option>
	<option>Sistema Fumigación $12,155</option>
	<option>Generador de Energía $14,990</option>
	<option>Segadora de alfalfa Tipo C $21,999</option>
	<option>Ruedas antiderrapantes $5,128</option>
      </select>
    </td>
  </tr>

  <tr>
    <td><input name="cantimplementos_3" size="5" maxlength="3" type="text"> <br> </td>
    <td><select name="implementos_3" id="implementos_3">
        <option>Implemento 3</option>
	<option>Asiento Independiente $3,990</option>
	<option>Asiento con sistema de sujeción de implemento $12,999</option>
	<option>Chasis con asiento independiente $7,999</option>
	<option>Vagón volteo 600Kg/con freno $15,000</option>
	<option>Vagón volteo 1,000Kg/con freno $19,900</option>
	<option>Desgranadora/Deshojadora de maíz $22,990</option>
	<option>Sembradora/Fertili. Agricul. Cons. 1mto Tipo A $31,199</option>
	<option>Cosechadora Papa Tipo C $29,990</option>
	<option>Acolchadora $8,990</option>
	<option>Segadora $19,990</option>
	<option>Bomba Autosebante 200 ltos/min. $3,499</option>
	<option>Accesorios para bomba $12,499</option>
	<option>Bomba Autosebante kit individual $16,990</option>
	<option>Bomba Autosebante 14 aspersores $49,990</option>
	<option>Sistema Fumigación $12,155</option>
	<option>Generador de Energía $14,990</option>
	<option>Segadora de alfalfa Tipo C $21,999</option>
	<option>Ruedas antiderrapantes $5,128</option>
      </select>
    </td>
  </tr>

  <tr>
    <td><input name="cantimplementos_4" size="5" maxlength="3" type="text"> <br> </td>
    <td><select name="implementos_4" id="implementos_4">
        <option>Implemento 4</option>
	<option>Asiento Independiente $3,990</option>
	<option>Asiento con sistema de sujeción de implemento $12,999</option>
	<option>Chasis con asiento independiente $7,999</option>
	<option>Vagón volteo 600Kg/con freno $15,000</option>
	<option>Vagón volteo 1,000Kg/con freno $19,900</option>
	<option>Desgranadora/Deshojadora de maíz $22,990</option>
	<option>Sembradora/Fertili. Agricul. Cons. 1mto Tipo A $31,199</option>
	<option>Cosechadora Papa Tipo C $29,990</option>
	<option>Acolchadora $8,990</option>
	<option>Segadora $19,990</option>
	<option>Bomba Autosebante 200 ltos/min. $3,499</option>
	<option>Accesorios para bomba $12,499</option>
	<option>Bomba Autosebante kit individual $16,990</option>
	<option>Bomba Autosebante 14 aspersores $49,990</option>
	<option>Sistema Fumigación $12,155</option>
	<option>Generador de Energía $14,990</option>
	<option>Segadora de alfalfa Tipo C $21,999</option>
	<option>Ruedas antiderrapantes $5,128</option>
      </select>
    </td>
  </tr>

  <tr>
    <td><input name="cantimplementos_5" size="5" maxlength="3" type="text"> <br> </td>
    <td><select name="implementos_5" id="implementos_5">
        <option>Implemento 5</option>
	<option>Asiento Independiente $3,990</option>
	<option>Asiento con sistema de sujeción de implemento $12,999</option>
	<option>Chasis con asiento independiente $7,999</option>
	<option>Vagón volteo 600Kg/con freno $15,000</option>
	<option>Vagón volteo 1,000Kg/con freno $19,900</option>
	<option>Desgranadora/Deshojadora de maíz $22,990</option>
	<option>Sembradora/Fertili. Agricul. Cons. 1mto Tipo A $31,199</option>
	<option>Cosechadora Papa Tipo C $29,990</option>
	<option>Acolchadora $8,990</option>
	<option>Segadora $19,990</option>
	<option>Bomba Autosebante 200 ltos/min. $3,499</option>
	<option>Accesorios para bomba $12,499</option>
	<option>Bomba Autosebante kit individual $16,990</option>
	<option>Bomba Autosebante 14 aspersores $49,990</option>
	<option>Sistema Fumigación $12,155</option>
	<option>Generador de Energía $14,990</option>
	<option>Segadora de alfalfa Tipo C $21,999</option>
	<option>Ruedas antiderrapantes $5,128</option>
      </select>
    </td>
  </tr>

  <tr>
    <td><input name="cantcapac" size="5" maxlength="3" type="text"> <br> </td>
    <td><select name="capac" id="capac">
        <option>Capacitaci&oacute;n</option>
        <option>Curso de capacitaci&oacute;n de 8 horas $4,999</option>
      </select>
    </td>
  </tr>

  <tr>
      <td><input name="cantservicio_1" size="5" maxlength="3" type="text"> <br> </td>
      <td><select name="servicio_1" id="servicio_1">
          <option>Servicio 1</option>
          <option>Servicio 50 horas $986</option>
          <option>Servicio 150 horas $1,102</option>
        </select>
      </td>
  </tr>

  <tr>
      <td><input name="cantservicio_2" size="5" maxlength="3" type="text"> <br> </td>
      <td><select name="servicio_2" id="servicio_2">
          <option>Servicio 2</option>
          <option>Servicio 50 horas $969</option>
          <option>Servicio 150 horas $1,102</option>
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