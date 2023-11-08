<?php

$x = array (10, 20, 30, 40, 50,60);

echo 'La longitud inicial del array és: ' . count($x) . '<br/>'; 
unset($x[3]); 
$x = array_values($x);
echo 'La longitud final del array és: ' .  count($x); 


?>