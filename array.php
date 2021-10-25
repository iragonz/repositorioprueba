<?php
    $arrayvacio = array();
    $arraynormal = array(1,2,3,4,5,6,7,8,9,10);
    echo "<pre>";
    print_r($arraynormal);
    echo "</pre>";
    //recorre array
    for ($i=0; $i < count($arraynormal); $i++) { 
        echo "<p>".$arraynormal[$i]."</p>";
    }
    //añade valor al array
    $arraynormal[15] = "MH";
    echo "<pre>";
    print_r($arraynormal);
    echo "</pre>";
    /*for ($i=0; $i < count($arraynormal); $i++) { 
        echo "<p>".$arraynormal[$i]."</p>";
    }*/
    foreach ($arraynormal as $indice) {
        echo "<p>".$indice."</p>";
    }
    //comprobamos
    if(isset($arraynormal[11])){
        echo "existe";
    }else{
        echo "no existe";
    }
    //borra valor
    unset($arraynormal[0]);
    if(isset($arraynormal[0])){
        echo "existe";
    }else{
        echo "no existe";
    }
    //aray asociativo
    $notas2 = array(
        "David" => 8,
        "Ismael" => 9,
        "Uriel" => 6,
        "Ivan" => 10,
        "Aaron" => 7,
        "Hector" => 4
    );
    echo "<pre>";
    print_r($notas2);
    echo "</pre>";
    foreach ($notas2 as $key => $value) {
        $notas2[$key]=($value+1);
        echo $key." tiene un ".($value+1);
    }
    //array multidimensionales
    $tabla = array();
    for ($i=0; $i <= 10; $i++) { 
        $tabla[$i] = array();
        for ($j=0; $j <= 10 ; $j++) { 
            $tabla[$i][$j] = $i * $j;
        }
    }
    echo "<pre>";
    print_r($tabla);
    echo "</pre>";
    //array multidimensional asociativo
    $ciclos = array(
        "DAW" => array ("PR"=>"Programación",
            "BD" => "Bases de datos",
            "DWES" => "Dessarrollo web en entorno servidor"),
        "DAM" => array ("PR"=>"Programación",
            "BD" => "Bases de datos",
            "PMDM" => "Programación multimedia y de dispositivos móviles"
    ));
    foreach ($ciclos as $key => $value) {
        echo $key;
        foreach ($key as $key2 => $value2) {
            echo "<pre>";
            echo $value." tiene el modulos: ".$value2;
            echo "</pre>";
        }
    }
?>