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
    <ul>
        <?php
            for ($i=0; $i < count($data); $i++) { 
                print "<li>".$data[$i]["titulo"]."</li>";
            }
        ?>
    </ul>
    
</body>
</html>