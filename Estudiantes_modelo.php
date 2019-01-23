<?php

	#Mandar a llamar el archivo de conexión
	require_once "bd.php";

	class Estudiantes_modelo extends BD{

		private $bd;
		public $nombre;
		public $paterno;
		public $materno;
		public $emil;
		private $tabla = 'estudiantes';

		public function insertar($registro){
			$conexion = parent::conectar();

			try{

				$query = "INSERT INTO usuarios SET name=:name, apellido_paterno=:apellido_paterno, apellido_materno=:apellido_materno, email=:email";
				#prepare - Preparación del query
				#execute - Ejecuta el query
				$insertar = $conexion->prepare($query)->execute($registro);

				echo "He insertado el registro";

			} catch (Exception $e) {
				exit("Error: ".$e->getMessage());
			}
		}

		public function consultar(){
			$conexion = parent::conectar();
			try {

			}catch (Expception $e){
				exit("Error: ".$e->getMessage());
			}
		}
	}

?>