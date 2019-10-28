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
        <option>Mototractor 9.5 Hp	Tipo C	Serie 3000	MKT-95190N	 $79,900.00 </option>
	<option>Mototractor 11 Hp	Tipo C	Serie 3000	MKT-11195N	 $89,900.00 </option>
	<option>Mototractor 11 Hp	Tipo C	Serie 3000	MKT-11195N 3000C	 $99,900.00 </option>
	<option>Mototractor 12 Hp	Tipo C	Serie 1000	MKT-M121000.V1	 $44,900.00 </option>
	<option>Mototractor 13 Hp	Tipo A	Serie 3000	MKT-13CP120 3000A	 $105,900.00 </option>
	<option>Mototractor 14 Hp	Tipo A	Serie 3000	MKT-M144000A.V1	 $115,900.00</option>
	<option>Rotocultivador 7 Hp color Rojo			MKT-RT75R.V1	 $39,000.00</option>
	<option>Rotocultivador 7 Hp color Azul			MKT-RT75R.V1	 $39,000.00</option>
	<option>Rotocultivador 7 Hp color Naranja			MKT-RT75R.V1	 $39,000.00</option>
	<option>Rotocultivador 7 Hp color Amarillo			MKT-RT75R.V1	 $39,000.00</option>
	<option>Rotocultivador 7 Hp color Verde			MKT-RT75R.V1	 $39,000.00</option>
	<option>Rotocultivador 9 Hp color Rojo			MKT-RT95R.V1	 $49,000.00</option>
	<option>Rotocultivador 9 Hp color Azul			MKT-RT95R.V1	 $49,000.00</option>
	<option>Rotocultivador 9 Hp color Naranja			MKT-RT95R.V1	 $49,000.00</option>
	<option>Rotocultivador 9 Hp color Amarillo			MKT-RT95R.V1	 $49,000.00</option>
	<option>Rotocultivador 9 Hp color Verde			MKT-RT95R.V1	 $49,000.00</option>
    
	<option>Tractor Ligero Equipado	Tipo C	Serie 4000	MKT-TL2WD-14	 $129,900.00 </option>
    <option>Tractor Ligero Configuración Estandar	Tipo C	Serie 5000	MKT-TL-14	 $115,690.00</option>
      </select>
    </td>
  </tr>

  <tr>
    <td><input name="cantarados" size="5" maxlength="3" type="text"> <br> </td>
    <td><select name="arados" id="arados">
        <option>Arados</option>
	<option>Arado de 2 Discos	Tiro		MKT-00MC10.V1	 $6,900.00</option>
	<option>Arado de 2 rejas	Tiro		MKT-AGFTL-2	 $8,490.00 </option>
	<option>Arado de Ala	Tiro		MKT-00MC07.V2	 $3,900.00 </option>
	<option>Arado de Ala reforzado con calibrador de ataque	Tiro		MKT-00MC07.V1	 $5,490.00 </option>
	<option>Arado Surcador 1 timón	Tiro		MKT-00MC09.V1	 $3,490.00</option>
      </select>
    </td>
  </tr>

  <tr>
    <td><input name="cantrastras" size="5" maxlength="3" type="text"> <br> </td>
    <td><select name="rastras" id="rastras">
        <option>Rastras</option>
	<option>Acamadora 18 cuchillas	Tipo C		MKT-00MP05C.V1	 $27,900.00 </option>
	<option>Acamadora 22 cuchillas	Tipo C		MKT-00MP06C.V1	 $29,990.00</option>
	<option>Rastra 18 cuchillas	Tipo C		MKT-RCT-18	 $18,490.00 </option>
	<option>Rastra 22 cuchillas	Tipo C		MKT-RCT-22	 $23,990.00 </option>
	<option>Rastra de 16 cuchillas	Tipo C		MKT-95MP04	 $14,900.00 </option>
	<option>Rastra de 18 cuchillas	Tipo C		MKT-11MC05	 $18,490.00 </option>
    <option>Rastra de 18 cuchillas	Tipo A		MKT-11MC07	 $19,490.00 </option>
    <option>Rastra de 22 cuchillas	Tipo A		MKT-00MP08A.V1	 $24,990.00 </option>
    <option>Rastra de Tiro 12	Tiro		MKT-RTTLGF-12	 $47,290.00 </option>
    <option>Rastra Doble Sección 12	Tiro		MKT-RDF-12	 $32,900.00 </option>
    <option>Rastra Doble Sección 14	Tiro		MKT-RDF-14	 $38,900.00 </option>
      </select>
    </td>
  </tr>

  <tr>
    <td><input name="cantimplementos_1" size="5" maxlength="3" type="text"> <br> </td>
    <td><select name="implementos_1" id="implementos_1">
        <option>Implemento 1</option>

	<option>Acolchadora	Tipo C		MKT-00MC04.V1	 $11,900.00 </option>
	<option>Acoplamiento para Desgranadora	FRONTAL		MKT-ADTL	 $500.00 </option>
	<option>Acoplamiento para Molino	FRONTAL		MKT-AMTL	 $500.00 </option>
	<option>Acoplamiento Segadora Reaper 	Frontal		MKT-ASRTL	 $3,290.00 </option>
	<option>Base Para Implementos Suspendidos 	Frontal		MKT-BBGBA-3	 $500.00 </option>
	<option>Bomba Aspersora / Sistema de fumigación	Integral		MKT-00EP01.V1	 $14,900.00 </option>
	<option>Bomba aspersora con kit de fumigación	Integral		MKT-SFTL-1	 $16,990.00 </option>
	<option>Bomba autocebante	Integral		MKT-00EP11	 $19,290.00 </option>
	<option>Bomba para riego	Integral		MKT-00EP12	 $8,490.00 </option>
	<option>Cosechadora de Papa	Tipo C		MKT-00MC05.V1	 $37,690.00 </option>
	<option>Desgranadora de maíz	Integral		MKT-DMTL-1	 $13,900.00 </option>
	<option>Desgranadora de maíz	Integral		MKT-00EP03.V2	 $13,900.00 </option>
	<option>Desgranadora de maíz con extractor de polvo	Integral		MKT-DMTL-2	 $31,690.00 </option>
	<option>Despulpadora de café con rodillo acoplable a toma de fuerza	Integral		MKT-DC-16	 $22,900.00 </option>
	<option>Desvaradora Servicio Ligero	Tiro		MKT-DVTLGF-2	 $29,900.00 </option>
	<option>Desvaradora Servicio Pesado	Tiro		MKT-DVTLGF-1	 $44,900.00 </option>
    <option>Escrepa Frontal	Frontal		MKT-ETLGF-1	 $24,900.00 </option>
	<option>Generador de Energía	Integral		MKT-00EP02.V1	 $19,990.00 </option>
    <option>Generador de Energía para uso general	Integral		MKT-GETL-5	 $20,690.00 </option>
	<option>Kit de Contrapesos Delanteros			MKT-KCDTL-4	 $6,190.00 </option>
    <option>Kit de Contrapesos Traseros			MKT-KCTTL-4	 $6,190.00 </option>
    <option>Kit de Riego	Integral		MKT-00EP07.V1	 $9,900.00 </option>
    <option>Kit de Sistema Hidráulico de levante			MKT-KSHTL-1	 $11,390.00 </option>
    <option>Molino de Material para verde y seco	Integral		MKT-MVS-2	 $19,990.00 </option>
    <option>Molino para verde y seco	Integral		MKT-MOL-1MP	 $23,390.00 </option>
    <option>Segadora de alfalfa	Integral		MKT-00EP06C.V1	 $27,590.00 </option>
    <option>Segadora Reaper 4GL - 100	Integral		MKT-RMTL-100	 $21,900.00 </option>
    <option>Segadora Reaper 4GL - 120	Integral		MKT-RMTL-120	 $25,900.00 </option>
    <option>Segadoras reaper 4GL-100	Integral		MKT-00EP04C.V1	 $21,900.00 </option>
    <option>Segadoras reaper 4GL-120	Integral		MKT-00EP05A.V1	 $25,900.00 </option>
    <option>Sembradora de precisión mecánica	Tiro		MKT-00MP12	 $22,900.00 </option>
    <option>Sembradora de precisión mecánica	Tiro		MKT-SPMTL-1.V1	 $22,900.00 </option>
    <option>Sembradora de precisión mecánica y labranza de conservación	Tiro		MKT-SPMTL-1	 $68,990.00 </option>
    <option>Sistema de riego 14 aspersores	Integral		MKT-00EP08.V1	 $32,900.00 </option>
    <option>Vagón multiusos 1000Kg volteo manual	Tiro		MKT-VM7C-1T	 $33,690.00 </option>
    <option>Vagón multiusos 1300Kg	Tiro		MKT-VM7C-1.3T	 $38,690.00 </option>
    <option>Vagón multiusos 800Kg	Tiro		MKT-VM7C-.8T.V1	 $24,900.00 </option>
    <option>Zanjadora	Tipo C		MKT-00MP09C	 $20,990.00 </option>
    <option>Zanjadora	Tipo A		MKT-00MP10A	 $20,990.00 </option>
    <option>Zanjadora	Tipo C		MKT-00MP09C	 $20,990.00</option>
      </select>
    </td>
  </tr>

  <tr>
    <td><input name="cantimplementos_2" size="5" maxlength="3" type="text"> <br> </td>
    <td><select name="implementos_2" id="implementos_2">
        <option>Implemento 2</option>
    <option>Acolchadora	Tipo C		MKT-00MC04.V1	 $11,900.00 </option>
	<option>Acoplamiento para Desgranadora	FRONTAL		MKT-ADTL	 $500.00 </option>
	<option>Acoplamiento para Molino	FRONTAL		MKT-AMTL	 $500.00 </option>
	<option>Acoplamiento Segadora Reaper 	Frontal		MKT-ASRTL	 $3,290.00 </option>
	<option>Base Para Implementos Suspendidos 	Frontal		MKT-BBGBA-3	 $500.00 </option>
	<option>Bomba Aspersora / Sistema de fumigación	Integral		MKT-00EP01.V1	 $14,900.00 </option>
	<option>Bomba aspersora con kit de fumigación	Integral		MKT-SFTL-1	 $16,990.00 </option>
	<option>Bomba autocebante	Integral		MKT-00EP11	 $19,290.00 </option>
	<option>Bomba para riego	Integral		MKT-00EP12	 $8,490.00 </option>
	<option>Cosechadora de Papa	Tipo C		MKT-00MC05.V1	 $37,690.00 </option>
	<option>Desgranadora de maíz	Integral		MKT-DMTL-1	 $13,900.00 </option>
	<option>Desgranadora de maíz	Integral		MKT-00EP03.V2	 $13,900.00 </option>
	<option>Desgranadora de maíz con extractor de polvo	Integral		MKT-DMTL-2	 $31,690.00 </option>
	<option>Despulpadora de café con rodillo acoplable a toma de fuerza	Integral		MKT-DC-16	 $22,900.00 </option>
	<option>Desvaradora Servicio Ligero	Tiro		MKT-DVTLGF-2	 $29,900.00 </option>
	<option>Desvaradora Servicio Pesado	Tiro		MKT-DVTLGF-1	 $44,900.00 </option>
    <option>Escrepa Frontal	Frontal		MKT-ETLGF-1	 $24,900.00 </option>
	<option>Generador de Energía	Integral		MKT-00EP02.V1	 $19,990.00 </option>
    <option>Generador de Energía para uso general	Integral		MKT-GETL-5	 $20,690.00 </option>
	<option>Kit de Contrapesos Delanteros			MKT-KCDTL-4	 $6,190.00 </option>
    <option>Kit de Contrapesos Traseros			MKT-KCTTL-4	 $6,190.00 </option>
    <option>Kit de Riego	Integral		MKT-00EP07.V1	 $9,900.00 </option>
    <option>Kit de Sistema Hidráulico de levante			MKT-KSHTL-1	 $11,390.00 </option>
    <option>Molino de Material para verde y seco	Integral		MKT-MVS-2	 $19,990.00 </option>
    <option>Molino para verde y seco	Integral		MKT-MOL-1MP	 $23,390.00 </option>
    <option>Segadora de alfalfa	Integral		MKT-00EP06C.V1	 $27,590.00 </option>
    <option>Segadora Reaper 4GL - 100	Integral		MKT-RMTL-100	 $21,900.00 </option>
    <option>Segadora Reaper 4GL - 120	Integral		MKT-RMTL-120	 $25,900.00 </option>
    <option>Segadoras reaper 4GL-100	Integral		MKT-00EP04C.V1	 $21,900.00 </option>
    <option>Segadoras reaper 4GL-120	Integral		MKT-00EP05A.V1	 $25,900.00 </option>
    <option>Sembradora de precisión mecánica	Tiro		MKT-00MP12	 $22,900.00 </option>
    <option>Sembradora de precisión mecánica	Tiro		MKT-SPMTL-1.V1	 $22,900.00 </option>
    <option>Sembradora de precisión mecánica y labranza de conservación	Tiro		MKT-SPMTL-1	 $68,990.00 </option>
    <option>Sistema de riego 14 aspersores	Integral		MKT-00EP08.V1	 $32,900.00 </option>
    <option>Vagón multiusos 1000Kg volteo manual	Tiro		MKT-VM7C-1T	 $33,690.00 </option>
    <option>Vagón multiusos 1300Kg	Tiro		MKT-VM7C-1.3T	 $38,690.00 </option>
    <option>Vagón multiusos 800Kg	Tiro		MKT-VM7C-.8T.V1	 $24,900.00 </option>
    <option>Zanjadora	Tipo C		MKT-00MP09C	 $20,990.00 </option>
    <option>Zanjadora	Tipo A		MKT-00MP10A	 $20,990.00 </option>
    <option>Zanjadora	Tipo C		MKT-00MP09C	 $20,990.00</option>
      </select>
    </td>
  </tr>

  <tr>
    <td><input name="cantimplementos_3" size="5" maxlength="3" type="text"> <br> </td>
    <td><select name="implementos_3" id="implementos_3">
        <option>Implemento 3</option>
	<option>Acolchadora	Tipo C		MKT-00MC04.V1	 $11,900.00 </option>
	<option>Acoplamiento para Desgranadora	FRONTAL		MKT-ADTL	 $500.00 </option>
	<option>Acoplamiento para Molino	FRONTAL		MKT-AMTL	 $500.00 </option>
	<option>Acoplamiento Segadora Reaper 	Frontal		MKT-ASRTL	 $3,290.00 </option>
	<option>Base Para Implementos Suspendidos 	Frontal		MKT-BBGBA-3	 $500.00 </option>
	<option>Bomba Aspersora / Sistema de fumigación	Integral		MKT-00EP01.V1	 $14,900.00 </option>
	<option>Bomba aspersora con kit de fumigación	Integral		MKT-SFTL-1	 $16,990.00 </option>
	<option>Bomba autocebante	Integral		MKT-00EP11	 $19,290.00 </option>
	<option>Bomba para riego	Integral		MKT-00EP12	 $8,490.00 </option>
	<option>Cosechadora de Papa	Tipo C		MKT-00MC05.V1	 $37,690.00 </option>
	<option>Desgranadora de maíz	Integral		MKT-DMTL-1	 $13,900.00 </option>
	<option>Desgranadora de maíz	Integral		MKT-00EP03.V2	 $13,900.00 </option>
	<option>Desgranadora de maíz con extractor de polvo	Integral		MKT-DMTL-2	 $31,690.00 </option>
	<option>Despulpadora de café con rodillo acoplable a toma de fuerza	Integral		MKT-DC-16	 $22,900.00 </option>
	<option>Desvaradora Servicio Ligero	Tiro		MKT-DVTLGF-2	 $29,900.00 </option>
	<option>Desvaradora Servicio Pesado	Tiro		MKT-DVTLGF-1	 $44,900.00 </option>
    <option>Escrepa Frontal	Frontal		MKT-ETLGF-1	 $24,900.00 </option>
	<option>Generador de Energía	Integral		MKT-00EP02.V1	 $19,990.00 </option>
    <option>Generador de Energía para uso general	Integral		MKT-GETL-5	 $20,690.00 </option>
	<option>Kit de Contrapesos Delanteros			MKT-KCDTL-4	 $6,190.00 </option>
    <option>Kit de Contrapesos Traseros			MKT-KCTTL-4	 $6,190.00 </option>
    <option>Kit de Riego	Integral		MKT-00EP07.V1	 $9,900.00 </option>
    <option>Kit de Sistema Hidráulico de levante			MKT-KSHTL-1	 $11,390.00 </option>
    <option>Molino de Material para verde y seco	Integral		MKT-MVS-2	 $19,990.00 </option>
    <option>Molino para verde y seco	Integral		MKT-MOL-1MP	 $23,390.00 </option>
    <option>Segadora de alfalfa	Integral		MKT-00EP06C.V1	 $27,590.00 </option>
    <option>Segadora Reaper 4GL - 100	Integral		MKT-RMTL-100	 $21,900.00 </option>
    <option>Segadora Reaper 4GL - 120	Integral		MKT-RMTL-120	 $25,900.00 </option>
    <option>Segadoras reaper 4GL-100	Integral		MKT-00EP04C.V1	 $21,900.00 </option>
    <option>Segadoras reaper 4GL-120	Integral		MKT-00EP05A.V1	 $25,900.00 </option>
    <option>Sembradora de precisión mecánica	Tiro		MKT-00MP12	 $22,900.00 </option>
    <option>Sembradora de precisión mecánica	Tiro		MKT-SPMTL-1.V1	 $22,900.00 </option>
    <option>Sembradora de precisión mecánica y labranza de conservación	Tiro		MKT-SPMTL-1	 $68,990.00 </option>
    <option>Sistema de riego 14 aspersores	Integral		MKT-00EP08.V1	 $32,900.00 </option>
    <option>Vagón multiusos 1000Kg volteo manual	Tiro		MKT-VM7C-1T	 $33,690.00 </option>
    <option>Vagón multiusos 1300Kg	Tiro		MKT-VM7C-1.3T	 $38,690.00 </option>
    <option>Vagón multiusos 800Kg	Tiro		MKT-VM7C-.8T.V1	 $24,900.00 </option>
    <option>Zanjadora	Tipo C		MKT-00MP09C	 $20,990.00 </option>
    <option>Zanjadora	Tipo A		MKT-00MP10A	 $20,990.00 </option>
    <option>Zanjadora	Tipo C		MKT-00MP09C	 $20,990.00</option>
      </select>
    </td>
  </tr>

  <tr>
    <td><input name="cantimplementos_4" size="5" maxlength="3" type="text"> <br> </td>
    <td><select name="implementos_4" id="implementos_4">
        <option>Implemento 4</option>
	<option>Acolchadora	Tipo C		MKT-00MC04.V1	 $11,900.00 </option>
	<option>Acoplamiento para Desgranadora	FRONTAL		MKT-ADTL	 $500.00 </option>
	<option>Acoplamiento para Molino	FRONTAL		MKT-AMTL	 $500.00 </option>
	<option>Acoplamiento Segadora Reaper 	Frontal		MKT-ASRTL	 $3,290.00 </option>
	<option>Base Para Implementos Suspendidos 	Frontal		MKT-BBGBA-3	 $500.00 </option>
	<option>Bomba Aspersora / Sistema de fumigación	Integral		MKT-00EP01.V1	 $14,900.00 </option>
	<option>Bomba aspersora con kit de fumigación	Integral		MKT-SFTL-1	 $16,990.00 </option>
	<option>Bomba autocebante	Integral		MKT-00EP11	 $19,290.00 </option>
	<option>Bomba para riego	Integral		MKT-00EP12	 $8,490.00 </option>
	<option>Cosechadora de Papa	Tipo C		MKT-00MC05.V1	 $37,690.00 </option>
	<option>Desgranadora de maíz	Integral		MKT-DMTL-1	 $13,900.00 </option>
	<option>Desgranadora de maíz	Integral		MKT-00EP03.V2	 $13,900.00 </option>
	<option>Desgranadora de maíz con extractor de polvo	Integral		MKT-DMTL-2	 $31,690.00 </option>
	<option>Despulpadora de café con rodillo acoplable a toma de fuerza	Integral		MKT-DC-16	 $22,900.00 </option>
	<option>Desvaradora Servicio Ligero	Tiro		MKT-DVTLGF-2	 $29,900.00 </option>
	<option>Desvaradora Servicio Pesado	Tiro		MKT-DVTLGF-1	 $44,900.00 </option>
    <option>Escrepa Frontal	Frontal		MKT-ETLGF-1	 $24,900.00 </option>
	<option>Generador de Energía	Integral		MKT-00EP02.V1	 $19,990.00 </option>
    <option>Generador de Energía para uso general	Integral		MKT-GETL-5	 $20,690.00 </option>
	<option>Kit de Contrapesos Delanteros			MKT-KCDTL-4	 $6,190.00 </option>
    <option>Kit de Contrapesos Traseros			MKT-KCTTL-4	 $6,190.00 </option>
    <option>Kit de Riego	Integral		MKT-00EP07.V1	 $9,900.00 </option>
    <option>Kit de Sistema Hidráulico de levante			MKT-KSHTL-1	 $11,390.00 </option>
    <option>Molino de Material para verde y seco	Integral		MKT-MVS-2	 $19,990.00 </option>
    <option>Molino para verde y seco	Integral		MKT-MOL-1MP	 $23,390.00 </option>
    <option>Segadora de alfalfa	Integral		MKT-00EP06C.V1	 $27,590.00 </option>
    <option>Segadora Reaper 4GL - 100	Integral		MKT-RMTL-100	 $21,900.00 </option>
    <option>Segadora Reaper 4GL - 120	Integral		MKT-RMTL-120	 $25,900.00 </option>
    <option>Segadoras reaper 4GL-100	Integral		MKT-00EP04C.V1	 $21,900.00 </option>
    <option>Segadoras reaper 4GL-120	Integral		MKT-00EP05A.V1	 $25,900.00 </option>
    <option>Sembradora de precisión mecánica	Tiro		MKT-00MP12	 $22,900.00 </option>
    <option>Sembradora de precisión mecánica	Tiro		MKT-SPMTL-1.V1	 $22,900.00 </option>
    <option>Sembradora de precisión mecánica y labranza de conservación	Tiro		MKT-SPMTL-1	 $68,990.00 </option>
    <option>Sistema de riego 14 aspersores	Integral		MKT-00EP08.V1	 $32,900.00 </option>
    <option>Vagón multiusos 1000Kg volteo manual	Tiro		MKT-VM7C-1T	 $33,690.00 </option>
    <option>Vagón multiusos 1300Kg	Tiro		MKT-VM7C-1.3T	 $38,690.00 </option>
    <option>Vagón multiusos 800Kg	Tiro		MKT-VM7C-.8T.V1	 $24,900.00 </option>
    <option>Zanjadora	Tipo C		MKT-00MP09C	 $20,990.00 </option>
    <option>Zanjadora	Tipo A		MKT-00MP10A	 $20,990.00 </option>
    <option>Zanjadora	Tipo C		MKT-00MP09C	 $20,990.00</option>
      </select>
    </td>
  </tr>

  <tr>
    <td><input name="cantimplementos_5" size="5" maxlength="3" type="text"> <br> </td>
    <td><select name="implementos_5" id="implementos_5">
        <option>Implemento 5</option>
	<option>Acolchadora	Tipo C		MKT-00MC04.V1	 $11,900.00 </option>
	<option>Acoplamiento para Desgranadora	FRONTAL		MKT-ADTL	 $500.00 </option>
	<option>Acoplamiento para Molino	FRONTAL		MKT-AMTL	 $500.00 </option>
	<option>Acoplamiento Segadora Reaper 	Frontal		MKT-ASRTL	 $3,290.00 </option>
	<option>Base Para Implementos Suspendidos 	Frontal		MKT-BBGBA-3	 $500.00 </option>
	<option>Bomba Aspersora / Sistema de fumigación	Integral		MKT-00EP01.V1	 $14,900.00 </option>
	<option>Bomba aspersora con kit de fumigación	Integral		MKT-SFTL-1	 $16,990.00 </option>
	<option>Bomba autocebante	Integral		MKT-00EP11	 $19,290.00 </option>
	<option>Bomba para riego	Integral		MKT-00EP12	 $8,490.00 </option>
	<option>Cosechadora de Papa	Tipo C		MKT-00MC05.V1	 $37,690.00 </option>
	<option>Desgranadora de maíz	Integral		MKT-DMTL-1	 $13,900.00 </option>
	<option>Desgranadora de maíz	Integral		MKT-00EP03.V2	 $13,900.00 </option>
	<option>Desgranadora de maíz con extractor de polvo	Integral		MKT-DMTL-2	 $31,690.00 </option>
	<option>Despulpadora de café con rodillo acoplable a toma de fuerza	Integral		MKT-DC-16	 $22,900.00 </option>
	<option>Desvaradora Servicio Ligero	Tiro		MKT-DVTLGF-2	 $29,900.00 </option>
	<option>Desvaradora Servicio Pesado	Tiro		MKT-DVTLGF-1	 $44,900.00 </option>
    <option>Escrepa Frontal	Frontal		MKT-ETLGF-1	 $24,900.00 </option>
	<option>Generador de Energía	Integral		MKT-00EP02.V1	 $19,990.00 </option>
    <option>Generador de Energía para uso general	Integral		MKT-GETL-5	 $20,690.00 </option>
	<option>Kit de Contrapesos Delanteros			MKT-KCDTL-4	 $6,190.00 </option>
    <option>Kit de Contrapesos Traseros			MKT-KCTTL-4	 $6,190.00 </option>
    <option>Kit de Riego	Integral		MKT-00EP07.V1	 $9,900.00 </option>
    <option>Kit de Sistema Hidráulico de levante			MKT-KSHTL-1	 $11,390.00 </option>
    <option>Molino de Material para verde y seco	Integral		MKT-MVS-2	 $19,990.00 </option>
    <option>Molino para verde y seco	Integral		MKT-MOL-1MP	 $23,390.00 </option>
    <option>Segadora de alfalfa	Integral		MKT-00EP06C.V1	 $27,590.00 </option>
    <option>Segadora Reaper 4GL - 100	Integral		MKT-RMTL-100	 $21,900.00 </option>
    <option>Segadora Reaper 4GL - 120	Integral		MKT-RMTL-120	 $25,900.00 </option>
    <option>Segadoras reaper 4GL-100	Integral		MKT-00EP04C.V1	 $21,900.00 </option>
    <option>Segadoras reaper 4GL-120	Integral		MKT-00EP05A.V1	 $25,900.00 </option>
    <option>Sembradora de precisión mecánica	Tiro		MKT-00MP12	 $22,900.00 </option>
    <option>Sembradora de precisión mecánica	Tiro		MKT-SPMTL-1.V1	 $22,900.00 </option>
    <option>Sembradora de precisión mecánica y labranza de conservación	Tiro		MKT-SPMTL-1	 $68,990.00 </option>
    <option>Sistema de riego 14 aspersores	Integral		MKT-00EP08.V1	 $32,900.00 </option>
    <option>Vagón multiusos 1000Kg volteo manual	Tiro		MKT-VM7C-1T	 $33,690.00 </option>
    <option>Vagón multiusos 1300Kg	Tiro		MKT-VM7C-1.3T	 $38,690.00 </option>
    <option>Vagón multiusos 800Kg	Tiro		MKT-VM7C-.8T.V1	 $24,900.00 </option>
    <option>Zanjadora	Tipo C		MKT-00MP09C	 $20,990.00 </option>
    <option>Zanjadora	Tipo A		MKT-00MP10A	 $20,990.00 </option>
    <option>Zanjadora	Tipo C		MKT-00MP09C	 $20,990.00</option>
      </select>
    </td>
  </tr>

  <tr>
    <td><input name="cantcapac" size="5" maxlength="3" type="text"> <br> </td>
    <td><select name="capac" id="capac">
        <option>Capacitaci&oacute;n</option>
        <option>Curso de capacitaci&oacute;n de 8 horas MKT-CURSO8HR $4,999</option>
      </select>
    </td>
  </tr>

  <tr>
      <td><input name="cantservicio_1" size="5" maxlength="3" type="text"> <br> </td>
      <td><select name="servicio_1" id="servicio_1">
          <option>Otros</option>
          <option>Desgranadora de Maíz Manual			MKT-DSGM-1R	 $990.00 </option>
          <option>Kit Herramientas P			MKT-00TK02.V1	 $1,490.00 </option>
          <option>Mochila Aspersora			MKT-MA-20	 $590.00 </option>
          <option>Peladora de Haba	Estacionario	PHS	MKT-PHS-200	 $369,000.00</option>
        </select>
      </td>
  </tr>

  <tr>
      <td><input name="cantservicio_2" size="5" maxlength="3" type="text"> <br> </td>
      <td><select name="servicio_2" id="servicio_2">
          <option>Servicio</option>
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