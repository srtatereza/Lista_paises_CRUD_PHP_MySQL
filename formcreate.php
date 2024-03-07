<!DOCTYPE html>
<html>

<head>
    <title>Formulario de Registro</title>
</head>

<body>

    <div class="container">

        <?php
        date_default_timezone_set('Europa/España_city');
        $fecha_actual = date("Y-m-d H:i:s");
        ?>

        <!--formulario en blanco con campos para que registrar un nuevo pais y un botón para registrarlo y borrar la informacion. -->
        <div class="formulario-registro">
            <div>
                <form action="index.php" method="POST">
                    <label>Nombre Del pais:</label>
                    <input type="text" name="country" placeholder="Pais" required />
                    </label>
                    <label>Fecha de Registro:</label>
                    <input type="datime" name="last_update" placeholder="Fecha" value="<?= $fecha_actual ?>" required><br>
                    </label>
                    <div class="bloque-boton">
                        <input type="submit" name="create" value="Registrar" />
                        <input type="reset" class="boton" value="Borrar">
                    </div>
                </form>
            </div>
        </div>

    </div>
</body>

</html>
