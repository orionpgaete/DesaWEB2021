<?php
    //llamar al modelo
    require_once("modelos/libro.php");

    $libro = new Libros();

    $datos = $libro->getLibros();
   // var_dump($datos);

    //llamar a la vista

    require_once("vistas/libro.php");
?>