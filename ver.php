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
include 'config.inc.php';
$link= mysql_connect("$nhost","$nuser","$npass");
mysql_select_db("$nbase", $link); 
$result=mysql_query("select contenido_fact from facturas where id_fact='$id_fact'", $link);
$imagen = @mysql_result($result,0);
Header( "Content-type: image/jpeg");
echo $imagen; 

?>
