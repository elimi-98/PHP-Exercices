<?php

function isBitten(){

    $numAleatori = rand(1,100); 

    if($numAleatori <= 50){
        return true; 
    } else{
        return false; 
    }
}

if(isBitten()){
    echo 'Charlie te ha mordido el dedo!';
}else {
    echo 'Charlie no te ha mordido el dedo!'; 
}

?>