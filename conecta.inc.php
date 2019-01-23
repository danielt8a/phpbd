<?php
	
	function conecta(){

		try {

			$cadena = 'mysql:host=localhost; dbname=cursophp';
			$conexion = new PDO($cadena, 'root', '1123MASTERkey58');
			return true;

		} catch (PDOException $e) {
			echo "ERROR: ". $e->getMessage();
		}
	}


?>