<?php
include_once("./Shape-2.php"); 
class Triangle extends Shape{

    function calculArea(){
        return ($this->ample * $this-> alt) / 2; 
    }
}

?>