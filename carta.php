<?php
include ("libreria/sesion.php");
include "config.inc.php";
/************************************ 
Control-Code Interactiva Web (C)2012
Copyright (C)2000-2005 Gustavo Reyes. Twitter: @greyes
Todos los derechos reservados.
http://www.interactivaweb.com
contacto@interactivaweb.com
Nueva liberación 18-5-2012
Abril 2005
************************************/

echo '<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>'.$empresa_cabecera.'</title>
</head>';
?>
<SCRIPT LANGUAGE="JavaScript">

<!-- Begin
function printPage() {
if (window.print) {
agree = confirm('Control-Code \n\n ¿ Deseas imprimir esta carta ?');
if (agree) window.print(); 
   }
}
//  End -->
</script>


<?php
echo '<body OnLoad="printPage()">';



$link=mysql_connect("$nhost","$nuser","$npass");
mysql_select_db("$nbase", $link);
for($i=0; $i<count($iden_carta); $i++) {
mysql_query("INSERT into carta (usuario,iden_carta,entrega_carta,fecha_carta) values('$nombre','$iden_carta[$i]','1',now() )",$link);
}

$link2=mysql_connect("$nhost","$nuser","$npass");
mysql_select_db("$nbase", $link2);
for($e=0; $e<count($id_equipo); $e++) {
$result = mysql_query("Update equipo Set entregado='1' WHERE id='$id_equipo[$e]'",$link2);
}

echo '<table width="700" border="0">
<tr>
<td valign="top"><font size="4"><b>'.$empresa_cabecera.'</b></font><br>'.$empresa_direccion.'
</td>
</tr>
</table>';

echo '<table width="700" border="1">
<tr>
<td valign="top">';
echo '<br><font size="2"><b>Entrega de Equipo</b></font><br><br>';
echo '<font size="2">';
include "libreria/fechacarta.php";
echo '</font>';

echo '<font size="2"><br><br><b>Al Departamento:</b> '.$departamento.'<br><b>'.$empresa_sub.'</b><br><br>';
echo 'Se hace entrega del siguiente equipo:<br><br></font>';



echo '<table width="620" border="1"><tr><td><font size="2"><b>Categoria --> Asignaci&oacute;n - No. Serie</b></font></td></tr></table>';
for($i=0; $i<count($monitor); $i++) {
echo '<font size="2">&nbsp;&nbsp;&nbsp; '.$monitor[$i].'<br></font>';
}
for($i=0; $i<count($ups); $i++) {
echo '<font size="2">&nbsp;&nbsp;&nbsp; '.$ups[$i].'<br></font>';
}
for($i=0; $i<count($scan); $i++) {
echo '<font size="2">&nbsp;&nbsp;&nbsp; '.$scan[$i].'<br></font>';
}
for($i=0; $i<count($impr); $i++) {
echo '<font size="2">&nbsp;&nbsp;&nbsp; '.$impr[$i].'<br></font>';
}
for($i=0; $i<count($otr); $i++) {
echo '<font size="2">&nbsp;&nbsp;&nbsp; '.$otr[$i].'<br></font>';
}
for($i=0; $i<count($mou); $i++) {
echo '<font size="2">&nbsp;&nbsp;&nbsp; '.$mou[$i].'<br></font>';
}
for($i=0; $i<count($tecl); $i++) {
echo '<font size="2">&nbsp;&nbsp;&nbsp; '.$tecl[$i].'<br></font>';
}
for($i=0; $i<count($disp); $i++) {
echo '<font size="2">&nbsp;&nbsp;&nbsp; '.$disp[$i].'<br></font>';
}
for($i=0; $i<count($cpu); $i++) {
echo '<font size="2">&nbsp;&nbsp;&nbsp; '.$cpu[$i].'<br></font>';
}

echo '<font size="2"><br><br><br><br>';
echo '<center>Entregado por:  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Recibido por:</center></font><br><br>';
echo '<font size="1"><b>Nota:</b> Incluir Nombre, Firma y Sello.<br><b>Sistema a Cargo: Control-Code '.$version.'</b></font>';

echo '</td>

</tr>
</table>';

	

echo '</body></html>';

?>
