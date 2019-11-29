
<html>
	<head>
		<title>Renovacion de Becas</title>
                <meta charset="utf-8">
                <title>Renovacion de Becas</title>
                <link rel="stylesheet" type="text/css" href="hoja.css">
	</head>
	<body align="center">
		<header align="center">
			<h1>Renovacion de Becas<h1/>
		</header>
    <form action='index.php' method='post'>
      Beca 1: <input type="date" name="fecha">
      <p>Estado:
        <input type="radio" name="hm" value="h"> Renovar
        <input type="radio" name="hm" value="m"> Eliminar
      </p>
      Beca 2: <input type="date" name="fecha">
      <p>Estado:
        <input type="radio" name="hm" value="h"> Renovar
        <input type="radio" name="hm" value="m"> Eliminar
      </p>
      Beca 3: <input type="date" name="fecha">
      <p>Estado:
        <input type="radio" name="hm" value="h"> Renovar
        <input type="radio" name="hm" value="m"> Eliminar
      </p>
    	<input type='submit' value='Enviar Renovacion'>
    	<a href="index.php">Volver</a>
    </form>
		<footer>

		</footer>
	</body>
</html>
