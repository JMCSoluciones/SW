<?php
include 'model/conexion.php';
// Conexión a la base de datos
// ...

// Obtener la categoría seleccionada desde la solicitud AJAX
$categoriaSeleccionadaE = $_GET['selectcategoriaEdit'];
// Consulta para obtener las subcategorías según la categoría seleccionada
$consultaSubcategoriasE = $bd->prepare("SELECT id, nombre FROM subcategoria WHERE id_categoria = ? ");
$consultaSubcategoriasE->execute([$categoriaSeleccionadaE]);

// Obtener las subcategorías como un array asociativo
$subcategoriasE = $consultaSubcategoriasE->fetchAll(PDO::FETCH_ASSOC);

// Devolver las subcategorías como JSON
header('Content-Type: application/json');
echo json_encode($subcategoriasE);
?>