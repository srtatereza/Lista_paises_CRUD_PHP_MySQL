

<?php
// Recuperar los datos del formulario update.
$country_id = $_POST['country_id'];
$country = $_POST['country'];
$last_update = $_POST['last_update'];

try {
    include 'conexion.php';
    // Consulta SQL para modificar los datos del pais su nombre y la fecha de actualización.
    $sql = "UPDATE `sakila`.`country` SET country = :country, last_update = :last_update WHERE country_id = :country_id";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':country_id', $country_id);
    $stmt->bindParam(':country', $country);
    $stmt->bindParam(':last_update', $last_update);
    $stmt->execute();
	echo "Registro modificado con éxito.";
	$conn = null;
} catch (PDOException $e) {
    die("Error: " . $e->getMessage());
}
?>