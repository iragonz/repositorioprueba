<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PR08</title>

     <!-- CSS -->
     <link href="" rel="stylesheet" type="text/css">
</head>
<body>
    <?php
        require_once("./funciones.php");
    ?>
    <h1>Formulario PR08</h1>

    <!-- Enlace que accede a otra pagina php que muestra/imprime el codigo de la misma -->
    <!-- Incluir en todos los .php -->
    <a target="_blank" id="idVerCodigo" title="Vér el código PHP" href="codigoPHP.php?paginaPHP=<?
        $pagina = basename($_SERVER['SCRIPT_FILENAME']);
        echo $pagina;?>"
    >
        <img src="../img/icono_ver_codigo.png" alt="Ver código" width="35px" height="35px"></img>
    </a>

    <!-- VALIDACION -->
    <?php

        //Ver si existe el REQUEST "Enviado"
        if(isset($_REQUEST['enviado']))   // Tambien se puede hacer con $_REQUEST (recoge tanto post como get)
        {
            // Informo 
            //echo "El formulario ha sido enviado.<br>";

            // Valido los datos //
            // Si existe el nombre... (validando texto)
            if(!empty($_REQUEST['nombre']))
            {
                echo "<br>El nombre es: " . $_REQUEST['nombre'];
            }

            // Si existe la contraseña... (validando texto)
            if(!empty($_REQUEST['pass']))
            {
                echo "<br>La contraseña es: " . $_REQUEST['pass'];
            }

            // Si se ha seleccionado uno de los check
            if(isset($_REQUEST['radioButtonsGenero']))
            {
                echo "<br>Ha seleccionado el genero " . $_REQUEST['radioButtonsGenero'];
            }

            // Si se ha abierto la lista y se ha seleccinado uno
            if($_REQUEST['ciclo'] == "no")
            {
                echo "Debe seleccionar un ciclo...";
            }
            //Comprobamos si existe aficiones
            if(!isset($_REQUEST['aficiones'])){
                echo "No ha elegido ninguna aficcion";
            }elseif (count($_REQUEST['aficiones'])>2) {
                echo "Debe elegir como mucho 2 aficiones";
            }
            //la variable superglobal que fuerda los ficheros es $_FILES
            if(isset($_FILES)){
                print_r($_FILES);
                $guarda = "./uploads/";
                $dirConNombre = $guarda . $_FILES['fichero']['name'];
                if(move_uploaded_file($_FILES['fichero']['name'],$dirConNombre)){
                    echo "Ha guardado bien";
                }else{
                    echo "No ha guardado bien";
                }
            }
        }

    ?>

    <!-- Formulario por POST -->
    <!-- Le indico en el actio que me redirija a este mismo fichero para validarlo -->
    <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post" name="formulario" enctype="multipart/form-data">

        <!-- Input alfabetico obligatorio -->
        <p>
        <label for="idAlfabetico">Alfabetico:</label>
            <input type="text" name="alfabetico" id="idAlfabetico" size="40" value="<?php if(setValue("enviado","alfabetico")){
            echo $_REQUEST['alfabetico'];
            }?>">
            <?php if(validaAlfabetico('enviado','alfabetico')){?>
                <label class="error">El campo no puede estar vacío</label>
            <?php } ?>
        </p>

        <!-- Input numerico obligatorio-->
        <p>
            <label for="idAlfanumerico">Alfanumerico:</label>
            <input type="text" name="alfanumerico" id="idAlfanumerico" value="<?php if(setValue("enviado","alfanumerico")){
            echo $_REQUEST['alfanumerico'];
            }?>">
            <?php if(validaAlfanumerico('enviado','alfanumerico')){?>
                <label class="error">El campo debe contener númmeros</label>
            <?php } ?>
        </p>

        <!-- Input de tipo RadioButton -->
        <p><b>Género</b></p>
        <label for="idMasculino">Masculino
            <input type="radio" name="radioButtonsGenero" id="idMasculino" value="masculino">
        </label>

        <label for="idFemenino">Femenino
            <input type="radio" name="radioButtonsGenero" id="idFemenino" value="femenino">
        </label>

        <!-- Input de tipo select -->
        <p><b>Ciclo</b></p>
        <select name="ciclo" id="idCiclo" id="idCiclo">
            <option value="no">Seleccione una opción</option>
            <option value="dam">DAM</option>
            <option value="daw">DAW</option>
        </select>

        <!-- Input de tipo check -->
        <p><b>Aficiones</b></p>
        <input type="checkbox" name="aficiones[]" id="idFutbol" value="futbol">
        <label for="idFutbol">Futbol</label>

        <input type="checkbox" name="aficiones[]" id="idBar" value="bar">
        <label for="idBar">Bar</label>

        <input type="checkbox" name="aficiones[]" id="idPadel" value="padel">
        <label for="idPadel">Padel</label>
        <!--Input de tipo file-->
        <p><b>Fichero</b></p>
        <input type="file" name="fichero" id="fichero">
        <label for="fichero">Fichero</label>
        <br><br>

        <!-- Input de tipo Submit -->
        <!-- Se le pone el atributo name para evitar ataques -->
        <input type="submit" value="Enviar" name="enviado">

        <!-- Input de tipo Reset -->
        <input type="reset" value="Limpiar">
    </form>

</body>
</html>