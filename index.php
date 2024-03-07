<!DOCTYPE html>
<html lang="es">

	<head>
		<title>Lista de Paises</title>
		<meta charset="utf-8">
		<link href="estilos.css" rel="stylesheet" type="text/css">
	</head>
	
	<body>
		<div class="container"> 
		<h1>Lista de Paises</h1>
		
		<?php
		
		/* Como se ejecutan varias consultas diferentes en la página web,
		realizo una conexión a la base de datos para optimizar código utilizando la funcion include.*/

		include "conexion.php";
		
		/* Creo un formulario de entrada única, para comprobar si el usuario está ejecutando alguna acción en
		 la página o sólo está mostrando el listado de paises. Las acciones que puede realizar son el registro de un nuevo pais,
		 la actualización de los datos y la eliminación de un pais. */

		switch ( true ) {
			case isset( $_POST['create'] ):
				include "create.php";
			break;
			case isset( $_POST['update'] ):
				include "update.php";
			break;
			case isset( $_POST['delete'] ):
				include "delete.php";
			break;
		}
		
		/* Muestro un mini-formulario para el registro de un nuevo pais en la base de datos. */
		include "formcreate.php";
		
		/* Muestro un listado con toda la información de los paises de la base de datos.
		Agregando un cuadro de texto input que permita poder actualizar los datos de los paises, 
		y a la vez, un botón para poder eliminarlos */
		
		include "formread.php";
		?>

		</div>
		
	</body>
	
</html>