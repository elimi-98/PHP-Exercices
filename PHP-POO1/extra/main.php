<?php

include_once "./cine.php"; 
include_once "./peli.php"; 

$peli1 = new Peli("Pulp Fiction", 130, "Quentin Tarantino");
$peli1 = new Peli("El Padrino", 180, "Francis Ford Coppola");
$peli1 = new Peli("La naranja mecánica", 155, "Stanley Kubrick");

$cine1 = new Cine("Yelmo", "Barcelona"); 
$cine1 = new Cine("Cinesa", "Barcelona"); 

$cine1-> introduirPelicula($peli1);
$cine1 -> mostrarDadesPeli();  
$cine1 -> peliMajorDuracio(); 


public function pelisPerDirector(){
    $nomDire = "Tarantino"; 
    echo 'Pelis de ' . $nomDire . ': '; 
    foreach ($this ->llistatPelis as $peli){
        if ($peli -> getDirector() == $nomDire){
            echo $peli -> getNom(); 
        }
    }
}

?>