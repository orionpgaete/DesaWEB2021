<?php

class Libros extends Controlador{

    private $modelo;

    function __construct(){
        $this->modelo = $this->modelo("LibrosModelo");     
    }

    public function index(){
        $data = $this->modelo->getLibros();

        //llamamos a la vista
        $this->vista("LibrosVista", $data);
    }

    public function modificar($id){
        print "Modificar: ".$id;
    }

    public function borrar($id){
        print "Borrar: ".$id;
    }

    public function crear($id){
        $this->vista("LibrosCrea", $data);
    }

    
}
?>