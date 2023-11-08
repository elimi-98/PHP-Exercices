<?php

function preuTrucada($minuts) {

    if($minuts <= 3){
        return 'La trucada té un cost de 10 centims.'; 
    } else if($minuts > 3){
        $minutsExtra = $minuts - 3; 
        $preuFinal = ($minutsExtra * 5) + 10; 
            if($preuFinal > 100){
                $preuFinal = $preuFinal/100;
                return 'La trucada té un cost de '. $preuFinal.' €.'; 
            }
        return 'La trucada té un cost de ' . $preuFinal . 'céntims.3'; 
        }

    }

$minuts = 30; 

echo preuTrucada($minuts);

?>