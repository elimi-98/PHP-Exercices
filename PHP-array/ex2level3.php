<?php

function nomesPrells($nom) {

    if (strlen($nom)%2 == 0){
        return $nom; 
    } 
}

$noms = array("Marta", "Monica", "Marian", "Laia", "Ari");

$resultado = array_filter($noms, "nomesPrells");
echo implode(", ", $resultado); 

?>