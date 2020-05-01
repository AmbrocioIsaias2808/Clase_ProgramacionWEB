<!DOCTYPE html>
<html>
    <head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <title>Trabajo</title>
        
    </head>
    <body>
        <div class="container mt-4">
            <div class="row">
                <div class="col-md-6">
                    <form action="index.php" method="POST">
                        <label for="Producto">Producto: </label><br>
                        <input type="text" name="Producto">
                        <br>
                        <label for="Cantidad">Cantidad</label><br>
                        <input type="text" name="Cantidad">
                        <br>
                        <label for="Precio">Precio</label><br>
                        <input type="text" name="Precio">
                        <br>
                        <button type="submit" class="btn btn-success mt-1 text-center">Calcular</button>

                    </form>
                </div>
                <div class="col-md-6 mt-3">
                <?php
                    $producto="XXX";
                    $cantidad='XXX';
                    $precio="XXX";
                    $total="XXX";
                    if(isset($_POST['Producto']) && isset($_POST['Cantidad']) && isset($_POST['Precio'])){
                        $producto=$_POST['Producto'];
                        $cantidad=$_POST['Cantidad'];
                        $precio=$_POST['Precio'];
                        $total=$cantidad*$precio;
                        
                    }
                ?>
                    <h1>Producto: <?php echo $producto?></h1>
                    <p>Al realizar la compra de <?php echo $cantidad?> unidades con un precio de 
                        <?php echo $precio ?> pesos usted tiene que pagar: <?php echo $total ?> pesos
                </p>
                
                </div>
            </div>
        </div>

    </body>

</html>