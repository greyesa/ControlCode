<?php

/*
Control-Code Interactiva Web (C)2012
Copyright (C)2000-2005 Gustavo Reyes. Twitter: @greyes
Todos los derechos reservados.
http://www.interactivaweb.com
contacto@interactivaweb.com
Nueva liberación 18-5-2012
*/

//script to time DNS propagation
//(Above script modified slightly to show micro time)
//seems pretty damn quick to me.. I'm getting .0055 sec worstcase badhost times.

//A known good dns name (my own)
   $nametotest = "umg.edu.gt";
  
//Call address test function
   $time_start = getmicrotime();
   testipaddress($nametotest);
   $time_end = getmicrotime();
   $time = $time_end - $time_start;
   echo "Good Host Search took $time seconds<br><br>";

//A known bad name (trust me)
   $nametotest = "providence.mascot.com";
   $time_start = getmicrotime();
   testipaddress($nametotest);
   $time_end = getmicrotime();
   $time = $time_end - $time_start;
   echo "Bad Host Search took $time seconds<br>";
  
  
function getmicrotime(){
   list($usec, $sec) = explode(" ",microtime());
   return ((float)$usec + (float)$sec);
   }

//ip address checking function
//for real use should have a return value but example code
function testipaddress ($nametotest) {
   $ipaddress = $nametotest;
   $ipaddress = gethostbyname($nametotest);
   if ($ipaddress == $nametotest) {
       echo "No ip address for host<br>";
   }
   else {
       echo "good hostname, $nametotest ipaddress = $ipaddress<br>";
   }
}

//Recommended fix for sql applications:
// store url to temporary table
// run second process periodically to
// check urls and update main table

?>
