<?php
    require 'vehiculo.php';

    $auto = new vehiculo('Ford', 'Azul', '123456789', '987654321');
    $auto->setPropietario("Laureano Castro Ambrocio Isaías");

    echo "Marca: " . $auto->marca . '<br>';
    
    $venta = $auto->valorVenta(500000,20);

    echo "Felicidades " . $auto->getPropietario() .'<br>' .
    ' usted es el propietario del vehiculo ' . $auto->marca . 
    ' el cual tiene un valor de venta de ' . $venta;

?>