<?php
include 'model/conexion.php';
include 'validaciones.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST'){
    if(!isset($_POST['oculto']) || $_POST['oculto'] !== '1'){
        exit();
    }

$id = $_POST['idSubcategoria'];
$nombre = $_POST['nombreSubcategoria'];
$categoria = $_POST['categoria'];

//VALIDACIONES
$nombreisvalid = sinCespeciales($nombre) ? 'valid' : 'invalid';
if($nombreisvalid == 'invalid'){
    echo "Error : el campo nombre no puede contener caracteres especiales";
    exit();
}
        $sentencia = $bd->prepare("UPDATE subcategoria SET nombre = ?,id_categoria = ? WHERE id = ?;");
        $resultado = $sentencia->execute([$nombre,$categoria,$id]);
        if($resultado){
            echo "Operación exitosa: Se ha actualizado correctamente la subcategoria: ".$nombre;
        }else{
            echo "Error: Ocurrio un error en la transacción.";
        }
    }else{
        echo "Error: Solicitud no válida.";
    }

    ?>