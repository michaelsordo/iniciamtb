<?php

class ENTRENAMIENTO{
	// incluimos los ficheros necesarios
	
	
	function __construct(){
	
		include './VIEW/ENTRENAMIENTO_SHOWALL.php';
		include './VIEW/ENTRENO_25_VIEW.php';
		include './VIEW/ENTRENO_50_VIEW.php';
		include './VIEW/ENTRENO_100_VIEW.php';
		include './MODEL/ENTRENAMIENTO_MODEL.php';
		include './VIEW/MESSAGE_VIEW.php';
		include './VIEW/MIS_ENTRENOS_SHOWALL.php';
		include './VIEW/MIS_ENTRENOS_DELETE_VIEW.php';

        


	}
	
	function formularioinsertar(){

		
	}

	function formularioborrar(){
		// recuperamos el valor que viene por get de la tabla de resultado de búsqueda
			$entrenamiento = new ENTRENAMIENTO_MODEL();

			$fila = $entrenamiento->seek();


			// construimos un formulario con los valores por defecto de la tupla de la usuario que queremos modificar

			new MIS_ENTRENOS_DELETE($fila);	
	}

	function borrar(){

			$entrenamiento = new ENTRENAMIENTO_MODEL();
			//comprobamos el resultado de la ejecución de la sentencia sql en la bd

			$respuesta = $entrenamiento->DELETE();

			new MESSAGE1($respuesta, 'ENTRENAMIENTO', 'buscar');
			
} //end of function borrar


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


	function buscar2(){

		$entrenamientos = new ENTRENAMIENTO_MODEL();

		$respuesta = $entrenamientos->SEARCH();

		// construimos una tabla html empezando con los titulos de las columnas para mostrar los resultados de la busqueda
		if ($respuesta['ok'] === true){
		// construimos una tabla html empezando con los titulos de las columnas para mostrar los resultados de la busqueda
			new MIS_ENTRENOS_SHOWALL($respuesta['resource']);
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
