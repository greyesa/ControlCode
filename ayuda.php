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
echo '<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<head>
<title>Control-Code</title>';

echo '<style type="text/css">';
echo 'BODY {';
echo 'font-size: 80%;';
echo 'text-align: justify;';
echo 'font-family: "Trebuchet MS", Arial, Geneva, san-serif;';
echo 'color: #666666;';
echo '}';

echo 'a {';
echo 'color: #006699;';
echo 'text-decoration: none; ';
echo 'font-weight: bold;';
echo 'font-variant: normal;';
echo 'font-style: normal;';
echo 'font-stretch: normal;';
echo '}';

echo 'a:hover {';
echo 'color: #CE272A;';
echo 'text-decoration: none; ';
echo 'font-weight: bold;';
echo 'font-variant: normal;';
echo 'font-style: normal;';
echo 'font-stretch: normal;';
echo '}';

echo 'A:link {';
echo 'text-decoration: none;';
echo 'font-weight: bold;';
echo 'font-variant: normal;';
echo 'font-style: normal;';
echo 'font-stretch: normal;';
echo '}';

echo 'A:vlink {';
echo 'text-decoration: none;';
echo 'font-weight: bold;';
echo 'font-variant: normal;';
echo 'font-style: normal;';
echo 'font-stretch: normal;';
echo '}';

echo 'A:alink {';
echo 'text-decoration: none;';
echo 'font-weight: bold;';
echo 'font-variant: normal;';
echo 'font-style: normal;';
echo 'font-stretch: normal;';
echo '}';

echo 'A:visited {';
echo 'text-decoration: none;';
echo 'font-weight: bold;';
echo 'font-variant: normal;';
echo 'font-style: normal;';
echo 'font-stretch: normal;';
echo '}';

echo 'a:active {';
echo 'text-decoration: none;';
echo 'color: #003366;'; 
echo 'font-weight: bold;';
echo 'font-variant: normal;';
echo 'font-style: normal;';
echo 'font-stretch: normal;';
echo '}';



echo '#content {
	border-left: 1px solid #666666;
	margin: 0px 0px 0px 0em;
	padding: 0em 5em 5em 5em;
	background: #f3f3f3;
	border-top: 1px solid #666666;
	border-bottom: 1px solid #666666;
	border-right: 1px solid #666666;
	color: #666666;
}';

echo '#content a {
	color: #CE272A;
	font-weight: bold;
}
#content a:hover {
	text-decoration: none;
}
#content ul {
	padding-left: 4em;
	font-family: "Trebuchet MS", Arial, Geneva, san-serif;
	list-style: square;';
echo '</style>';
echo'</head>';
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
?>

<body  bgcolor="#ffffff">

<?
echo'<div id="content">';



if($modulo=="contactarnos"){
echo '<br><center><img src="imagenes/email.gif" border="0"> <br><b>Contactarnos</b></center><br>';


echo '<a href="javascript:history.back()"><< Regresar</a><br><br>';
echo 'Por favor completa el siguiente formulario con tus datos:<br><br>';

echo'<form method=post action="ayuda.php?modulo=contactarnos2">';

echo '<p><table border="0" width="100%" >
<tr>
	<td><b>Nombre :</b></td>
	<td><b><input type=text name=nombre></b></td>
</tr>
<tr>
	<td><b>Correo electr&oacute;nico :</b></font></td>
	<td><input type=text name=email value="@"></td>
</tr>
<tr>
	<td valign="top"><b>Mensaje :</b></td>
	<td><TEXTAREA NAME="mensaje" ROWS="10" COLS="33"></TEXTAREA></td>
</tr>
</table>';


echo '<br><center><INPUT TYPE="submit" name="contactarnos2" value="Enviar"></center>';
echo '</form>';

echo'<BR><BR><BR><CENTER>[<a href="javascript:window.close();">Cerrar esta ventana</a>]</CENTER>';
}


if($modulo=="contactarnos2"){
echo '<br><center><img src="imagenes/email.gif" border="0"> <br><b>Contactarnos</b></center><br>';

echo 'Gracias, el mensaje fue enviado satisfactoriamente.<br> En la manera de lo posible me estare poniendo en contacto con usted.<br><br> <b>Gustavo Reyes</b> <br><br>';

define("_THE","");
define("_AT","::");

$fecha= time();
$fecha = strftime(""._THE." %d/%m/%Y "._AT." %H:%M", $fecha);

mail("greyes@poccms.com", "Contacto  [Control-Code]", " Este mensaje es enviado por:\n\n Nombre: ".$nombre."\n E-mail: ".$email."\n\n ".$mensaje."\n\n Sistema Generado por Control-Code\n Fecha: ".$fecha."");


echo'<BR><BR><BR><CENTER>[<a href="javascript:window.close();">Cerrar esta ventana</a>]</CENTER>';
}



if($modulo=="info"){
echo '<br><center><img src="imagenes/diseno.gif" border="0"> <br><b>Dise&ntilde;o y Desarrollo</b></center><br>';

echo "<font size=4><b>Control-Code</b></font><br>".$version."<br><br>";
echo '<b>Dise&ntilde;o y Desarrollador Web: <br>Gustavo Reyes</b> <a href="mailto:greyes@poccms.com">greyes@poccms.com</a><br><a href="ayuda.php?modulo=contactarnos">Si desea contacto pulse aqu&iacute;.</a><br><br>';
echo "<b>Control-Code</b>, es una herramienta parte del grupo<br><br> <a href='http://www.poccms.com' target='_blank'>POC - http://www.poccms.com</a><br> <em>Simplificando la vida y compartiendo conocimientos<br> Desarrollando ideas, con linea OpenSource</em><br><br>";

echo '<b>Acerca de Control-Code</b><br><br>';
echo '<b>Control-Code</b>, es un sistema de inventario para equipo donde usted puede manipular todos los datos de sus equipos, incluso imprimir c&oacute;digo de barras.<br><br>';
echo 'Este Sistema esta desarrollado totalmente por: <a href="ayuda.php?modulo=contactarnos">Gustavo Reyes</a><br>Todos los derechos reservados &copy;2005 - 2006';


echo'<BR><BR><BR><CENTER>[<a href="javascript:window.close();">Cerrar esta ventana</a>]</CENTER>';
}



echo'</div>';

echo'</body></html>';


?>
