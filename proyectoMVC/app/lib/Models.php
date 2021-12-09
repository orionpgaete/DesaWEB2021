<?php

    class Models
    {

    public function modelo($modelo){
        require_once("../app/modelos".$modelo.".php");
        return new $modelo();
        }

    public function vista($vista, $datos=[]){
        if (file_exists("../app/vista/".$vista.".php"))
        {
            require_once("../app/vista/".$vista.".php");
        }
        else
        {
            die("La vista no existe");
        }
    }
    }
?>