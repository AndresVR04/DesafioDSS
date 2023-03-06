<?php
require 'procesamiento.php';
if (isset($_POST['enviar']) && count($errores)<=0){
    $codi = $_POST['codigo'];
    $nom = $_POST['nombre'];
    $cat = $_POST['categoria'];
    $precio = $_POST['precio'];
    $desc = $_POST['desc'];
    $exist = $_POST['exist'];
    $precioF = "$".$precio;



 

    //Crear un nuevo documento XML
    $doc = new DOMDocument();
    $productos = $doc -> load("datos.xml");
    $index = 0;
    $i= 0;
    foreach($productos->producto as $prod){
        if($prod->codigo == $codi){
            $index = $i;
            break;
        }
        $i++;
    }

    // // // Crear el elemento raíz
    // $producto = $doc->createElement("producto");
    // $codigo = $doc->createElement("codigo", $codi);
    // $nombre = $doc -> createElement("nombre", $nom);
    // $categoria = $doc -> createElement("categoria", $cat);
    // $precioB = $doc -> createElement("precio", $precioF);
    // $existencias = $doc -> createElement("existencias", $exist);
    // $descripcion = $doc -> createElement("descripcion", $desc);


    // $producto->appendChild($codigo);
    // $producto->appendChild($nombre);
    // $producto->appendChild($categoria);
    // $producto->appendChild($precioB);
    // $producto->appendChild($existencias);
    // $producto->appendChild($descripcion);


    // $raiz = $doc -> documentElement;
    // $raiz -> appendChild($producto);

    $doc->save("datos.xml");


}


?>
