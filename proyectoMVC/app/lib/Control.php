<?php
    class Control{

        protected $controls = "Libros";
        protected $metodo = "index";
        protected $parametros = [];


        function __construct(){
            $url = $this->separarURL();
            if ($url!="" && file_exists("../app/controlador/".ucwords($url[0]).".php")){
                $this->controls = ucwords($url[0]);
                unset($url[0]);
            }
            require_once("../app/controlador/".ucwords($this->controls).".php");
            $this->controls = new $this->controls;
           // var_dump($url);
        }

        private function separarURL(){
            $url = "";
            if (isset($_GET["url"])){
                //eliminar el ultimo /
                $url = rtrim($_GET["url"],"/");
                //limpiar caracteres ajenos de URL
                $url = filter_var($url,FILTER_SANITIZE_URL);
                //separamos
                $url = explode("/",$url);
                //regresamos el arreglo
            }
        }
    }


?>