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
<a href="codigo.php?paginaPHP=<?php
$pagina = basename($_SERVER['SCRIPT_FILENAME']);
echo $pagina;?>"
>Ver el codigo</a>