<?php

$alumnes = array(
    "Bruno" => array(5, 6, 9, 7, 5),
    "Ari" => array(9, 9, 8, 7, 8),
    "Álvaro" => array(6, 7, 7, 8, 6),
    "Sonia" => array(8, 7, 9, 6, 8),
);

calculMitjana($alumnes); 

function calculMitjana($alumnes){
    $totalAlumnes = count($alumnes); 
    $mitjanaClasse = 0; 

    foreach($alumnes as $alumnes => $notes){
        $mitjanaAlumne = array_sum($notes) / count($notes);
        echo 'La mitjana de lalumne és: '. $mitjanaAlumne. "<br>";
        $mitjanaClasse += $mitjanaAlumne;
    }

    $mitjanaClasse /= $totalAlumnes; 
    echo 'La mitjana de la classe és: '. $mitjanaClasse. "<br>";
}



?>