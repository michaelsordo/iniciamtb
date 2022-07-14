<?php

class RETOS_USER{
	// incluimos los ficheros necesarios
	
	
	function __construct(){
	
		include './VIEW/RETOS_SHOWALL.php';
		include './VIEW/RETOS_SHOWALL_ADMIN.php';
		include './VIEW/RETOS_SEARCH_VIEW.php';
		include './VIEW/RETOS_ADD_VIEW.php';
		include './MODEL/RETOS_USER_MODEL.php';
		include './VIEW/RETOS_EDIT_VIEW.php';
		include './VIEW/RETOS_DELETE_VIEW.php';
		include './VIEW/MESSAGE_VIEW.php';
		include './VIEW/MIS_RETOS_SHOWALL.php';
		include './VIEW/MIS_RETOS_ADD.php';
		include './VIEW/MIS_RETOS_DELETE.php';

        


	}
	
	function formularioinsertar(){

		
	}

	function formularioborrar(){
		// recuperamos el valor que viene por get de la tabla de resultado de búsqueda
			$retos_user = new RETOS_USER_MODEL();

			$fila = $retos_user->seek();


			// construimos un formulario con los valores por defecto de la tupla de la usuario que queremos modificar

			new MIS_RETOS_DELETE($fila);	
	}

	function borrar(){

			$retos_user = new RETOS_USER_MODEL();
			//comprobamos el resultado de la ejecución de la sentencia sql en la bd

			$respuesta = $retos_user->DELETE();

			new MESSAGE1($respuesta, 'RETOS_USER', 'buscar');
			
} //end of function borrar


	function insertar(){

		
			$retos_user = new RETOS_USER_MODEL();
			//comprobamos el resultado de la ejecución de la sentencia sql en la bd

			$respuesta = $retos_user->ADD();

			new MESSAGE1($respuesta,'RETOS_USER', 'buscar');
			
				
	} //end of function insertar 
	

	function buscar(){

			$retos_user = new RETOS_USER_MODEL();

			$respuesta = $retos_user->SEARCH();

			// construimos una tabla html empezando con los titulos de las columnas para mostrar los resultados de la busqueda
			if ($respuesta['ok'] === true){
			// construimos una tabla html empezando con los titulos de las columnas para mostrar los resultados de la busqueda
				new MIS_RETOS_SHOWALL($respuesta['resource']);
			}
			else{
				new MESSAGE1($respuesta,'RETOS_USER','buscar');
			}

	
	}




	function desconectar(){
		session_destroy();
		header('Location:index.php');
	}

} //FIN DE CLASS
?>
