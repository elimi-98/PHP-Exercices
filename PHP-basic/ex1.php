<?php

$edat = 14; //integer
$numPi = 3.14; //double
$nom = "Eli"; //string
$esCert = false; //boolean 

echo $edat . "<br/>";
echo $numPi . "<br/>";
echo $nom . "<br/>";
echo var_export($esCert, true) . "<br/>"; 

define("NAME", "Elisia"); 
echo "<h1>". NAME ."</h1>"; 
?>