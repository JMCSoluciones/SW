<?php
session_start();
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include './model/conexion.php';
$usuario = $_POST['user'];
$password = $_POST['password'];

$busqueda = $bd->prepare('SELECT user, password from usuarios WHERE user = ? AND password = ?;');
$busqueda->execute([$usuario, $password]);
$datos = $busqueda->fetch(PDO::FETCH_OBJ);

if($datos === FALSE){
    // header('Location: error_login.php');
    echo "conexion incorrecta";
     
}elseif($busqueda->rowCount() == 1){
       
 $_SESSION['user']= $datos->user;
 header('Location: control-cotizaciones.php');
}
?>