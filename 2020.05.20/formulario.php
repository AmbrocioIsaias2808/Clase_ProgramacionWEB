<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css.css">
  </head>
  <body class="bg-dark">
    <div class="container w-50">
    <h1 class="text-center text-white">Captura de nuevos usuarios</h1>
    <h5 class="text-center text-white">Ambrocio Isaías Laureano Castro</h5>
    <form method="post" class="form-group">
      <p>
          <label class="text-light font-weight-bold" for="Nombre" >Nombre: </label>
          <input class="form-control" type="text" placeholder="Escriba su nombre" name="nombre" id="nombre" value="" size="35" maxlength="25"/> <br> 

          <label class="text-light font-weight-bold" for="Apellido">Apellido: </label>
          <input class="form-control" type="text" placeholder="Apellido" id="Apellido" name="apellido" value=""/><br>

          <label class="text-light font-weight-bold" for="email">Email:</label>
          <input class="form-control" type="text" placeholder="Email" id="email" name="email" value=""/>
          <br>
          <label class="text-light font-weight-bold" for="fnacio">Fecha nacimiento:</label>
          <input type="date" class="form-control" id="fnacio" name="fnacio">
          <br>
          <label for="sexo"></label>
          <input type="radio" name="sexo" value="1" checked><span class="text-light font-weight-bold"> Varon </span></input>
          <br><br>
          <label for="sexo"></label>
          <input type="radio" name="sexo" value="0"><span class="text-light font-weight-bold"> Mujer <span></input>
          <br><br>

          <input type="submit" class="btn btn-success btn-block" name="Enviar" value="Enviar">


      </p>
    </form>
    </div>
    <?php include "guardar.php"?>
  </body>
</html>
