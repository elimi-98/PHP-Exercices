<?php

class Employee{

    //Atributs
    protected $nom = "";
    protected $sou = 0;
 

    //Mètodes propis
    public function initialize($nom, $sou){
        $this -> nom = $nom;
        $this -> sou = $sou; 
    }

    public function imprimir(){
        echo 'Nombre: ' . $this->nom . '<br/>'; 

        if($this->sou > 6000){
            echo 'Ha de pagar impostos.';
        }else if ($this->sou <= 6000){
            echo 'No ha de pagar impostos.'; 
        } 
    }

}

?>