
<html>
<head>
	<title> Ingresar Solicitud</title>
        <meta charset="utf-8">
        <title>CRUD</title>
        <link rel="stylesheet" type="text/css" href="hoja.css">
</head>
<header align="center">
<h1>Ingresa los datos de la solicitud<h1/>
</header>
<form action='administrar_registro.php' method='post' align="center">
	<table align="center">
		<tr>
			<td>Nombre</td>
			<td> <input type='text' name='nombre' required></td>
		</tr>
    <tr>
			<td>Apellido</td>
			<td> <input type='text' name='apellido' required></td>
		</tr>
		<tr>
			<td>Cedula</td>
			<td><input type='text' name='cedula' required></td>
		</tr>
		<tr>
			<td>Direccion</td>
			<td><input type='text' name='direccion' required></td>
		</tr>
		<tr>
			<td>Fecha de obtencion</td>
			<td><input type='text' name='fecha_obtencion' required></td>
		</tr>
		<tr>
			<td>Nota final</td>
			<td><input type='text' name='nota_final' required></td>
		</tr>
		<tr>
			<td>Agregar anexo</td>
			<td><input type="file" name="anexo" ></td>
		</tr>
		<input type='hidden' name='insertar' value='insertar'>
	</table>
	<input type='submit' value='Guardar'>
	<a href="index.php">Volver</a>
</form>

</html>
