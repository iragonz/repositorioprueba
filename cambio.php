<?php
    $precio = $_GET["precio"];
    $pago = 10;
    $diferencia = 0;
    $mon2 = 0;
    $mon1 = 0;
    $mon05 = 0;
    $mon02 = 0;
    $mon01 = 0;
    $mon005 = 0;
    $mon002 = 0;
    $mon001 = 0;
    if ($pago<$precio){
        echo "No es suficiente para pagar";
    }
    if ($pago==$precio){
        echo "Es el importe justo";
    }
    if ($pago>$precio){
        $diferencia = $pago-$precio;
        echo "la diferencia es: ".$diferencia;
        while ($diferencia>=2) {
            $mon2++;
            $diferencia=$diferencia-2;
        }
        while ($diferencia>=1) {
            $mon1++;
            $diferencia=$diferencia-1;
        }
        while ($diferencia>=0.5) {
            $mon05++;
            $diferencia=$diferencia-0.5;
        }
        while ($diferencia>=0.2) {
            $mon02++;
            $diferencia=$diferencia-0.2;
        }
        while ($diferencia>=0.1) {
            $mon01++;
            $diferencia=$diferencia-0.1;
        }
        while ($diferencia>=0.05) {
            $mon005++;
            $diferencia=$diferencia-0.05;
        }
        while ($diferencia>=0.02) {
            $mon002++;
            $diferencia=$diferencia-0.02;
        }
        while ($diferencia>=0.01) {
            $mon001++;
            $diferencia=$diferencia-0.01;
        }
        echo "Monedas de 2€: ".$mon2;
        echo "Monedas de 1€: ".$mon1;
        echo "Monedas de 50 céntimos: ".$mon05;
        echo "Monedas de 20 céntimos: ".$mon02;
        echo "Monedas de 10 céntimos: ".$mon01;
        echo "Monedas de 5 céntimos: ".$mon005;
        echo "Monedas de 2 céntimos: ".$mon002;
        echo "Monedas de 1 céntimo: ".$mon001;
    }
?>