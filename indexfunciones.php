<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>Indice</title>
  </head>
  <body>
    <div id=pantalla>
      <div id=main>
        <h1>Index</h1>
        <h2>Ejercicios:</h2>
        <a href=eligeidioma.html>Eligeidioma<br></a>
        <a href=cambio.html>Cambio<br></a>
        <a href=bisiesto.html>Bisiesto<br></a>
        <?php
        require_once("./funciones.php");
        require_once("./PR07.php");
        //llamar a la funcion declarada
        saludo();
        echo "<br>";
        saludo2("Iván");
        echo "<br>";
        precio_iva(10);
        echo "<br>";
        precio_iva(10, 0.10);
        echo "<br>";
        echo precio_iva_return(10);
        echo "<br>";
        //pasa por referencia
        $precio=10;
        precio_a_precioiva($precio);
        echo $precio;
        //array
        $array =array();
        anade($array);
        anade($array);
        anade($array);
        anade($array);
        echo "<pre>";
        print_r($array);
        echo "</pre>";
        //los objetos pasan por referencia
        class Figura{
            public $lado = 5;
        }
        $miFigura = new Figura();
        echo "<br>";
        echo "El lado es: " .$miFigura->lado;
        agrandar($miFigura);
        echo "<br>";
        echo "El lado es: " .$miFigura->lado;
        echo letraDNI(71022220);
        ?>
      </div>
    </div>
  </body>
</html>