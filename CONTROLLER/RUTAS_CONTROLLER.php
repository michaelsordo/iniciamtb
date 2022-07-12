<?php

class RUTAS{
	// incluimos los ficheros necesarios
	
	
	function __construct(){
	
		include './VIEW/RUTAS_SHOWALL.php';
		include './VIEW/RUTAS_SHOWALL_ADMIN.php';
		include './VIEW/RUTAS_SEARCH_VIEW.php';
		include './VIEW/RUTAS_ADD_VIEW.php';
		include './VIEW/RUTAS_DELETE_VIEW.php';
		include './MODEL/RUTAS_MODEL.php';
		include './VIEW/RUTAS_EDIT_VIEW.php';
		include './VIEW/MESSAGE_VIEW.php';
        


	}


	function formulariobuscar(){

		new RUTAS_SEARCH();

	}
	
	function formularioinsertar(){

		new RUTAS_ADD();
	}


	function formularioborrar(){
		// recuperamos el valor que viene por get de la tabla de resultado de búsqueda
			$rutas = new RUTAS_MODEL();
	
			$fila = $rutas->seek();
	
	
			// construimos un formulario con los valores por defecto de la tupla de la usuario que queremos modificar
	
			new RUTAS_DELETE($fila);	
	}
	
	function borrar(){
	
			$rutas = new RUTAS_MODEL();
			//comprobamos el resultado de la ejecución de la sentencia sql en la bd
	
			$respuesta = $rutas->DELETE();
	
			new MESSAGE1($respuesta, 'RUTAS', 'buscar_admin');
			
	} //end of function borrar

	function insertar(){

		
			$rutas = new RUTAS_MODEL();
			//comprobamos el resultado de la ejecución de la sentencia sql en la bd

			$respuesta = $rutas->ADD();

			new MESSAGE1($respuesta,'RUTAS', 'buscar_admin');
			
				
	} //end of function insertar 
	

		function buscar(){

			$rutas = new RUTAS_MODEL();

			$respuesta = $rutas->SEARCH();

			// construimos una tabla html empezando con los titulos de las columnas para mostrar los resultados de la busqueda
			if ($respuesta['ok'] === true){
			// construimos una tabla html empezando con los titulos de las columnas para mostrar los resultados de la busqueda
				new RUTAS_SHOWALL($respuesta['resource']);
			}
			else{
				new MESSAGE1($respuesta,'RUTAS','buscar');
			}

	
	}


	function buscar_admin(){

		$rutas = new RUTAS_MODEL();

		$respuesta = $rutas->SEARCH();

		// construimos una tabla html empezando con los titulos de las columnas para mostrar los resultados de la busqueda
		if ($respuesta['ok'] === true){
		// construimos una tabla html empezando con los titulos de las columnas para mostrar los resultados de la busqueda
			new RUTAS_SHOWALL_ADMIN($respuesta['resource']);
		}
		else{
			new MESSAGE1($respuesta,'RUTAS','buscar');
		}


}





function formularioeditar(){
	// recuperamos el valor que viene por get de la tabla de resultado de búsqueda
		$rutas = new RUTAS_MODEL();

		$fila = $rutas->seek();

		// construimos un formulario con los valores por defecto de la tupla de la usuario que queremos modificar
		new RUTAS_EDIT($fila);
}



function editar(){

	$rutas = new RUTAS_MODEL();
	//comprobamos el resultado de la ejecución de la sentencia sql en la bd

	$respuesta = $rutas->EDIT();

	new MESSAGE1($respuesta, 'RUTAS', 'buscar_admin');


} //end of function editar



	function desconectar(){
		session_destroy();
		header('Location:index.php');
	}

} //FIN DE CLASS
?>
