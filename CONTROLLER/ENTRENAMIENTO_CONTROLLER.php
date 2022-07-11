<?php

class ENTRENAMIENTO{
	// incluimos los ficheros necesarios
	
	
	function __construct(){
	
		include './VIEW/ENTRENAMIENTO_SHOWALL.php';
		include './VIEW/ENTRENO_25_VIEW.php';
		include './VIEW/ENTRENO_50_VIEW.php';
		include './VIEW/ENTRENO_100_VIEW.php';
		include './MODEL/ENTRENAMIENTO_MODEL.php';
        


	}
	
	function formularioinsertar(){

		
	}


	function insertar(){

		
			$entrenamientos = new ENTRENAMIENTO_MODEL();
			//comprobamos el resultado de la ejecución de la sentencia sql en la bd

			$respuesta = $entrenamientos->ADD();

			new MESSAGE1($respuesta,'ENTRENAMIENTOS', 'buscar');
			
				
	} //end of function insertar 
	

	function buscar(){

			$entrenamientos = new ENTRENAMIENTO_MODEL();

			$respuesta = $entrenamientos->SEARCH();

			// construimos una tabla html empezando con los titulos de las columnas para mostrar los resultados de la busqueda
			if ($respuesta['ok'] === true){
			// construimos una tabla html empezando con los titulos de las columnas para mostrar los resultados de la busqueda
				new ENTRENAMIENTO_SHOWALL($respuesta['resource']);
			}
			else{
				new MESSAGE1($respuesta,'ENTRENAMIENTOS','buscar');
			}

	
	}

	function buscar_entrenamiento25(){

		$entreno25 = new ENTRENAMIENTO_MODEL();

		$respuesta = $entreno25->SEARCH();

		// construimos una tabla html empezando con los titulos de las columnas para mostrar los resultados de la busqueda
		if ($respuesta['ok'] === true){
		// construimos una tabla html empezando con los titulos de las columnas para mostrar los resultados de la busqueda
			new ENTRENAMIENTO_25($respuesta['resource']);
		}
		else{
			new MESSAGE1($respuesta,'ENTRENAMIENTOS','buscar');
		}


}

function buscar_entrenamiento50(){

	$entreno50 = new ENTRENAMIENTO_MODEL();

	$respuesta = $entreno50->SEARCH();

	// construimos una tabla html empezando con los titulos de las columnas para mostrar los resultados de la busqueda
	if ($respuesta['ok'] === true){
	// construimos una tabla html empezando con los titulos de las columnas para mostrar los resultados de la busqueda
		new ENTRENAMIENTO_50($respuesta['resource']);
	}
	else{
		new MESSAGE1($respuesta,'ENTRENAMIENTOS','buscar');
	}


}

function buscar_entrenamiento100(){

	$entreno100 = new ENTRENAMIENTO_MODEL();

	$respuesta = $entreno100->SEARCH();

	// construimos una tabla html empezando con los titulos de las columnas para mostrar los resultados de la busqueda
	if ($respuesta['ok'] === true){
	// construimos una tabla html empezando con los titulos de las columnas para mostrar los resultados de la busqueda
		new ENTRENAMIENTO_100($respuesta['resource']);
	}
	else{
		new MESSAGE1($respuesta,'ENTRENAMIENTOS','buscar');
	}


}


	function desconectar(){
		session_destroy();
		header('Location:index.php');
	}

} //FIN DE CLASS
?>