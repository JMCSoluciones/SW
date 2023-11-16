<?php
include './components/head.php';
include 'model/conexion.php';
include 'validaciones.php';
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
if ($_SERVER['REQUEST_METHOD'] === 'POST'){
    if(!isset($_POST['oculto']) || $_POST['oculto'] !== '1'){
        exit();
    }
$status_anterior =$_POST['statusSolicitudActual'];
$status_nuevo = $_POST['statusSolicitudNuevo'];
$id_solicitud = $_POST['idSolicitud'];
$producto = $_POST['productoSolicitud'];
$cliente = $_POST['clienteSolicitud'];
$telefono = $_POST['telSolicitud'];
$email = $_POST['emailSolicitud'];
$empresa = $_POST['empresaSolicitud'];
$mensaje = $_POST['mensajeSolicitud'];
$fecha = $_POST['fechaSolicitud'];


      $sentencia = $bd->prepare("UPDATE solicitudes_cotizacion SET estatus = ? WHERE id = ?;");
        $resultado = $sentencia->execute([$status_nuevo,$id_solicitud]);
        if($resultado){
            echo "Operación exitosa: Se ha actualizado correctamente la solicitud: ".$id_solicitud;
        }else{
            echo "Error: Ocurrio un error en la transacción.";
        }
    }else{
        echo "Error: Solicitud no válida.";
    }

    ?>