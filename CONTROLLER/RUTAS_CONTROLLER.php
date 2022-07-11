<?php

class RUTAS{
	// incluimos los ficheros necesarios
	
	
	function __construct(){
	
		include './VIEW/RUTAS_SHOWALL.php';
		include './MODEL/RUTAS_MODEL.php';
        


	}
	
	function formularioinsertar(){

		//new RUTAS_ADD();
	}


	function insertar(){

		
			$rutas = new RUTAS_MODEL();
			//comprobamos el resultado de la ejecución de la sentencia sql en la bd

			$respuesta = $rutas->ADD();

			//var_dump($respuesta);

			new MESSAGE1($respuesta,'RUTAS', 'buscar');
			
				
	} //end of function insertar 
	

	function buscar(){

			$recurso = new RUTAS_MODEL();

			$respuesta = $recurso->SEARCH();

			// construimos una tabla html empezando con los titulos de las columnas para mostrar los resultados de la busqueda
			if ($respuesta['ok'] === true){
			// construimos una tabla html empezando con los titulos de las columnas para mostrar los resultados de la busqueda
				new RUTAS_SHOWALL($respuesta['resource']);
			}
			else{
				new MESSAGE1($respuesta,'RUTAS','buscar');
			}

	
	}


	function desconectar(){
		session_destroy();
		header('Location:index.php');
	}

} //FIN DE CLASS
?>
