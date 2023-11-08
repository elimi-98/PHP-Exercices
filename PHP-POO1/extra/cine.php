<?php

class Cine{
    
    //Atributs
    private $nom;
    private $poblacio; 
    private $llistatPelis;


    //Constructor
    public function __construct($nom, $poblacio){
        $this->nom = $nom;
        $this -> poblacio = $poblacio;  
        $this -> llistatPelis [] = array();
    }

    //Mètodes propis 
    public function introduirPelicula($peli){
        $this -> llistatPelis[] = $peli; 
    }
    public function mostrarDadesPeli(){
       
        echo 'Cinema: ' . $this -> nom . ', té aquestes pelis: '; 
        foreach($this -> llistatPelis as $peli){
            echo $peli;
        }
    }

    public function peliMajorDuracio(){
        
        $duracioMax = 0; 
        $peliMesLlarga = null; 

        foreach($this -> llistatPelis as $peli){
            $duracio = $peli -> getDuracio();
            if($duracio > $duracioMax){
                $duracioMax = $duracio;
                $peliMesLlarga = $peli; 
            }
        }

        if ($peliMesLlarga == null){
            echo 'No hi ha peli'; 
        } else {
            echo 'La peli més llarga és ' . $peliMesLlarga; 
        }
    }

}
?>