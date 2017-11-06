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
<td class="content"><b>M&oacute;dulos:</b><br><br>
Que tal, <?php echo '<b>'.$nombre.'</b>'; ?> bienvenido a <b>Control-Code</b> por favor selecciona una opci&oacute;n:<br><br>

<table width="660">
<tr>
<td valign="top"><a href="equipo.php?modulo=principal&tipo=todo"><img src="imagenes/equipo.gif" border="0"></a><br>Ingresar, Editar y Eliminar Equipo<br> de la base de datos e Impresi&oacute;n de <br>C&oacute;digo de Barras.</td>
<td valign="top"><a href="lectura.php?modulo=menu"><img src="imagenes/lectura.gif" border="0"></a><br>Lectura de C&oacute;digo de Barras del Equipo<br> Informaci&oacute;n general.<br><br></td>
<!--<td><a href="barras.php?modulo=menu"><img src="imagenes/impresion.gif" border="0"></a><br>Impresión de Código de Barras<br><br></td>-->
</tr>
</table><br><br>
</td>
</tr>
<tr>
<td>
</td>
</tr>
<?php
include "libreria/final.php";
?>
