<?php

class conexion{

    public static function db()
    {
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "biblioteca";

        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);

        // Check connection
        if ($conn->connect_error) {
            die("Conexion Fallida¡¡¡¡¡¡: " . $conn->connect_error);
            }
        else{
            $conn->query("SET NAMES 'utf8'");
            
            return $conn;

        }
    }

}

?>