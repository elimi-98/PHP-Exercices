<?php

function esPrimer($nombre) {
    if ($nombre < 2) {
        return false;
    }
    
    for ($i = 2; $i <= sqrt($nombre); $i++) {
        if ($nombre % $i == 0) {
            return false;
        }
    }
    
    return true;
}

$enters = array(2, 3, 4, 5, 6, 7, 8);

$sumaPrimers = function ($acumulador, $nombre) {
    if (esPrimer($nombre)) {
        return $acumulador + $nombre;
    }
    
    return $acumulador;
};

$resultat = array_reduce($enters, $sumaPrimers, 0);

echo "La suma dels enters primers és: " . $resultat;

?>