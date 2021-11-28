<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="css/style.css">
	<title>Registro alumnos</title>
</head>
<body>
	<div class="container">
		<form action="conexion.php" method="post" class="login-email">
            <p class="login-text" style="font-size: 2rem; font-weight: 800;">Register</p>
			<div class="input-group">
			<input type="text" name="num_control" placeholder="num_control">
			</div>
			<div class="input-group">
			<input type="text" name="a_paterno" placeholder="Apellido paterno">
			</div>
			<div class="input-group">
			<input type="text" name="a_materno" placeholder="Apellido materno">
            </div>
            <div class="input-group">
			<input type="text" name="nombre" placeholder="Nombres">
			</div>
			<div class="input-group">
			<button type="submit" name="Enviar" class="btn">Enviar</button>
			</div>
			<p class="login-register-text">Have an account? <a href="index.php">Login Here</a>.</p>
		</form>
	</div>
</body>
</html>