<?php
    $idioma = $_GET["idioma"];
    //echo $idioma;
    $es = "Hola";
    $en = "Hello";
    $po = "Olá";
    $fr = "Salut";
    $it = "Ciao";
    $mostrar = $idioma;
    echo $$mostrar;
?>