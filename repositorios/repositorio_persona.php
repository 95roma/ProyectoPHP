<?php
class Repositorio_persona{
	public static function insertar($conexion, $persona){
		$persona_insertada =  false;
		if (isset($conexion)){
			try {
				$dui = $persona->getDui();
				$nombre = $persona->getNombre();
				$apellido = $persona->getApellido();
				$telefono = $persona->getTelefono();
				$deporte = $persona->getDeporte();
				$edad = $persona->getEdad();
				$equipo = $persona->getEquipo ();
				$direccion = $persona->getDireccion();

				$sql = 'insert into personas :dui, :nombre, :apellido, :telefono, :deporte, :edad, :equipo, :direccion';

				$sentencia = $conexion->prepare($sql);
				$sentencia->bindParam(':dui', $dui, PDO::PARAM_STR)

			}catch (PDOException $ex){
				 echo '<script>swal("No se puedo realizar el registro acivo", "Favor revisar los datos e intentar nuevamente' . $ex->getMessage() . '", "warning");</script>';
                print 'ERROR: ' . $ex->getMessage();
			}
		}

	}
}



?>