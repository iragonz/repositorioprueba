<?php
    function aleatorio(&$array,$minimo,$maximo, $total,$repite=true){
        for ($i=0; $i < $total; $i++) { 
            array_push($array, rand($minimo, $maximo));
        }
        return $array;
    }
    $array=array();
    aleatorio($array,1,5,5);
    echo "<pre>";
    print_r($array);
    echo "</pre>";
?>