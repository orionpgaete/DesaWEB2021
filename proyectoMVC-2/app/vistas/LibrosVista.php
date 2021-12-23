<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Lista de Libros Biblioteca</h2>

    <table border='1'>
        <thead>
            <th>id</th>
            <th>Titulo</th>
            <th>Autor</th>
            <th>Editorial</th>
            <th>Modificar</th>
            <th>Borrar</th>
        </thead>
        <tbody>
            <?php
                for ($i=0; $i < count($data); $i++) { 
                    print "<tr>";
                        print "<td>".$data[$i]["id"]."</td>";
                        print "<td>".$data[$i]["titulo"]."</td>";
                        print "<td>".$data[$i]["autor"]."</td>";
                        print "<td>".$data[$i]["editorial"]."</td>";
                        print "<td><a href='".RUTA_APP."libros/modificar/".$data[$i]["id"]."'>Modificar</a></td>";
                        print "<td><a href='".RUTA_APP."libros/borrar/".$data[$i]["id"]."'>Borrar</a></td>";
                    print "</tr>";
                }
            ?>
        </tbody>
        
    </table>
    <a href='<?php print RUTA_APP."libros/crear/";?>'>Registrar un nuevo Libro</a>
    
</body>
</html>