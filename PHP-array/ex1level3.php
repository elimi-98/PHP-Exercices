<?php

function elevarAlCub($numero){
    return $numero * $numero * $numero; 
}

$enters = array(2, 3, 4, 5, 6, 7, 8);

$resultado = array_map("elevarAlCub", $enters);
echo implode(", ", $resultado); 

?>