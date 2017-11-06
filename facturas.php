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
include "libreria/cabecera.php";
?>
<table border="0" width="660">
<tr>
<td class="content"> 

<a href="index.php"><< M&oacute;dulos</a> <a href="equipo.php?modulo=principal&tipo=todo"><<- Men&uacute;</a> <a href=javascript:history.back()><<- Regresar</a><br><br>
<img src="imagenes/facturas.gif" border="0"><br><br>
<?
/* Solo tiene acceso el Administrador */
if($num2 == "1"){
echo '[<a href="equipo.php?modulo=ingresar&equipo=cpu">Ingresar Equipo Manualmente</a>] [<a href="#">Ingresar Equipo por la Red</a>] [<a href="facturas.php?modulo=ingresar">Ingresar Facturas</a>] <br> [<a href="importar.php?modulo=formulario">Importar datos desde CSV</a>]<br><br>';
echo '[<a href="facturas.php?modulo=ver">Ver Facturas Ingresadas</a>]<br><br>';

if($modulo=="ver"){

$base="$nbase";
$con=mysql_connect("$nhost","$nuser","$npass");
mysql_select_db($base,$con);

if (!isset($pg))
$pg = 0; // $pg es la pagina actual
$cantidad=156; // cantidad de resultados por p&aacute;gina
$inicial = $pg * $cantidad;
$pegar = "SELECT * FROM facturas ORDER BY id_fact desc LIMIT $inicial,$cantidad";
$cad = mysql_db_query($base,$pegar) or die (mysql_error());

$contar = "select * from facturas ORDER BY id_fact desc"; 
$contarok= mysql_db_query($base,$contar);
$total_records = mysql_num_rows($contarok);
$pages = intval($total_records / $cantidad);
echo '<table border="0" width="660"><tr><td width="130"><div align="center"><b>Imagen</b></div></td><td><b>Datos</b> </td></tr>';
while ($row=mysql_fetch_array($cad))
{
echo '<tr><td><div align="center"><a href=javascript:factura("imagenfactura.php?id_fact='.$row["id_fact"].'")><img src="ver.php?id_fact='.$row["id_fact"].'" width="'.$fact_ancho.'" height="'.$fact_altura.'" border="0" title="'.$row["titulo_fact"].'"></a></div></td><td><b>No. de Factura:</b> '.$row["titulo_fact"].'<br><b>Tipo de Imagen:</b> '.$row["tipo_fact"].'</td>';
//echo '<img src="ver.php?titulo_fact="> ';
}
mysql_free_result($cad);
echo '</tr></table><br><br>';

// Creando los enlaces de paginación
echo "<center>P&aacute;ginas:<br>";
if ($pg <> 0)
{
$url = $pg - 1;
echo "<a href='facturas.php?modulo=ver&pg=".$url."&tipo=".$tipo."'>« Anterior</a> ";
}
else {
echo " ";
}

for ($i = 0; $i<($pages + 1); $i++) {
if ($i == $pg) {
echo "<font color=ff0000><b> $i </b></font>";
}
else {
echo "<a href='facturas.php?modulo=ver&pg=".$i."&tipo=".$tipo."'>".$i."</a> ";
}
}

if ($pg < $pages) {
$url = $pg + 1;
echo "<a href='facturas.php?modulo=ver&pg=".$url."&tipo=".$tipo."'>Siguiente »</a>";
}
else {
echo " ";
}



}



if($modulo=="ingresar2"){

echo '<table width="660" border="0"><tr>';

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
       print "<td>Se ha guardado la factura en la base de datos.</td>";
    else
       print "<td>NO se ha podido guardar la factura en la base de datos.</td>";
 }
 else
    print "<td>No se ha podido subir el archivo al servidor.</td>";
echo '</tr></table>';
}

if($modulo=="ingresar"){
?>
<form enctype="multipart/form-data" action="facturas.php?modulo=ingresar2" method="post">
<table width="660" border="0">
<tr>
<td><strong>No. de Factura:</strong></td>
<td><input type="text" name="titulo"></td>
</tr>
<tr>
<td><strong>Ubicaci&oacute;n de la imagen de la factura:</strong></td>
<td> <input type="file" name="factura"></td>
</tr>
</table>
 <br><br><input type="submit" name="ingresar2" value="Enviar archivo">
</form>
<?
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
include "libreria/final.php";
?>
