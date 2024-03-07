<?php
// Recuperar el country_id del formulario delete.
$country_id = $_POST['country_id'];

try {
	include 'conexion.php';
	$sql = "DELETE FROM `sakila`.`country` WHERE `country_id` = :country_id";
    // Ejecutar la consulta de eliminación utilizando como WHERE el country_id.
	$stmt = $conn->prepare($sql);
    $stmt->bindParam(':country_id', $country_id);
    $stmt->execute();
	echo "Registro eliminado con éxito.";
	$conn = null;
} catch (PDOException $e) {
    die("Error al eliminar el registro:" . $e->getMessage());
}
?>
