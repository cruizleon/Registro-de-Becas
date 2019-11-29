
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
<form action="estado.php" method="post">
  <div class="imgcontainer">
    <img src="https://cdn2.iconfinder.com/data/icons/blog-7/80/user_avatar_profile_login_button_account_member-512.png"  alt="Avatar" class="avatar">
  </div>

  <div class="container">
    <label for="uname"><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="uname" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" required>

    <button type="submit">Login</button>

  </div>

  <div class="container" style="background-color:#f1f1f1">
    <a href="index.php">Volver</a>
</form>

</html>
