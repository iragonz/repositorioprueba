<?php
function validaAlfabetico($enviado, $nombre){
    return isset($_REQUEST[$enviado]) && empty($_REQUEST[$nombre]);
}
function setValue($enviado, $nombre){
    return isset($_REQUEST[$enviado]) && !empty($_REQUEST[$nombre]);
}