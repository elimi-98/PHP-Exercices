<?php

include_once("./Gat-1.php");
include_once("./Gos-1.php");


$gat1 = new Gat(); 
echo $gat1-> makeSound() . "<br/>";

$gos1 = new Gos(); 
echo $gos1-> makeSound();

?>