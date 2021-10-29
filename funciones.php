<?php
    //funcion más básica
    function saludo(){
        echo "Hola Mundo";
    }

    //funcion con parametros
    function saludo2($nombre){
        echo "Hola ".$nombre;
    }
    //parametros predefinidos
    function precio_iva($precio, $iva=0.21){
        echo "El precio con iva es: ".$precio*(1+$iva);
    }
    //con return
    function precio_iva_return($precio, $iva=0.21){
        return $precio*(1+$iva);
    }
    // pasa por referencia con &
    function precio_a_precioiva(&$precio, $iva=0.21){
        $precio = $precio*(1+$iva);
    }
    //añade un valor al array
    function anade(&$array){
        $index = count($array);
        $array[$index] = $index;
    }

    //funcion para objetos
    function agrandar($obj){
        $obj->lado=($obj->lado*2);
    }
?>