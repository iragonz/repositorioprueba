<?php
    function br(){
        echo "<br>";
    }
    function h1($cadena){
        echo "<h1>".$cadena."</h1>";
    }
    function p($cadena){
        echo "<p>".$cadena."</p>";
    }
    function self(){
        return $_SERVER['PHP_SELF'];
    }
    function selfImp(){
        echo $_SERVER['PHP_SELF'];
    }
    function letraDNI($dni){
        $moduloDNI=$dni%23;
        $letra = 'TRWAGMYFPDXBNJZSQVHLCKE';  
        return $letra{$moduloDNI};
    }

?>