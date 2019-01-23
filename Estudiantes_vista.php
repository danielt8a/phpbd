<?php
	require_once 'Estudiantes_modelo.php';
	$estudiante = new Estudiantes_modelo();
?>

<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Index</title>
</head>
<body>
	<h1>CRUD de Estudiantes</h1>

	<?php #var_dump(PDO::getAvailableDrivers()); ?>

	<h3>C: Insertar</h3>
	<?php
		$alumno = [
			'name' => 'Daniel',
			'apellido_paterno' => 'Telles',
			'apellido_materno' => 'Ochoa',
			'email' => 'danieltelles@gmail.com'

		];

		$estudiante->Insertar($alumno);

	?>
</body>
</html>