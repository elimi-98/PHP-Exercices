<?php

function sedasEratostenes($x){

    $primos = [];

    for ($i = 2; $i <= $x; $i++) {
        if ($i != -1) {
            $primos[] = $i;

            for ($j = $i * 2; $j <= $x; $j += $i) {
                $j = -1;
            }
        }
    }

    return $primos;
}

$x = 30;
echo "Números primos hasta $x: " . implode(", ", sedasEratostenes($x));


?>