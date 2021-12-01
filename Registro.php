<!DOCTYPE html>
<html lang="es">

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
			<p class="login-text" style="font-size: 2rem; font-weight: 800;">Registro</p>
			<div class="input-group">
				<input type="text" name="num_control" placeholder="Numero de Control">
			</div>
			<div class="input-group">
				<input type="text" name="a_paterno" placeholder="Apellido Paterno">
			</div>
			<div class="input-group">
				<input type="text" name="a_materno" placeholder="Apellido Materno">
			</div>
			<div class="input-group">
				<input type="text" name="nombre" placeholder="Nombres">
			</div>
			<div class="input-group">
				<input type="tel" placeholder="Telefono Movil" name="Tel_movil" required>
			</div>
			<div class="input-group">
				<input type="tel" placeholder="Telefono Tutor" name="Tel_tutor" required>
			</div>

			<div class="input-group">
				<label for="carrera">Carrera:</label>
				</select>
				<input type="text" list="Carrera" name="Carrera">
				<datalist id="Carrera">
					<option value="Administración de Recuros Humanos">
					<option value="Alimentos y Bebidas">
					<option value="Laboratorista Clínico">
					<option value="Programación">
				</datalist>
			</div>

			<div class="input-group">
				<label for="Turno">Turno:</label>
				</select>
				<input type="text" list="Turno" name="Turno">
				<datalist id="Turno">
					<option value="Matutino">
					<option value="Vespertino">
				</datalist>
			</div>

			<div class="input-group">
				<label for="Clubs">Clubs:</label>
				</select>
				<input type="text" list="Clubs" name="Clubs">
				<datalist id="Clubs">
					<option value="Futbol">
					<option value="Básquet Ball">
					<option value="Volibol">
					<option value="Pintura">
					<option value="Canto">
					<option value="Danza">
					<option value="Papel Maché">
					<option value="Oratoria">
					<option value="Robótica">
					<option value="Matemáticas">
				</datalist>
			</div>

			<div class="input-group">
				<button type="submit" name="Enviar" class="btn">Enviar</button>
			</div>
			<p class="login-register-text">Have an account? <a href="index.php">Login Here</a>.</p>
		</form>
	</div>
</body>

</html>