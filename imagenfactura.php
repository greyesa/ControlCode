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
include 'config.inc.php';
echo '<html><head><title>Control-Code (C)2005 </title>';
?>
<SCRIPT LANGUAGE="JavaScript">
<!--
function imprimir() {
  if (window.print)
    window.print()
  else
    alert("Disculpe, su navegador no soporta esta opción.");
}
// -->
</SCRIPT>
<?
echo '<LINK rel="stylesheet" type="text/css" href="basic.css">';
echo '</head><body>';
$link= mysql_connect("$nhost","$nuser","$npass");
mysql_select_db("$nbase", $link);
$result=mysql_query("select * from facturas where id_fact='$id_fact'");
echo'Informaci&oacute;n extraida de: <b> Control-Code</b><br>';
echo 'Usuario: <strong>'.$nombre.'</strong><br>';
include 'libreria/fechacarta.php';
echo'<br>[<A HREF=javascript:imprimir()> Imprimir P&aacute;gina</A>]';
echo'[<a href=javascript:window.close();>Cerrar ventana</a>]<br><br>';
while ($row=mysql_fetch_array($result))
{
echo '<img src="ver.php?id_fact='.$row["id_fact"].'">';
}
mysql_free_result($result);

if($factura = $factura){
echo '<img src="'.$factura.'">';
}
else{
echo "";
}

echo '</body></html>';
?>
