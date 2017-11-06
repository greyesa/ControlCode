<?php
$stime = gettimeofday();
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
echo '<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">';
echo '<html>';
echo '<head>';
echo '<title>Control-Code</title>';
echo '<!-- Este sistema de inventario de equipo corre con tecnología Control-Code http://www.pocccms.com -->';
echo '<LINK rel="stylesheet" type="text/css" href="basic.css">';
?>
<SCRIPT language="JavaScript">

/*
Script posted and featured on JavaScript Kit
http://javascriptkit.com
*/
function display_image(form) {
selectionname = form.imagename.options[form.imagename.selectedIndex].text;
selection = form.imagename.options[form.imagename.selectedIndex].value;
PreView = window.open("", "Preview", "toolbar=0,location=0,directories=0,status=0,menubar=0,scrollbars=0,resizable=0,copyhistory=0,width=700,height=500");
PreView.document.open();
PreView.document.write("<HTML><HEAD>");
PreView.document.write("<TITLE>Control-Code</TITLE>");
PreView.document.write("</HEAD><BODY BGCOLOR=FFFFFF TEXT=000000>");
PreView.document.write("<FORM><CENTER><B><FONT SIZE=+1>" + 
selectionname + "</FONT></B><HR>");
PreView.document.write("<IMG HSPACE=0 VSPACE=0 " +
"SRC='" + selection + "'>");
PreView.document.write("<HR><FORM><INPUT TYPE='button' VALUE='Cerrar' " +
"onClick='window.close()'></FORM>");
PreView.document.write("</CENTER>");
PreView.document.write("</BODY></HTML>");
PreView.document.close();
    }
</SCRIPT>

<script language="javascript" src="jsval.js"></script>

<SCRIPT LANGUAGE="JavaScript">
/*Abre ventanas pop-up (ayuda)*/
function ayuda(URL) {
day = new Date();
id = day.getTime();
eval("page" + id + " = window.open(URL, '" + id + "', 'toolbar=0,scrollbars=1,location=0,directories=0,status=0,copyhistory=0,statusbar=0,menubar=0,resizable=0,width=600,height=400,left=100,top=50');");
}
</script>

<SCRIPT LANGUAGE="JavaScript">
/*Abre ventanas pop-up (Facturas)*/
function factura(URL) {
day = new Date();
id = day.getTime();
eval("page" + id + " = window.open(URL, '" + id + "', 'toolbar=0,scrollbars=1,location=0,directories=0,status=0,copyhistory=0,statusbar=0,menubar=0,resizable=0,width=800,height=500,left=100,top=50');");
}
</script>

<SCRIPT LANGUAGE="JavaScript">
/*Abre ventanas pop-up (Agregar departamentos)*/
function depa(URL) {
day = new Date();
id = day.getTime();
eval("page" + id + " = window.open(URL, '" + id + "', 'toolbar=0,scrollbars=1,location=0,directories=0,status=0,copyhistory=0,statusbar=0,menubar=0,resizable=0,width=600,height=300,left=100,top=50');");
}
</script>

<SCRIPT LANGUAGE="JavaScript">
/*Abre ventanas pop-up (carta para imprimir)*/
function carta(URL) {
day = new Date();
id = day.getTime();
eval("page" + id + " = window.open(URL, '" + id + "', 'toolbar=0,scrollbars=1,location=0,directories=0,status=0,copyhistory=0,statusbar=0,menubar=0,resizable=0,width=750,height=650,left=100,top=50');");
}
</script>

<SCRIPT LANGUAGE="JavaScript">
/*Abre ventanas pop-up (códigos)*/
function codigo(URL) {
day = new Date();
id = day.getTime();
eval("page" + id + " = window.open(URL, '" + id + "', 'toolbar=0,scrollbars=1,location=0,directories=0,status=0,copyhistory=0,statusbar=0,menubar=0,resizable=0,width=600,height=300,left=100,top=50');");
}
</script>

<style type="text/css">@import url(calendar/calendar-win2k-1.css);</style>
<script type="text/javascript" src="calendar/calendar.js"></script>
<script type="text/javascript" src="calendar/lang/calendar-es.js"></script>
<script type="text/javascript" src="calendar/calendar-setup.js"></script>

<SCRIPT LANGUAGE="JavaScript">

<!-- This script and many more are available free online at -->
<!-- The JavaScript Source!! http://javascript.internet.com -->
<!-- John Munn  (jrmunn@home.com) -->

<!-- Begin
 function putFocus(formInst, elementInst) {
  if (document.forms.length > 0) {
   document.forms[formInst].elements[elementInst].focus();
  }
 }
// The second number in the "onLoad" command in the body
// tag determines the form's focus. Counting starts with '0'
//  End -->
</script>

</head>

<body background="imagenes/bgimglong.gif" marginheight="0" marginwidth="0" topmargin="0" vspace="0" leftmargin="0" hspace="0" style="margin: 0pt; padding: 0pt;" onLoad="putFocus(0,1);">
<div class="twigheader">
 <b>Control-Code [<?php echo $empresa_cabecera; ?>]</b>
 </div>
<table border="0"><tr><td width="739">
<?php include "fecha.php"; ?> 
<?php 
if($num2 == "1" || $num2 == "2"){
echo ' &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; ['.$nombre.'] <a href="libreria/deslogin.php">Salir del Sistema</a>'; 
}
else{
}
?>

</td></tr></table>




