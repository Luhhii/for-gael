<?php
	require_once '../../modelos/Rol.php';
	$rol = Rol::obtenerPorId(base64_decode($_GET['id_licencia']));
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8" />
	<title>Tecnico</title>
</head>
<body>
	<header>
		<h1>Datos de tecnico</h1>
		<h2>Editar</h2>
	</header>
	<form action="../../controladores/Roles.php" method="post">
		<input type="hidden" name="id_licencia" value="<?= $_GET['id_licencia'] ?>" />
		<input name="nombre" placeholder="nombre" value="<?= $rol[1] ?>" required autofocus />
		<input name="apellidos" placeholder="apellidos" value="<?= $rol[2] ?>" required autofocus />
		<input name="sexo" placeholder="sexo" value="<?= $rol[3] ?>" required autofocus />
		<input name="edad" placeholder="edad" value="<?= $rol[4] ?>" required autofocus />
		<input name="fecha_de_nacimiento" placeholder="fecha_de_nacimiento" value="<?= $rol[5] ?>" required autofocus />
		<a href="index.php"><input name="Regresar" type="submit" value="Regresar"/></a>
		<input name="a" type="submit" value="Confirmar edicion" />
	</form>
</body>
</html>