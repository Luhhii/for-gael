<?php require_once '../modelos/Rol.php';

$accion = $_POST['a'] ?? $_GET['a'] ?? '';

if ($accion != '') {
	$rol = new Rol();

	switch ($accion) {
		case 'Ingresar':
			$rol->nombre = $_POST['nombre'];
			$rol->apellidos = $_POST['apellidos'];
			$rol->sexo = $_POST['sexo'];
			$rol->edad = $_POST['edad'];
			$rol->fecha_de_nacimiento = $_POST['fecha_de_nacimiento'];
			$rol->ingresar();
			break;
		case 'Confirmar edicion':
			$rol->id_licencia= base64_decode($_POST['id_licencia']);
			$rol->nombre = $_POST['nombre']; 
			$rol->apellidos = $_POST['apellidos'];
			$rol->sexo = $_POST['sexo'];
			$rol->edad = $_POST['edad'];
			$rol->fecha_de_nacimiento = $_POST['fecha_de_nacimiento'];



			$rol->editar();
			break;
		case 'elim':
			$rol->id_licencia = base64_decode($_GET['id_licencia']);
			$rol->eliminar();
			break;
	}
}

header('Location: ../vistas/roles');