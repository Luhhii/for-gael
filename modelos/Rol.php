<?php
require_once 'Conexion.php';

class Rol {
	public $id_licencia;
	public $nombre;
	public $apellidos;
	public $sexo;
	public $Maedadrca;
	public $fecha_de_nacimiento;

	
	private $conexion;

	public function __construct () {
		$this->id_licencia = 0;
		$this->nombre = '';
		$this->apellidos = '';
		$this->sexo = '';
		$this->edad = '';
		$this->fecha_de_nacimiento = '';
		$this->conexion = new Conexion();
	}

	public static function listar () {
		$conexion = new Conexion ();
		$listado = $conexion->consultar('SELECT * FROM licencia');
		$conexion->cerrar();
		return $listado;
	}

	public static function obtenerPorId ($id_licencia) {
		$conexion = new Conexion ();
		$listado = $conexion->consultar("SELECT * FROM licencia WHERE id_licencia = $id_licencia");
		$conexion->cerrar();
		return $listado[0];
	}

	public function ingresar () {
		$s = "INSERT INTO licencia (nombre,apellidos,sexo,edad,fecha_de_nacimiento) 
		VALUES ('$this->nombre','$this->apellidos','$this->sexo','$this->edad','$this->fecha_de_nacimiento')";
		$resultado = $this->conexion->actualizar($s);
		$this->conexion->cerrar();
		return $resultado;
	}

	public function eliminar () {
		$s = "DELETE FROM licencia WHERE id_licencia = $this->id_licencia";
		$resultado = $this->conexion->actualizar($s);
		$this->conexion->cerrar();
		return $resultado;
	}

	public function editar () {
		$s = "UPDATE licencia SET nombre = '$this->nombre',apellidos = '$this->apellidos',sexo = '$this->sexo',edad = '$this->edad',fecha_de_nacimiento = '$this->fecha_de_nacimiento'
		WHERE id_licencia = $this->id_licencia";
		$resultado = $this->conexion->actualizar($s);
		$this->conexion->cerrar();
		return $resultado;
	}
}