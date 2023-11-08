<?php

$x = 2;
$y = 3;

$n = 4;
$m = 5; 

echo $x . '<br>';
echo $y . '<br>';
echo "La suma de ". $x. "+". $y . " es igual a: " . ($x + $y) .'<br/>';
echo "La resta de ". $x. "-". $y . " es igual a: " . ($x - $y) .'<br/>';
echo "El producte de ". $x. "*". $y . " es igual a: " . ($x * $y) .'<br/>';
echo "El mòdul de ". $x. "%". $y . " es igual a: " . ($x % $y) .'<br/>';

echo $n . '<br>';
echo $m . '<br>';
echo "La suma de ". $n. "+". $m . " es igual a: " . ($n + $m) .'<br/>';
echo "La resta de ". $n. "-". $m . " es igual a: " . ($n - $m) .'<br/>';
echo "El producte de ". $n. "*". $m . " es igual a: " . ($n * $m) .'<br/>';
echo "El mòdul de ". $n. "%". $m . " es igual a: " . ($n % $m) .'<br/>';

echo 'El doble de ' . $x . ' és: ' . $x*2 .'<br/>'; 
echo 'El doble de ' . $y . ' és: ' . $y*2 .'<br/>';
echo 'El doble de ' . $n . ' és: ' . $n*2 .'<br/>';
echo 'El doble de ' . $m . ' és: ' . $m*2 .'<br/>';
echo 'La suma de ' . $x . '+' . $y . '+' . $n . '+' . $m . ' és: ' . $x + $y + $n + $m . '.' .'<br/>';
echo 'El producte de totes les variables és: ' . $x * $y * $n * $m . '.' .'<br/>'; 

function calculadora($x, $y){
    $operacio = ''; 

    switch(operacio){
        case 'suma': 
            return $x + $y;
        case 'resta': 
            return $x - $y;
        case 'multiplicacio': 
            return $x * $y;
        case 'divisio': 
            return $x / $y;  
    } 
}

?>
