<?php 
require 'validaciones.php';
$errores = array();
if(isset($_POST['enviar'])){
    $bandera = true;
    $codigo = $_POST['codigo'];
    $nombre = $_POST['nombre'];
    $categoria = $_POST['categoria'];
    $precio = $_POST['precio'];
    $desc = $_POST['desc'];
    $exist = $_POST['exist'];
    
    if(!isset($codigo)||esVacio($codigo)){
        array_push($errores,"Debes ingresar el código");
        $bandera = false;
        
    }else if(!valCodigo($codigo)){
     array_push($errores,"Ingresar de manera correcta el código");
     $bandera = false;
    }
 
    if(!isset($nombre)||esVacio($nombre)){
     array_push($errores,"Debes ingresar el nombre del producto");
     $bandera = false;
     }
     else if(!valTexto($nombre)){
         array_push($errores,"El nombre debe contener solo letras");
         $bandera = false;
        }
 
     if(!isset($categoria)||esVacio($categoria)){
         array_push($errores,"Seleccione una de las categorias");
         $bandera = false;
     }
 
     if(!isset($precio)||esVacio($precio)){
         array_push($errores,"Debes ingresar el precio");
         $bandera = false;
     }
     else if(!valPrecio($precio)){
         array_push($errores,"Precio no valido");
         $bandera = false;
        }

        if(!isset($exist)||esVacio($exist)||!is_numeric($exist)){
            array_push($errores,"Debes ingresar la cantidad de existencia");
            $bandera = false;
         }else if($exist<0){
            array_push($errores,"Ingresa un número válido"); 
         }
 
     if(!isset($desc)||esVacio($desc)){
         array_push($errores,"Debes ingresar una descripción");
         $bandera = false;
     }
     

    
 }
?>