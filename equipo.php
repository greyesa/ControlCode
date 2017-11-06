<?php
include ("libreria/sesion.php");
/************************************ 
Control-Code Interactiva Web (C)2012
Copyright (C)2000-2005 Gustavo Reyes. Twitter: @greyes
Todos los derechos reservados.
http://www.interactivaweb.com
contacto@interactivaweb.com
Nueva liberación 18-5-2012
Abril 2005
************************************/
include "libreria/cabecera.php";
?>
<table border="0" width="660">
<tr>
<td class="content">
<a href="index.php"><< M&oacute;dulos</a> <a href="equipo.php?modulo=principal&tipo=todo"><<- Men&uacute;</a> <a href=javascript:history.back()><<- Regresar</a><br><br>
<img src="imagenes/equipo.gif" border="0"><br><br>
<?
/* Solo tiene acceso el Administrador */
if($num2 == "1"){
echo '[<a href="equipo.php?modulo=ingresar&equipo=cpu">Ingresar Equipo Manualmente</a>] [<a href="#">Ingresar Equipo por la Red</a>] [<a href="facturas.php?modulo=ingresar">Ingresar Facturas</a>] <br> [<a href="importar.php?modulo=formulario">Importar datos desde CSV</a>]<br><br>';

//Modulo para ingresar datos a la BD
if($modulo=="ingresar2"){
echo'<meta http-equiv="refresh" content="5;URL=equipo.php?modulo=principal&tipo=todo">';
echo '<table border="0" width="660"><tr><td>';
	if($har=="cpu"){
	$dab=mysql_connect("$nhost","$nuser","$npass");
   mysql_select_db("$nbase",$dab);
   $sql = "SELECT servicetag FROM equipo WHERE servicetag='$servicetag'";
	$comp = mysql_query($sql) or die("No se puede ejecutar el resultado de la base de datos.");
	$num = mysql_numrows($comp);
	if ($num == 0) {
   $var="CPU";
   $auto=$control+1;
   $result=mysql_query("INSERT into equipo (cod_cod,tipo,nombre,usuario,equipo,no_procesador,procesador,mhz,fabricante,familia,ram,fabricante_equipo,modelo,SO,pro_escritorio,fecha_ingreso,fecha_instalacion,no_serie,no_paralelo,version_bios,fecha_bios,servicetag,observaciones,puerto,alimentador,serie,categoria,fecha_garantia,factura,asignacion,departe,entregado) values('$var$auto','$ubicacion','$nombre','$usuario','$equipo','$no_procesador','$procesador','$mhz','$fabricante','$familia','$ram','$fabricante_equipo','$modelo','$SO','$pro_escritorio',now(),'$fecha_instalacion','$no_serie','$no_paralelo','$version_bios','$fecha_bios','$servicetag','$observaciones','---','---','$servicetag','$har','$garantia','$imagename','$asignacion','$departe','0')",$dab);
   $result2=mysql_query("Update control_codigo Set cpu='$auto'",$dab);
   echo'<b>Informe:</b> <em>La informaci&oacute;n fue ingresada satisfactoriamente. Ser&aacute; redireccinado autom&aacute;ticamente al men&uacute; principal.</em>';
	}
   elseif ($num == 1)  {
   echo '<b>Informe:</b> <em>Este equipo ya fue ingresado. Ser&aacute; redireccinado autom&aacute;ticamente al men&uacute; principal.</em> ';
   }
  	}
	
	if($har=="monitor"){
	$dab=mysql_connect("$nhost","$nuser","$npass");
   mysql_select_db("$nbase",$dab);
   $sql = "SELECT servicetag FROM equipo WHERE servicetag='$serie'";
	$comp = mysql_query($sql) or die("No se puede ejecutar el resultado de la base de datos.");
	$num = mysql_numrows($comp);
	if ($num == 0) {
   $var="MON";
   $auto=$control+1;
   $result=mysql_query("INSERT into equipo (cod_cod,tipo,nombre,usuario,equipo,no_procesador,procesador,mhz,fabricante,familia,ram,fabricante_equipo,modelo,SO,pro_escritorio,fecha_ingreso,fecha_instalacion,no_serie,no_paralelo,version_bios,fecha_bios,servicetag,observaciones,puerto,alimentador,serie,categoria,fecha_garantia,factura,asignacion,departe,entregado) values('$var$auto','$ubicacion','---','---','---','---','---','---','$marca','---','---','---','$modelo','---','---',now(),'$fecha_instalacion','---','---','---','---','$serie','$observaciones','---','---','$serie','$har','$garantia','$imagename','$asignacion','$departe','0')",$dab);
   $result2=mysql_query("Update control_codigo Set monitor='$auto'",$dab);
   echo'<b>Informe:</b> <em>La informaci&oacute;n fue ingresada satisfactoriamente. Ser&aacute; redireccinado autom&aacute;ticamente al men&uacute; principal.</em>';
	}
   elseif ($num == 1)  {
   echo '<b>Informe:</b> <em>Este equipo ya fue ingresado. Ser&aacute; redireccinado autom&aacute;ticamente al men&uacute; principal.</em> ';
   }
	}
	
	if($har=="scanner"){
	$dab=mysql_connect("$nhost","$nuser","$npass");
   mysql_select_db("$nbase",$dab);
   $sql = "SELECT servicetag FROM equipo WHERE servicetag='$serie'";
	$comp = mysql_query($sql) or die("No se puede ejecutar el resultado de la base de datos.");
	$num = mysql_numrows($comp);
	if ($num == 0) {
   $var="SCAN";
   $auto=$control+1;
   $result=mysql_query("INSERT into equipo (cod_cod,tipo,nombre,usuario,equipo,no_procesador,procesador,mhz,fabricante,familia,ram,fabricante_equipo,modelo,SO,pro_escritorio,fecha_ingreso,fecha_instalacion,no_serie,no_paralelo,version_bios,fecha_bios,servicetag,observaciones,puerto,alimentador,serie,categoria,fecha_garantia,factura,asignacion,departe,entregado) values('$var$auto','$ubicacion','---','---','---','---','---','---','$marca','---','---','---','$modelo','---','---',now(),'$fecha_instalacion','---','---','---','---','$serie','$observaciones','---','---','$serie','$har','$garantia','$imagename','$asignacion','$departe','0')",$dab);
   $result2=mysql_query("Update control_codigo Set scanner='$auto'",$dab);
   echo'<b>Informe:</b> <em>La informaci&oacute;n fue ingresada satisfactoriamente. Ser&aacute; redireccinado autom&aacute;ticamente al men&uacute; principal.</em>';
	}
   elseif ($num == 1)  {
   echo '<b>Informe:</b> <em>Este equipo ya fue ingresado. Ser&aacute; redireccinado autom&aacute;ticamente al men&uacute; principal.</em> ';
   }
	}
	
	if($har=="impresora"){
	$dab=mysql_connect("$nhost","$nuser","$npass");
   mysql_select_db("$nbase",$dab);
   $sql = "SELECT servicetag FROM equipo WHERE servicetag='$serie'";
	$comp = mysql_query($sql) or die("No se puede ejecutar el resultado de la base de datos.");
	$num = mysql_numrows($comp);
	if ($num == 0) {
   $var="IMPR";
   $auto=$control+1;
   $result=mysql_query("INSERT into equipo (cod_cod,tipo,nombre,usuario,equipo,no_procesador,procesador,mhz,fabricante,familia,ram,fabricante_equipo,modelo,SO,pro_escritorio,fecha_ingreso,fecha_instalacion,no_serie,no_paralelo,version_bios,fecha_bios,servicetag,observaciones,puerto,alimentador,serie,categoria,fecha_garantia,factura,asignacion,departe,entregado) values('$var$auto','$ubicacion','---','---','---','---','---','---','$marca','---','---','---','$modelo','---','---',now(),'$fecha_instalacion','---','---','---','---','$serie','$observaciones','$puerto','$alimentador','$serie','$har','$garantia','$imagename','$asignacion','$departe','0')",$dab);
   $result2=mysql_query("Update control_codigo Set impresora='$auto'",$dab);
   echo'<b>Informe:</b> <em>La informaci&oacute;n fue ingresada satisfactoriamente. Ser&aacute; redireccinado autom&aacute;ticamente al men&uacute; principal.</em>';
	}
   elseif ($num == 1)  {
   echo '<b>Informe:</b> <em>Este equipo ya fue ingresado. Ser&aacute; redireccinado autom&aacute;ticamente al men&uacute; principal.</em> ';
   }
	}

   if($har=="ups"){
	$dab=mysql_connect("$nhost","$nuser","$npass");
   mysql_select_db("$nbase",$dab);
   $sql = "SELECT servicetag FROM equipo WHERE servicetag='$serie'";
	$comp = mysql_query($sql) or die("No se puede ejecutar el resultado de la base de datos.");
	$num = mysql_numrows($comp);
	if ($num == 0) {
   $var="UPS";
   $auto=$control+1;
   $result=mysql_query("INSERT into equipo (cod_cod,tipo,nombre,usuario,equipo,no_procesador,procesador,mhz,fabricante,familia,ram,fabricante_equipo,modelo,SO,pro_escritorio,fecha_ingreso,fecha_instalacion,no_serie,no_paralelo,version_bios,fecha_bios,servicetag,observaciones,puerto,alimentador,serie,categoria,fecha_garantia,factura,asignacion,departe,entregado) values('$var$auto','$ubicacion','---','---','---','---','---','---','$marca','---','---','---','$modelo','---','---',now(),'$fecha_instalacion','---','---','---','---','$serie','$observaciones','---','---','$serie','$har','$garantia','$imagename','$asignacion','$departe','0')",$dab);
   $result2=mysql_query("Update control_codigo Set ups='$auto'",$dab);
   echo'<b>Informe:</b> <em>La informaci&oacute;n fue ingresada satisfactoriamente. Ser&aacute; redireccinado autom&aacute;ticamente al men&uacute; principal.</em>';
	}
   elseif ($num == 1)  {
   echo '<b>Informe:</b> <em>Este equipo ya fue ingresado. Ser&aacute; redireccinado autom&aacute;ticamente al men&uacute; principal.</em> ';
   }
	}
	
	if($har=="otros"){
	$dab=mysql_connect("$nhost","$nuser","$npass");
   mysql_select_db("$nbase",$dab);
   $sql = "SELECT servicetag FROM equipo WHERE servicetag='$serie'";
	$comp = mysql_query($sql) or die("No se puede ejecutar el resultado de la base de datos.");
	$num = mysql_numrows($comp);
	if ($num == 0) {
   $var="OTR";
   $auto=$control+1;
   $result=mysql_query("INSERT into equipo (cod_cod,tipo,nombre,usuario,equipo,no_procesador,procesador,mhz,fabricante,familia,ram,fabricante_equipo,modelo,SO,pro_escritorio,fecha_ingreso,fecha_instalacion,no_serie,no_paralelo,version_bios,fecha_bios,servicetag,observaciones,puerto,alimentador,serie,categoria,fecha_garantia,factura,asignacion,departe,entregado) values('$var$auto','$ubicacion','---','---','---','---','---','---','$marca','---','---','---','$modelo','---','---',now(),'$fecha_instalacion','---','---','---','---','$serie','$observaciones','---','---','$serie','$har','$garantia','$imagename','$asignacion','$departe','0')",$dab);
   $result2=mysql_query("Update control_codigo Set otros='$auto'",$dab);
   echo'<b>Informe:</b> <em>La informaci&oacute;n fue ingresada satisfactoriamente. Ser&aacute; redireccinado autom&aacute;ticamente al men&uacute; principal.</em>';
	}
   elseif ($num == 1)  {
   echo '<b>Informe:</b> <em>Este equipo ya fue ingresado. Ser&aacute; redireccinado autom&aacute;ticamente al men&uacute; principal.</em> ';
   }
	}
	
	if($har=="mouse"){
	$dab=mysql_connect("$nhost","$nuser","$npass");
   mysql_select_db("$nbase",$dab);
   $sql = "SELECT servicetag FROM equipo WHERE servicetag='$serie'";
	$comp = mysql_query($sql) or die("No se puede ejecutar el resultado de la base de datos.");
	$num = mysql_numrows($comp);
	if ($num == 0) {
   $var="MOU";
   $auto=$control+1;
   $result=mysql_query("INSERT into equipo (cod_cod,tipo,nombre,usuario,equipo,no_procesador,procesador,mhz,fabricante,familia,ram,fabricante_equipo,modelo,SO,pro_escritorio,fecha_ingreso,fecha_instalacion,no_serie,no_paralelo,version_bios,fecha_bios,servicetag,observaciones,puerto,alimentador,serie,categoria,fecha_garantia,factura,asignacion,departe,entregado) values('$var$auto','$ubicacion','---','---','---','---','---','---','$marca','---','---','---','$modelo','---','---',now(),'$fecha_instalacion','---','---','---','---','$serie','$observaciones','$puerto','---','$serie','$har','$garantia','$imagename','$asignacion','$departe','0')",$dab);
   $result2=mysql_query("Update control_codigo Set mouse='$auto'",$dab);
   echo'<b>Informe:</b> <em>La informaci&oacute;n fue ingresada satisfactoriamente. Ser&aacute; redireccinado autom&aacute;ticamente al men&uacute; principal.</em>';
	}
   elseif ($num == 1)  {
   echo '<b>Informe:</b> <em>Este equipo ya fue ingresado. Ser&aacute; redireccinado autom&aacute;ticamente al men&uacute; principal.</em> ';
   }
	}

	if($har=="teclado"){
	$dab=mysql_connect("$nhost","$nuser","$npass");
   mysql_select_db("$nbase",$dab);
   $sql = "SELECT servicetag FROM equipo WHERE servicetag='$serie'";
	$comp = mysql_query($sql) or die("No se puede ejecutar el resultado de la base de datos.");
	$num = mysql_numrows($comp);
	if ($num == 0) {
   $var="TECL";
   $auto=$control+1;
   $result=mysql_query("INSERT into equipo (cod_cod,tipo,nombre,usuario,equipo,no_procesador,procesador,mhz,fabricante,familia,ram,fabricante_equipo,modelo,SO,pro_escritorio,fecha_ingreso,fecha_instalacion,no_serie,no_paralelo,version_bios,fecha_bios,servicetag,observaciones,puerto,alimentador,serie,categoria,fecha_garantia,factura,asignacion,departe,entregado) values('$var$auto','$ubicacion','---','---','---','---','---','---','$marca','---','---','---','$modelo','---','---',now(),'$fecha_instalacion','---','---','---','---','$serie','$observaciones','$puerto','---','$serie','$har','$garantia','$imagename','$asignacion','$departe','0')",$dab);
   $result2=mysql_query("Update control_codigo Set teclado='$auto'",$dab);
   echo'<b>Informe:</b> <em>La informaci&oacute;n fue ingresada satisfactoriamente. Ser&aacute; redireccinado autom&aacute;ticamente al men&uacute; principal.</em>';
	}
   elseif ($num == 1)  {
   echo '<b>Informe:</b> <em>Este equipo ya fue ingresado. Ser&aacute; redireccinado autom&aacute;ticamente al men&uacute; principal.</em> ';
   }
	}
	
	if($har=="dispositivo"){
	$dab=mysql_connect("$nhost","$nuser","$npass");
   mysql_select_db("$nbase",$dab);
   $sql = "SELECT servicetag FROM equipo WHERE servicetag='$serie'";
	$comp = mysql_query($sql) or die("No se puede ejecutar el resultado de la base de datos.");
	$num = mysql_numrows($comp);
	if ($num == 0) {
   $var="DISP";
   $auto=$control+1;
   $result=mysql_query("INSERT into equipo (cod_cod,tipo,nombre,usuario,equipo,no_procesador,procesador,mhz,fabricante,familia,ram,fabricante_equipo,modelo,SO,pro_escritorio,fecha_ingreso,fecha_instalacion,no_serie,no_paralelo,version_bios,fecha_bios,servicetag,observaciones,puerto,alimentador,serie,categoria,fecha_garantia,factura,asignacion,departe,entregado) values('$var$auto','$ubicacion','---','---','---','---','---','---','$marca','---','---','---','$modelo','---','---',now(),'$fecha_instalacion','---','---','---','---','$serie','$observaciones','---','---','$serie','$har','$garantia','$imagename','$asignacion','$departe','0')",$dab);
   $result2=mysql_query("Update control_codigo Set dispositivo='$auto'",$dab);
   echo'<b>Informe:</b> <em>La informaci&oacute;n fue ingresada satisfactoriamente. Ser&aacute; redireccinado autom&aacute;ticamente al men&uacute; principal.</em>';
	}
   elseif ($num == 1)  {
   echo '<b>Informe:</b> <em>Este equipo ya fue ingresado. Ser&aacute; redireccinado autom&aacute;ticamente al men&uacute; principal.</em> ';
   }
	}
echo '</td></tr></table>';
}



// Modulo ingreso de equipo.
if($modulo=="ingresar"){
echo '[<a href="equipo.php?modulo=ingresar&equipo=cpu">CPU</a>] [<a href="equipo.php?modulo=ingresar&equipo=monitor">Monitor</a>] [<a href="equipo.php?modulo=ingresar&equipo=scanner">Scanner</a>] [<a href="equipo.php?modulo=ingresar&equipo=impresora">Impresora</a>] [<a href="equipo.php?modulo=ingresar&equipo=ups">UPS</a>] [<a href="equipo.php?modulo=ingresar&equipo=mouse">Mouse</a>] [<a href="equipo.php?modulo=ingresar&equipo=teclado">Teclado</a>] [<a href="equipo.php?modulo=ingresar&equipo=dispositivo">Dispositivo</a>] [<a href="equipo.php?modulo=ingresar&equipo=otros">Otros</a>]<br><br>';
echo '<b>Ingreso de Equipo Manualmente:</b> <font color="#4180be"><b>'.$equipo.'</b></font> <br><br> Por favor llenar el siguiente formulario:<br><br>';

?>
<form name="testform" enctype="multipart/form-data" action="equipo.php?modulo=ingresar2" method="post" onSubmit="return validateStandard(this);">
<?
echo  '<table width="660" border="0"><tr><td><b>Departamento asignado:</b>';
echo '</td>';
echo '<td>';
$link= mysql_connect("$nhost","$nuser","$npass");
mysql_select_db("$nbase", $link); 
$result=mysql_query("select * from facultad", $link);
echo '<select name="asignacion" size="0">';
while ($row=mysql_fetch_array($result))
{
echo '<option value="'.$row["id_facultad"].'">'.$row["nombre_facultad"].'</option>';
}
mysql_free_result($result);
echo '</select>';
?>
<a href=javascript:depa('depa.php?modulo=ingresar')> [ Agregar ]</a>
<? 
echo '</td>';
echo '</tr></table>';

echo '<table border="0" width="660">';

if($equipo=="cpu"){
echo '<input type="hidden" name="har" value="cpu">';
	/* Control de Código auto-incrementable */
	$link= mysql_connect("$nhost","$nuser","$npass");
	mysql_select_db("$nbase", $link);
	$result=mysql_query("select * from control_codigo where cpu=cpu");
	while ($row=mysql_fetch_array($result))
	{
	echo '<input type="hidden" name="control" value="'.$row["cpu"].'">';
	}
	mysql_free_result($result);
	/* Fin de Código auto-incrementable */
echo '<tr>
<td><b>ID:</b></td>
<td>Autom&aacute;tico</td>
<td><b>Ubicaci&oacute;n:</b></td>
<td><select name="ubicacion" size="0"><option value="Todo" label="todo" selected>Todo</option><option value="almacen" label="almacen">Almac&eacute;n</option><option value="reparaciones" label="reparaciones">Reparaciones</option><option value="Bajas" label="bajas">Bajas</option></select></td>
</tr>

<tr>
<td><b>Nombre:</b></td>
<td><input type="text" name="nombre" value="'.$nombre.'"></td>
<td><b>Usuario:</b></td>
<td><input type="text" name="usuario"></td>
</tr>

<tr>
<td><b>Equipo:</b></td>
<td><select name="equipo" size="0"><option value="AT/AT Compatible" label="AT/AT Compatible" selected>AT/AT Compatible</option></select></td>
<td><b>No. Procesador:</b></td>
<td><input type="text" name="no_procesador"></td>
</tr>

<tr>
<td><b>MHz:</b></td>
<td><input type="text" name="mhz"></td>
<td><b>Familia:</b></td>
<td><input type="text" name="familia"></td>
</tr>

<tr>
<td><b>Memoria RAM:</b></td>
<td><input type="text" name="ram"></td>
<td><b>Fabricante de Equipo:</b></td>
<td><input type="text" name="fabricante_equipo"></td>
</tr>

<tr>
<td><b>Modelo:</b></td>
<td><input type="text" name="modelo"></td>
<td><b>Fecha de Instalaci&oacute;n:</b></td>
<td><input type="text" id="fecha_instalacion" name="fecha_instalacion" readonly="1" />';
?>
<img src="calendar/img.gif" id="trigger"
     style="cursor: pointer; border: 1px solid red;"
     title="Date selector"
     onmouseover="this.style.background='red';"
     onmouseout="this.style.background=''" />

</td>
<script type="text/javascript">
  Calendar.setup(
    {
      inputField  : "fecha_instalacion",         // ID of the input field
      align          :    "Tl",
      singleClick    :    false,
      ifFormat    : "%Y/%m/%d %H:%M:%S",    // the date format
      button      : "trigger"       // ID of the button
    }
  );
</script>
<?
echo'</tr>

<tr>
<td><b>No. Puertos Serie:</b></td>
<td><input type="text" name="no_serie"></td>
<td><b>No. Puertos Paralelos:</b></td>
<td><input type="text" name="no_paralelo"></td>
</tr>

<tr>
<td><b>Versi&oacute;n de la Bios:</b></td>
<td><input type="text" name="version_bios"></td>
<td><b>Fecha Bios:</b></td>
<td><input type="text" id="fecha_bios" name="fecha_bios" readonly="1" />';
?>
<img src="calendar/img.gif" id="trigger5"
     style="cursor: pointer; border: 1px solid red;"
     title="Date selector"
     onmouseover="this.style.background='red';"
     onmouseout="this.style.background=''" />

</td>
<script type="text/javascript">
  Calendar.setup(
    {
      inputField  : "fecha_bios",         // ID of the input field
      align          :    "Tl",
      singleClick    :    false,
      ifFormat    : "%Y/%m/%d %H:%M:%S",    // the date format
      button      : "trigger5"       // ID of the button
    }
  );
</script>
<?
echo'</tr>
<tr>';
echo '<td><b>Fecha Garant&iacute;a:</b></td><td><input type="text" id="garantia" name="garantia" readonly="1" />';
?>
<img src="calendar/img.gif" id="trigger2"
     style="cursor: pointer; border: 1px solid red;"
     title="Date selector"
     onmouseover="this.style.background='red';"
     onmouseout="this.style.background=''" />


</td>
<script type="text/javascript">
  Calendar.setup(
    {
      inputField  : "garantia",         // ID of the input field
      align          :    "Tl",
      singleClick    :    false,
      ifFormat    : "%Y/%m/%d %H:%M:%S",    // the date format
      button      : "trigger2"       // ID of the button
    }
  );
</script>
<?
echo '<td><font color="#CE272A"><b>*ServiceTag:</b></font></td>
<td><input type="text" name="servicetag" required="1" regexp="/^\w*$/"></td>';

echo '</tr>
</table>

<table border="0" width="660">
<tr>
<td><b>Procesador:</b></td>
<td><select name="procesador" size="0">';
echo'<option value="286" label="286" selected>286</option>';
echo'<option value="386" label="386">386</option>';
echo'<option value="486" label="486">486</option>';
echo'<option value="Pentium" label="Pentium">Pentium</option>';
echo'<option value="Pentium MMX" label="Pentium MMX">Pentium MMX</option>';
echo'<option value="Pentium Pro" label="Pentium Pro">Pentium Pro</option>';
echo'<option value="Pentium II" label="Pentium II">Pentium II</option>';
echo'<option value="Pentium III" label="Pentium III">Pentium III</option>';
echo'<option value="Pentium 4" label="Pentium 4">Pentium 4</option>';
echo'<option value="AMD-k5" label="AMD-k5">AMD-k5</option>';
echo'<option value="AMD-k6" label="AMD-k6">AMD-k6</option>';
echo'<option value="AMD-k6-II" label="AMD-k6-II">AMD-k6-II</option>';
echo'<option value="AMD-k6-III" label="AMD-k6-III">AMD-k6-III</option>';
echo'<option value="AMD Athlon" label="AMD Athlon">AMD Athlon</option>';
echo'<option value="AMD Duron" label="AMD Duron">AMD Duron</option>';
echo'<option value="Cyrix 6x86" label="Cyrix 6x86">Cyrix 6x86</option>';
echo'<option value="Cyrix 6x86MX" label="Cyrix 6x86MX">Cyrix 6x86MX</option>';
echo'<option value="Cyrix Media GX" label="Cyrix Media GX">Cyrix Media GX</option>';
echo'<option value="Cyrix Media GX MMX" label="Cyrix Media GX MMX">Cyrix Medida GX MMX</option>';
echo'<option value="Alpha" label="Alpha">Alpha</option>';
echo'<option value="Power PC 601" label="Power PC 601">Power PC 601</option>';
echo'<option value="Power PC 603" label="Power PC 603">Power PC 603</option>';
echo'<option value="Power PC 604" label="Power PC 604">Power PC 604</option>';
echo'<option value="MIPS" label="MIPS">MIPS</option>';
echo'</select></td>

<td><b>Fabricante:</b></td>
<td><select name="fabricante" size="0"><option value="AuthenticAMD" label="AuthenticAMD" selected>AuthenticAMD</option><option value="CyrixInstead" label="CyrixInstead">CyrixInstead</option><option value="GenuineIntel" label="GenuineIntel">GenuineIntel</option></select></td>
</tr>

<tr>
<td><b>Sistema Operativo:</b></td>
<td><select name="SO" size="0">';
echo'<option value="Windows 3.0" label="Windows 3.0" selected>Windows 3.0</option>';
echo'<option value="Windows 3.1" label="Windows 3.1">Windows 3.1</option>';
echo'<option value="Windows 3.11" label="Windows 3.11">Windows 3.11</option>';
echo'<option value="Windows 95" label="Windows 95">Windows 95</option>';
echo'<option value="Windows 95 OSR1" label="Windows 95 OSR1">Windows 95 OSR1</option>';
echo'<option value="Windows 95 OSR2" label="Windows 95 OSR2">Windows 95 OSR2</option>';
echo'<option value="Windows 98" label="Windows 98">Windows 98</option>';
echo'<option value="Windows 98 SE" label="Windows 98 SE">Windows 98 SE</option>';
echo'<option value="Windows ME" label="Windows ME">Windows ME</option>';
echo'<option value="Windows 2000" label="Windows 2000">Windows 2000</option>';
echo'<option value="Windows 2000 Server" label="Windows 2000 Server">Windows 2000 Server</option>';
echo'<option value="Windows 2000 Advanced Server" label="Windows 2000 Advanced Server">Windows 2000 Advanced Server</option>';
echo'<option value="Windows 2000 Professional" label="Windows 2000 Professional">Windows 2000 Professional</option>';
echo'<option value="Windows 2000 DataCenter Server" label="Windows 2000 DataCenter Server">Windows 2000 DataCenter Server</option>';
echo'<option value="Windows NT" label="Windows NT">Windows NT</option>';
echo'<option value="Windows XP" label="Windows XP">Windows XP</option>';
echo'<option value="Windows XP Professional" label="Windows XP Professional">Windows XP Professional</option>';
echo'<option value="Windows XP Home Edition" label="Windows XP Home Edition">Windows XP Home Edition</option>';
echo'<option value="Windows .NET" label="Windows .NET">Windows .NET</option>';
echo'<option value="Linux" label="Linux">Linux</option>';

echo'</select></td>

<td><b>Escritorio:</b></td>
<td><select name="pro_escritorio" size="0"><option value="Microsoft Office" label="pro_escritorio" selected>Microsoft Office</option><option value="StarOffice" label="pro_escritorio">StarOffice</option><option value="OpenOffice" label="pro_escritorio">OpenOffice</option></select></td>
</tr>
<tr>';

echo '<td valign="top"><b>Factura</b></td><td valign="top"><SELECT NAME="imagename" size="1" onChange="display_image(this.form)">';
$link= mysql_connect("$nhost","$nuser","$npass");
mysql_select_db("$nbase", $link);
$result=mysql_query("select * from facturas");
echo '<option selected value="facturas/ninguna.gif" name="facturas/ninguna.gif">Ninguna</option>';
while ($row=mysql_fetch_array($result))
{
echo"<OPTION value=ver.php?id_fact=".$row["id_fact"]." name=".$row["id_fact"].">".$row["titulo_fact"]."</option>";
}
mysql_free_result($result);
echo '</SELECT>';
?>
<a href=javascript:depa('factura2.php?modulo=ingresar')> [ Agregar ]</a>
<?
echo '</td>';

echo '<td valign="top"><b>Proveedor:</b></td>';
echo '<td valign="top"><select name="departe" size="0"><option value="DELL" label="DELL" selected>DELL</option><option value="MICROSYS" label="MICROSYS">MICROSYS</option><option value="SEGA" label="SEGA">SEGA</option><option value="COMPUSERVICIOS CSCOM" label="COMPUSERVICIOS CSCOM">COMPUSERVICIOS CSCOM</option><option value="TELNET" label="TELNET">TELNET</option><option value="OTROS" label="OTROS">OTROS</option></select></td>';
echo '</tr></table>';
echo '<table border="0" width="660">
<tr>
<td valign="top"><b>Observaciones:</b></td>
<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<textarea name="observaciones" rows="5" cols="65"></textarea></td>

</tr>';

}

if($equipo=="monitor"){
echo '<input type="hidden" name="har" value="monitor">';

	/* Control de Código auto-incrementable */
	$link= mysql_connect("$nhost","$nuser","$npass");
	mysql_select_db("$nbase", $link);
	$result=mysql_query("select * from control_codigo where monitor=monitor");
	while ($row=mysql_fetch_array($result))
	{
	echo '<input type="hidden" name="control" value="'.$row["monitor"].'">';
	}
	mysql_free_result($result);
	/* Fin de Código auto-incrementable */

echo '<tr>
<td><b>Marca:</b></td>
<td><select name="marca" size="0"><option value="DELL" label="marca" selected>DELL</option><option value="LG" label="marca">LG</option><option value="BenQ" label="marca">BenQ</option><option value="Acer" label="marca">Acer</option><option value="Sony" label="marca">Sony</option><option value="Otros" label="marca">Otros</option></select></td>
<td><b>Modelo:</b></td>
<td><input type="text" name="modelo"></td>
<td><font color="#CE272A"><b>*Serie:</b></font></td>
<td><input type="text" name="serie" required="1" regexp="/^\w*$/"></td>
</tr>
<tr>
<td><b>Ubicaci&oacute;n:</b></td>
<td><select name="ubicacion" size="0"><option value="Todo" label="todo" selected>Todo</option><option value="almacen" label="almacen">Almac&eacute;n</option><option value="reparaciones" label="reparaciones">Reparaciones</option><option value="Bajas" label="bajas">Bajas</option></select></td>';
echo '<td><b>Fecha de Instalaci&oacute;n:</b></td><td><input type="text" id="fecha_instalacion" name="fecha_instalacion" readonly="1" />';

?>
<img src="calendar/img.gif" id="trigger3"
     style="cursor: pointer; border: 1px solid red;"
     title="Date selector"
     onmouseover="this.style.background='red';"
     onmouseout="this.style.background=''" />

</td>
<script type="text/javascript">
  Calendar.setup(
    {
      inputField  : "fecha_instalacion",         // ID of the input field
      align          :    "Tl",
      singleClick    :    false,
      ifFormat    : "%Y/%m/%d %H:%M:%S",    // the date format
      button      : "trigger3"       // ID of the button
    }
  );
</script>
<?

echo'<td><b>Service Tag:</b></td><td>Autom&aacute;tico<!--<input type="text" name="servicetag">--></td>';
echo'</tr>';

echo '<table border="0" width="660"><tr><td><b>Fecha Garant&iacute;a:</b></td><td><input type="text" id="garantia" name="garantia" readonly="1" />';
?>
<img src="calendar/img.gif" id="trigger2"
     style="cursor: pointer; border: 1px solid red;"
     title="Date selector"
     onmouseover="this.style.background='red';"
     onmouseout="this.style.background=''" />


</td>
<script type="text/javascript">
  Calendar.setup(
    {
      inputField  : "garantia",         // ID of the input field
      align          :    "Tl",
      singleClick    :    false,
      ifFormat    : "%Y/%m/%d %H:%M:%S",    // the date format
      button      : "trigger2"       // ID of the button
    }
  );
</script>
<?

echo '<td valign="top"><b>Factura</b></td><td valign="top"><SELECT NAME="imagename" size="1" onChange="display_image(this.form)">';
$link= mysql_connect("$nhost","$nuser","$npass");
mysql_select_db("$nbase", $link);
$result=mysql_query("select * from facturas");
echo '<option selected value="facturas/ninguna.gif" name="facturas/ninguna.gif">Ninguna</option>';
while ($row=mysql_fetch_array($result))
{
echo"<OPTION value=ver.php?id_fact=".$row["id_fact"]." name=".$row["id_fact"].">".$row["titulo_fact"]."</option>";
}
mysql_free_result($result);
echo '</SELECT>';
?>
<a href=javascript:depa('factura2.php?modulo=ingresar')> [ Agregar ]</a>
<?
echo '</td>';

echo '</tr><tr><td><b>Proveedor:</b></td><td><select name="departe" size="0"><option value="DELL" label="DELL" selected>DELL</option><option value="MICROSYS" label="MICROSYS">MICROSYS</option><option value="SEGA" label="SEGA">SEGA</option><option value="COMPUSERVICIOS CSCOM" label="COMPUSERVICIOS CSCOM">COMPUSERVICIOS CSCOM</option><option value="TELNET" label="TELNET">TELNET</option><option value="OTROS" label="OTROS">OTROS</option></select></td><td></td><td></td></tr></table>';

echo '<table border="0" width="660">
<tr>
<td valign="top"><b>Observaciones:</b></td>
<td>&nbsp;&nbsp;<textarea name="observaciones" rows="5" cols="65"></textarea></td>
</tr>';
}

if($equipo=="scanner"){
echo '<input type="hidden" name="har" value="scanner">';
	
	/* Control de Código auto-incrementable */
	$link= mysql_connect("$nhost","$nuser","$npass");
	mysql_select_db("$nbase", $link);
	$result=mysql_query("select * from control_codigo where scanner=scanner");
	while ($row=mysql_fetch_array($result))
	{
	echo '<input type="hidden" name="control" value="'.$row["scanner"].'">';
	}
	mysql_free_result($result);
	/* Fin de Código auto-incrementable */
	
echo '<tr>
<td><b>Marca:</b></td>
<td><select name="marca" size="0"><option value="HP" label="marca" selected>HP</option><option value="Epson" label="marca">Epson</option><option value="Canon" label="marca">Canon</option><option value="Otros" label="marca">Otros</option></select></td>
<td><b>Modelo:</b></td>
<td><input type="text" name="modelo"></td>
<td><font color="#CE272A"><b>*Serie:</b></font></td>
<td><input type="text" name="serie" required="1" regexp="/^\w*$/"></td>
</tr>';
echo'<tr>
<td><b>Ubicaci&oacute;n:</b></td>
<td><select name="ubicacion" size="0"><option value="Todo" label="todo" selected>Todo</option><option value="almacen" label="almacen">Almac&eacute;n</option><option value="reparaciones" label="reparaciones">Reparaciones</option><option value="Bajas" label="bajas">Bajas</option></select></td>';
echo '<td><b>Fecha de Instalaci&oacute;n:</b></td><td><input type="text" id="fecha_instalacion" name="fecha_instalacion" readonly="1" />';

?>
<img src="calendar/img.gif" id="trigger3"
     style="cursor: pointer; border: 1px solid red;"
     title="Date selector"
     onmouseover="this.style.background='red';"
     onmouseout="this.style.background=''" />

</td>
<script type="text/javascript">
  Calendar.setup(
    {
      inputField  : "fecha_instalacion",         // ID of the input field
      align          :    "Tl",
      singleClick    :    false,
      ifFormat    : "%Y/%m/%d %H:%M:%S",    // the date format
      button      : "trigger3"       // ID of the button
    }
  );
</script>
<?

echo'<td><b>Service Tag:</b></td><td>Autom&aacute;tico<!--<input type="text" name="servicetag">--></td>';
echo'</tr>';

echo '<table border="0" width="660"><tr><td><b>Fecha Garant&iacute;a:</b></td><td><input type="text" id="garantia" name="garantia" readonly="1" />';
?>
<img src="calendar/img.gif" id="trigger2"
     style="cursor: pointer; border: 1px solid red;"
     title="Date selector"
     onmouseover="this.style.background='red';"
     onmouseout="this.style.background=''" />


</td>
<script type="text/javascript">
  Calendar.setup(
    {
      inputField  : "garantia",         // ID of the input field
      align          :    "Tl",
      singleClick    :    false,
      ifFormat    : "%Y/%m/%d %H:%M:%S",    // the date format
      button      : "trigger2"       // ID of the button
    }
  );
</script>
<?
echo '<td valign="top"><b>Factura</b></td><td valign="top"><SELECT NAME="imagename" size="1" onChange="display_image(this.form)">';
$link= mysql_connect("$nhost","$nuser","$npass");
mysql_select_db("$nbase", $link);
$result=mysql_query("select * from facturas");
echo '<option selected value="facturas/ninguna.gif" name="facturas/ninguna.gif">Ninguna</option>';
while ($row=mysql_fetch_array($result))
{
echo"<OPTION value=ver.php?id_fact=".$row["id_fact"]." name=".$row["id_fact"].">".$row["titulo_fact"]."</option>";
}
mysql_free_result($result);
echo '</SELECT>';
?>
<a href=javascript:depa('factura2.php?modulo=ingresar')> [ Agregar ]</a>
<?
echo '</td>';

echo '</tr><tr><td><b>Proveedor:</b></td><td><select name="departe" size="0"><option value="DELL" label="DELL" selected>DELL</option><option value="MICROSYS" label="MICROSYS">MICROSYS</option><option value="SEGA" label="SEGA">SEGA</option><option value="COMPUSERVICIOS CSCOM" label="COMPUSERVICIOS CSCOM">COMPUSERVICIOS CSCOM</option><option value="TELNET" label="TELNET">TELNET</option><option value="OTROS" label="OTROS">OTROS</option></select></td><td></td><td></td></tr></table>';

echo '<table border="0" width="660">
<tr>
<td valign="top"><b>Observaciones:</b></td>
<td>&nbsp;&nbsp;<textarea name="observaciones" rows="5" cols="65"></textarea></td>
</tr>';
}

if($equipo=="impresora"){
echo '<input type="hidden" name="har" value="impresora">';

	/* Control de Código auto-incrementable */
	$link= mysql_connect("$nhost","$nuser","$npass");
	mysql_select_db("$nbase", $link);
	$result=mysql_query("select * from control_codigo where impresora=impresora");
	while ($row=mysql_fetch_array($result))
	{
	echo '<input type="hidden" name="control" value="'.$row["impresora"].'">';
	}
	mysql_free_result($result);
	/* Fin de Código auto-incrementable */

echo '<tr>
<td><b>Marca:</b></td>
<td><select name="marca" size="0"><option value="HP" label="marca" selected>HP</option><option value="Epson" label="marca">Epson</option><option value="Canon" label="marca">Canon</option><option value="Otros" label="marca">Otros</option></select></td>
<td><b>Modelo:</b></td>
<td><input type="text" name="modelo"></td>
<td><font color="#CE272A"><b>*Serie:</b></font></td>
<td><input type="text" name="serie" required="1" regexp="/^\w*$/"></td></tr>
<tr><td><b>Tipo:</b></td>
<td><select name="alimentador" size="0"><option value="Inyecci&oacute;n" label="alimentador" selected>Inyecci&oacute;n</option><option value="Matr&iacute;z" label="alimentador">Matr&iacute;z</option><option value="Laser" label="alimentador">Laser</option></select></td>';

echo'<td><b>Ubicaci&oacute;n:</b></td>
<td><select name="ubicacion" size="0"><option value="Todo" label="todo" selected>Todo</option><option value="almacen" label="almacen">Almac&eacute;n</option><option value="reparaciones" label="reparaciones">Reparaciones</option><option value="Bajas" label="bajas">Bajas</option></select></td>';
echo '<td><b>Fecha de Instalaci&oacute;n:</b></td><td><input type="text" id="fecha_instalacion" name="fecha_instalacion" readonly="1" />';
?>

<img src="calendar/img.gif" id="trigger4"
     style="cursor: pointer; border: 1px solid red;"
     title="Date selector"
     onmouseover="this.style.background='red';"
     onmouseout="this.style.background=''" />

</td>
<script type="text/javascript">
  Calendar.setup(
    {
      inputField  : "fecha_instalacion",         // ID of the input field
      align          :    "Tl",
      singleClick    :    false,
      ifFormat    : "%Y/%m/%d %H:%M:%S",    // the date format
      button      : "trigger4"       // ID of the button
    }
  );
</script>

<?
echo'</tr><tr><td><b>Service Tag:</b></td><td>Autom&aacute;tico<!--<input type="text" name="servicetag">--></td><td></td><td></td><td></td><td></td>';
echo'</tr>';

echo '<table border="0" width="660"><tr><td><b>Fecha Garant&iacute;a:</b></td><td><input type="text" id="garantia" name="garantia" readonly="1" />';
?>
<img src="calendar/img.gif" id="trigger2"
     style="cursor: pointer; border: 1px solid red;"
     title="Date selector"
     onmouseover="this.style.background='red';"
     onmouseout="this.style.background=''" />


</td>
<script type="text/javascript">
  Calendar.setup(
    {
      inputField  : "garantia",         // ID of the input field
      align          :    "Tl",
      singleClick    :    false,
      ifFormat    : "%Y/%m/%d %H:%M:%S",    // the date format
      button      : "trigger2"       // ID of the button
    }
  );
</script>
<?
echo '<td valign="top"><b>Factura</b></td><td valign="top"><SELECT NAME="imagename" size="1" onChange="display_image(this.form)">';
$link= mysql_connect("$nhost","$nuser","$npass");
mysql_select_db("$nbase", $link);
$result=mysql_query("select * from facturas");
echo '<option selected value="facturas/ninguna.gif" name="facturas/ninguna.gif">Ninguna</option>';
while ($row=mysql_fetch_array($result))
{
echo"<OPTION value=ver.php?id_fact=".$row["id_fact"]." name=".$row["id_fact"].">".$row["titulo_fact"]."</option>";
}
mysql_free_result($result);
echo '</SELECT>';
?>
<a href=javascript:depa('factura2.php?modulo=ingresar')> [ Agregar ]</a>
<?
echo '</td>';

echo '</tr><tr><td><b>Proveedor:</b></td><td><select name="departe" size="0"><option value="DELL" label="DELL" selected>DELL</option><option value="MICROSYS" label="MICROSYS">MICROSYS</option><option value="SEGA" label="SEGA">SEGA</option><option value="COMPUSERVICIOS CSCOM" label="COMPUSERVICIOS CSCOM">COMPUSERVICIOS CSCOM</option><option value="TELNET" label="TELNET">TELNET</option><option value="OTROS" label="OTROS">OTROS</option></select></td><td></td><td></td></tr></table>';



echo '<table border="0" width="660">
<tr>
<td valign="top"><b>Observaciones:</b></td>
<td>&nbsp;&nbsp;<textarea name="observaciones" rows="5" cols="65"></textarea></td>
</tr>';
}

if($equipo=="ups"){
echo '<input type="hidden" name="har" value="ups">';

	/* Control de Código auto-incrementable */
	$link= mysql_connect("$nhost","$nuser","$npass");
	mysql_select_db("$nbase", $link);
	$result=mysql_query("select * from control_codigo where ups=ups");
	while ($row=mysql_fetch_array($result))
	{
	echo '<input type="hidden" name="control" value="'.$row["ups"].'">';
	}
	mysql_free_result($result);
	/* Fin de Código auto-incrementable */

echo '<tr>
<td><b>Marca:</b></td>
<td><select name="marca" size="0"><option value="Triple-Lite" label="marca" selected>Triple-Lite</option><option value="APC" label="marca">APC</option><option value="CDP" label="marca">CDP</option><option value="SmartCentra" label="marca">SmartCentra</option><option value="Otros" label="marca">Otros</option></select></td>
<td><b>Modelo:</b></td>
<td><input type="text" name="modelo"></td>
<td><font color="#CE272A"><b>*Serie:</b></font></td>
<td><input type="text" name="serie" required="1" regexp="/^\w*$/"></td>
</tr>';

echo'<tr>
<td><b>Ubicaci&oacute;n:</b></td>
<td><select name="ubicacion" size="0"><option value="Todo" label="todo" selected>Todo</option><option value="almacen" label="almacen">Almac&eacute;n</option><option value="reparaciones" label="reparaciones">Reparaciones</option><option value="Bajas" label="bajas">Bajas</option></select></td>';
echo '<td><b>Fecha de Instalaci&oacute;n:</b></td><td><input type="text" id="fecha_instalacion" name="fecha_instalacion" readonly="1" />';

?>
<img src="calendar/img.gif" id="trigger5"
     style="cursor: pointer; border: 1px solid red;"
     title="Date selector"
     onmouseover="this.style.background='red';"
     onmouseout="this.style.background=''" />

</td>
<script type="text/javascript">
  Calendar.setup(
    {
      inputField  : "fecha_instalacion",         // ID of the input field
      align          :    "Tl",
      singleClick    :    false,
      ifFormat    : "%Y/%m/%d %H:%M:%S",    // the date format
      button      : "trigger5"       // ID of the button
    }
  );
</script>
<?

echo'<td><b>Service Tag:</b></td><td>Autom&aacute;tico<!--<input type="text" name="servicetag">--></td>';
echo'</tr>';

echo '<table border="0" width="660"><tr><td><b>Fecha Garant&iacute;a:</b></td><td><input type="text" id="garantia" name="garantia" readonly="1" />';
?>
<img src="calendar/img.gif" id="trigger2"
     style="cursor: pointer; border: 1px solid red;"
     title="Date selector"
     onmouseover="this.style.background='red';"
     onmouseout="this.style.background=''" />


</td>
<script type="text/javascript">
  Calendar.setup(
    {
      inputField  : "garantia",         // ID of the input field
      align          :    "Tl",
      singleClick    :    false,
      ifFormat    : "%Y/%m/%d %H:%M:%S",    // the date format
      button      : "trigger2"       // ID of the button
    }
  );
</script>
<?
echo '<td valign="top"><b>Factura</b></td><td valign="top"><SELECT NAME="imagename" size="1" onChange="display_image(this.form)">';
$link= mysql_connect("$nhost","$nuser","$npass");
mysql_select_db("$nbase", $link);
$result=mysql_query("select * from facturas");
echo '<option selected value="facturas/ninguna.gif" name="facturas/ninguna.gif">Ninguna</option>';
while ($row=mysql_fetch_array($result))
{
echo"<OPTION value=ver.php?id_fact=".$row["id_fact"]." name=".$row["id_fact"].">".$row["titulo_fact"]."</option>";
}
mysql_free_result($result);
echo '</SELECT>';
?>
<a href=javascript:depa('factura2.php?modulo=ingresar')> [ Agregar ]</a>
<?
echo '</td>';


echo '</tr><tr><td><b>Proveedor:</b></td><td><select name="departe" size="0"><option value="DELL" label="DELL" selected>DELL</option><option value="MICROSYS" label="MICROSYS">MICROSYS</option><option value="SEGA" label="SEGA">SEGA</option><option value="COMPUSERVICIOS CSCOM" label="COMPUSERVICIOS CSCOM">COMPUSERVICIOS CSCOM</option><option value="TELNET" label="TELNET">TELNET</option><option value="OTROS" label="OTROS">OTROS</option></select></td><td></td><td></td></tr></table>';

echo '<table border="0" width="660">
<tr>
<td valign="top"><b>Observaciones:</b></td>
<td>&nbsp;&nbsp;<textarea name="observaciones" rows="5" cols="65"></textarea></td>
</tr>';
}

if($equipo=="mouse"){
echo '<input type="hidden" name="har" value="mouse">';

	/* Control de Código auto-incrementable */
	$link= mysql_connect("$nhost","$nuser","$npass");
	mysql_select_db("$nbase", $link);
	$result=mysql_query("select * from control_codigo where mouse=mouse");
	while ($row=mysql_fetch_array($result))
	{
	echo '<input type="hidden" name="control" value="'.$row["mouse"].'">';
	}
	mysql_free_result($result);
	/* Fin de Código auto-incrementable */

echo '<tr>
<td><b>Marca:</b></td>
<td><select name="marca" size="0"><option value="DELL" label="marca" selected>DELL</option><option value="LOGITECH" label="marca">LOGITECH</option><option value="GENIUS" label="marca">GENIUS</option><option value="Otros" label="marca">Otros</option></select></td>
<td><b>Modelo:</b></td>
<td><input type="text" name="modelo"></td>
<td><font color="#CE272A"><b>*Serie:</b></font></td>
<td><input type="text" name="serie" required="1" regexp="/^\w*$/"></td></tr>
<tr><td><b>Puerto:</b></td>
<td><select name="puerto" size="0"><option value="USB" label="puerto" selected>USB</option><option value="PS/2" label="puerto">PS/2</option><option value="Serial" label="puerto">Serial</option></select></td>';

echo'<td><b>Ubicaci&oacute;n:</b></td>
<td><select name="ubicacion" size="0"><option value="Todo" label="todo" selected>Todo</option><option value="almacen" label="almacen">Almac&eacute;n</option><option value="reparaciones" label="reparaciones">Reparaciones</option><option value="Bajas" label="bajas">Bajas</option></select></td>';
echo '<td><b>Fecha de Instalaci&oacute;n:</b></td><td><input type="text" id="fecha_instalacion" name="fecha_instalacion" readonly="1" />';
?>

<img src="calendar/img.gif" id="trigger6"
     style="cursor: pointer; border: 1px solid red;"
     title="Date selector"
     onmouseover="this.style.background='red';"
     onmouseout="this.style.background=''" />

</td>
<script type="text/javascript">
  Calendar.setup(
    {
      inputField  : "fecha_instalacion",         // ID of the input field
      align          :    "Tl",
      singleClick    :    false,
      ifFormat    : "%Y/%m/%d %H:%M:%S",    // the date format
      button      : "trigger6"       // ID of the button
    }
  );
</script>

<?
echo'</tr><tr><td><b>Service Tag:</b></td><td>Autom&aacute;tico<!--<input type="text" name="servicetag">--></td><td></td><td></td><td></td><td></td>';
echo'</tr>';

echo '<table border="0" width="660"><tr><td><b>Fecha Garant&iacute;a:</b></td><td><input type="text" id="garantia" name="garantia" readonly="1" />';
?>
<img src="calendar/img.gif" id="trigger2"
     style="cursor: pointer; border: 1px solid red;"
     title="Date selector"
     onmouseover="this.style.background='red';"
     onmouseout="this.style.background=''" />


</td>
<script type="text/javascript">
  Calendar.setup(
    {
      inputField  : "garantia",         // ID of the input field
      align          :    "Tl",
      singleClick    :    false,
      ifFormat    : "%Y/%m/%d %H:%M:%S",    // the date format
      button      : "trigger2"       // ID of the button
    }
  );
</script>
<?
echo '<td valign="top"><b>Factura</b></td><td valign="top"><SELECT NAME="imagename" size="1" onChange="display_image(this.form)">';
$link= mysql_connect("$nhost","$nuser","$npass");
mysql_select_db("$nbase", $link);
$result=mysql_query("select * from facturas");
echo '<option selected value="facturas/ninguna.gif" name="facturas/ninguna.gif">Ninguna</option>';
while ($row=mysql_fetch_array($result))
{
echo"<OPTION value=ver.php?id_fact=".$row["id_fact"]." name=".$row["id_fact"].">".$row["titulo_fact"]."</option>";
}
mysql_free_result($result);
echo '</SELECT>';
?>
<a href=javascript:depa('factura2.php?modulo=ingresar')> [ Agregar ]</a>
<?
echo '</td>';

echo '</tr><tr><td><b>Proveedor:</b></td><td><select name="departe" size="0"><option value="DELL" label="DELL" selected>DELL</option><option value="MICROSYS" label="MICROSYS">MICROSYS</option><option value="SEGA" label="SEGA">SEGA</option><option value="COMPUSERVICIOS CSCOM" label="COMPUSERVICIOS CSCOM">COMPUSERVICIOS CSCOM</option><option value="TELNET" label="TELNET">TELNET</option><option value="OTROS" label="OTROS">OTROS</option></select></td><td></td><td></td></tr></table>';



echo '<table border="0" width="660">
<tr>
<td valign="top"><b>Observaciones:</b></td>
<td>&nbsp;&nbsp;<textarea name="observaciones" rows="5" cols="65"></textarea></td>
</tr>';
}

if($equipo=="teclado"){
echo '<input type="hidden" name="har" value="teclado">';

	/* Control de Código auto-incrementable */
	$link= mysql_connect("$nhost","$nuser","$npass");
	mysql_select_db("$nbase", $link);
	$result=mysql_query("select * from control_codigo where teclado=teclado");
	while ($row=mysql_fetch_array($result))
	{
	echo '<input type="hidden" name="control" value="'.$row["teclado"].'">';
	}
	mysql_free_result($result);
	/* Fin de Código auto-incrementable */

echo '<tr>
<td><b>Marca:</b></td>
<td><select name="marca" size="0"><option value="DELL" label="marca">DELL</option><option value="Otros" label="marca">Otros</option></select></td>
<td><b>Modelo:</b></td>
<td><input type="text" name="modelo"></td>
<td><font color="#CE272A"><b>*Serie:</b></font></td>
<td><input type="text" name="serie" required="1" regexp="/^\w*$/"></td></tr>
<tr><td><b>Puerto:</b></td>
<td><select name="puerto" size="0"><option value="USB" label="puerto" selected>USB</option><option value="PS/2" label="puerto">PS/2</option><option value="Serial" label="puerto">Serial</option></select></td>';

echo'<td><b>Ubicaci&oacute;n:</b></td>
<td><select name="ubicacion" size="0"><option value="Todo" label="todo" selected>Todo</option><option value="almacen" label="almacen">Almac&eacute;n</option><option value="reparaciones" label="reparaciones">Reparaciones</option><option value="Bajas" label="bajas">Bajas</option></select></td>';
echo '<td><b>Fecha de Instalaci&oacute;n:</b></td><td><input type="text" id="fecha_instalacion" name="fecha_instalacion" readonly="1" />';
?>

<img src="calendar/img.gif" id="trigger7"
     style="cursor: pointer; border: 1px solid red;"
     title="Date selector"
     onmouseover="this.style.background='red';"
     onmouseout="this.style.background=''" />

</td>
<script type="text/javascript">
  Calendar.setup(
    {
      inputField  : "fecha_instalacion",         // ID of the input field
      align          :    "Tl",
      singleClick    :    false,
      ifFormat    : "%Y/%m/%d %H:%M:%S",    // the date format
      button      : "trigger7"       // ID of the button
    }
  );
</script>

<?
echo'</tr><tr><td><b>Service Tag:</b></td><td>Autom&aacute;tico<!--<input type="text" name="servicetag">--></td><td></td><td></td><td></td><td></td>';
echo'</tr>';

echo '<table border="0" width="660"><tr><td><b>Fecha Garant&iacute;a:</b></td><td><input type="text" id="garantia" name="garantia" readonly="1" />';
?>
<img src="calendar/img.gif" id="trigger2"
     style="cursor: pointer; border: 1px solid red;"
     title="Date selector"
     onmouseover="this.style.background='red';"
     onmouseout="this.style.background=''" />


</td>
<script type="text/javascript">
  Calendar.setup(
    {
      inputField  : "garantia",         // ID of the input field
      align          :    "Tl",
      singleClick    :    false,
      ifFormat    : "%Y/%m/%d %H:%M:%S",    // the date format
      button      : "trigger2"       // ID of the button
    }
  );
</script>
<?
echo '<td valign="top"><b>Factura</b></td><td valign="top"><SELECT NAME="imagename" size="1" onChange="display_image(this.form)">';
$link= mysql_connect("$nhost","$nuser","$npass");
mysql_select_db("$nbase", $link);
$result=mysql_query("select * from facturas");
echo '<option selected value="facturas/ninguna.gif" name="facturas/ninguna.gif">Ninguna</option>';
while ($row=mysql_fetch_array($result))
{
echo"<OPTION value=ver.php?id_fact=".$row["id_fact"]." name=".$row["id_fact"].">".$row["titulo_fact"]."</option>";
}
mysql_free_result($result);
echo '</SELECT>';
?>
<a href=javascript:depa('factura2.php?modulo=ingresar')> [ Agregar ]</a>
<?
echo '</td>';

echo '</tr><tr><td><b>Proveedor:</b></td><td><select name="departe" size="0"><option value="DELL" label="DELL" selected>DELL</option><option value="MICROSYS" label="MICROSYS">MICROSYS</option><option value="SEGA" label="SEGA">SEGA</option><option value="COMPUSERVICIOS CSCOM" label="COMPUSERVICIOS CSCOM">COMPUSERVICIOS CSCOM</option><option value="TELNET" label="TELNET">TELNET</option><option value="OTROS" label="OTROS">OTROS</option></select></td><td></td><td></td></tr></table>';



echo '<table border="0" width="660">
<tr>
<td valign="top"><b>Observaciones:</b></td>
<td>&nbsp;&nbsp;<textarea name="observaciones" rows="5" cols="65"></textarea></td>
</tr>';
}

if($equipo=="dispositivo"){
echo '<input type="hidden" name="har" value="dispositivo">';

	/* Control de Código auto-incrementable */
	$link= mysql_connect("$nhost","$nuser","$npass");
	mysql_select_db("$nbase", $link);
	$result=mysql_query("select * from control_codigo where dispositivo=dispositivo");
	while ($row=mysql_fetch_array($result))
	{
	echo '<input type="hidden" name="control" value="'.$row["dispositivo"].'">';
	}
	mysql_free_result($result);
	/* Fin de Código auto-incrementable */

echo '<tr>
<td><b>Marca:</b></td>
<td><select name="marca" size="0"><option value="ZIP" label="marca" selected>ZIP</option><option value="YAZ" label="marca">YAZ</option><option value="Otros" label="marca">Otros</option></select></td>
<td><b>Modelo:</b></td>
<td><input type="text" name="modelo"></td>
<td><font color="#CE272A"><b>*Serie:</b></font></td>
<td><input type="text" name="serie" required="1" regexp="/^\w*$/"></td>
</tr>';

echo'<tr>
<td><b>Ubicaci&oacute;n:</b></td>
<td><select name="ubicacion" size="0"><option value="Todo" label="todo" selected>Todo</option><option value="almacen" label="almacen">Almac&eacute;n</option><option value="reparaciones" label="reparaciones">Reparaciones</option><option value="Bajas" label="bajas">Bajas</option></select></td>';
echo '<td><b>Fecha de Instalaci&oacute;n:</b></td><td><input type="text" id="fecha_instalacion" name="fecha_instalacion" readonly="1" />';

?>
<img src="calendar/img.gif" id="trigger8"
     style="cursor: pointer; border: 1px solid red;"
     title="Date selector"
     onmouseover="this.style.background='red';"
     onmouseout="this.style.background=''" />

</td>
<script type="text/javascript">
  Calendar.setup(
    {
      inputField  : "fecha_instalacion",         // ID of the input field
      align          :    "Tl",
      singleClick    :    false,
      ifFormat    : "%Y/%m/%d %H:%M:%S",    // the date format
      button      : "trigger8"       // ID of the button
    }
  );
</script>
<?

echo'<td><b>Service Tag:</b></td><td>Autom&aacute;tico<!--<input type="text" name="servicetag">--></td>';
echo'</tr>';

echo '<table border="0" width="660"><tr><td><b>Fecha Garant&iacute;a:</b></td><td><input type="text" id="garantia" name="garantia" readonly="1" />';
?>
<img src="calendar/img.gif" id="trigger2"
     style="cursor: pointer; border: 1px solid red;"
     title="Date selector"
     onmouseover="this.style.background='red';"
     onmouseout="this.style.background=''" />


</td>
<script type="text/javascript">
  Calendar.setup(
    {
      inputField  : "garantia",         // ID of the input field
      align          :    "Tl",
      singleClick    :    false,
      ifFormat    : "%Y/%m/%d %H:%M:%S",    // the date format
      button      : "trigger2"       // ID of the button
    }
  );
</script>
<?
echo '<td valign="top"><b>Factura</b></td><td valign="top"><SELECT NAME="imagename" size="1" onChange="display_image(this.form)">';
$link= mysql_connect("$nhost","$nuser","$npass");
mysql_select_db("$nbase", $link);
$result=mysql_query("select * from facturas");
echo '<option selected value="facturas/ninguna.gif" name="facturas/ninguna.gif">Ninguna</option>';
while ($row=mysql_fetch_array($result))
{
echo"<OPTION value=ver.php?id_fact=".$row["id_fact"]." name=".$row["id_fact"].">".$row["titulo_fact"]."</option>";
}
mysql_free_result($result);
echo '</SELECT>';
?>
<a href=javascript:depa('factura2.php?modulo=ingresar')> [ Agregar ]</a>
<?
echo '</td>';

echo '</tr><tr><td><b>Proveedor:</b></td><td><select name="departe" size="0"><option value="DELL" label="DELL" selected>DELL</option><option value="MICROSYS" label="MICROSYS">MICROSYS</option><option value="SEGA" label="SEGA">SEGA</option><option value="COMPUSERVICIOS CSCOM" label="COMPUSERVICIOS CSCOM">COMPUSERVICIOS CSCOM</option><option value="TELNET" label="TELNET">TELNET</option><option value="OTROS" label="OTROS">OTROS</option></select></td><td></td><td></td></tr></table>';



echo '<table border="0" width="660">
<tr>
<td valign="top"><b>Observaciones:</b></td>
<td>&nbsp;&nbsp;<textarea name="observaciones" rows="5" cols="65"></textarea></td>
</tr>';
}

if($equipo=="otros"){
echo '<input type="hidden" name="har" value="otros">';

	/* Control de Código auto-incrementable */
	$link= mysql_connect("$nhost","$nuser","$npass");
	mysql_select_db("$nbase", $link);
	$result=mysql_query("select * from control_codigo where otros=otros");
	while ($row=mysql_fetch_array($result))
	{
	echo '<input type="hidden" name="control" value="'.$row["otros"].'">';
	}
	mysql_free_result($result);
	/* Fin de Código auto-incrementable */

echo '<tr>
<td><b>Marca:</b></td>
<td><input type="text" name="marca"></td>
<td><b>Modelo:</b></td>
<td><input type="text" name="modelo"></td>
<td><font color="#CE272A"><b>*Serie:</b></font></td>
<td><input type="text" name="serie" required="1" regexp="/^\w*$/"></td>
</tr>';

echo'<tr>
<td><b>Ubicaci&oacute;n:</b></td>
<td><select name="ubicacion" size="0"><option value="Todo" label="todo" selected>Todo</option><option value="almacen" label="almacen">Almac&eacute;n</option><option value="reparaciones" label="reparaciones">Reparaciones</option><option value="Bajas" label="bajas">Bajas</option></select></td>';
echo '<td><b>Fecha de Instalaci&oacute;n:</b></td><td><input type="text" id="fecha_instalacion" name="fecha_instalacion" readonly="1" />';

?>
<img src="calendar/img.gif" id="trigger9"
     style="cursor: pointer; border: 1px solid red;"
     title="Date selector"
     onmouseover="this.style.background='red';"
     onmouseout="this.style.background=''" />

</td>
<script type="text/javascript">
  Calendar.setup(
    {
      inputField  : "fecha_instalacion",         // ID of the input field
      align          :    "Tl",
      singleClick    :    false,
      ifFormat    : "%Y/%m/%d %H:%M:%S",    // the date format
      button      : "trigger9"       // ID of the button
    }
  );
</script>
<?

echo'<td><b>Service Tag:</b></td><td>Autom&aacute;tico<!--<input type="text" name="servicetag">--></td>';
echo'</tr>';

echo '<table border="0" width="660"><tr><td><b>Fecha Garant&iacute;a:</b></td><td><input type="text" id="garantia" name="garantia" readonly="1" />';
?>
<img src="calendar/img.gif" id="trigger2"
     style="cursor: pointer; border: 1px solid red;"
     title="Date selector"
     onmouseover="this.style.background='red';"
     onmouseout="this.style.background=''" />


</td>
<script type="text/javascript">
  Calendar.setup(
    {
      inputField  : "garantia",         // ID of the input field
      align          :    "Tl",
      singleClick    :    false,
      ifFormat    : "%Y/%m/%d %H:%M:%S",    // the date format
      button      : "trigger2"       // ID of the button
    }
  );
</script>
<?
echo '<td valign="top"><b>Factura</b></td><td valign="top"><SELECT NAME="imagename" size="1" onChange="display_image(this.form)">';
$link= mysql_connect("$nhost","$nuser","$npass");
mysql_select_db("$nbase", $link);
$result=mysql_query("select * from facturas");
echo '<option selected value="facturas/ninguna.gif" name="facturas/ninguna.gif">Ninguna</option>';
while ($row=mysql_fetch_array($result))
{
echo"<OPTION value=ver.php?id_fact=".$row["id_fact"]." name=".$row["id_fact"].">".$row["titulo_fact"]."</option>";
}
mysql_free_result($result);
echo '</SELECT>';
?>
<a href=javascript:depa('factura2.php?modulo=ingresar')> [ Agregar ]</a>
<?
echo '</td>';

echo '</tr><tr><td><b>Proveedor:</b></td><td><select name="departe" size="0"><option value="DELL" label="DELL" selected>DELL</option><option value="MICROSYS" label="MICROSYS">MICROSYS</option><option value="SEGA" label="SEGA">SEGA</option><option value="COMPUSERVICIOS CSCOM" label="COMPUSERVICIOS CSCOM">COMPUSERVICIOS CSCOM</option><option value="TELNET" label="TELNET">TELNET</option><option value="OTROS" label="OTROS">OTROS</option></select></td><td></td><td></td></tr></table>';

echo '<table border="0" width="660">
<tr>
<td valign="top"><b>Observaciones:</b></td>
<td>&nbsp;&nbsp;<textarea name="observaciones" rows="5" cols="65"></textarea></td>
</tr>';
}

echo '</table><br><br>';
echo '<input type="submit" name="ingresar2" value="Ingresar">';
echo '<input type="reset" value="Limpar formulario">';
echo '</form>';
}
// Fin modulo de ingreso de equipo.


// Modulo para editar (ingresar actualizaciones)
if($modulo=="editar2"){
echo'<meta http-equiv="refresh" content="1;URL=equipo.php?modulo=ficha&categoria='.$har.'&id='.$id.'&servicetag='.$servicetag.'">';
	echo '<table border="0" width="660"><tr><td>';
	/* Actualizar dispositivo */
	if($har=="dispositivo"){
	$link=mysql_connect("$nhost","$nuser","$npass");
	mysql_select_db("$nbase", $link);
	mysql_query("Update equipo Set cod_cod=cod_cod,tipo='$ubicacion',nombre=nombre,usuario=usuario,equipo=equipo,no_procesador=no_procesador,procesador=procesador,mhz=mhz,fabricante='$marca',familia=familia,ram=ram,fabricante_equipo=fabricante_equipo,modelo='$modelo',SO=SO,pro_escritorio=pro_escritorio,fecha_ingreso=fecha_ingreso,fecha_instalacion='$fecha_instalacion',no_serie=no_serie,no_paralelo=no_paralelo,version_bios=version_bios,fecha_bios=fecha_bios,servicetag='$servicetag',observaciones='$observaciones',puerto=puerto,alimentador=alimentador,serie='$serie',categoria='$har',fecha_garantia='$garantia',factura='$imagename',asignacion='$asignacion',departe='$departe' where id='$id'",$link);
	echo 'Actualizando datos del Dispositivo...';
	}

  /* Actualizar teclado */
	if($har=="teclado"){
	$link=mysql_connect("$nhost","$nuser","$npass");
	mysql_select_db("$nbase", $link);
	mysql_query("Update equipo Set cod_cod=cod_cod,tipo='$ubicacion',nombre=nombre,usuario=usuario,equipo=equipo,no_procesador=no_procesador,procesador=procesador,mhz=mhz,fabricante='$marca',familia=familia,ram=ram,fabricante_equipo=fabricante_equipo,modelo='$modelo',SO=SO,pro_escritorio=pro_escritorio,fecha_ingreso=fecha_ingreso,fecha_instalacion='$fecha_instalacion',no_serie=no_serie,no_paralelo=no_paralelo,version_bios=version_bios,fecha_bios=fecha_bios,servicetag='$servicetag',observaciones='$observaciones',puerto='$puerto',alimentador=alimentador,serie='$serie',categoria='$har',fecha_garantia='$garantia',factura='$imagename',asignacion='$asignacion',departe='$departe' where id='$id'",$link);
	echo 'Actualizando datos del Teclado...';
	}
	
	/* Actualizar Mouse */
	if($har=="mouse"){
	$link=mysql_connect("$nhost","$nuser","$npass");
	mysql_select_db("$nbase", $link);
	mysql_query("Update equipo Set cod_cod=cod_cod,tipo='$ubicacion',nombre=nombre,usuario=usuario,equipo=equipo,no_procesador=no_procesador,procesador=procesador,mhz=mhz,fabricante='$marca',familia=familia,ram=ram,fabricante_equipo=fabricante_equipo,modelo='$modelo',SO=SO,pro_escritorio=pro_escritorio,fecha_ingreso=fecha_ingreso,fecha_instalacion='$fecha_instalacion',no_serie=no_serie,no_paralelo=no_paralelo,version_bios=version_bios,fecha_bios=fecha_bios,servicetag='$servicetag',observaciones='$observaciones',puerto='$puerto',alimentador=alimentador,serie='$serie',categoria='$har',fecha_garantia='$garantia',factura='$imagename',asignacion='$asignacion',departe='$departe' where id='$id'",$link);
	echo 'Actualizando datos del Mouse...';
	}
	
	/* Actualizar Otros */
	if($har=="otros"){
	$link=mysql_connect("$nhost","$nuser","$npass");
	mysql_select_db("$nbase", $link);
	mysql_query("Update equipo Set cod_cod=cod_cod,tipo='$ubicacion',nombre=nombre,usuario=usuario,equipo=equipo,no_procesador=no_procesador,procesador=procesador,mhz=mhz,fabricante='$marca',familia=familia,ram=ram,fabricante_equipo=fabricante_equipo,modelo='$modelo',SO=SO,pro_escritorio=pro_escritorio,fecha_ingreso=fecha_ingreso,fecha_instalacion='$fecha_instalacion',no_serie=no_serie,no_paralelo=no_paralelo,version_bios=version_bios,fecha_bios=fecha_bios,servicetag='$servicetag',observaciones='$observaciones',puerto=puerto,alimentador=alimentador,serie='$serie',categoria='$har',fecha_garantia='$garantia',factura='$imagename',asignacion='$asignacion',departe='$departe' where id='$id'",$link);
	echo 'Actualizando datos del Otros...';
	}
	
	/* Actualizar UPS */
	if($har=="ups"){
	$link=mysql_connect("$nhost","$nuser","$npass");
	mysql_select_db("$nbase", $link);
	mysql_query("Update equipo Set cod_cod=cod_cod,tipo='$ubicacion',nombre=nombre,usuario=usuario,equipo=equipo,no_procesador=no_procesador,procesador=procesador,mhz=mhz,fabricante='$marca',familia=familia,ram=ram,fabricante_equipo=fabricante_equipo,modelo='$modelo',SO=SO,pro_escritorio=pro_escritorio,fecha_ingreso=fecha_ingreso,fecha_instalacion='$fecha_instalacion',no_serie=no_serie,no_paralelo=no_paralelo,version_bios=version_bios,fecha_bios=fecha_bios,servicetag='$servicetag',observaciones='$observaciones',puerto=puerto,alimentador=alimentador,serie='$serie',categoria='$har',fecha_garantia='$garantia',factura='$imagename',asignacion='$asignacion',departe='$departe' where id='$id'",$link);
	echo 'Actualizando datos del UPS...';
	}

	/* Actualizar Impresora */
	if($har=="impresora"){
	$link=mysql_connect("$nhost","$nuser","$npass");
	mysql_select_db("$nbase", $link);
	mysql_query("Update equipo Set cod_cod=cod_cod,tipo='$ubicacion',nombre=nombre,usuario=usuario,equipo=equipo,no_procesador=no_procesador,procesador=procesador,mhz=mhz,fabricante='$marca',familia=familia,ram=ram,fabricante_equipo=fabricante_equipo,modelo='$modelo',SO=SO,pro_escritorio=pro_escritorio,fecha_ingreso=fecha_ingreso,fecha_instalacion='$fecha_instalacion',no_serie=no_serie,no_paralelo=no_paralelo,version_bios=version_bios,fecha_bios=fecha_bios,servicetag='$servicetag',observaciones='$observaciones',puerto=puerto,alimentador='$alimentador',serie='$serie',categoria='$har',fecha_garantia='$garantia',factura='$imagename',asignacion='$asignacion',departe='$departe' where id='$id'",$link);
	echo 'Actualizando datos del Impresora...';
	}
	
	/* Actualizar Monitor */
	if($har=="monitor"){
	$link=mysql_connect("$nhost","$nuser","$npass");
	mysql_select_db("$nbase", $link);
	mysql_query("Update equipo Set cod_cod=cod_cod,tipo='$ubicacion',nombre=nombre,usuario=usuario,equipo=equipo,no_procesador=no_procesador,procesador=procesador,mhz=mhz,fabricante='$marca',familia=familia,ram=ram,fabricante_equipo=fabricante_equipo,modelo='$modelo',SO=SO,pro_escritorio=pro_escritorio,fecha_ingreso=fecha_ingreso,fecha_instalacion='$fecha_instalacion',no_serie=no_serie,no_paralelo=no_paralelo,version_bios=version_bios,fecha_bios=fecha_bios,servicetag='$servicetag',observaciones='$observaciones',puerto=puerto,alimentador=alimentador,serie='$serie',categoria='$har',fecha_garantia='$garantia',factura='$imagename',asignacion='$asignacion',departe='$departe' where id='$id'",$link);
	echo 'Actualizando datos del Monitor...';
	}
	
	/* Actualizar CPU */
	if($har=="cpu"){
	$link=mysql_connect("$nhost","$nuser","$npass");
	mysql_select_db("$nbase", $link);
	mysql_query("Update equipo Set cod_cod=cod_cod,tipo='$ubicacion',nombre='$nombre',usuario='$usuario',equipo='$equipo',no_procesador='$no_procesador',procesador='$procesador',mhz='$mhz',fabricante='$marca',familia='$familia',ram='$ram',fabricante_equipo='$fabricante_equipo',modelo='$modelo',SO='$SO',pro_escritorio='$pro_escritorio',fecha_ingreso=fecha_ingreso,fecha_instalacion='$fecha_instalacion',no_serie='$no_serie',no_paralelo='$no_paralelo',version_bios='$version_bios',fecha_bios='$fecha_bios',servicetag='$servicetag',observaciones='$observaciones',puerto=puerto,alimentador=alimentador,serie='$servicetag',categoria='$har',fecha_garantia='$garantia',factura='$imagename',asignacion='$asignacion',departe='$departe' where id='$id'",$link);
	echo 'Actualizando datos del CPU...';
	}
echo '</td></tr></table>';
}





// Modulo para editar ficha de equipo
if($modulo=="editar"){
	$link= mysql_connect("$nhost","$nuser","$npass");
	mysql_select_db("$nbase", $link);
	echo 'Categoria: <font color="#4180be"><b><u>'.$categoria.'</u></b></font><br>';
	echo 'Identificador: <font color="#4180be"><b><u>'.$cod_cod.'</u></b></font><br>';
	echo 'Edici&oacute;n de Ficha: <font color="#4180be"><b><u>'.$servicetag.'</u></b></font><br><br>';
	$result=mysql_query("select * from equipo where id='$id'");
	while ($row=mysql_fetch_array($result))
	{
	echo '<form name="testform" action="equipo.php?modulo=editar2" method="post" onSubmit="return validateStandard(this);">';

	echo  '<table width="660" border="0"><tr><td><b>Departamento asignado:</b></td>';
echo '<td>';

echo '<select name="asignacion" size="0">';
$asignacion=$row["asignacion"];
$result3=mysql_query("select * from facultad where id_facultad='$asignacion'", $link);
while ($row3=mysql_fetch_array($result3))
{
echo '<option value="'.$row3["id_facultad"].'" selected>'.$row3["nombre_facultad"].'</option>';
}
mysql_free_result($result3);
echo '<option>----------------------</option>';
 
$result2=mysql_query("select * from facultad", $link);
while ($row2=mysql_fetch_array($result2))
{
echo '<option value="'.$row2["id_facultad"].'">'.$row2["nombre_facultad"].'</option>';
}
mysql_free_result($result2);
echo '</select>';
?>
<a href=javascript:depa('depa.php?modulo=ingresar')> [ Agregar ]</a>
<? 
echo '</td>';
echo '</tr></table>';


echo '<table border="0" width="660">';
echo '<tr>';

	/* Dispositivo (Edición)*/
	if($categoria=="dispositivo"){
echo '<input type="hidden" name="har" value="dispositivo">';
echo '<input type="hidden" name="id" value="'.$row["id"].'">';

echo '<td><b>Marca:</b></td>
<td><select name="marca" size="0"><option value="'.$row["fabricante"].'" label="marca" selected>'.$row["fabricante"].'</option><option>---------------</option><option value="ZIP" label="marca">ZIP</option><option value="YAZ" label="marca">YAZ</option><option value="Otros" label="marca">Otros</option></select></td>
<td><b>Modelo:</b></td>
<td><input type="text" value="'.$row["modelo"].'" name="modelo"></td>
<td><b>Serie:</b></td>
<td><input type="text" value="'.$row["serie"].'" name="serie" required="1" regexp="/^\w*$/"></td>
</tr>';

echo'<tr>
<td><b>Ubicaci&oacute;n:</b></td>
<td><select name="ubicacion" size="0"><option value="'.$row["tipo"].'" label="todo" selected>'.$row["tipo"].'</option><option>------------</option><option value="Todo" label="todo">Todo</option><option value="almacen" label="almacen">Almac&eacute;n</option><option value="reparaciones" label="reparaciones">Reparaciones</option><option value="Bajas" label="bajas">Bajas</option></select></td>';
echo '<td><b>Fecha de Instalaci&oacute;n:</b></td><td><input type="text" id="fecha_instalacion" value="'.$row["fecha_instalacion"].'" name="fecha_instalacion" readonly="1" />';

?>
<img src="calendar/img.gif" id="trigger8"
     style="cursor: pointer; border: 1px solid red;"
     title="Date selector"
     onmouseover="this.style.background='red';"
     onmouseout="this.style.background=''" />

</td>
<script type="text/javascript">
  Calendar.setup(
    {
      inputField  : "fecha_instalacion",         // ID of the input field
      align          :    "Tl",
      singleClick    :    false,
      ifFormat    : "%Y/%m/%d %H:%M:%S",    // the date format
      button      : "trigger8"       // ID of the button
    }
  );
</script>
<?

echo'<td><!--<b>Service Tag:</b>--></td><td><input type="hidden" value="'.$row["servicetag"].'" name="servicetag"></td>';
echo'</tr>';
echo '<table border="0" width="660"><tr><td><b>Fecha Garant&iacute;a:</b></td><td><input type="text" value="'.$row["fecha_garantia"].'" id="garantia" name="garantia" readonly="1" />';
?>
<img src="calendar/img.gif" id="trigger2"
     style="cursor: pointer; border: 1px solid red;"
     title="Date selector"
     onmouseover="this.style.background='red';"
     onmouseout="this.style.background=''" />


</td>
<script type="text/javascript">
  Calendar.setup(
    {
      inputField  : "garantia",         // ID of the input field
      align          :    "Tl",
      singleClick    :    false,
      ifFormat    : "%Y/%m/%d %H:%M:%S",    // the date format
      button      : "trigger2"       // ID of the button
    }
  );
</script>
<?
echo '<td valign="top"><b>Factura</b></td><td valign="top"><SELECT NAME="imagename" size="1" onChange="display_image(this.form)">';
$link2= mysql_connect("$nhost","$nuser","$npass");
mysql_select_db("$nbase", $link2);
$result2=mysql_query("select * from facturas");
echo '<option selected value="'.$row["factura"].'" name="'.$row["factura"].'">----Default-----</option>';
while ($row2=mysql_fetch_array($result2))
{
echo"<OPTION value=ver.php?id_fact=".$row2["id_fact"]." name=".$row2["id_fact"].">".$row2["titulo_fact"]."</option>";
}
mysql_free_result($result2);
echo '</SELECT>';
?>
<a href=javascript:depa('factura2.php?modulo=ingresar')> [ Agregar ]</a>
<?
echo '</td>';


echo '</tr><tr><td><b>Proveedor:</b></td><td><select name="departe" size="0"><option value="'.$row["departe"].'" label="'.$row["departe"].'" selected>'.$row["departe"].'</option><option>---------</option><option value="DELL" label="DELL">DELL</option><option value="MICROSYS" label="MICROSYS">MICROSYS</option><option value="SEGA" label="SEGA">SEGA</option><option value="COMPUSERVICIOS CSCOM" label="COMPUSERVICIOS CSCOM">COMPUSERVICIOS CSCOM</option><option value="TELNET" label="TELNET">TELNET</option><option value="OTROS" label="OTROS">OTROS</option></select></td><td></td><td></td></tr></table>';
echo '<table border="0" width="660">
<tr>
<td valign="top"><b>Observaciones:</b></td>
<td>&nbsp;&nbsp;<textarea name="observaciones" rows="5" cols="65">'.$row["observaciones"].'</textarea></td>
</tr>';
}

	
	/* Teclado (Edición)*/
	if($categoria=="teclado"){
echo '<input type="hidden" name="har" value="teclado">';
echo '<input type="hidden" name="id" value="'.$row["id"].'">';
echo '<tr>
<td><b>Marca:</b></td>
<td><select name="marca" size="0"><option value="'.$row["fabricante"].'" label="marca" selected>'.$row["fabricante"].'</option><option>-----------</option><option value="DELL" label="marca">DELL</option><option value="Otros" label="marca">Otros</option></select></td>
<td><b>Modelo:</b></td>
<td><input type="text" value="'.$row["modelo"].'" name="modelo"></td>
<td><b>Serie:</b></td>
<td><input type="text" value="'.$row["serie"].'" name="serie" required="1" regexp="/^\w*$/"></td></tr>
<tr><td><b>Puerto:</b></td>
<td><select name="puerto" size="0"><option value="'.$row["puerto"].'" label="puerto" selected>'.$row["puerto"].'</option><option value="USB" label="puerto">USB</option><option value="PS/2" label="puerto">PS/2</option><option value="Serial" label="puerto">Serial</option></select></td>';

echo'<td><b>Ubicaci&oacute;n:</b></td>
<td><select name="ubicacion" size="0"><option value="'.$row["tipo"].'" label="todo" selected>'.$row["tipo"].'</option><option>-------------</option><option value="Todo" label="todo">Todo</option><option value="almacen" label="almacen">Almac&eacute;n</option><option value="reparaciones" label="reparaciones">Reparaciones</option><option value="Bajas" label="bajas">Bajas</option></select></td>';
echo '<td><b>Fecha de Instalaci&oacute;n:</b></td><td><input type="text" id="fecha_instalacion" value="'.$row["fecha_instalacion"].'" name="fecha_instalacion" readonly="1" />';
?>

<img src="calendar/img.gif" id="trigger7"
     style="cursor: pointer; border: 1px solid red;"
     title="Date selector"
     onmouseover="this.style.background='red';"
     onmouseout="this.style.background=''" />

</td>
<script type="text/javascript">
  Calendar.setup(
    {
      inputField  : "fecha_instalacion",         // ID of the input field
      align          :    "Tl",
      singleClick    :    false,
      ifFormat    : "%Y/%m/%d %H:%M:%S",    // the date format
      button      : "trigger7"       // ID of the button
    }
  );
</script>

<?
echo'</tr><tr><td><!--<b>Service Tag:</b>--></td><td><input type="hidden" value="'.$row["servicetag"].'" name="servicetag"></td><td></td><td></td><td></td><td></td>';
echo'</tr>';
echo '<table border="0" width="660"><tr><td><b>Fecha Garant&iacute;a:</b></td><td><input type="text" value="'.$row["fecha_garantia"].'" id="garantia" name="garantia" readonly="1" />';
?>
<img src="calendar/img.gif" id="trigger2"
     style="cursor: pointer; border: 1px solid red;"
     title="Date selector"
     onmouseover="this.style.background='red';"
     onmouseout="this.style.background=''" />


</td>
<script type="text/javascript">
  Calendar.setup(
    {
      inputField  : "garantia",         // ID of the input field
      align          :    "Tl",
      singleClick    :    false,
      ifFormat    : "%Y/%m/%d %H:%M:%S",    // the date format
      button      : "trigger2"       // ID of the button
    }
  );
</script>
<?
echo '<td valign="top"><b>Factura</b></td><td valign="top"><SELECT NAME="imagename" size="1" onChange="display_image(this.form)">';
$link2= mysql_connect("$nhost","$nuser","$npass");
mysql_select_db("$nbase", $link2);
$result2=mysql_query("select * from facturas");
echo '<option selected value="'.$row["factura"].'" name="'.$row["factura"].'">----Default-----</option>';
while ($row2=mysql_fetch_array($result2))
{
echo"<OPTION value=ver.php?id_fact=".$row2["id_fact"]." name=".$row2["id_fact"].">".$row2["titulo_fact"]."</option>";
}
mysql_free_result($result2);
echo '</SELECT>';
?>
<a href=javascript:depa('factura2.php?modulo=ingresar')> [ Agregar ]</a>
<?
echo '</td>';

echo '</tr><tr><td><b>Proveedor:</b></td><td><select name="departe" size="0"><option value="'.$row["departe"].'" label="'.$row["departe"].'" selected>'.$row["departe"].'</option><option>---------</option><option value="DELL" label="DELL">DELL</option><option value="MICROSYS" label="MICROSYS">MICROSYS</option><option value="SEGA" label="SEGA">SEGA</option><option value="COMPUSERVICIOS CSCOM" label="COMPUSERVICIOS CSCOM">COMPUSERVICIOS CSCOM</option><option value="TELNET" label="TELNET">TELNET</option><option value="OTROS" label="OTROS">OTROS</option></select></td><td></td><td></td></tr></table>';
echo '<table border="0" width="660">
<tr>
<td valign="top"><b>Observaciones:</b></td>
<td>&nbsp;&nbsp;<textarea name="observaciones" rows="5" cols="65">'.$row["observaciones"].'</textarea></td>
</tr>';
}

	
	/* Mouse (Edición)*/
	if($categoria=="mouse"){
echo '<input type="hidden" name="har" value="mouse">';
echo '<input type="hidden" name="id" value="'.$row["id"].'">';
echo '<tr>
<td><b>Marca:</b></td>
<td><select name="marca" size="0"><option value="'.$row["fabricante"].'" label="marca" selected>'.$row["fabricante"].'</option><option>---------</option><option value="DELL" label="marca">DELL</option><option value="LOGITECH" label="marca">LOGITECH</option><option value="GENIUS" label="marca">GENIUS</option><option value="Otros" label="marca">Otros</option></select></td>
<td><b>Modelo:</b></td>
<td><input type="text" value="'.$row["modelo"].'" name="modelo"></td>
<td><b>Serie:</b></td>
<td><input type="text" value="'.$row["serie"].'" name="serie" required="1" regexp="/^\w*$/"></td></tr>
<tr><td><b>Puerto:</b></td>
<td><select name="puerto" size="0"><option value="'.$row["puerto"].'" label="puerto" selected>'.$row["puerto"].'</option><option>------------</option><option value="USB" label="puerto">USB</option><option value="PS/2" label="puerto">PS/2</option><option value="Serial" label="puerto">Serial</option></select></td>';

echo'<td><b>Ubicaci&oacute;n:</b></td>
<td><select name="ubicacion" size="0"><option value="'.$row["tipo"].'" label="todo" selected>'.$row["tipo"].'</option><option>-----------</option><option value="Todo" label="todo">Todo</option><option value="almacen" label="almacen">Almac&eacute;n</option><option value="reparaciones" label="reparaciones">Reparaciones</option><option value="Bajas" label="bajas">Bajas</option></select></td>';
echo '<td><b>Fecha de Instalaci&oacute;n:</b></td><td><input type="text" id="fecha_instalacion" value="'.$row["fecha_instalacion"].'" name="fecha_instalacion" readonly="1" />';
?>

<img src="calendar/img.gif" id="trigger6"
     style="cursor: pointer; border: 1px solid red;"
     title="Date selector"
     onmouseover="this.style.background='red';"
     onmouseout="this.style.background=''" />

</td>
<script type="text/javascript">
  Calendar.setup(
    {
      inputField  : "fecha_instalacion",         // ID of the input field
      align          :    "Tl",
      singleClick    :    false,
      ifFormat    : "%Y/%m/%d %H:%M:%S",    // the date format
      button      : "trigger6"       // ID of the button
    }
  );
</script>

<?
echo'</tr><tr><td><!--<b>Service Tag:</b>--></td><td><input type="hidden" value="'.$row["servicetag"].'" name="servicetag"></td><td></td><td></td><td></td><td></td>';
echo'</tr>';
echo '<table border="0" width="660"><tr><td><b>Fecha Garant&iacute;a:</b></td><td><input type="text" value="'.$row["fecha_garantia"].'" id="garantia" name="garantia" readonly="1" />';
?>
<img src="calendar/img.gif" id="trigger2"
     style="cursor: pointer; border: 1px solid red;"
     title="Date selector"
     onmouseover="this.style.background='red';"
     onmouseout="this.style.background=''" />


</td>
<script type="text/javascript">
  Calendar.setup(
    {
      inputField  : "garantia",         // ID of the input field
      align          :    "Tl",
      singleClick    :    false,
      ifFormat    : "%Y/%m/%d %H:%M:%S",    // the date format
      button      : "trigger2"       // ID of the button
    }
  );
</script>
<?
echo '<td valign="top"><b>Factura</b></td><td valign="top"><SELECT NAME="imagename" size="1" onChange="display_image(this.form)">';
$link2= mysql_connect("$nhost","$nuser","$npass");
mysql_select_db("$nbase", $link2);
$result2=mysql_query("select * from facturas");
echo '<option selected value="'.$row["factura"].'" name="'.$row["factura"].'">----Default-----</option>';
while ($row2=mysql_fetch_array($result2))
{
echo"<OPTION value=ver.php?id_fact=".$row2["id_fact"]." name=".$row2["id_fact"].">".$row2["titulo_fact"]."</option>";
}
mysql_free_result($result2);
echo '</SELECT>';
?>
<a href=javascript:depa('factura2.php?modulo=ingresar')> [ Agregar ]</a>
<?
echo '</td>';

echo '</tr><tr><td><b>Proveedor:</b></td><td><select name="departe" size="0"><option value="'.$row["departe"].'" label="'.$row["departe"].'" selected>'.$row["departe"].'</option><option>---------</option><option value="DELL" label="DELL">DELL</option><option value="MICROSYS" label="MICROSYS">MICROSYS</option><option value="SEGA" label="SEGA">SEGA</option><option value="COMPUSERVICIOS CSCOM" label="COMPUSERVICIOS CSCOM">COMPUSERVICIOS CSCOM</option><option value="TELNET" label="TELNET">TELNET</option><option value="OTROS" label="OTROS">OTROS</option></select></td><td></td><td></td></tr></table>';
echo '<table border="0" width="660">
<tr>
<td valign="top"><b>Observaciones:</b></td>
<td>&nbsp;&nbsp;<textarea name="observaciones" rows="5" cols="65">'.$row["observaciones"].'</textarea></td>
</tr>';
}

	
	/* Otros (Edición)*/
	if($categoria=="otros"){
	echo '<input type="hidden" name="har" value="otros">';
	echo '<input type="hidden" name="id" value="'.$row["id"].'">';
echo '<tr>
<td><b>Marca:</b></td>
<td><input type="text" value="'.$row["fabricante"].'" name="marca"></td>
<td><b>Modelo:</b></td>
<td><input type="text" value="'.$row["modelo"].'" name="modelo"></td>
<td><b>Serie:</b></td>
<td><input type="text" value="'.$row["serie"].'" name="serie" required="1" regexp="/^\w*$/"></td>
</tr>';

echo'<tr>
<td><b>Ubicaci&oacute;n:</b></td>
<td><select name="ubicacion" size="0"><option value="'.$row["tipo"].'" label="todo" selected>'.$row["tipo"].'</option><option>-----------</option><option value="Todo" label="todo">Todo</option><option value="almacen" label="almacen">Almac&eacute;n</option><option value="reparaciones" label="reparaciones">Reparaciones</option><option value="Bajas" label="bajas">Bajas</option></select></td>';
echo '<td><b>Fecha de Instalaci&oacute;n:</b></td><td><input type="text" id="fecha_instalacion" value="'.$row["fecha_instalacion"].'" name="fecha_instalacion" readonly="1" />';

?>
<img src="calendar/img.gif" id="trigger9"
     style="cursor: pointer; border: 1px solid red;"
     title="Date selector"
     onmouseover="this.style.background='red';"
     onmouseout="this.style.background=''" />

</td>
<script type="text/javascript">
  Calendar.setup(
    {
      inputField  : "fecha_instalacion",         // ID of the input field
      align          :    "Tl",
      singleClick    :    false,
      ifFormat    : "%Y/%m/%d %H:%M:%S",    // the date format
      button      : "trigger9"       // ID of the button
    }
  );
</script>
<?

echo'<td><!--<b>Service Tag:</b>--></td><td><input type="hidden" value="'.$row["servicetag"].'" name="servicetag"></td>';
echo'</tr>';
echo '<table border="0" width="660"><tr><td><b>Fecha Garant&iacute;a:</b></td><td><input type="text" value="'.$row["fecha_garantia"].'" id="garantia" name="garantia" readonly="1" />';
?>
<img src="calendar/img.gif" id="trigger2"
     style="cursor: pointer; border: 1px solid red;"
     title="Date selector"
     onmouseover="this.style.background='red';"
     onmouseout="this.style.background=''" />


</td>
<script type="text/javascript">
  Calendar.setup(
    {
      inputField  : "garantia",         // ID of the input field
      align          :    "Tl",
      singleClick    :    false,
      ifFormat    : "%Y/%m/%d %H:%M:%S",    // the date format
      button      : "trigger2"       // ID of the button
    }
  );
</script>
<?
echo '<td valign="top"><b>Factura</b></td><td valign="top"><SELECT NAME="imagename" size="1" onChange="display_image(this.form)">';
$link2= mysql_connect("$nhost","$nuser","$npass");
mysql_select_db("$nbase", $link2);
$result2=mysql_query("select * from facturas");
echo '<option selected value="'.$row["factura"].'" name="'.$row["factura"].'">----Default-----</option>';
while ($row2=mysql_fetch_array($result2))
{
echo"<OPTION value=ver.php?id_fact=".$row2["id_fact"]." name=".$row2["id_fact"].">".$row2["titulo_fact"]."</option>";
}
mysql_free_result($result2);
echo '</SELECT>';
?>
<a href=javascript:depa('factura2.php?modulo=ingresar')> [ Agregar ]</a>
<?
echo '</td>';

echo '</tr><tr><td><b>Proveedor:</b></td><td><select name="departe" size="0"><option value="'.$row["departe"].'" label="'.$row["departe"].'" selected>'.$row["departe"].'</option><option>---------</option><option value="DELL" label="DELL">DELL</option><option value="MICROSYS" label="MICROSYS">MICROSYS</option><option value="SEGA" label="SEGA">SEGA</option><option value="COMPUSERVICIOS CSCOM" label="COMPUSERVICIOS CSCOM">COMPUSERVICIOS CSCOM</option><option value="TELNET" label="TELNET">TELNET</option><option value="OTROS" label="OTROS">OTROS</option></select></td><td></td><td></td></tr></table>';
echo '<table border="0" width="660">
<tr>
<td valign="top"><b>Observaciones:</b></td>
<td>&nbsp;&nbsp;<textarea name="observaciones" rows="5" cols="65">'.$row["observaciones"].'</textarea></td>
</tr>';

	}
	
	/* UPS (Edición)*/
	if($categoria=="ups"){
	echo '<input type="hidden" name="har" value="ups">';
	echo '<input type="hidden" name="id" value="'.$row["id"].'">';
echo '<tr>
<td><b>Marca:</b></td>
<td><select name="marca" size="0"><option value="'.$row["fabricante"].'" label="marca" selected>'.$row["fabricante"].'</option><option>-----------</option><option value="Triple-Lite" label="marca">Triple-Lite</option><option value="APC" label="marca">APC</option><option value="CDP" label="marca">CDP</option><option value="SmartCentra" label="marca">SmartCentra</option><option value="Otros" label="marca">Otros</option></select></td>
<td><b>Modelo:</b></td>
<td><input type="text" value="'.$row["modelo"].'" name="modelo"></td>
<td><b>Serie:</b></td>
<td><input type="text" value="'.$row["serie"].'" name="serie" required="1" regexp="/^\w*$/"></td>
</tr>';

echo'<tr>
<td><b>Ubicaci&oacute;n:</b></td>
<td><select name="ubicacion" size="0"><option value="'.$row["tipo"].'" label="todo" selected>'.$row["tipo"].'</option><option>----------</option><option value="Todo" label="todo">Todo</option><option value="almacen" label="almacen">Almac&eacute;n</option><option value="reparaciones" label="reparaciones">Reparaciones</option><option value="Bajas" label="bajas">Bajas</option></select></td>';
echo '<td><b>Fecha de Instalaci&oacute;n:</b></td><td><input type="text" id="fecha_instalacion" value="'.$row["fecha_instalacion"].'" name="fecha_instalacion" readonly="1" />';

?>
<img src="calendar/img.gif" id="trigger5"
     style="cursor: pointer; border: 1px solid red;"
     title="Date selector"
     onmouseover="this.style.background='red';"
     onmouseout="this.style.background=''" />

</td>
<script type="text/javascript">
  Calendar.setup(
    {
      inputField  : "fecha_instalacion",         // ID of the input field
      align          :    "Tl",
      singleClick    :    false,
      ifFormat    : "%Y/%m/%d %H:%M:%S",    // the date format
      button      : "trigger5"       // ID of the button
    }
  );
</script>
<?

echo'<td><!--<b>Service Tag:</b>--></td><td><input type="hidden" value="'.$row["servicetag"].'" name="servicetag"></td>';
echo'</tr>';
echo '<table border="0" width="660"><tr><td><b>Fecha Garant&iacute;a:</b></td><td><input type="text" value="'.$row["fecha_garantia"].'" id="garantia" name="garantia" readonly="1" />';
?>
<img src="calendar/img.gif" id="trigger2"
     style="cursor: pointer; border: 1px solid red;"
     title="Date selector"
     onmouseover="this.style.background='red';"
     onmouseout="this.style.background=''" />


</td>
<script type="text/javascript">
  Calendar.setup(
    {
      inputField  : "garantia",         // ID of the input field
      align          :    "Tl",
      singleClick    :    false,
      ifFormat    : "%Y/%m/%d %H:%M:%S",    // the date format
      button      : "trigger2"       // ID of the button
    }
  );
</script>
<?
echo '<td valign="top"><b>Factura</b></td><td valign="top"><SELECT NAME="imagename" size="1" onChange="display_image(this.form)">';
$link2= mysql_connect("$nhost","$nuser","$npass");
mysql_select_db("$nbase", $link2);
$result2=mysql_query("select * from facturas");
echo '<option selected value="'.$row["factura"].'" name="'.$row["factura"].'">----Default-----</option>';
while ($row2=mysql_fetch_array($result2))
{
echo"<OPTION value=ver.php?id_fact=".$row2["id_fact"]." name=".$row2["id_fact"].">".$row2["titulo_fact"]."</option>";
}
mysql_free_result($result2);
echo '</SELECT>';
?>
<a href=javascript:depa('factura2.php?modulo=ingresar')> [ Agregar ]</a>
<?
echo '</td>';

echo '</tr><tr><td><b>Proveedor:</b></td><td><select name="departe" size="0"><option value="'.$row["departe"].'" label="'.$row["departe"].'" selected>'.$row["departe"].'</option><option>---------</option><option value="DELL" label="DELL">DELL</option><option value="MICROSYS" label="MICROSYS">MICROSYS</option><option value="SEGA" label="SEGA">SEGA</option><option value="COMPUSERVICIOS CSCOM" label="COMPUSERVICIOS CSCOM">COMPUSERVICIOS CSCOM</option><option value="TELNET" label="TELNET">TELNET</option><option value="OTROS" label="OTROS">OTROS</option></select></td><td></td><td></td></tr></table>';
echo '<table border="0" width="660">
<tr>
<td valign="top"><b>Observaciones:</b></td>
<td>&nbsp;&nbsp;<textarea name="observaciones" rows="5" cols="65">'.$row["observaciones"].'</textarea></td>
</tr>';

	}
	
	/* Impresora (Edición)*/
	if($categoria=="impresora"){
	echo '<input type="hidden" name="har" value="impresora">';
	echo '<input type="hidden" name="id" value="'.$row["id"].'">';
echo '<tr>
<td><b>Marca:</b></td>
<td><select name="marca" size="0"><option value="'.$row["fabricante"].'" label="marca" selected>'.$row["fabricante"].'</option><option>-----------</option><option value="HP" label="marca">HP</option><option value="Epson" label="marca">Epson</option><option value="Canon" label="marca">Canon</option><option value="Otros" label="marca">Otros</option></select></td>
<td><b>Modelo:</b></td>
<td><input type="text" value="'.$row["modelo"].'" name="modelo"></td>
<td><b>Serie:</b></td>
<td><input type="text" value="'.$row["serie"].'" name="serie" required="1" regexp="/^\w*$/"></td></tr>
<tr><td><b>Tipo:</b></td>
<td><select name="alimentador" size="0"><option value="'.$row["alimentador"].'" label="alimentador" selected>'.$row["alimentador"].'</option><option>-----------</option><option value="Inyecci&oacute;n" label="alimentador">Inyecci&oacute;n</option><option value="Matr&iacute;z" label="alimentador">Matr&iacute;z</option><option value="Laser" label="alimentador">Laser</option></select></td>';

echo'<td><b>Ubicaci&oacute;n:</b></td>
<td><select name="ubicacion" size="0"><option value="'.$row["tipo"].'" label="todo" selected>'.$row["tipo"].'</option><option>------------</option><option value="Todo" label="todo">Todo</option><option value="almacen" label="almacen">Almac&eacute;n</option><option value="reparaciones" label="reparaciones">Reparaciones</option><option value="Bajas" label="bajas">Bajas</option></select></td>';
echo '<td><b>Fecha de Instalaci&oacute;n:</b></td><td><input type="text" id="fecha_instalacion" value="'.$row["fecha_instalacion"].'" name="fecha_instalacion" readonly="1" />';
?>

<img src="calendar/img.gif" id="trigger4"
     style="cursor: pointer; border: 1px solid red;"
     title="Date selector"
     onmouseover="this.style.background='red';"
     onmouseout="this.style.background=''" />

</td>
<script type="text/javascript">
  Calendar.setup(
    {
      inputField  : "fecha_instalacion",         // ID of the input field
      align          :    "Tl",
      singleClick    :    false,
      ifFormat    : "%Y/%m/%d %H:%M:%S",    // the date format
      button      : "trigger4"       // ID of the button
    }
  );
</script>

<?
echo'</tr><tr><td><!--<b>Service Tag:</b>--></td><td><input type="hidden" value="'.$row["servicetag"].'" name="servicetag"></td><td></td><td></td><td></td><td></td>';
echo'</tr>';
echo '<table border="0" width="660"><tr><td><b>Fecha Garant&iacute;a:</b></td><td><input type="text" value="'.$row["fecha_garantia"].'" id="garantia" name="garantia" readonly="1" />';
?>
<img src="calendar/img.gif" id="trigger2"
     style="cursor: pointer; border: 1px solid red;"
     title="Date selector"
     onmouseover="this.style.background='red';"
     onmouseout="this.style.background=''" />


</td>
<script type="text/javascript">
  Calendar.setup(
    {
      inputField  : "garantia",         // ID of the input field
      align          :    "Tl",
      singleClick    :    false,
      ifFormat    : "%Y/%m/%d %H:%M:%S",    // the date format
      button      : "trigger2"       // ID of the button
    }
  );
</script>
<?
echo '<td valign="top"><b>Factura</b></td><td valign="top"><SELECT NAME="imagename" size="1" onChange="display_image(this.form)">';
$link2= mysql_connect("$nhost","$nuser","$npass");
mysql_select_db("$nbase", $link2);
$result2=mysql_query("select * from facturas");
echo '<option selected value="'.$row["factura"].'" name="'.$row["factura"].'">----Default-----</option>';
while ($row2=mysql_fetch_array($result2))
{
echo"<OPTION value=ver.php?id_fact=".$row2["id_fact"]." name=".$row2["id_fact"].">".$row2["titulo_fact"]."</option>";
}
mysql_free_result($result2);
echo '</SELECT>';
?>
<a href=javascript:depa('factura2.php?modulo=ingresar')> [ Agregar ]</a>
<?
echo '</td>';

echo '</tr><tr><td><b>Proveedor:</b></td><td><select name="departe" size="0"><option value="'.$row["departe"].'" label="'.$row["departe"].'" selected>'.$row["departe"].'</option><option>---------</option><option value="DELL" label="DELL">DELL</option><option value="MICROSYS" label="MICROSYS">MICROSYS</option><option value="SEGA" label="SEGA">SEGA</option><option value="COMPUSERVICIOS CSCOM" label="COMPUSERVICIOS CSCOM">COMPUSERVICIOS CSCOM</option><option value="TELNET" label="TELNET">TELNET</option><option value="OTROS" label="OTROS">OTROS</option></select></td><td></td><td></td></tr></table>';
echo '<table border="0" width="660">
<tr>
<td valign="top"><b>Observaciones:</b></td>
<td>&nbsp;&nbsp;<textarea name="observaciones" rows="5" cols="65">'.$row["observaciones"].'</textarea></td>
</tr>';

	}
	
	
	/* Scanner (Edición)*/
	if($categoria=="scanner"){
	echo '<input type="hidden" name="har" value="scanner">';
	echo '<input type="hidden" name="id" value="'.$row["id"].'">';
echo '<tr>
<td><b>Marca:</b></td>
<td><select name="marca" size="0"><option value="'.$row["fabricante"].'" label="marca" selected>'.$row["fabricante"].'</option><option>-----------</option><option value="HP" label="marca">HP</option><option value="Epson" label="marca">Epson</option><option value="Canon" label="marca">Canon</option><option value="Otros" label="marca">Otros</option></select></td>
<td><b>Modelo:</b></td>
<td><input type="text" value="'.$row["modelo"].'" name="modelo"></td>
<td><b>Serie:</b></td>
<td><input type="text" value="'.$row["serie"].'" name="serie" required="1" regexp="/^\w*$/"></td>
</tr>';
echo'<tr>
<td><b>Ubicaci&oacute;n:</b></td>
<td><select name="ubicacion" size="0"><option value="'.$row["tipo"].'" label="todo" selected>'.$row["tipo"].'</option><option>-----------</option><option value="Todo" label="todo">Todo</option><option value="almacen" label="almacen">Almac&eacute;n</option><option value="reparaciones" label="reparaciones">Reparaciones</option><option value="Bajas" label="bajas">Bajas</option></select></td>';
echo '<td><b>Fecha de Instalaci&oacute;n:</b></td><td><input type="text" id="fecha_instalacion" value="'.$row["fecha_instalacion"].'" name="fecha_instalacion" readonly="1" />';

?>
<img src="calendar/img.gif" id="trigger3"
     style="cursor: pointer; border: 1px solid red;"
     title="Date selector"
     onmouseover="this.style.background='red';"
     onmouseout="this.style.background=''" />

</td>
<script type="text/javascript">
  Calendar.setup(
    {
      inputField  : "fecha_instalacion",         // ID of the input field
      align          :    "Tl",
      singleClick    :    false,
      ifFormat    : "%Y/%m/%d %H:%M:%S",    // the date format
      button      : "trigger3"       // ID of the button
    }
  );
</script>
<?

echo'<td><!--<b>Service Tag:</b>--></td><td><input type="hidden" value="'.$row["servicetag"].'" name="servicetag"></td>';
echo'</tr>';
echo '<table border="0" width="660"><tr><td><b>Fecha Garant&iacute;a:</b></td><td><input type="text" value="'.$row["fecha_garantia"].'" id="garantia" name="garantia" readonly="1" />';
?>
<img src="calendar/img.gif" id="trigger2"
     style="cursor: pointer; border: 1px solid red;"
     title="Date selector"
     onmouseover="this.style.background='red';"
     onmouseout="this.style.background=''" />


</td>
<script type="text/javascript">
  Calendar.setup(
    {
      inputField  : "garantia",         // ID of the input field
      align          :    "Tl",
      singleClick    :    false,
      ifFormat    : "%Y/%m/%d %H:%M:%S",    // the date format
      button      : "trigger2"       // ID of the button
    }
  );
</script>
<?
echo '<td valign="top"><b>Factura</b></td><td valign="top"><SELECT NAME="imagename" size="1" onChange="display_image(this.form)">';
$link2= mysql_connect("$nhost","$nuser","$npass");
mysql_select_db("$nbase", $link2);
$result2=mysql_query("select * from facturas");
echo '<option selected value="'.$row["factura"].'" name="'.$row["factura"].'">----Default-----</option>';
while ($row2=mysql_fetch_array($result2))
{
echo"<OPTION value=ver.php?id_fact=".$row2["id_fact"]." name=".$row2["id_fact"].">".$row2["titulo_fact"]."</option>";
}
mysql_free_result($result2);
echo '</SELECT>';
?>
<a href=javascript:depa('factura2.php?modulo=ingresar')> [ Agregar ]</a>
<?
echo '</td>';

echo '</tr><tr><td><b>Proveedor:</b></td><td><select name="departe" size="0"><option value="'.$row["departe"].'" label="'.$row["departe"].'" selected>'.$row["departe"].'</option><option>---------</option><option value="DELL" label="DELL">DELL</option><option value="MICROSYS" label="MICROSYS">MICROSYS</option><option value="SEGA" label="SEGA">SEGA</option><option value="COMPUSERVICIOS CSCOM" label="COMPUSERVICIOS CSCOM">COMPUSERVICIOS CSCOM</option><option value="TELNET" label="TELNET">TELNET</option><option value="OTROS" label="OTROS">OTROS</option></select></td><td></td><td></td></tr></table>';
echo '<table border="0" width="660">
<tr>
<td valign="top"><b>Observaciones:</b></td>
<td>&nbsp;&nbsp;<textarea name="observaciones" rows="5" cols="65">'.$row["observaciones"].'</textarea></td>
</tr>';

	}
	
	/* Monitor (Edición)*/
	if($categoria=="monitor"){
	echo '<input type="hidden" name="har" value="monitor">';
	echo '<input type="hidden" name="id" value="'.$row["id"].'">';
echo '<tr>
<td><b>Marca:</b></td>
<td><select name="marca" size="0"><option value="'.$row["fabricante"].'" label="marca" selected>'.$row["fabricante"].'</option><option>-------------</option><option value="DELL" label="marca">DELL</option><option value="LG" label="marca">LG</option><option value="BenQ" label="marca">BenQ</option><option value="Acer" label="marca">Acer</option><option value="Sony" label="marca">Sony</option><option value="Otros" label="marca">Otros</option></select></td>
<td><b>Modelo:</b></td>
<td><input type="text" value="'.$row["modelo"].'" name="modelo"></td>
<td><b>Serie:</b></td>
<td><input type="text" value="'.$row["serie"].'" name="serie" required="1" regexp="/^\w*$/"></td>
</tr>
<tr>
<td><b>Ubicaci&oacute;n:</b></td>
<td><select name="ubicacion" size="0"><option value="'.$row["tipo"].'" label="'.$row["tipo"].'" selected>'.$row["tipo"].'</option><option>----------</option><option value="Todo" label="todo">Todo</option><option value="almacen" label="almacen">Almac&eacute;n</option><option value="reparaciones" label="reparaciones">Reparaciones</option><option value="Bajas" label="bajas">Bajas</option></select></td>';
echo '<td><b>Fecha de Instalaci&oacute;n:</b></td><td><input type="text" id="fecha_instalacion" value="'.$row["fecha_instalacion"].'" name="fecha_instalacion" readonly="1" />';

?>
<img src="calendar/img.gif" id="trigger3"
     style="cursor: pointer; border: 1px solid red;"
     title="Date selector"
     onmouseover="this.style.background='red';"
     onmouseout="this.style.background=''" />

</td>
<script type="text/javascript">
  Calendar.setup(
    {
      inputField  : "fecha_instalacion",         // ID of the input field
      align          :    "Tl",
      singleClick    :    false,
      ifFormat    : "%Y/%m/%d %H:%M:%S",    // the date format
      button      : "trigger3"       // ID of the button
    }
  );
</script>
<?

echo'<td><!--<b>Service Tag:</b>--></td><td><input type="hidden" value="'.$row["servicetag"].'" name="servicetag"></td>';
echo'</tr>';
echo '<table border="0" width="660"><tr><td><b>Fecha Garant&iacute;a:</b></td><td><input type="text" value="'.$row["fecha_garantia"].'" id="garantia" name="garantia" readonly="1" />';
?>
<img src="calendar/img.gif" id="trigger2"
     style="cursor: pointer; border: 1px solid red;"
     title="Date selector"
     onmouseover="this.style.background='red';"
     onmouseout="this.style.background=''" />


</td>
<script type="text/javascript">
  Calendar.setup(
    {
      inputField  : "garantia",         // ID of the input field
      align          :    "Tl",
      singleClick    :    false,
      ifFormat    : "%Y/%m/%d %H:%M:%S",    // the date format
      button      : "trigger2"       // ID of the button
    }
  );
</script>
<?
echo '<td valign="top"><b>Factura</b></td><td valign="top"><SELECT NAME="imagename" size="1" onChange="display_image(this.form)">';
$link2= mysql_connect("$nhost","$nuser","$npass");
mysql_select_db("$nbase", $link2);
$result2=mysql_query("select * from facturas");
echo '<option selected value="'.$row["factura"].'" name="'.$row["factura"].'">----Default-----</option>';
while ($row2=mysql_fetch_array($result2))
{
echo"<OPTION value=ver.php?id_fact=".$row2["id_fact"]." name=".$row2["id_fact"].">".$row2["titulo_fact"]."</option>";
}
mysql_free_result($result2);
echo '</SELECT>';
?>
<a href=javascript:depa('factura2.php?modulo=ingresar')> [ Agregar ]</a>
<?
echo '</td>';

echo '</tr><tr><td><b>Proveedor:</b></td><td><select name="departe" size="0"><option value="'.$row["departe"].'" label="'.$row["departe"].'" selected>'.$row["departe"].'</option><option>---------</option><option value="DELL" label="DELL">DELL</option><option value="MICROSYS" label="MICROSYS">MICROSYS</option><option value="SEGA" label="SEGA">SEGA</option><option value="COMPUSERVICIOS CSCOM" label="COMPUSERVICIOS CSCOM">COMPUSERVICIOS CSCOM</option><option value="TELNET" label="TELNET">TELNET</option><option value="OTROS" label="OTROS">OTROS</option></select></td><td></td><td></td></tr></table>';
echo '<table border="0" width="660">
<tr>
<td valign="top"><b>Observaciones:</b></td>
<td>&nbsp;&nbsp;<textarea name="observaciones" rows="5" cols="65">'.$row["observaciones"].'</textarea></td>
</tr>';

	}

 	/* CPU (Edición)*/
	if($categoria=="cpu"){
	echo '<input type="hidden" name="har" value="cpu">';
	echo '<input type="hidden" name="id" value="'.$row["id"].'">';
	echo '<tr>
<td><b>ID:</b></td>
<td>'.$row["id"].'</td>
<td><b>Ubicaci&oacute;n:</b></td>
<td><select name="ubicacion" size="0"><option value="'.$row["tipo"].'" label="todo" selected>'.$row["tipo"].'</option><option>-----------------</option><option value="Todo" label="todo">Todo</option><option value="almacen" label="almacen">Almac&eacute;n</option><option value="reparaciones" label="reparaciones">Reparaciones</option><option value="Bajas" label="bajas">Bajas</option></select></td>
</tr>

<tr>
<td><b>Nombre:</b></td>
<td><input type="text" value="'.$row["nombre"].'" name="nombre"></td>
<td><b>Usuario:</b></td>
<td><input type="text" value="'.$row["usuario"].'" name="usuario"></td>
</tr>

<tr>
<td><b>Equipo:</b></td>
<td><select name="equipo" size="0"><option value="'.$row["equipo"].'" label="'.$row["equipo"].'" selected>'.$row["equipo"].'</option><option>----------------</option><option value="AT/AT Compatible" label="AT/AT Compatible">AT/AT Compatible</option></select></td>
<td><b>No. Procesador:</b></td>
<td><input type="text" value="'.$row["no_procesador"].'" name="no_procesador"></td>
</tr>

<tr>
<td><b>MHz:</b></td>
<td><input type="text" value="'.$row["mhz"].'" name="mhz"></td>
<td><b>Familia:</b></td>
<td><input type="text" value="'.$row["familia"].'" name="familia"></td>
</tr>

<tr>
<td><b>Memoria RAM:</b></td>
<td><input type="text" value="'.$row["ram"].'" name="ram"></td>
<td><b>Fabricante de Equipo:</b></td>
<td><input type="text" value="'.$row["fabricante_equipo"].'" name="fabricante_equipo"></td>
</tr>

<tr>
<td><b>Modelo:</b></td>
<td><input type="text" value="'.$row["modelo"].'" name="modelo"></td>
<td><b>Fecha de Instalaci&oacute;n:</b></td>
<td><input type="text" value="'.$row["fecha_instalacion"].'" id="fecha_instalacion" name="fecha_instalacion" readonly="1" />';
?>
<img src="calendar/img.gif" id="trigger"
     style="cursor: pointer; border: 1px solid red;"
     title="Date selector"
     onmouseover="this.style.background='red';"
     onmouseout="this.style.background=''" />

</td>
<script type="text/javascript">
  Calendar.setup(
    {
      inputField  : "fecha_instalacion",         // ID of the input field
      align          :    "Tl",
      singleClick    :    false,
      ifFormat    : "%Y/%m/%d %H:%M:%S",    // the date format
      button      : "trigger"       // ID of the button
    }
  );
</script>
<?
echo'</tr>

<tr>
<td><b>No. Puertos Serie:</b></td>
<td><input type="text" value="'.$row["no_serie"].'" name="no_serie"></td>
<td><b>No. Puertos Paralelos:</b></td>
<td><input type="text" value="'.$row["no_paralelo"].'" name="no_paralelo"></td>
</tr>

<tr>
<td><b>Versi&oacute;n de la Bios:</b></td>
<td><input type="text" value="'.$row["version_bios"].'" name="version_bios"></td>
<td><b>Fecha Bios:</b></td>
<td><input type="text" id="fecha_bios" value="'.$row["fecha_bios"].'" name="fecha_bios" readonly="1" />';
?>
<img src="calendar/img.gif" id="trigger2"
     style="cursor: pointer; border: 1px solid red;"
     title="Date selector"
     onmouseover="this.style.background='red';"
     onmouseout="this.style.background=''" />

</td>
<script type="text/javascript">
  Calendar.setup(
    {
      inputField  : "fecha_bios",         // ID of the input field
      align          :    "Tl",
      singleClick    :    false,
      ifFormat    : "%Y/%m/%d %H:%M:%S",    // the date format
      button      : "trigger2"       // ID of the button
    }
  );
</script>
<?
echo'</tr>
<tr>
<td><b>Service Tag:</b></td>
<td><input type="text" value="'.$row["servicetag"].'" name="servicetag" required="1" regexp="/^\w*$/"></td>
<td><b>Fecha Garant&iacute;a:</b></td><td><input type="text" id="garantia" name="garantia" value="'.$row["fecha_garantia"].'" readonly="1" />';
?>
<img src="calendar/img.gif" id="trigger2"
     style="cursor: pointer; border: 1px solid red;"
     title="Date selector"
     onmouseover="this.style.background='red';"
     onmouseout="this.style.background=''" />


</td>
<script type="text/javascript">
  Calendar.setup(
    {
      inputField  : "garantia",         // ID of the input field
      align          :    "Tl",
      singleClick    :    false,
      ifFormat    : "%Y/%m/%d %H:%M:%S",    // the date format
      button      : "trigger2"       // ID of the button
    }
  );
</script>
<?
echo '</tr>
</table>

<table border="0" width="660">
<tr>
<td><b>Procesador:</b></td>
<td><select name="procesador" size="0">';
echo'<option value="'.$row["procesador"].'" label="'.$row["procesador"].'" selected>'.$row["procesador"].'</option>';
echo'<option>---------------</option>';
echo'<option value="286" label="286">286</option>';
echo'<option value="386" label="386">386</option>';
echo'<option value="486" label="486">486</option>';
echo'<option value="Pentium" label="Pentium">Pentium</option>';
echo'<option value="Pentium MMX" label="Pentium MMX">Pentium MMX</option>';
echo'<option value="Pentium Pro" label="Pentium Pro">Pentium Pro</option>';
echo'<option value="Pentium II" label="Pentium II">Pentium II</option>';
echo'<option value="Pentium III" label="Pentium III">Pentium III</option>';
echo'<option value="Pentium 4" label="Pentium 4">Pentium 4</option>';
echo'<option value="AMD-k5" label="AMD-k5">AMD-k5</option>';
echo'<option value="AMD-k6" label="AMD-k6">AMD-k6</option>';
echo'<option value="AMD-k6-II" label="AMD-k6-II">AMD-k6-II</option>';
echo'<option value="AMD-k6-III" label="AMD-k6-III">AMD-k6-III</option>';
echo'<option value="AMD Athlon" label="AMD Athlon">AMD Athlon</option>';
echo'<option value="AMD Duron" label="AMD Duron">AMD Duron</option>';
echo'<option value="Cyrix 6x86" label="Cyrix 6x86">Cyrix 6x86</option>';
echo'<option value="Cyrix 6x86MX" label="Cyrix 6x86MX">Cyrix 6x86MX</option>';
echo'<option value="Cyrix Media GX" label="Cyrix Media GX">Cyrix Media GX</option>';
echo'<option value="Cyrix Media GX MMX" label="Cyrix Media GX MMX">Cyrix Medida GX MMX</option>';
echo'<option value="Alpha" label="Alpha">Alpha</option>';
echo'<option value="Power PC 601" label="Power PC 601">Power PC 601</option>';
echo'<option value="Power PC 603" label="Power PC 603">Power PC 603</option>';
echo'<option value="Power PC 604" label="Power PC 604">Power PC 604</option>';
echo'<option value="MIPS" label="MIPS">MIPS</option>';
echo'</select></td>

<td><b>Fabricante:</b></td>
<td><select name="fabricante" size="0"><option value="'.$row["fabricante"].'" label="'.$row["fabricante"].'" selected>'.$row["fabricante"].'</option><option>------------------</option><option value="AuthenticAMD" label="AuthenticAMD">AuthenticAMD</option><option value="CyrixInstead" label="CyrixInstead">CyrixInstead</option><option value="GenuineIntel" label="GenuineIntel">GenuineIntel</option></select></td>
</tr>

<tr>
<td><b>Sistema Operativo:</b></td>
<td><select name="SO" size="0">';
echo'<option value="'.$row["SO"].'" label="'.$row["SO"].'" selected>'.$row["SO"].'</option>';
echo'<option>-------------</option>';
echo'<option value="Windows 3.0" label="Windows 3.0">Windows 3.0</option>';
echo'<option value="Windows 3.1" label="Windows 3.1">Windows 3.1</option>';
echo'<option value="Windows 3.11" label="Windows 3.11">Windows 3.11</option>';
echo'<option value="Windows 95" label="Windows 95">Windows 95</<font color="#4180be"><b>option>';
echo'<option value="Windows 95 OSR1" label="Windows 95 OSR1">Windows 95 OSR1</option>';
echo'<option value="Windows 95 OSR2" label="Windows 95 OSR2">Windows 95 OSR2</option>';
echo'<option value="Windows 98" label="Windows 98">Windows 98</option>';
echo'<option value="Windows 98 SE" label="Windows 98 SE">Windows 98 SE</option>';
echo'<option value="Windows ME" label="Windows ME">Windows ME</option>';
echo'<option value="Windows 2000" label="Windows 2000">Windows 2000</option>';
echo'<option value="Windows 2000 Server" label="Windows 2000 Server">Windows 2000 Server</option>';
echo'<option value="Windows 2000 Advanced Server" label="Windows 2000 Advanced Server">Windows 2000 Advanced Server</option>';
echo'<option value="Windows 2000 Professional" label="Windows 2000 Professional">Windows 2000 Professional</option>';
echo'<option value="Windows 2000 DataCenter Server" label="Windows 2000 DataCenter Server">Windows 2000 DataCenter Server</option>';
echo'<option value="Windows NT" label="Windows NT">Windows NT</option>';
echo'<option value="Windows XP" label="Windows XP">Windows XP</option>';
echo'<option value="Windows XP Professional" label="Windows XP Professional">Windows XP Professional</option>';
echo'<option value="Windows XP Home Edition" label="Windows XP Home Edition">Windows XP Home Edition</option>';
echo'<option value="Windows .NET" label="Windows .NET">Windows .NET</option>';
echo'<option value="Linux" label="Linux">Linux</option>';

echo'</select></td>

<td><b>Escritorio:</b></td>
<td><select name="pro_escritorio" size="0"><option value="'.$row["pro_escritorio"].'" label="pro_escritorio" selected>'.$row["pro_escritorio"].'</option><option>-------------</option><option value="Microsoft Office" label="pro_escritorio">Microsoft Office</option><option value="StarOffice" label="pro_escritorio">StarOffice</option><option value="OpenOffice" label="pro_escritorio">OpenOffice</option></select></td>
</tr>
<tr>';

echo '<td valign="top"><b>Factura</b></td><td valign="top"><SELECT NAME="imagename" size="1" onChange="display_image(this.form)">';
$link2= mysql_connect("$nhost","$nuser","$npass");
mysql_select_db("$nbase", $link2);
$result2=mysql_query("select * from facturas");
echo '<option selected value="'.$row["factura"].'" name="'.$row["factura"].'">----Default-----</option>';
while ($row2=mysql_fetch_array($result2))
{
echo"<OPTION value=ver.php?id_fact=".$row2["id_fact"]." name=".$row2["id_fact"].">".$row2["titulo_fact"]."</option>";
}
mysql_free_result($result2);
echo '</SELECT>';
?>
<a href=javascript:depa('factura2.php?modulo=ingresar')> [ Agregar ]</a>
<?
echo '</td>';

echo '<td><b>Proveedor:</b></td><td><select name="departe" size="0"><option value="'.$row["departe"].'" label="'.$row["departe"].'" selected>'.$row["departe"].'</option><option>---------</option><option value="DELL" label="DELL">DELL</option><option value="MICROSYS" label="MICROSYS">MICROSYS</option><option value="SEGA" label="SEGA">SEGA</option><option value="COMPUSERVICIOS CSCOM" label="COMPUSERVICIOS CSCOM">COMPUSERVICIOS CSCOM</option><option value="TELNET" label="TELNET">TELNET</option><option value="OTROS" label="OTROS">OTROS</option></select></td></tr></table>';

echo '<table border="0" width="660">
<tr>
<td valign="top"><b>Observaciones:</b></td>
<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<textarea name="observaciones" rows="5" cols="65">'.$row["observaciones"].'</textarea></td>

</tr>';

}
}
	mysql_free_result($result);

	echo'</table>';
		echo '<input type="submit" name="editar2" value="Editar">';
	echo '</form>';
}


// Modulo ficha para ver toda la info del equipo
if($modulo=="ficha"){

$link= mysql_connect("$nhost","$nuser","$npass");
mysql_select_db("$nbase", $link); 
$result=mysql_query("select * from equipo where id='$id'", $link);
while ($row=mysql_fetch_array($result))
{
echo 'Categoria: <font color="#4180be"><b><u>'.$categoria.'</u></b></font><br>';
echo 'Identificador: <font color="#4180be"><b><u>'.$cod_cod.'</u></b></font><br>';
echo 'Ficha General de este Equipo: <font color="#4180be"><b><u>'.$servicetag.'</u></b></font><br><br>';
echo '[<a href="equipo.php?modulo=editar&servicetag='.$row["servicetag"].'&categoria='.$row["categoria"].'&tipo='.$row["tipo"].'&id='.$row["id"].'&cod_cod='.$row["cod_cod"].'">Editar Ficha de este Equipo</a>] [<a href="equipo.php?modulo=prev&asignacion='.$row["asignacion"].'&ubicacion='.$row["tipo"].'&fecha_ingreso='.$row["fecha_ingreso"].'&categoria='.$row["categoria"].'&servicetag='.$row["servicetag"].'&id='.$row["id"].'&barcode='.$row["servicetag"].'&quality=100&cod_cod='.$row["cod_cod"].'">Imprimir C&oacute;digo de Barras</a>]<br><br>';
echo '<table border="0" width="660">
<tr>
<td><b>ID:</b></td>
<td>'.$row["id"].'</td>
<td><b>Ubicaci&oacute;n:</b></td>
<td>'.$row["tipo"].'</td>
</tr>

<tr>
<td><b>Nombre:</b></td>
<td>'.$row["nombre"].'</td>
<td><b>Usuario:</b></td>
<td>'.$row["usuario"].'</td>
</tr>

<tr>
<td><b>Equipo:</b></td>
<td>'.$row["equipo"].'</td>
<td><b>No. Procesador:</b></td>
<td>'.$row["no_procesador"].'</td>
</tr>

<tr>
<td><b>Procesador:</b></td>
<td>'.$row["procesador"].'</td>
<td><b>MHz:</b></td>
<td>'.$row["mhz"].'</td>
</tr>

<tr>
<td><b>Fabricante:</b></td>
<td>'.$row["fabricante"].'</td>
<td><b>Familia:</b></td>
<td>'.$row["familia"].'</td>
</tr>

<tr>
<td><b>Memoria RAM:</b></td>
<td>'.$row["ram"].'</td>
<td><b>Fabricante de Equipo:</b></td>
<td>'.$row["fabricante_equipo"].'</td>
</tr>

<tr>
<td><b>Modelo:</b></td>
<td>'.$row["modelo"].'</td>
<td><b>Sistema Operativo:</b></td>
<td>'.$row["SO"].'</td>
</tr>

<tr>
<td><b>Fecha de Instalaci&oacute;n:</b></td>
<td>'.$row["fecha_instalacion"].'</td>
<td><b>No. Puertos Serie:</b></td>
<td>'.$row["no_serie"].'</td>
</tr>

<tr>
<td><b>No. Puertos Paralelos:</b></td>
<td>'.$row["no_paralelo"].'</td>
<td><b>Versi&oacute;n de la Bios:</b></td>
<td>'.$row["version_bios"].'</td>
</tr>

<tr>
<td><b>Fecha Bios:</b></td>
<td>'.$row["fecha_bios"].'</td>
<td><b>Service Tag:</b></td>
<td>'.$row["servicetag"].'</td>
</tr>

<tr>
<td><b>Programa de Escritorio:</b></td>
<td>'.$row["pro_escritorio"].'</td>
<td><b>Fecha de Ingreso:</b></td>
<td>'.$row["fecha_ingreso"].'</td>
</tr>

<tr>
<td><b>Puerto:</b></td>
<td>'.$row["puerto"].'</td>
<td><b>Alimentador:</b></td>
<td>'.$row["alimentador"].'</td>
</tr>

<tr>
<td><b>Serie:</b></td>
<td>'.$row["serie"].'</td>
<td><b>Categoria:</b></td>
<td>'.$row["categoria"].'</td>
</tr>

<tr>
<td><b>Fecha Garant&iacute;a:</b></td>
<td>'.$row["fecha_garantia"].'</td>
<td><b>Proveedor:</b></td>
<td>'.$row["departe"].'</td>
</tr>

</table>';

echo '<table width="660" border="0">';
echo '<tr>';
echo '<td width="200"><b>Departamento Asignado:</b></td>';

mysql_select_db("$nbase", $link);
$asignacion=$row["asignacion"];
$result2=mysql_query("select * from facultad where id_facultad='$asignacion'");
while ($row2=mysql_fetch_array($result2))
{
echo '<td>'.$row2["nombre_facultad"].'</td>';
}
mysql_free_result($result2);
echo '</tr>';
echo '</table>';
echo '<table width="660" border="0"><tr><td width="200"><b>Imagen Factura:</b></td><td><a href=javascript:factura("imagenfactura.php?factura='.$row["factura"].'")>Visualizar Factura.</a></td></tr></table>';
echo '<table width="660" border="0"><tr><td width="200"><b>Observaciones</b></td><td>'.$row["observaciones"].'</td></tr></table>';

}
mysql_free_result($result);
}
//Fin de modulo ficha


// Modulo para previsualizar código de barras
if($modulo=="prev"){
echo '<table border="0" width="660">';
echo '<tr>';
echo '<td width="100">';
echo '<!--<img src="php-barcode/barcode.php?print=1&code='.$barcode.'&scale=2&mode=png&encoding=128&random=432526837" alt="Código utilizando PHP-Barcode">-->';
echo '<IMG SRC="barcode.php?barcode='.$cod_cod.'&width='.$ancho.'&height='.$altura.'&format='.$formato.'&quality='.$calidad.'" border="0">';
echo '</td>';
echo '<td width="560">';
echo '<b>ID:</b> '.$id.'<br><b>ServiceTag:</b> '.$servicetag.'<br><b>Ubicaci&oacute;n:</b> '.$ubicacion.'<br> <b>Categoria:</b> '.$categoria.'<br> <b>Fecha de Ingreso:</b> '.$fecha_ingreso.'<br>';
$link= mysql_connect("$nhost","$nuser","$npass");
mysql_select_db("$nbase", $link);
$result=mysql_query("select * from facultad where id_facultad='$asignacion'");
while ($row=mysql_fetch_array($result))
{
echo '<b>Departamento Asignado:</b> '.$row["nombre_facultad"].'';
}
mysql_free_result($result);

echo '</td>';
echo '</tr>';
echo '</table>';

echo "<br><center><a href=javascript:codigo('barras.php?modulo=imprimir&servicetag=$servicetag&cod_cod=$cod_cod')> [ Imprimir C&oacute;digo de Barras]</a></center>";


}


// Modulo principal
if($modulo=="principal"){
echo '<a href="equipo.php?modulo=principal&tipo=todo">Todos</a>&nbsp;&nbsp;&nbsp;<img src="imagenes/almacen2.jpg" border="0"><a href="equipo.php?modulo=principal&tipo=almacen">Almac&eacute;n</a>';
echo '&nbsp;&nbsp;&nbsp;<img src="imagenes/reparaciones2.jpg" border="0"><a href="equipo.php?modulo=principal&tipo=reparaciones">Reparaciones</a>';
echo '&nbsp;&nbsp;&nbsp;<img src="imagenes/bajas2.jpg" border="0"><a href="equipo.php?modulo=principal&tipo=bajas">Bajas</a><br><br>';
$base="$nbase";
$con=mysql_connect("$nhost","$nuser","$npass");
mysql_select_db($base,$con);

if (!isset($pg))
$pg = 0; // $pg es la pagina actual
$cantidad=156; // cantidad de resultados por p&aacute;gina
$inicial = $pg * $cantidad;

if($tipo=="todo"){
$pegar = "SELECT * FROM equipo ORDER BY fecha_ingreso desc LIMIT $inicial,$cantidad";
$texto = "Tipo de Visualizaci&oacute;n: Todo";
}
elseif($tipo=="almacen"){
$pegar = "SELECT * FROM equipo where (tipo='almacen') or (tipo='$tipo') ORDER BY fecha_ingreso desc LIMIT $inicial,$cantidad";
$texto = "Tipo de Visualizaci&oacute;n: Almac&eacute;n";
}
elseif($tipo=="reparaciones"){
$pegar = "SELECT * FROM equipo where (tipo='reparaciones') or (tipo='$tipo') ORDER BY fecha_ingreso desc LIMIT $inicial,$cantidad";
$texto = "Tipo de Visualizaci&oacute;n: Reparaciones";
}
elseif($tipo=="bajas"){
$pegar = "SELECT * FROM equipo where (tipo='bajas') or (tipo='$tipo') ORDER BY fecha_ingreso desc LIMIT $inicial,$cantidad";
$texto = "Tipo de Visualizaci&oacute;n: Bajas";
}

$cad = mysql_db_query($base,$pegar) or die (mysql_error());

$contar = "select * from equipo order by fecha_ingreso desc"; 
$contarok= mysql_db_query($base,$contar);
$total_records = mysql_num_rows($contarok);
$pages = intval($total_records / $cantidad);

echo '<em>'.$texto.'</em><br><br>';
echo'<table border="0" width="660">';
echo'<tr><td><b>Equipo</b></td><td><b>ID</b></td><td><b>Identificador</b></td><td><b>Entregado</b></td><td><b>Fecha de Ingreso</b></td><td><b>Enviar</b></td><td><b>Barras</b></td></tr>';

while ($row=mysql_fetch_array($cad))
{

echo'<tr>';
echo'<td><!--<img src="imagenes/procesador.jpg" border="0">-->'.$row["categoria"].'</td>';
echo'<td>'.$row["id"].'</td><td><a href="equipo.php?modulo=ficha&categoria='.$row["categoria"].'&id='.$row["id"].'&servicetag='.$row["servicetag"].'&cod_cod='.$row["cod_cod"].'">'.$row["cod_cod"].'</a></td>';
//echo'<td><a href="equipo.php?modulo=ficha&categoria='.$row["categoria"].'&id='.$row["id"].'&servicetag='.$row["servicetag"].'&cod_cod='.$row["cod_cod"].'">'.$row["nombre"].'</a></td>';

$id_equipo=$row["id"];
$cod_cod=$row["cod_cod"];
$categoria=$row["categoria"];
$servicetag=$row["servicetag"];
$asignacion=$row["asignacion"];
$tipo=$row["tipo"];
$result2=mysql_query("select * from carta where iden_carta='$cod_cod-$servicetag'");
$rs=mysql_num_rows($result2);
while ($row2=mysql_fetch_array($result2))
{
$id_carta=$row2["id_carta"];
}
mysql_free_result($result2);
if($rs == 1){
$resultado='<a href="equipo.php?modulo=vercarta&id_carta='.$id_carta.'&tipo='.$tipo.'&asignacion='.$asignacion.'&id_equipo='.$id_equipo.'&categoria='.$categoria.'&servicetag='.$servicetag.'&cod_cod='.$cod_cod.'">Afirmativo</a>';
}
elseif($rs == 0){
$resultado='<a href="equipo.php?modulo=entregarcarta&entrega_carta=0&tipo='.$tipo.'&asignacion='.$asignacion.'&id_equipo='.$id_equipo.'&categoria='.$categoria.'&servicetag='.$servicetag.'">Negativo</a>';
}
echo'<td>'.$resultado.'</td>';

echo'<td>'.$row["fecha_ingreso"].'</td>';
echo'<td><a href="#"><img src="imagenes/almacen.jpg" border="0"></a> <a href="#"><img src="imagenes/reparaciones.jpg" border="0"></a> <a href="#"><img src="imagenes/bajas.jpg" border="0"></a></td>';
echo'<td><a href="equipo.php?modulo=prev&asignacion='.$row["asignacion"].'&ubicacion='.$row["tipo"].'&fecha_ingreso='.$row["fecha_ingreso"].'&categoria='.$row["categoria"].'&servicetag='.$row["servicetag"].'&id='.$row["id"].'&barcode='.$row["servicetag"].'&format=jpeg&quality=100&cod_cod='.$row["cod_cod"].'">Imprimir</a></td>';

}
mysql_free_result($cad);
echo'</tr>';
echo'</td>';
echo'</table>';
echo'<br><br>';

// Creando los enlaces de paginación
echo "<center>P&aacute;ginas:<br>";
if ($pg <> 0)
{
$url = $pg - 1;
echo "<a href='equipo.php?modulo=principal&pg=".$url."&tipo=".$tipo."'>« Anterior</a> ";
}
else {
echo " ";
}

for ($i = 0; $i<($pages + 1); $i++) {
if ($i == $pg) {
echo "<font color=ff0000><b> $i </b></font>";
}
else {
echo "<a href='equipo.php?modulo=principal&pg=".$i."&tipo=".$tipo."'>".$i."</a> ";
}
}

if ($pg < $pages) {
$url = $pg + 1;
echo "<a href='equipo.php?modulo=principal&pg=".$url."&tipo=".$tipo."'>Siguiente »</a>";
}
else {
echo " ";
}
echo "</center>";
}
//fin Modulo principal


// Modulo para ver info, de carta ya entregada
if($modulo=="vercarta"){
echo 'El Sistema <b>Control-Code</b> detect&oacute; que este equipo que se identifica con el <b>No. de Serie: '.$servicetag.'</b> ya fue entregado, por que ya se emiti&oacute; una carta de entrega de equipo. Abajo encontrar&aacute; m&aacute; informaci&oacute;n detallada al respecto.<br><br>';
echo '<table border="0" width="660"><tr><td><b>Identificador</b></td><td><b>No. Serie</b></td><td><b>Departamento Asignado</b></td><td><b>Fecha (Entrega)</b></td></tr>';

$link= mysql_connect("$nhost","$nuser","$npass");
mysql_select_db("$nbase", $link); 
$result=mysql_query("select * from carta where id_carta='$id_carta'", $link);
while ($row=mysql_fetch_array($result))
{
echo '<tr><td>'.$cod_cod.'</td><td>'.$row["iden_carta"].'</td>';
$result2=mysql_query("select * from facultad where id_facultad='$asignacion'", $link);
while ($row2=mysql_fetch_array($result2))
{
echo '<td>'.$row2["nombre_facultad"].'</td>';
}
mysql_free_result($result2);

echo '<td>'.$row["fecha_carta"].'</td>';

echo '</tr></table>';
echo '<br> El usuario que imprimi&oacute; esta carta fue: <b>'.$row["usuario"].'</b>';
}
mysql_free_result($result);
}

// Modulo para entregar carta
if($modulo=="entregarcarta"){
echo 'El sistema de entrega de equipo funciona de la siguiente manera.<br><br>';
echo '<b>Control-Code</b>, genera una carta a nombre del departamento donde se har&aacute; entrega del equipo y toda la informaci&oacute;n de dicho equipo, se deber&aacute; imprimir esta carta para enviarla directamente a su destinatario, el sistema registrar&aacute; este proceso como equipo entregado.';
echo '<br><br>Por favor selecciona que equipo deseas incluir en la carta.';

$result2=mysql_query("select * from facultad where id_facultad='$asignacion'");
echo '<form method="post" action="equipo.php?modulo=entregarcarta2">';
while ($row2=mysql_fetch_array($result2))
{
echo '<br><b>Equipos completos del Departamento:</b> '.$row2["nombre_facultad"].'<br><br>';

}
mysql_free_result($result2);


echo '<input type="hidden" name="asignacion" value="'.$asignacion.'">';


echo '<table width="660" border="0"><tr><td><b>Selecci&oacute;n</b></td><td><b>Identificador</b></td><td><b>Categoria</b></td><td><b>ServiceTag</b></td></tr>';

if($asignacion=="1"){
echo '<font color="#CE272A"><em><b>Nota:</b> Este equipo no se puede entregar por que no ha sido asignado a un departamento v&aacute;lido.<br> El departamento <b>"Ninguno"</b> es considerado no v&aacute;lido.</em></font><br><br>';
}
elseif($tipo=="almacen"){
echo '<font color="#CE272A"><em><b>Nota:</b> Este equipo no se puede entregar por que ha sido ubicado en el <b>"Almac&eacute;n"</b>.</em></font><br><br>';
}
elseif($tipo=="bajas"){
echo '<font color="#CE272A"><em><b>Nota:</b> Este equipo no se puede entregar por que ha sido ubicado en el <b>"Bajas"</b>.</em></font><br><br>';
}
else{

$result3=mysql_query("select * from equipo where (tipo='Todo') and (asignacion='$asignacion') and (entregado='0')");
while ($row=mysql_fetch_array($result3))
{


echo '<input type="hidden" name="id_equipo[]" value="'.$row["id"].'">';
echo '<tr><td><input type="hidden" name="categoria[]" value="'.$row["categoria"].'"> <input type="checkbox" name="servicetag[]" value="'.$row["cod_cod"].'-'.$row["serie"].'"> <td>'.$row["cod_cod"].'</td></td>';
echo '<td>'.$row["categoria"].'</td>';
echo '<td>'.$row["servicetag"].'</td>';

}
mysql_free_result($result3);
}

echo '</tr></table>';

echo '<br><input type="submit" name="entregarcarta2" value="Enviar">';

echo '</form>';
}
// Fin de entrega de carta


// Modulo para entregar carta 2
if($modulo=="entregarcarta2"){

echo 'El sistema de entrega de equipo funciona de la siguiente manera.<br><br>';
echo '<b>Control-Code</b>, genera una carta a nombre del departamento donde se har&aacute; entrega del equipo y toda la informaci&oacute;n de dicho equipo, se deber&aacute; imprimir esta carta para enviarla directamente a su destinatario, el sistema registrar&aacute; este proceso como equipo entregado.';
?>
<form method="post" action="carta.php" target="_blank">
<?


echo '<br><br><b><u><em>Previsualizaci&oacute;n de la carta:</em></u></b><br><br>';
echo '<table width="660" border="0">
<tr>
<td valign="top"><font size="4"><b>'.$empresa_cabecera.'</b></font><br>'.$empresa_direccion.'
</td>
</tr>
</table>';

echo '<table width="660" border="0">
<tr>
<td valign="top">';
echo '<br><br><font size="3"><b>Entrega de Equipo</b></font><br><br>';
include "libreria/fechacarta.php";

$link= mysql_connect("$nhost","$nuser","$npass");
mysql_select_db("$nbase", $link);
$result2=mysql_query("select * from facultad where id_facultad='$asignacion'");
while ($row2=mysql_fetch_array($result2))
{
echo '<br><br><b><input type="hidden" name="departamento" value="'.$row2["nombre_facultad"].'"> Al Departamento:</b> '.$row2["nombre_facultad"].'<br><b>'.$empresa_sub.'</b><br><br>';
echo 'Se hace entrega del siguiente equipo:<br><br>';
}
mysql_free_result($result2);

echo '<table width="620" border="0"><tr><td><b>Categoria --> Asignaci&oacute;n - No. Serie</b></td></tr></table>';

for($i=0; $i<count($servicetag); $i++) {

if( stristr (".$servicetag[$i].", 'MON') ) {
	$monitor="Monitor ---> ".$servicetag[$i]."";
   echo '<input type="hidden" name="monitor[]" value="'.$monitor.'">';
   
   echo '<input type="hidden" name="id_equipo[]" value="'.$id_equipo[$i].'">';
   echo '<input type="hidden" name="iden_carta[]" value="'.$servicetag[$i].'">';
	echo '&nbsp;&nbsp;&nbsp; Monitor ---> '.$servicetag[$i].'<br>';
	}
	elseif( stristr (".$servicetag[$i].", 'UPS') ){
	$ups="UPS---> ".$servicetag[$i]."";
   echo '<input type="hidden" name="ups[]" value="'.$ups.'">';
  
   echo '<input type="hidden" name="id_equipo[]" value="'.$id_equipo[$i].'">';
   echo '<input type="hidden" name="iden_carta[]" value="'.$servicetag[$i].'">';
	echo '&nbsp;&nbsp;&nbsp; UPS ---> '.$servicetag[$i].'<br>';
	}  
	elseif( stristr (".$servicetag[$i].", 'SCAN') ){
	$scan="Scanner ---> ".$servicetag[$i]."";
   echo '<input type="hidden" name="scan[]" value="'.$scan.'">';
   
   echo '<input type="hidden" name="id_equipo[]" value="'.$id_equipo[$i].'">';
   echo '<input type="hidden" name="iden_carta[]" value="'.$servicetag[$i].'">';
	echo '&nbsp;&nbsp;&nbsp; Scanner ---> '.$servicetag[$i].'<br>';
	} 
	elseif( stristr (".$servicetag[$i].", 'IMPR') ){
	$impr="Impresora ---> ".$servicetag[$i]."";
   echo '<input type="hidden" name="impr[]" value="'.$impr.'">';
   
   echo '<input type="hidden" name="id_equipo[]" value="'.$id_equipo[$i].'">';
	echo '<input type="hidden" name="iden_carta[]" value="'.$servicetag[$i].'">';
	echo '&nbsp;&nbsp;&nbsp; Impresora ---> '.$servicetag[$i].'<br>';
	}
	elseif( stristr (".$servicetag[$i].", 'OTR') ){
	$otr="Otros ---> ".$servicetag[$i]."";
   echo '<input type="hidden" name="otr[]" value="'.$otr.'">';
   
   echo '<input type="hidden" name="id_equipo[]" value="'.$id_equipo[$i].'">';
   echo '<input type="hidden" name="iden_carta[]" value="'.$servicetag[$i].'">';
	echo '&nbsp;&nbsp;&nbsp; Otros ---> '.$servicetag[$i].'<br>';
	}
	elseif( stristr (".$servicetag[$i].", 'MOU') ){
	$mou="Mouse ---> ".$servicetag[$i]."";
   echo '<input type="hidden" name="mou[]" value="'.$mou.'">';
   
   echo '<input type="hidden" name="id_equipo[]" value="'.$id_equipo[$i].'">';
   echo '<input type="hidden" name="iden_carta[]" value="'.$servicetag[$i].'">';
	echo '&nbsp;&nbsp;&nbsp; Mouse ---> '.$servicetag[$i].'<br>';
	}
	elseif( stristr (".$servicetag[$i].", 'TECL') ){
	$tecl="Teclado ---> ".$servicetag[$i]."";
   echo '<input type="hidden" name="tecl[]" value="'.$tecl.'">';
   
   echo '<input type="hidden" name="id_equipo[]" value="'.$id_equipo[$i].'">';
   echo '<input type="hidden" name="iden_carta[]" value="'.$servicetag[$i].'">';
	echo '&nbsp;&nbsp;&nbsp; Teclado ---> '.$servicetag[$i].'<br>';
	}
	elseif( stristr (".$servicetag[$i].", 'DISP') ){
	$disp="Dispositivo ---> ".$servicetag[$i]."";
   echo '<input type="hidden" name="disp[]" value="'.$disp.'">';
   
   echo '<input type="hidden" name="id_equipo[]" value="'.$id_equipo[$i].'">';
   echo '<input type="hidden" name="iden_carta[]" value="'.$servicetag[$i].'">';
	echo '&nbsp;&nbsp;&nbsp; Dispositivo ---> '.$servicetag[$i].'<br>';
	}
	elseif( stristr (".$servicetag[$i].", 'CPU') ){
	$cpu="CPU ---> ".$servicetag[$i]."";
   echo '<input type="hidden" name="cpu[]" value="'.$cpu.'">';
   
   echo '<input type="hidden" name="id_equipo[]" value="'.$id_equipo[$i].'">';
   echo '<input type="hidden" name="iden_carta[]" value="'.$servicetag[$i].'">';
	echo '&nbsp;&nbsp;&nbsp; CPU ---> '.$servicetag[$i].'<br>';
	}
}

echo '<br><br>';
echo '<center>Entregado por:  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Recibido por:</center>';

echo '<br><input type="submit" name="carta" value="Imprimir">';
echo '</form>';
echo '</tr></td></table>';

} 
//Fin entregar carta2
}




/* Solo tiene acceso el usuario básico De aqui en adelante, bueno para abajo :) */
elseif($num2 == "2"){

}
else {
echo "No tiene lo suficientes privilegios para ingresar a este modulo.";
}

?>
</td>
</tr>
<tr>
<td>
</td>
</tr>


<?php
include "libreria/final.php";
?>
