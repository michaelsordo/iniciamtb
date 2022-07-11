<?php

class FORO{
	// incluimos los ficheros necesarios
	
	
	function __construct(){
	
		include './VIEW/FORO_SHOWALL.php';
		include './VIEW/FORO_SHOWALL_ADMIN.php';
		include './VIEW/FORO_SEARCH_VIEW.php';
		include './VIEW/FORO_ADD_VIEW.php';
		include './VIEW/FORO_DELETE_VIEW.php';
		include './MODEL/FORO_MODEL.php';
		include './VIEW/FORO_EDIT_VIEW.php';
		include './VIEW/MESSAGE_VIEW.php';
        


	}


	function formulariobuscar(){

		new FORO_SEARCH();

	}
	
	function formularioinsertar(){

		new FORO_ADD();
	}


	function formularioborrar(){
		// recuperamos el valor que viene por get de la tabla de resultado de búsqueda
			$foro = new FORO_MODEL();
	
			$fila = $foro->seek();
	
	
			// construimos un formulario con los valores por defecto de la tupla de la usuario que queremos modificar
	
			new FORO_DELETE($fila);	
	}
	
	function borrar(){
	
			$foro = new FORO_MODEL();
			//comprobamos el resultado de la ejecución de la sentencia sql en la bd
	
			$respuesta = $foro->DELETE();
	
			new MESSAGE1($respuesta, 'FORO', 'buscar_admin');
			
	} //end of function borrar

	function insertar(){

		
			$foro = new FORO_MODEL();
			//comprobamos el resultado de la ejecución de la sentencia sql en la bd

			$respuesta = $foro->ADD();

			new MESSAGE1($respuesta,'FORO', 'buscar_admin');
			
				
	} //end of function insertar 
	

	function buscar(){

			$foro = new FORO_MODEL();

			$respuesta = $foro->SEARCH();

			// construimos una tabla html empezando con los titulos de las columnas para mostrar los resultados de la busqueda
			if ($respuesta['ok'] === true){
			// construimos una tabla html empezando con los titulos de las columnas para mostrar los resultados de la busqueda
				new FORO_SHOWALL($respuesta['resource']);
			}
			else{
				new MESSAGE1($respuesta,'FORO','buscar');
			}

	
	}


	function buscar_admin(){

		$foro = new FORO_MODEL();

		$respuesta = $foro->SEARCH();

		// construimos una tabla html empezando con los titulos de las columnas para mostrar los resultados de la busqueda
		if ($respuesta['ok'] === true){
		// construimos una tabla html empezando con los titulos de las columnas para mostrar los resultados de la busqueda
			new FORO_SHOWALL_ADMIN($respuesta['resource']);
		}
		else{
			new MESSAGE1($respuesta,'FORO','buscar');
		}


}


	function add_comentario(){

		$foro = new FORO_MODEL();

		$respuesta = $foro->ADD();

		// construimos una tabla html empezando con los titulos de las columnas para mostrar los resultados de la busqueda
		if ($respuesta['ok'] === true){
		// construimos una tabla html empezando con los titulos de las columnas para mostrar los resultados de la busqueda
			new FORO_SHOWALL_ADMIN($respuesta['resource']);
		}
		else{
			new MESSAGE1($respuesta,'FORO','add_comentario');
		}


}


function formularioeditar(){
	// recuperamos el valor que viene por get de la tabla de resultado de búsqueda
		$foro = new FORO_MODEL();

		$fila = $foro->seek();

		// construimos un formulario con los valores por defecto de la tupla de la usuario que queremos modificar
		new FORO_EDIT($fila);
}



function editar(){

	$foro = new FORO_MODEL();
	//comprobamos el resultado de la ejecución de la sentencia sql en la bd

	$respuesta = $foro->EDIT();

	new MESSAGE1($respuesta, 'FORO', 'buscar_admin');


} //end of function editar



	function desconectar(){
		session_destroy();
		header('Location:index.php');
	}

} //FIN DE CLASS
?>
