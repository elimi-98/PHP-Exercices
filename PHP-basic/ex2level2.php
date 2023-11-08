<?php

function xocolata($xocolatina) {
    return $xocolatina * 1; 
}

function chicles($chicle) { 
    return $chicle * 0.5; 
}

function caramels($caramel) {
    return $caramel * 1.5; 
}

function preuTotal() {
    $xocolatina = 3; 
    $chicle = 2; 
    $caramel = 4; 

    return xocolata($xocolatina) + chicles($chicle) + caramels($caramel); 
}

echo 'Has de pagar '. preuTotal() . '€'; 

?>