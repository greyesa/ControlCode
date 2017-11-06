<?php
/***************************************************
Control-Code Interactiva Web (C)2012
Copyright (C)2000-2005 Gustavo Reyes. Twitter: @greyes
Todos los derechos reservados.
http://www.interactivaweb.com
contacto@interactivaweb.com
Nueva liberación 18-5-2012
./libreria/fecha.php                Diciembre 2003
***************************************************/
?>

<?php
//Script hecho por Raul Gerardo Marmolejo Velázquez
//Para el manejo de fechas, horas e información del
//navegador en español.

//Editado Ing. Gustavo Reyes
//g@amigo.net.gt
//http://membres.lycos.fr/phpregionespanol

//Distribución gratuita
//Dudas, comentarios y/o sugerencias
//raul@marmolejo.net
//rm3 KrEaTiOnZ 2002
//http://www.lawebdelprogramador.com



$dia=date("w");
  $Domingo="Domigo";
	$Lunes="Lunes";
	$Martes="Martes";
	$Miercoles="Mi&eacute;rcoles";
	$Jueves="Jueves";
	$Viernes="Viernes";
	$Sabado="S&aacute;bado";

switch($dia)
{
	
	case 0:$dia="$Domingo";break;
	case 1:$dia="$Lunes";break;
	case 2:$dia="$Martes";break;
	case 3:$dia="$Miercoles";break;
	case 4:$dia="$Jueves";break;
	case 5:$dia="$Viernes";break;
	case 6:$dia="$Sabado";break;
}

//date("w") nos devuelve el número del día con el switch case lo
//aplicamos a el día correspondiente en Español.

$mes=date("n");
$Enero=Enero;
$Febrero=Febrero;
$Marzo=Marzo;
$Abril=Abril;
$Mayo=Mayo;
$Junio=Junio;
$Julio=Julio;
$Agosto=Agosto;
$Septiembre=Septiembre;
$Octubre=Octubre;
$Noviembre=Noviembre;
$Diciembre=Diciembre;

switch($mes)
{
	case 1:$mes="$Enero";break;
	case 2:$mes="$Febrero";break;
	case 3:$mes="$Marzo";break;
	case 4:$mes="$Abril";break;
	case 5:$mes="$Mayo";break;
	case 6:$mes="$Junio";break;
	case 7:$mes="$Julio";break;
	case 8:$mes="$Agosto";break;
	case 9:$mes="$Septiembre";break;
	case 10:$mes="$Octubre";break;
	case 11:$mes="$Noviembre";break;
	case 12:$mes="$Diciembre";break;
}

//date("n") nos devuelve el número del mes con el switch case lo
//aplicamos a el mes correspondiente en Español.

$numero=date("j");
$anio=date("Y");  
//Tomamos directos el día del mes y el año.

$difhor = "0"; //Diferencia horaria entre el server y la Laguna.
$ajuste = ($difhor * 60 * 60); //Ajustamos por horas 60 seg* 60 min.
$hora = date("g:i  a",time() + $ajuste); //la hora es igual a la hora del server + el ajuste.


//Mostrar fecha.
print(" Guatemala, ");
print(" $numero ");
print(" $mes ");
print(" del $anio ");
?>

