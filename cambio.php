<?php
    $precio = (int)($_GET["precio"]*100);
    $pago = (int)($_GET["pago"]*100);
    $diferencia = 0;
    $mon2 = 0;
    $mon1 = 0;
    $mon05 = 0;
    $mon02 = 0;
    $mon01 = 0;
    $mon005 = 0;
    $mon002 = 0;
    $mon001 = 0;
    echo "El precio es: ".($precio/100)."€<br>";
    echo "El pago es: ".($pago/100)."€<br>";
    if ($pago<0){
        echo "El pago no puede ser negativo";
    }else{
        if ($precio<0){
            echo "El precio no puede ser negativo";
        }else{
            if ($pago<$precio){
                echo "No es suficiente para pagar";
            }
            if ($pago==$precio){
                echo "Es el importe justo";
            }
            if ($pago>$precio){
                echo "El cambio es: <br>";
                $diferencia = $pago-$precio;
                while ($diferencia>=200) {
                    $mon2++;
                    $diferencia=$diferencia-200;
                }
                while ($diferencia>=100) {
                    $mon1++;
                    $diferencia=$diferencia-100;
                }
                while ($diferencia>=50) {
                    $mon05++;
                    $diferencia=$diferencia-50;
                }
                while ($diferencia>=20) {
                    $mon02++;
                    $diferencia=$diferencia-20;
                }
                while ($diferencia>=10) {
                    $mon01++;
                    $diferencia=$diferencia-10;
                }
                while ($diferencia>=5) {
                    $mon005++;
                    $diferencia=$diferencia-5;
                }
                while ($diferencia>=2) {
                    $mon002++;
                    $diferencia=$diferencia-2;
                }
                while ($diferencia>=1) {
                    $mon001++;
                    $diferencia=$diferencia-1;
                }
                echo "<li>Monedas de 2€: ".$mon2."</li>";
                echo "<li>Monedas de 1€: ".$mon1."</li>";
                echo "<li>Monedas de 50 céntimos: ".$mon05."</li>";
                echo "<li>Monedas de 20 céntimos: ".$mon02."</li>";
                echo "<li>Monedas de 10 céntimos: ".$mon01."</li>";
                echo "<li>Monedas de 5 céntimos: ".$mon005."</li>";
                echo "<li>Monedas de 2 céntimos: ".$mon002."</li>";
                echo "<li>Monedas de 1 céntimo: ".$mon001."</li>";
            }
        }
    }
?>

<a href="codigo.php?paginaPHP=<?php
$pagina = basename($_SERVER['SCRIPT_FILENAME']);
echo $pagina;?>"
>Ver el codigo</a>