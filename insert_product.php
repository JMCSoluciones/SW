<?php
    include 'model/conexion.php';
    include 'validaciones.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST'){
    if(!isset($_POST['oculto'])){
        exit();
    }
   
//Obtención de datos POST
$clave = $_POST['clave'];
$producto = $_POST['producto'];
// $categoria = $_POST['categoria'];
// $subcategoria = $_POST['subcategoria'];
$categoria = 1;
$subcategoria = 2;
$extracto = $_POST['extracto'];
$descripcion = $_POST['descripcion'];
$permitido=array("image/png","image/jpeg");

// $claveisvalid = sinCespeciales($clave) ? 'valid' : 'invalid';
// $productoisvalid = sinCespeciales($producto) ? 'valid' : 'invalid';
// $extractoisvalid = sinCespecialesM($extracto) ? 'valid' : 'invalid';
// $descripcionisvalid = sinCespecialesM($descripcion) ? 'valid' : 'invalid';

// if($claveisvalid == 'invalid'){
//     echo "Error : el campo clave no puede estar vacio o contener caracteres especiales";
//     exit();
// }
// if($productoisvalid == 'invalid'){
//     echo "Error : el campo producto  no puede estar vacio o contener caracteres especiales";
//     exit();
// }
// if($extractoisvalid == 'invalid'){
//     echo "Error : el campo extracto no puede estar vacio o contener caracteres especiales";
//     exit();
// }
// if($descripcionisvalid == 'invalid'){
//     echo "Error : el campo descripción no puede estar vacio o contener caracteres especiales";
//     exit();
// }

// // Validación campo Clave
// sinEspacios($clave,"Clave");
// noVacio($clave,"Clave");
// dosEspacios($clave,"Clave");
// //Validación campo Producto
// noVacio($producto,"Producto");
// dosEspacios($producto,"Producto");
// // Validación campo EXTRACTO
// noVacio($extracto,"Extracto");
// //Validación campo Descripción
// noVacio($extracto,"Extracto");

//if(isset($_REQUEST['guardar'])){
    if (is_uploaded_file($_FILES['foto']['tmp_name'])) {
        $datos_imagen = file_get_contents($_FILES['foto']['tmp_name']);
        $tipoArchivo = $_FILES['foto']['type'];
        if( in_array($tipoArchivo,$permitido) ==false ){
            echo "Error : tipo de archivo no permitido";
        
            exit();

        }
        $nombreArchivo=$_FILES['foto']['name'];
        $consulta = $bd->prepare("INSERT INTO productos(clave,producto,id_categoria,id_subcategoria,extracto,descripcion,foto,tipofoto) VALUES (?,?,?,?,?,?,?,?);"); 
        $consulta->bindParam(1, $clave, PDO::PARAM_STR,10);
        $consulta->bindParam(2, $producto, PDO::PARAM_STR,80);
        $consulta->bindParam(3, $categoria, PDO::PARAM_INT);
        $consulta->bindParam(4, $subcategoria, PDO::PARAM_INT);
        $consulta->bindParam(5, $extracto, PDO::PARAM_STR,180);
        $consulta->bindParam(6, $descripcion, PDO::PARAM_STR,600);
        $consulta->bindParam(7, $datos_imagen, PDO::PARAM_LOB);
        $consulta->bindParam(8, $tipoArchivo, PDO::PARAM_STR,40);
        $consulta->execute();
        if($consulta){
            echo "Operación exitosa: Se ha guardado correctamente";
            exit();
        }else{
            echo "Error: se ha producido un error en el registro a la base de datos.";
            exit();
        }
    }else{
        echo "Error : tipo de archivo no permitido";
            exit();
    }
//}
}else{
    echo "Error: Solicitud no válida.";
}

?>