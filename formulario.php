<?php
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
<td class="content"><b>Autenticaci&oacute;n:</b><br><br>
Para ingresar al sistema <b>Control-Code</b> necesita autenticarse, favor colocar sus datos correspondientes.<br><br>

<form method="post" action="index.php">
<table border="0" width="660">
<tr>
	<td><b>Nick de usuario:</b><br>Es el sobre-nombre que se le fue asignado.</td>
	<td><input type="text" name="nick"></td>
</tr>
<tr>
	<td><b>Contrase&ntilde;a de usuario:</b><br>Contrase&ntilde;a que se le fue asignado.</td>
	<td><input type="password" name="contra"></td>
</tr>
</table>


<br><INPUT TYPE="submit" name="ingresar" value="Ingresar">
</form>


</td>
</tr>
<tr>
<td>
</td>
</tr>


<?php
include "libreria/final.php";
?>
