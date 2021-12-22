<?php
    class Control{

        protected $controlador = "Libros";
        protected $metodo = "index";
        protected $parametros = [];


        function __construct(){
            $url = $this->separarURL();
            if ($url!="" && file_exists("../app/controlador/".ucwords($url[0]).".php")){
                $this->controlador = ucwords($url[0]);
                unset($url[0]);
            }
            require_once("../app/controlador/".ucwords($this->controlador).".php");
            $this->controlador = new $this->controlador;

                /*** Inciamos el método ***/
            if (isset($url[1])) {
                if (method_exists($this->controlador, $url[1])) {
                $this->metodo = $url[1];
                unset($url[1]);
                }
            }
            //    
            $this->parametros = $url ? array_values($url) : [];
        
            call_user_func_array(
                [$this->controlador, $this->metodo], 
                $this->parametros
             );
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