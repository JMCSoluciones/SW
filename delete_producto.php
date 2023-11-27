<?php

include 'model/conexion.php';

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    if(!isset($_POST['oculto']) || $_POST['oculto'] !== '1'){
        exit();
    }
$idProducto = $_POST['idProductoD'];
$response = array();
$sentencia = $bd->prepare("DELETE FROM productos WHERE id = ?;");
$resultado = $sentencia->execute([$idProducto]);
    if ($resultado === true) {
        // $response['success'] = true;
        // $response['message'] = "Operación exitosa: el registro se ha eliminado correctamente.";
        echo "Operación exitosa: el registro se ha eliminado correctamente."
    } else {
        $errorInfo = $sentencia->errorInfo();
        $response['success'] = false;
        $response['message'] = "Error: no se pudo eliminar el registro. Detalles del error: " . $errorInfo[2];
    }
echo json_encode($response);
}else{
    echo "Error en el sistema.";
}
?>