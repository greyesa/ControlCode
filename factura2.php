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
 <b>Control-Code [U.M.G]</b>
 </div>
<table border="0" width="100%">
<tr>
<td class="content">

<b>Agregar Factura:</b>
[<a href="javascript:opener.location.reload(true); self.close();">Cerrar esta ventana</a>]


<?
if($modulo=="ingresar"){
?>
<form enctype="multipart/form-data" action="factura2.php?modulo=ingresar2" method="post">
<table width="500" border="0">
<tr>
<td><strong>No. de Factura:</strong></td>
<td><input type="text" name="titulo"></td>
</tr>
<tr>
<td><strong>Ubicaci&oacute;n de la imagen<br> de la factura:</strong></td>
<td> <input type="file" name="factura"></td>
</tr>
</table>
 <br><br><input type="submit" name="ingresar2" value="Enviar archivo">
</form>
<?
}



if($modulo=="ingresar2"){

echo '<table width="500" border="0"><tr>';

	$archivo = $_FILES["factura"]["tmp_name"]; 
 	$tamanio = $_FILES["factura"]["size"];
 	$tipo    = $_FILES["factura"]["type"];
 	$nombre  = $_FILES["factura"]["name"];
 	$titulo  = $_POST["titulo"];

 if ( $archivo = $archivo )
 {
    $fp = fopen($archivo, "rb");
    $contenido = fread($fp, $tamanio);
    $contenido = addslashes($contenido);
    fclose($fp); 

    $dab=mysql_connect("$nhost","$nuser","$npass");
    mysql_select_db("$nbase",$dab);
    $qry = "INSERT INTO facturas (nombre_fact,titulo_fact,contenido_fact,tipo_fact,iden_fact) values ('Factura','$titulo','$contenido','$tipo','0')";

    mysql_query($qry);

    if(mysql_affected_rows($dab) > 0)
       print "<td>Se ha guardado la factura en la base de datos. <a href=javascript:history.back()><<- Regresar</a></td>";
    else
       print "<td>NO se ha podido guardar la factura en la base de datos. <a href=javascript:history.back()><<- Regresar</a></td>";
 }
 else
    print "<td>No se ha podido subir el archivo al servidor. <a href=javascript:history.back()><<- Regresar</a></td>";
echo '</tr></table>';

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
