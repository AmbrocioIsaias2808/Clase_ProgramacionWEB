<?php
  if(isset($_POST['Enviar'])){
      if(isset($_POST["nombre"]) && isset($_POST["apellido"]) && $_POST["email"] && $_POST["sexo"] && $_POST["fnacio"]){
            $nombre=$_POST["nombre"];
            $apellido=$_POST["apellido"];
            $email=$_POST["email"];
            $sexo=$_POST["sexo"];
            $fnacio=$_POST["fnacio"];
            //$con=mysqli_connect("localhost","root","");
            try{
            $con=mysqli_connect("localhost","root","");

            mysqli_select_db($con,"programacionweb") or die ("No se encuentra la base de datos");
            $resultado=mysqli_query($con,
              "INSERT INTO Visitante (Nombre, Apellidos, Email, Sexo, Fecha_Nacimiento) values ('$nombre', '$apellido', '$email', $sexo, '$fnacio')",
            );
            echo '<div class="alert alert-success w-50 container" role="alert">
                Información guardada satisfactoriamente
            </div>';
          }catch(Exception $e){
            echo '<div class="alert alert-danger w-50 container" role="alert">
                    Algo Salio Mal en la conexión
                 </div>';
          }
      }else{
        echo '<div class="alert alert-danger w-50 container" role="alert">
                   Verifica que todos los campos esten llenos
                 </div>';
      }
  }
/*    if($resultado)
        print "<script type='text/javascript'>
                    window.location.href='Ejercicio8.php';
                    alert('Operación realizada con éxito');

                </script>";
    else
        print "<script>
                window.location.href='Ejercicio8.php';
                alert('Error Rotundo');

            </script>";*/
  /*echo $nombre;
  echo $apellido;
  echo $email;*/

?>
