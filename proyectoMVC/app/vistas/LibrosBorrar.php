<!DOCTYPE html>
<html>
<head>
  <title>Dar de alta un libro</title>
  <meta charset="utf-8">
</head>
<body>
  <form action='<?php print RUTA_APP."libros/borrar/"; ?>' method="POST">
    <table>
      <tr><td><label for="titulo">Titulo:</label></td>
        <td><input type="text" name="titulo" disabled="disabled" value="<?php print $data["titulo"]; ?>"></td>
      </tr>
      <tr><td><label for="autor">Autor:</label></td>
        <td><input type="text" name="autor" disabled="disabled" value="<?php print $data["autor"]; ?>"></td>
      </tr>
      <tr><td><label for="editorial">Editorial:</label></td>
        <td><input type="text" name="editorial" disabled="disabled" value="<?php print $data["editorial"]; ?>"></td>
      </tr>
      <tr><td><input type="hidden" value="<?php print $data["id"]; ?>" name="id"></td>
        <td><input type="submit" value="Enviar"></td>
      </tr>
    </table>
    <p>ADVERTENCIA: Una vez borrado el registro NO se podrá recuperar.</p>
  </form>
  <a href='<?php print RUTA_APP."libros/"; ?>'>Regresar</a>
</body>
</html>