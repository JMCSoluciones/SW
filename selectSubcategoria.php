<?php
include 'model/conexion.php';
// Conexión a la base de datos
// ...

// Obtener la categoría seleccionada desde la solicitud AJAX
$categoriaSeleccionada = $_GET['selectcategoria'];

// Consulta para obtener las subcategorías según la categoría seleccionada
$consultaSubcategorias = $bd->prepare("SELECT id, nombre FROM subcategoria WHERE id_categoria = ?");
$consultaSubcategorias->execute([$categoriaSeleccionada]);

// Obtener las subcategorías como un array asociativo
$subcategorias = $consultaSubcategorias->fetchAll(PDO::FETCH_ASSOC);

// Devolver las subcategorías como JSON
header('Content-Type: application/json');
echo json_encode($subcategorias);
?>
