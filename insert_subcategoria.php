<?php
    include 'model/conexion.php';
    include 'validaciones.php';

    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);

if ($_SERVER['REQUEST_METHOD'] === 'POST'){
    if(!isset($_POST['oculto'])){
        exit();
    }
   
            //Obtención de datos POST
            $subcategoria = $_POST['subcategoria'];
            $id_categoria = $_POST['categoria'];
            $subcategoriaisvalid = sinCespeciales($subcategoria) ? 'valid' : 'invalid';
            if($subcategoriaisvalid == 'invalid'){
                echo "Error : el campo subcategoria no puede estar vacio o contener caracteres especiales";
                exit();
            }
        $consulta = $bd->prepare("INSERT INTO subcategoria(nombre,id_categoria) VALUES (?,?);"); 
        $consulta->bindParam(1, $subcategoria, PDO::PARAM_STR,40);
        $consulta->bindParam(2, $id_categoria, PDO::PARAM_INT);
        $consulta->execute();
        if($consulta){
            echo "Operación exitosa: Se ha guardado correctamente";
            exit();
        }else{
            echo "Error: se ha producido un error en el registro a la base de datos.";
            exit();
        }
    

}else{
    echo "Error: Solicitud no válida.";
}

?>