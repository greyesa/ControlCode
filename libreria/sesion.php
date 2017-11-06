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
?>
<?
if (isset($nick)) {
        //lo echas
  }

session_start();
  if (!isset($nick)) {
    //lo echas
 }
 else {
session_register("nick");
session_register("contra");
session_register("id_us");
session_register("num2");
}
?>
 <? include 'login.php'; ?>
