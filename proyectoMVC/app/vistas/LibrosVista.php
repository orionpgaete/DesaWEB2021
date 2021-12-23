<!DOCTYPE html>
<html>
<head>
  <title>Lista de libros</title>
  <meta charset="utf-8">
</head>
<body>
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
  <a href='<?php print RUTA_APP."libros/crea/"; ?>'>Crear un libro</a>
</body>
</html>