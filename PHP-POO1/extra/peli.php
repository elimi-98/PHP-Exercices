<?php

class Peli{

    //Atributs 
    private $nom; 
    private $duracio; 
    private $director; 

    //Constructor
    public function __construct ($nom, $duracio, $director){
        
        $this -> nom = $nom;
        $this -> duracio = $duracio;
        $this -> director = $director;
       
    }
    // Getters
    public function getNom(){
        return $this->nom;
    }
    public function getDuracio(){
        return $this->duracio;
    }
    public function getDirector(){
        return $this-> director;
    }

    public function __toString(){
        return $this -> nom . ' ,' . $this -> duracio . ' , dirigida per: ' . $this -> director . ' .'; 
    }
}

?>