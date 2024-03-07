
<?php
// Configuración de la base de datos
$servername = "127.0.0.1:3306";
$username = "root";
$password = "";
$dbname = "sakila";


// Conexión a la base de datos usando PDO
try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // Configuración para lanzar excepciones en caso de errores
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Error de conexión: " . $e->getMessage();

}
?>