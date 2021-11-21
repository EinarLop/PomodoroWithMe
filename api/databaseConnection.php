<?php
	define("server","mysql:host=database:3306");
	define("user","root");
	define("password","tiger");
	define("database","pwm");
	
	function databaseConnection($consulta){
		
		$conexion  = mysqli_connect("database", "root", "tiger", "pwm");
		$resultado = mysqli_query($conexion,$consulta);
		
		if($resultado){
			mysqli_close($conexion);
			return $resultado;
			
		}
		else{
			mysqli_close($conexion);
			return FALSE;
		}
	}

	?>