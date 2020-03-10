<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h1>Captura de nuevos usuarios</h1>
    <form action="guardar.php" method="post">
      <p>
          <label for="Nombre" >Nombre: </label>
          <input type="text" placeholder="Escriba su nombre" name="nombre" id="nombre" value="" size="35" maxlength="25"/> <br> <br>

          <label for="Apellido">Apellido: </label>
          <input type="text" placeholder="Apellido" id="Apellido" name="apellido" value=""/><br> <br>

          <label for="email">Email:</label>
          <input type="text" placeholder="Email" id="email" name="email" value=""/>
          <br><br>
          <label for="fnacio">Email:</label>
          <input type="date" class="form-control" id="fnacio" name="fnacio">
          <br><br>
          <input type="radio" name="sexo" value="1">Varon</input>
          <br><br>
          <input type="radio" name="sexo" value="0">Mujer</input>
          <br><br>

          <input type="submit" name="" value="Enviar">
          <input type="reset">


      </p>
    </form>
  </body>
</html>
