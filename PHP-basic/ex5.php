<?php

function grauEstudiant($nota){
 
    switch ($nota){
        case $nota >= 60;
            return 'Primera Divisió';
        case $nota >= 45 && $nota <= 59;
            return 'Segona Divisió'; 
        case $nota >= 33 && $nota <= 45;
            return 'Tercera Divisió'; 
        case $nota < 33; 
        return 'Lalumne ha de reprovar'; 
        }
    }


echo grauEstudiant(20);
?>