<?php

abstract class Shape{
    
    //Atributs
    protected $ample;
    protected $alt;

    function __construct($ample, $alt){
        $this-> ample = $ample; 
        $this-> alt = $alt; 
    }
  abstract function calculArea();
}

?>