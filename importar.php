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
<img src="imagenes/facturas.gif" border="0"><br><br>
<?
/* Solo tiene acceso el Administrador */
if($num2 == "1"){
echo '[<a href="equipo.php?modulo=ingresar&equipo=cpu">Ingresar Equipo Manualmente</a>] [<a href="#">Ingresar Equipo por la Red</a>] [<a href="facturas.php?modulo=ingresar">Ingresar Facturas</a>] <br> [<a href="importar.php?modulo=formulario">Importar datos desde CSV</a>]<br><br>';

echo '<table border="0" width="660"><tr><td>';


echo "<b>Importación de datos desde documentos CSV</b>";

if($modulo=="formulario"){

echo '<br><br><form method="post" enctype="multipart/form-data" action="importar.php?modulo=archivo">';
echo '<input type="file" name="csv"><br><br>';
echo '<input type="submit" name="archivo" value="Importar">';
echo '</form>';
}

if($modulo=="archivo"){

$row = 1;
$handle = fopen("".$csv."", "r");
while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
   $num = count($data);
   
   $row++;
   for ($c=0; $c < $num; $c++) {
       echo $data[$c] . "<br />\n";
   }
}
fclose($handle);

}
echo '</td></tr></table>';
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
