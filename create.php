<?php
/* Recoger los datos del formulario create. */
$country = $_POST['country'];
$last_update = $_POST['last_update'];

try {
    include 'conexion.php';
    // Ejecutar el insert de la tabla country.
    $sql = "INSERT INTO `sakila`.`country` (`country`, `last_update`) 
            VALUES (:country, :last_update)";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':country', $country);
    $stmt->bindParam(':last_update', $last_update);
    $stmt->execute();
    echo "Registro creado con éxito.";
    $conn = null;
} catch (PDOException $e) {
    die("Error al crear el registro: " . $e->getMessage());
}
?>