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
echo '<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd"><head><title>Control-Code</title></head>';
?>
<SCRIPT LANGUAGE="JavaScript">
<!-- Begin
function printPage() {
if (window.print) {
agree = confirm('Control-Code \n\n ¿Deseas imprimir este código de barras?');
if (agree) window.print(); 
   }
}
//  End -->
</script>
<?php


// Parametros para el Código de Barras
$ancho="170";	
$altura="90";	
$formato="jpeg";					
$calidad="100";

// Area inicial del codigo, alfanumerico.
$codigo_inicial = "LIB";

// Valores de impresión.
$valor_inicial = "0";
$valor_final = "40";

echo '<body OnLoad="printPage()">';

for($i = $valor_inicial; $i<$valor_final; $i++){
?>

<IMG SRC="barcode.php?barcode=<?php echo ''.$codigo_inicial.$contador[$i].''; echo $i + 1; ?>&width=<?php echo ''.$ancho.''; ?>&height=<?php echo ''.$altura.''; ?>&format=<?php echo ''.$formato.''; ?>&quality=<?php echo ''.$calidad.''; ?>" border="0">

<?php
}

echo'</body>';
echo'</html>';
?>
