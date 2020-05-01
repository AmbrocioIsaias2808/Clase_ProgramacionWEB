<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" type="text/css" href="css.css">
  </head>
  <body>
    <div class="container">
    <h1 class="text-center">Captura de nuevos usuarios</h1>
    <h5 align="center">Ambrocio Isaias Laureano Castro</h5>
    <form method="post">
      <p>
          <label class="text-labels"for="Nombre" >Nombre: </label>
          <input class="text-input" type="text" placeholder="Escriba su nombre" name="nombre" id="nombre" value="" size="35" maxlength="25"/> <br> <br>

          <label class="text-labels"for="Apellido">Apellido: </label>
          <input class="text-input" type="text" placeholder="Apellido" id="Apellido" name="apellido" value=""/><br> <br>

          <label class="text-labels"for="email">Email:</label>
          <input class="text-input" type="text" placeholder="Email" id="email" name="email" value=""/>
          <br><br>
          <label class="text-labels"for="fnacio">Fecha nacimiento:</label>
          <input class="text-input" type="date" class="form-control" id="fnacio" name="fnacio">
          <br><br>
          <label for="sexo"></label>
          <input type="radio" name="sexo" value="1" checked>Varon</input>
          <br><br>
          <label for="sexo"></label>
          <input type="radio" name="sexo" value="0">Mujer</input>
          <br><br>

          <input type="submit" class="btn" name="Enviar" value="Enviar">


      </p>
    </form>
    </div>
    <?php include "guardar.php"?>
  </body>
</html>
