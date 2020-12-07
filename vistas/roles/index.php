<?php require_once '../../modelos/Rol.php' ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8" />
	<title>Registro Tecnico</title>
</head>
<body>
	<header>
		<h1>Trabajo como tecnico</h1>
		<h2>Registro</h2>
	</header>

	<a href="ingresar.php"><input name="Entrar" type="submit" value="Ingresar nuevo registro"/></a>
<br><br>

	<table border="1" collapse	>
		<thead>
			<tr>
				<th>id_licencia</th>
				<th>nombre</th>
				<th>apellidos</th>
				<th>sexo</th>
				<th>edad</th>
				<th>fecha_de_nacimiento</th>
				<th colspan="2">Opciones</th>
			</tr>
		</thead>
		<tbody>
			<?php foreach (Rol::listar() as $fila) { ?>
				<tr>
					<td><?= $fila[0] ?></td>
					<td><?= $fila[1] ?></td>
					<td><?= $fila[2] ?></td>
					<td><?= $fila[3] ?></td>
					<td><?= $fila[4] ?></td>
					<td><?= $fila[5] ?></td>

					<td>
						<a href="editar.php?id_licencia=<?=base64_encode($fila[0])?>">Editar</a>
					</td>
					<td>
						<a href="../../controladores/Roles.php?a=elim&id_licencia=<?=base64_encode($fila[0])?>" onclick="return confirm('¿Desea eliminar?')">Eliminar</a>
					</td>
				</tr>
			<?php } ?>
		</tbody>
	</table>
</body>
</html>