<?php
  $nombre=$_REQUEST["nombre"];
  $apellido=$_POST["apellido"];
  $email=$_REQUEST["email"];
  $sexo=$_REQUEST["sexo"];
  //$con=mysqli_connect("localhost","root","");
  $con=mysqli_connect("localhost","root","");

  mysqli_select_db($con,"programacionweb") or die ("No se encuentra la base de datos");
  $resultado=mysqli_query($con,
    "INSERT INTO Visitante (Nombre, Apellidos, Email, Sexo) values ('$nombre', '$apellido', '$email', $sexo)",
  );
if($resultado)
    print "<script>
                alert('Operación realizada con éxito');
                windows.location.href='Ejercicio8.php';
            </script>";

  echo $nombre;
  echo $apellido;
  echo $email;

?>
