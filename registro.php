<?php
	$realname = $_POST['realname'];
	$nick 	  = $_POST['nick'];
	$pass	  = $_POST['pass'];
	$rpass	  = $_POST['rpass'];
	$reqlen   = strlen($nick) * strlen($pass) * strlen($rpass);
	if($reqlen >0){
		if($pass === $rpass){
			require("connect_db.php");
			$pass = md5($pass);
			mysqli_query($link,"Insert into registro VALUES('','$realname','$nick','$pass')");
			mysqli_close($link);
			echo 'Se ha conectado exitosamente';
		}else {
			echo 'Por favor introduza des contraseñas idénticas.';
		}
	} else {
		echo 'Por favor, rellenen todos los campos requeridos.';
	}

?>