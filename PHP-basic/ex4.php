<?php

function contador($numDeterminat = 10, $interval = 1){
    for($i = 1; $i <= $numDeterminat; $i += $interval){
        echo $i . '<br/>'; 
    }
}

contador(); 

?>