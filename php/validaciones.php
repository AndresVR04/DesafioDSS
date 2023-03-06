<?php
function esVacio($var){
    return empty(trim($var));
}

function valCodigo($var) {
    return preg_match('/^(PROD)[0-9]{5}$/', $var);
}

function valTexto($var) {
    return preg_match('/^[a-zA-Z ]+$/',$var);
}

function valPrecio($var){
    return preg_match('/^[0-9]*\.[0-9]{2}$/', $var);
}

?>