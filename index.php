<!DOCTYPE html>
<html lang="es">

	<head>
		<meta charset="utf-8">
		<title>Formulario de registro </title>
		<link rel="stylesheet" href="./style.css" type="text/css" media="all" />	
	</head>
	
	<body>
		
		<h1>Fomulario de registro </h1>
		<h3>Los campos con (*) son requeridos.<h3>
		<form method="POST" action="" />
			
			<table>
				<tr>
					<td>
						Nombre y apellidos:
					</td>
					<td>
						<input type="name" name="realname" />
					</td>
					<td>					
						<p>Titulo1</p>
					</td>
					<TD>
						<p>Titulo2</p>
					</TD>
					<td>
						<p>Titulo3</p>
					</td>
				</tr>
				<tr>
					<td>
						*Nick de usuario:
					</td>
					<td>
						<input type="name" name="nick" />
					</td>
					
				</tr>
				<tr>
					<td>
						*Contraseña:
					</td>
					<td>
						<input type="password" name="pass" />
					</td>
				</tr>
				<tr>
					<td>
						*Repetir contraseña:
					</td>
					<td>
						<input type="password" name="rpass" />
					</td>					
				</tr>
			</table>
			<input type="submit" name="submit" value="Registrame" /> <input type="reset" />
		<form/>
		<?php
			if (isset($_POST['submit'])) {
				require("registro.php");
			}	
		?>
	</body>

</html>