<html>
    <head>
    </head>
    <body>
        <?php
            //Calculo de pares e impares
            $listado=['impares'=>[], 'pares'=>[]];
            for($i=0; $i<=55; $i++){
                if(($i%2)==0) { //es par
                    array_push($listado['pares'], $i);
                }else{
                    array_push($listado['impares'], $i);
                }
            }
        ?>

        <table border='1'>
            <tr>
                <th colspan="<?php echo count($listado['pares'])?>">Numeros pares del 0-55</th>
            </tr>
            <tr>
                <?php 
                    foreach($listado['pares'] as $numpar){
                        echo "<td>{$numpar}</td>";
                    }
                ?>
            </tr>
        </table>

        <h1>Numeros impares del 0-55</h1>
        <ul>
            <?php 
                foreach($listado['impares'] as $numpar){
                    echo "<li>{$numpar}</li>";
                }
            ?>
        </ul>
        
    </body>
</html>