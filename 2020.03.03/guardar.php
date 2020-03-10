<?php
  $nombre=$_REQUEST["nombre"];
  $apellido=$_POST["apellido"];
  $email=$_REQUEST["email"];
  $sexo=$_REQUEST["sexo"];
  $fnacio=$_REQUEST["fnacio"];
  //$con=mysqli_connect("localhost","root","");
  $con=mysqli_connect("localhost","root","");

  mysqli_select_db($con,"programacionweb") or die ("No se encuentra la base de datos");
  $resultado=mysqli_query($con,
    "INSERT INTO Visitante (Nombre, Apellidos, Email, Sexo, Fecha_Nacimiento) values ('$nombre', '$apellido', '$email', $sexo, '$fnacio')",
  );
  echo "<script type='text/javascript'>
    function redirect(){
          window.location.href='Ejercicio8.php';
    }
  </script>";
if($resultado)
    print "<script type='text/javascript'>
                redirect();
                alert('Operación realizada con éxito');

            </script>";
else
    print "<script>
            redirect();
            alert('Error Rotundo');

        </script>";
  echo $nombre;
  echo $apellido;
  echo $email;

?>
