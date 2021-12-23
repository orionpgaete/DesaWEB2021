<?php
//abrir la base de datos de MySQL

 class MySQLdb
 {
     private $host = "localhost";
     private $usuario = "root";
     private $clave = "";
     private $db = "biblioteca";
     private $conn;

     public function __construct()
     {
         $this->conn = mysqli_connect($this->host, $this->usuario, $this->clave, $this->db);
         if (mysqli_connect_errno())
            {
                printf("Error en la conexion con la base de datos: %s",
                mysqli_connect_errno());
                exit();
            }
        else
            {
                //print "Conexion exitosa";    
            }

        if(!mysqli_set_charset($this->conn, "utf8"))
        {
            printf("Error en la conversion de caracteres: %s", mysqli_error($this->conn));
            exit();
        }
        else
        {
        //    print "El conjunto de caracteres es: ".mysqli_character_set_name($this->conn);
        }
     }

     public function querySelect($sql){
        $data = array();
        $r = $this->conn->query($sql);
        while($row= mysqli_fetch_assoc($r))
          array_push($data,$row);
        return $data;
      }
 }
?>