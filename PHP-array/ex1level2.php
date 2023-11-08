<?php

$array1 = array(1, 2, 3, 4, 5, 6, 7, 8); 
$array2 = array(5, 6, 7, 8); 

$interseccio = array_intersect($array1, $array2); 
$mescla = array_merge($array1, $array2); 

echo 'Els nombres en comú son: '. implode(", ", $interseccio)."<br>"; 
echo 'La mescla dels dos arrays: '.  implode(", ", $mescla)."<br>"; 


?>