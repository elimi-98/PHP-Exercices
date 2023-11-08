<?php

    session_start(); 

    $_SESSION['nombre'] = $_GET['name']; 
    
    $edad = $_GET['edad']; 
    $sexo = $_GET['sexo']; 

    echo 'El nombre del usuario es: '.  $_SESSION['nombre']; 
    echo "<p> La edad es de $edad años. El sexo del usuario es $sexo.<p> "; 

?>