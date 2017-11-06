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
echo '<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<head>
<title>Control-Code</title>';
echo '<style type="text/css">';
echo 'BODY {
font-family: "Trebuchet MS", Arial, Geneva, san-serif;
  background-color: #ffffff;
	font-size: 12px;
color: #666666;
}';

echo 'A:link {
  color: #CE272A;
	font-weight: bold;
	text-decoration: none;
}

A:visited {
    color: #CE272A;
    text-decoration: none;
}



A:hover {
	text-decoration: underline;
}


A:active {
	text-decoration: none;
}';

echo '.content {
	border-left: 1px solid #666666;
	border-right: 1px solid #666666;
	margin: 0px 0px 0px 14em;
	padding: 2em 5em 2em 2em;
	background: #f3f3f3;
	border-top: 1px solid #666666;
	border-bottom: 1px solid #666666;
	font-size: 12px;
	text-align: justify;
	font-family: "Trebuchet MS", Arial, Geneva, san-serif;
	color: #666666;

}';

echo '.twigheader {
	background: #CE272A;
	width: 31em;
	margin: 0px;
	padding: .5em .5em .5em 1em;
	font-family: Geneva, Arial, Helvetica, sans-serif;
	color: #ffffff;
	border-bottom: 4px solid #BD8410;
	font-size: 18px;
}
.twigfooter {
       padding-top: 5px;
	padding-left: 17pc;
	font: 100% Arial;
	color: #333333;
	letter-spacing: .1em;
	padding-bottom: 5px;
       text-align: right;

}';

echo 'TD{
    BORDER-RIGHT: #3C5B98 thin solid;
    BORDER-TOP: #3C5B98 thin solid;
    BORDER-LEFT: #3C5B98 thin solid;
    BORDER-BOTTOM: #3C5B98 thin solid;
    PADDING-RIGHT: 2px;
    PADDING-LEFT: 2px;
    PADDING-TOP: 1px;
    PADDING-BOTTOM: 2px;
    FONT-FAMILY: Verdana, Arial;
    /*TEXT-ALIGN: center;*/
    color: #000000;
    FONT-SIZE: 8pt;
    BACKGROUND-COLOR: #C6D7DA;
}';


echo '</style>';
echo '</head><body>';

?>
<div class="twigheader">
 <b>Control-Code [<?php echo $empresa_cabecera; ?>]</b>
 </div>
<table border="0" width="100%">
<tr>
<td class="content">
<?
if($modulo=="ingresar"){
?>
<b>Agregar Departamento:</b>
[<a href="javascript:opener.location.reload(true); self.close();">Cerrar esta ventana</a>]

<?
echo '<form method="post" action="depa.php?modulo=insertar">';
echo 'Por favor ingresa los datos que se requieren:<br><br>';


echo '<table border="0" width="100%">';
	echo '<tr>';
	
		echo '<td><b>Departamento:</b><br><font size="2">Ejemplo: Centro de Computo</font></td>';
		echo '<td><BR><BR><input type="text" name="depa"></td>';
	echo '</tr>';


echo '</table>';
echo '<input type="submit" value="Ingresar" name="insertar">';
echo '</form>';
}

if($modulo=="insertar"){
	if($depa=$depa){
echo '<b>Agregar Departamento:</b>';
echo '[<a href="javascript:opener.location.reload(true); self.close();">Cerrar esta ventana</a>]';

$link=mysql_connect("$nhost","$nuser","$npass");
mysql_select_db("$nbase", $link);

	$sql = "SELECT nombre_facultad FROM facultad WHERE nombre_facultad='$depa'";
	$comp = mysql_query($sql) or die("No se puede ejecutar el resultado de la base de datos.");
	$num = mysql_numrows($comp);
	if ($num == 0) {
$result=mysql_query("INSERT facultad (nombre_facultad,fecha_facultad)values('$depa',now())",$link);
echo '<br><br>El departamento: <b>'.$depa.'</b>, fue ingresado satisfactoriamente.<br> <a href="javascript:opener.location.reload(true); self.close();">Cerrar esta ventana</a>';
}
   elseif ($num == 1)  {
   echo '<br><br><b>Informe:</b> <em>Este departamento ya fue ingresado. <a href=javascript:history.back()><<- Regresar</a></em> ';
   }
}
else{
echo 'No se pudo ingresar ning&uacute;n departamento. <a href=javascript:history.back()><<- Regresar</a>';
}
}

?>
</td>
</tr>
<tr>
<td>
</td>
</tr>


<?php
echo'<tr>';
echo'<td>';
echo'<div class="twigfooter">';
echo'<b>Control-Code '.$version.'</b><br>';

echo'</div>';
echo'</td>';
echo'</tr>';
echo'</table>';
echo'</body>';
echo'</html>';
?>
