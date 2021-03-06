<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arrays</title>

     <!-- CSS -->
     <link href="/Tema3/webroot/css/style.css" rel="stylesheet" type="text/css">
</head>
<body>
    
    <h1>Arrays</h1>

    <!-- PHP -->
    <?php

        // Crear un array vacío //
        echo "<h2>Array Vacío</h2>";
        $arrayVacio = array();
        var_dump($arrayVacio);
        echo "<br>";


        // Crear un array con 10 valores (ejemplo de como no se debe hacer) //
        echo "<h2>Array de 10 posiciones (ejemplo mal)</h2>";
        $array10 = array(10);
        var_dump($array10);
        echo "<br>";


        // Crear un array con 6 valores (string, int, etc) //
        echo "<h2>Array de notas</h2>";
        $notas = array(8,9,"Diez",7,8,4);

        // Para que lo imprima bonito (<pre>)
        echo "<pre>";
        print_r($notas);
        echo "</pre><br>";


        // Recorrer el array (con un bucle for) //
        echo "<h2>Recorrer un array con for</h2>";

        for($i = 0; $i < count($notas); $i++)
        {

            echo "<p>" . $notas[$i] . "</p>";
        }


        // Recorrer un array con posiciones vacías //
        echo "<h2>Recorrer un array con posiciones vacías</h2>";

        // Solo tengo hasta la posicion 7, la 10 no vale...
        $notas[10] = "MH";

        // se recorre (da error)
        for($i = 0; $i < count($notas); $i++)
        {
            echo "<p>" . $notas[$i] . "</p>";   // Da error pq hay pos vacias en el medio
        }
        

        // Recorrer un array con foreach //
        echo "<h2>Recorrer un array con foreach</h2>";

        // Vamos a hacerlo bien (mediante foreach)
        foreach($notas as $value)
        {
            echo "<p>" . $value . "</p>";
        }


        // Comprobar si existe una posicion //
        echo "<h2>Comprobar si existe una posicion</h2>";

        if(isset($notas[8]))
            echo "Sí existe";
        else
            echo "No existe";


        // Borrar valores de un array //
        echo "<h2>Borrar una posicion</h2>";

        // Borramos el elemento de la posicion 0
        unset($notas[0]);

        foreach($notas as $value)
        {
            echo "<p>" . $value . "</p>";
        }

        // Arrays asociativos //
        echo "<h2>Arrays asociativos</h2>";

        $notasAsociativas = array("Ismael"=>"9","David"=>"7","Manolo"=>"6");

        // Lo imprimo antes de modificar
        foreach($notasAsociativas as $value)
        {
            echo "<p>" . $value . "</p>";
        }

        echo '<br>';

        // Lo recorro e incremento en uno
        foreach($notasAsociativas as $key => $value)
        {
            // Se incrementa un punto de nota para cada persona del array
            $notasAsociativas[$key] = $value + 1;

            // Se imprime
            echo "<p>" . $key . "</p>";
        }

        echo '<br>';

        // Lo imprimo despues de modificar
        foreach($notasAsociativas as $value)
        {
            echo "<p>" . $value . "</p>";
        }
        

        // Array Multidimensional //
        echo "<h2>Array Multidimensional</h2>";

        $tabla = array();

        // Creo las tablas de multiplicar (hago solo hasta la del 3)
        for ($i=0; $i < 3; $i++)
        { 
        
            $tabla[$i] = array();

            for ($j=0; $j < 10; $j++) { 
                
                $tabla[$i][$j] = $i * $j;
            }
            
        }

        // Lo muestro
        echo "<pre>";
        print_r($tabla);
        echo "</pre><br>";


        // Array multidimensional que tb es array asociativo //
        echo "<h2>Array Multidimensional y Asociativo</h2>";

        $ciclos = array(

            "DAW" => array("PR" => "Programacion",
                      "BD" => "Bases de Datos",
                       "DWES" => "Desarrollo Web Entorno Servidor"
                    ),
            
            "DAM" => array("PR" => "Programacion",
                    "BD" => "Bases de Datos",
                     "DWEC" => "Desarrollo Web Entorno Cliente"
                ),

            "ASIR" => array("ASO" => "Administracion de Sistemas",
                  "BD" => "Bases de Datos",
                   "DWES" => "Desarrollo Web Entorno Servidor"
                )
        );

        // 1ª forma de imprimirlo
        echo "<h3>1ª forma de imprimirlo</h3>";
        echo "<pre>";
        print_r($ciclos);
        echo "</pre><br>";
        
         // 2ª forma de imprimirlo
        echo "<h3>2ª forma de imprimirlo</h3>";
        foreach($ciclos as $key => $value)
        {

            echo "<p><b>" . $key . "</b></p>";

        foreach ($ciclos[$key] as $clave => $valor) 
        {

             echo "<p>" . $clave . " = " . $valor . "</p>";

        }

        }
       

         //// Funciones de un array ////
         echo "<h2>Funciones para recorrer un array</h2>";

        // Array actual //
        echo "<h3>Array actual (por defecto el primero) -- Funcion <i>current</i></h3>";
        print_r (current($ciclos));
         
        // Array siguiente
        echo "<h3>Array siguiente -- Funcion <i>next</i></h3>";
        print_r (next($ciclos));

        // Array actual //
        echo "<h3>Array actual (ahora la pos ha cambiado) -- Funcion <i>current</i></h3>";
        print_r (current($ciclos));
         
        // Si ahora hacemos un while each, mostrará a partir de la posicion en la que se encuentra el array
        echo "<h3>Se muestra el array --  <i>while each</i></h3>";

        /*  // Hay que comentarlo pq si no la pos es la ultima y no se muestra la 2ª forma
        while ($ciclo = each($ciclos))
        {
            // echo $ciclo . "<br>";
            echo "<pre>";
            print_r($ciclo);
            echo "</pre><br>";
        }
        */
        
        /* Nota:
            - Aparece como duplicado 
            (con los 4 elementos, tanto los 0 y 1, como key y value)

        */

        echo "<h4>2ª forma</h4>";

        while ($ciclo = each($ciclos))
        {
            echo "<pre>";
            echo "El ciclo es: " . $ciclo[0] . " y las asignaturas son: ";
            print_r($ciclo[1]);
            echo "</pre><br>";
        }

        // Cambiar la posicion del puntero del array (ahora vuelve al principio y si se muestran)
        echo "<h3>Se reinicia la posicion del puntero -- Funcion <i>reset</i></h3>";

        reset($ciclos);

        while ($ciclo = each($ciclos))
        {
            echo "<pre>";
            echo "El ciclo es: " . $ciclo[0] . " y las asignaturas son: ";
            print_r($ciclo[1]);
            echo "</pre><br>";
        }


    ?>

</body>
</html>


----------------------


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arrays Básicos</title>

     <!-- CSS -->
     <link href="/Tema3/webroot/css/style.css" rel="stylesheet" type="text/css">
</head>
<body>
    
    <h1>Arrays Básicos</h1>

    <!-- PHP -->
    <?php

        // Ejercicio 1 //
        echo "<h2>1. Escribe un programa que dado un array, lo ordene y devuelva
            otro array sin que haya elementos repetidos.</h2>";

        // Creo el arary
        $datos = array(2,5,9,7,6,3,1,5,4,8,3,2,6,9,3,5,1,2,3);

        // Lo imprimo sin ordenar
        echo "<h3>Array Inicial</h3>";
        echo "<pre>";
        print_r($datos);
        echo "</pre>";

        // Lo imprimo ordenado
        echo "<h3>Array ordenado</h3>";

        sort($datos);

        echo "<pre>";
        print_r($datos);
        echo "</pre>";

        // Lo imprimo sin duplicados
        echo "<h3>Array sin valores duplicados</h3>";

        // Se crea otro array que recoge el array sin duplicados
        $arraySinDuplicados = array_unique($datos);
        
        // lo ordeno (para que ordene las key tb)
        sort($arraySinDuplicados);

        echo "<pre>";
        print_r($arraySinDuplicados);
        echo "</pre>";



        // Ejercicio 2 //
        echo "<h2>2. Escribe un programa que dado un array, devuelva
            la posición donde haya el valor 3 y cambie el valor
            por el número de la posición.</h2>";

        // 1ª Forma -- Recorriendo todo el array //
        echo "<p>1ª Forma -- Recorriendo todo el array</p>";

        // Creo el arary
        $datos = array(2,5,9,7,6,3,1,5,4,8,3,2,6,9,3,5,1,2,3);

        // Lo imprimo inicialmente
        echo "<h3>Array inicial</h3>";

        echo "<pre>";
        print_r($datos);
        echo "</pre>";

        // Cambio la el value por el valor del key
        for($i = 0; $i < count($datos); $i++)
        {
            if($datos[$i] == 3)
            {
                $datos[$i] = $i;
            }
        }

        // Lo imprimo despues
        echo "<h3>Array final</h3>";

        echo "<pre>";
        print_r($datos);
        echo "</pre>";

        // 2ª Forma -- con la fucion search  //
        echo "<p>2ª Forma -- Funcion search</p>";

        // Creo el arary
        $datos = array(2,5,9,7,6,3,1,5,4,8,3,2,6,9,3,5,1,2,3);

         // Lo imprimo inicialmente
         echo "<h3>Array inicial</h3>";

         echo "<pre>";
         print_r($datos);
         echo "</pre>";

         // Lo hago
        while($pos = array_search(3,$datos))
        {
            $datos[$pos] = $pos;
        }

        // Lo imprimo despues
        echo "<h3>Array final</h3>";

        echo "<pre>";
        print_r($datos);
        echo "</pre>";



        // Ejercicio 3 //
        echo "<h2>3. Escribe un programa que pida por url el tamaño de
            una matriz y la rellene siguiendo el siguiente patrón.</h2>";

        // Recojo el tamaño de la matriz (nº de filas y nº de columnas (cuadrado))
        $tamañoMatriz = $_GET["tamañoArray"];

        echo "El tamaño de la matriz introducido por el usuario es: " . $tamañoMatriz;

        $matriz = array();

        // Recorro el array
        for($i = 0; $i < $tamañoMatriz; $i++)
        {
            $ultVal = 1;

            // Por cada fila creo un array
            $matriz[$i] = array();

            for ($j=0; $j < $tamañoMatriz; $j++) 
            { 

                // Si se encuentra en la primera fila...
                if(($j == 0)||($i == 0))
                {
                    // Se establece el valor 1 por defecto
                    $matriz[$i][$j] = 1;
                }
                // Si no...
                else
                {
                    // Coge los valores anteriores
                    $matriz[$i][$j] = $matriz[$i - 1][$j] + $matriz[$i][$j - 1];
                }
            }
            

        }


         echo "<pre>";
        print_r($matriz);
        echo "</pre>";

    ?>

</body>
</html>