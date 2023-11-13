<?php

include 'model/conexion.php';

if($_SERVER['REQUEST_METHOD'] == 'POST'){
$id = $_POST['idSubcategoria'];
$sentencia = $bd->prepare("DELETE FROM subcategoria WHERE id = ?;");
$resultado = $sentencia->execute([$id]);
    if($resultado === TRUE){
        echo "Operación exitosa: el registro se ha eliminado correctamente.";
    }else{
        echo "Error: no se pudo eliminar el registro.";
    }
}else{
    echo "Error en el sistema.";
}
?>