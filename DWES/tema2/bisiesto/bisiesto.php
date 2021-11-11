<?php
    $anio = $_GET["bisiesto"];
    $esbisiesto="no";
    echo "El año es: ".$anio."<br>";
    if ($anio%4==0){
        $esbisiesto="si";
        if ($anio%100==0){
            $esbisiesto="no";

            if($anio%400==0){
                $esbisiesto="si";
            }
        }
    }
    echo "¿Es bisiesto? ".$esbisiesto;
?>
<br>
<a href="codigo.php?paginaPHP=<?php
$pagina = basename($_SERVER['SCRIPT_FILENAME']);
echo $pagina;?>"
>Ver el codigo</a>