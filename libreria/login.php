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
include "config.inc.php";
$connection = mysql_connect("$nhost", "$nuser", "$npass")
  	or die ("Error: Login - No se puede tener contacto con el servidor. (login/login.php Linea 14)");
		
$db = mysql_select_db("$nbase", $connection)
	or die ("Error: Login - No tenemos contacto con la base de datos. (login/login.php Linea 17)");

$sql = "SELECT id_us FROM usuarios WHERE nick='$nick' and contra=MD5('$contra')";

$result = mysql_query($sql)
	or die("Error: Login - No se puede ejecutar el resultado de la base de datos. (login/login.php Linea 22)");
$num = mysql_numrows($result);

$sql2 = "SELECT * FROM usuarios WHERE nick='$nick' and contra=MD5('$contra')";
$result2 = mysql_query($sql2);
$num2 = mysql_numrows($result2);
while ($row=mysql_fetch_array($result2))
{
$num2 = $row["nivel"];
$id_us=$row["id_us"];
$nombre=$row["nombre"];
}
mysql_free_result($result2);

if ($num == 1) {
$num2=$num2;
$id_us=$id_us;
$nombre=$nombre;
}
elseif  ($num == 0) {
include "formulario.php";
session_unset();
session_destroy();
exit;
}

?>
