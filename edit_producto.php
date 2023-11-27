<?php
include './components/head.php';
include 'model/conexion.php';
include 'validaciones.php';
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (!isset($_POST['oculto']) || $_POST['oculto'] !== '1') {
        exit();
    }
    $id = $_POST['id_producto'];
    $clave = $_POST['clave'];
    $producto = $_POST['producto'];
    $categoria = $_POST['selectcategoria'];
    $subcategoria = $_POST['selectsubcategoria'];
    $extracto = $_POST['extracto'];
    $descripcion = $_POST['descripcion'];
    $permitido = array("image/png", "image/jpeg");


    if (isset($_FILES['foto']) && $_FILES['foto']['error'] === UPLOAD_ERR_OK) {
        if (is_uploaded_file($_FILES['foto']['tmp_name'])) {
            $tipoArchivo = $_FILES['foto']['type'];

            if (!in_array($tipoArchivo, $permitido)) {
                echo "Error: Tipo de archivo no permitido";
                exit();
            }

            $datos_imagen = file_get_contents($_FILES['foto']['tmp_name']);
            $nombreArchivo = $_FILES['foto']['name'];

            $sentencia = $bd->prepare("UPDATE productos SET clave = ?, producto = ?, id_categoria = ?, id_subcategoria = ?, extracto = ?, descripcion = ?, foto = ?, tipofoto = ? WHERE id = ?;");
            $resultado = $sentencia->execute([$clave, $producto, $categoria, $subcategoria, $extracto, $descripcion, $datos_imagen, $tipoArchivo, $id]);

            if ($resultado) {
                echo "Operación exitosa: Se ha actualizado correctamente el producto: " . $id;
            } else {
                echo "Error: Ocurrió un error en la transacción.";
            }
        } else {
            echo "Error: No se ha subido correctamente el archivo.";
        }
    } else {
        // Si no se seleccionó un archivo, realizar la actualización sin la foto
        $sentencia = $bd->prepare("UPDATE productos SET clave = ?, producto = ?, id_categoria = ?, id_subcategoria = ?, extracto = ?, descripcion = ? WHERE id = ?;");
        $resultado = $sentencia->execute([$clave, $producto, $categoria, $subcategoria, $extracto, $descripcion, $id]);

        if ($resultado) {
            echo "Operación exitosa: Se ha actualizado correctamente el producto: " . $id;
        } else {
            echo "Error: Ocurrió un error en la transacción.";
        }
    }
} else {
    echo "Error: Data no válida.";
}
?>
