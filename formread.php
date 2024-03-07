<?php
include 'conexion.php';

try {
    $sql = "SELECT country_id, country, last_update FROM `sakila`.`country`";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $paises = $stmt->fetchAll(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    die("Error: " . $e->getMessage());
}
?>

<div class="container"> 
<div class="table">
    <div class="tr">
        <span class="td">ID</span>
        <span class="td">PAIS</span>
        <span class="td">FECHA</span>
    </div>

    <?php foreach ($paises as $datos) : ?>
        <div class="tr">
            <!-- Mostrar datos en una tabla -->
            <span class="td"><?= $datos['country_id']; ?></span>
            <span class="td"><?= $datos['country']; ?></span>
            <span class="td"><?= $datos['last_update']; ?></span>

            <!-- El formulario del update. -->
            <form action="index.php" method="POST">
            <input type="hidden" name="country_id" value="<?= $datos['country_id']; ?>" />
            <input type="text" name="country" value="<?= $datos['country']; ?>" />
            <input type="submit" name="update" value="Actualizar" />
            </form>

                <!-- El formulario del delete. -->
                <form action="index.php" method="POST">
                    <input type="hidden" name="country_id" value="<?= $datos['country_id']; ?>" />
                    <input type="submit" name="delete" value="Eliminar" />
                </form>
        </div>
    <?php endforeach; ?>

</div>
</div>