<?
session_start();
session_unset();
session_destroy();
?>
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
include "../config.inc.php";

echo '<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">';
echo '<html>';
echo '<head>';
echo '<title>Control-Code (C)2005</title>';
echo '<!-- Este sistema de inventario de equipo corre con tecnología Control-Code http://www.pocccms.com -->';
echo '<LINK rel="stylesheet" type="text/css" href="../basic.css">';
echo '<meta http-equiv="refresh" content="2;URL=../index.php">';
echo '</head>';
echo '<body bgcolor="#ffffff">';
echo '<CENTER><p><B>Desconectando al Usuario del Sistema espero un momento por favor......</B></p></CENTER>';
echo '</BODY>';
echo '</HTML>';
exit; ?>
