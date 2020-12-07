<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8" />
	<title>Tecnico</title>
</head>
<body>
	<header>
		<h1>Datos de tecnico</h1>
		<h2>Ingresar</h2>
	</header>

	<form action="../../controladores/Roles.php" method="post">
		<input type="text" name="nombre" placeholder="nombre" required autofocus />
		<input type="text" name="apellidos" placeholder="apellidos" required autofocus />
		<input type="text" name="sexo" placeholder="sexo" required autofocus />
		<input type="number" name="edad" placeholder="edad" required autofocus />
		<input type="date" name="fecha_de_nacimiento" placeholder="fecha_de_nacimiento" required autofocus />

		<a href="index.php" ><button type="submit" >Regresar</button></a>
		<input name="a" type="submit" value="Ingresar" />
	</form>
</body>
</html>