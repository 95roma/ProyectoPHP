<?php 
class persona{
	private $dui;
	private $nombre;
	private $apellido;
	private $telefono;
	private $deporte;
	private $edad;
	private $equipo;
	private $direccion;

	function getDireccion(){
		return $this->direccion;
	}
	function setDireccion($Direccion){
		$this->direccion = $direccion;
	}

	function getEquipo(){
		return $this->equipo;
	}
	function setEquipo($equipo){
		$this->equipo = $equipo;
	}

	function getEdad(){
		return $this->edad;
	}
	function setEdad($edad){
		$this->edad = $edad;
	}

	function getDeporte(){
		return $this->deporte;
	}
	function setDeporte($deporte){
		$this->deporte = $deporte;
	}

	function getTelefono(){
		return $this->telefono;
	}
	function setTelefono($telefono){
		$this->telefono = $telefono;
	}
	function getApellido(){
		return $this->apellido;
	}
	function setApellido($apellido){
		$this->apellido = $apellido;
	}

	function getNombre(){
		return $this->nombre;
	}
	function setNombre($nombre){
		$this->nombre = $nombre;
	}

	function getDui(){
		return $this->dui;
	}
	function setDui($dui){
		$this->dui = $dui;
	}

}
?>