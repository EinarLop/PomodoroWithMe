<?php
	define("server","localhost");
	define("user","admin");
	define("password","admin");
	define("database","dines");
	
	function databaseConnection($consulta){
		
		$conexion  = mysqli_connect(server,user,password,database);
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