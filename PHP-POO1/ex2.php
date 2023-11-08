<?php
include_once("./Triangle-2.php");
include_once("./Rectangle-2.php"); 

$triangle1 = new Triangle(3,5); 
echo 'Àrea del triangle: ' . $triangle1-> calculArea() . '<br/>'; 

$rectangle1 = new Rectangle(4,8); 
echo 'Àrea del rectangle: ' . $rectangle1-> calculArea(); 
?>