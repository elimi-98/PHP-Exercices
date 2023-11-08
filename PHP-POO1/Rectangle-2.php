<?php
include_once("./Shape-2.php"); 

class Rectangle extends Shape{

    function calculArea(){
        return $this-> ample * $this-> alt; 
    }
}

?>