<?php
//incluye la clase Libro y CrudLibro
	require_once('crud_animal.php');
	require_once('animal.php');
	$crud= new CrudAnimal();
	$animal=new Animal();
	//busca el libro utilizando el id, que es enviado por GET desde la vista mostrar.php
	$animal=$crud->obtenerAnimal($_GET['id']);
?>
<html>
<head>
	<title>Actualizar animal</title>
        <meta charset="utf-8">
        <title>CRUD</title>
        <link rel="stylesheet" type="text/css" href="hoja.css">
</head>
<body>
    <form action='administrar_animal.php' method='post'>
	<table>
		<tr>
			<input type='hidden' name='id' value='<?php echo $animal->getId()?>'>
			<td>Nombre dueño:</td>
			<td> <input type='text' name='nombre_dueno' value='<?php echo $animal->getNombre_dueno()?>'></td>
		</tr>
                <tr>
			<td>Nombre animal:</td>
			<td> <input type='text' name='nombre_animal' value='<?php echo $animal->getNombre_animal()?>'></td>
		</tr>
		<tr>
			<td>Raza:</td>
			<td><input type='text' name='raza' value='<?php echo $animal->getRaza()?>' ></td>
		</tr>
		<tr>
			<td>Año de ingreso:</td>
			<td><input type='text' name='anio' value='<?php echo $animal->getAnio() ?>'></td>
		</tr>
		<input type='hidden' name='actualizar' value='actualizar'>
	</table>
	<input type='submit' value='Guardar'>
	<a href="index.php">Volver</a>
</form>
</body>
</html>

