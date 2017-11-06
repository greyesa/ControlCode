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
<table border="0" width="752">
<tr>
<td class="content">
<a href="index.php"><< M&oacute;dulos</a> <a href=javascript:history.back()><<- Regresar</a><br><br>
<img src="imagenes/lectura.gif" border="0"><br><br>

<?php
if($modulo=="menu"){


echo '<form method="post" name="bogus" id="bogus-form" action="lectura.php?modulo=menu">';
echo '<input type="hidden" name="bogus_field0" id="bogus_field0" size="20" maxlength="12"><br>';
echo'<b>C&oacute;digo de Barras:</b> <input type="text" name="bogus_field1" id="bogus_field0" size="20" maxlength="12" value=""><br>';
echo'<input type="hidden" name="bogus_field2" id="bogus_field0" size="20" maxlength="12">';

//echo '<input type="submit" value="Aceptar" name="datos">';
echo '</form>';


$link= mysql_connect("$nhost","$nuser","$npass");
mysql_select_db("$nbase", $link); 
$result=mysql_query("select * from equipo where cod_cod='$bogus_field1'", $link);
while ($row=mysql_fetch_array($result))
{
echo 'Categoria: <font color="#4180be"><b><u>'.$row["categoria"].'</u></b></font><br>';
echo 'Identificador: <font color="#4180be"><b><u>'.$row["cod_cod"].'</u></b></font><br>';
echo 'Ficha General de este Equipo: <font color="#4180be"><b><u>'.$row["servicetag"].'</u></b></font><br><br>';

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
