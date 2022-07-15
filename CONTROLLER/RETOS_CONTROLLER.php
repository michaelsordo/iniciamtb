<?php

class RETOS{
	// incluimos los ficheros necesarios
	
	
	function __construct(){
	
		include './VIEW/RETOS_SHOWALL.php';
		include './VIEW/RETOS_SHOWALL_ADMIN.php';
		include './VIEW/RETOS_SEARCH_VIEW.php';
		include './VIEW/RETOS_ADD_VIEW.php';
		include './MODEL/RETOS_MODEL.php';
		include './VIEW/RETOS_EDIT_VIEW.php';
		include './VIEW/RETOS_DELETE_VIEW.php';
		include './VIEW/MESSAGE_VIEW.php';
		include './VIEW/MIS_RETOS_SHOWALL.php';
		include './VIEW/MIS_RETOS_ADD.php';
		include './VIEW/MIS_RETOS_DELETE.php';
        


	}

	function formulariobuscar(){

		new RETOS_SEARCH();

	}
	
	function formularioinsertar(){

		new RETOS_ADD();
		
	}


	function formularioinsertar2(){

	// recuperamos el valor que viene por get de la tabla de resultado de búsqueda
	$reto = new RETOS_MODEL();

	$fila = $reto->seek();

	// construimos un formulario con los valores por defecto de la tupla de la usuario que queremos modificar
	new MIS_RETOS_ADD($fila);
		
	}


	function insertar(){

		
			$retos = new RETOS_MODEL();
			//comprobamos el resultado de la ejecución de la sentencia sql en la bd

			$respuesta = $retos->ADD();

			new MESSAGE1($respuesta,'RETOS', 'buscar_retos_admin');
			
				
	} //end of function insertar 

	function insertar2(){

		
		$retos = new RETOS_MODEL();
		//comprobamos el resultado de la ejecución de la sentencia sql en la bd

		$respuesta = $retos->add_retos_usuario();

		new MESSAGE1($respuesta,'RETOS', 'buscar_usuario');
		
			
} //end of function insertar 
	
	function buscar(){

		$reto = new RETOS_MODEL();

		$respuesta = $reto->SEARCH();

		// construimos una tabla html empezando con los titulos de las columnas para mostrar los resultados de la busqueda
		if ($respuesta['ok'] === true){
		// construimos una tabla html empezando con los titulos de las columnas para mostrar los resultados de la busqueda
			new RETOS_SHOWALL($respuesta['resource']);
		}
		else{
			new MESSAGE1($respuesta,'RETOS','buscar');
		}


}

function buscar_usuario(){

	$reto = new RETOS_MODEL();

	$respuesta = $reto->SEARCH_retos_usuario();

	// construimos una tabla html empezando con los titulos de las columnas para mostrar los resultados de la busqueda
	if ($respuesta['ok'] === true){
	// construimos una tabla html empezando con los titulos de las columnas para mostrar los resultados de la busqueda
		new MIS_RETOS_SHOWALL($respuesta['resource']);
	}
	else{
		new MESSAGE1($respuesta,'RETOS','buscar');
	}


}


function buscar_retos_admin(){

	$reto = new RETOS_MODEL();

	$respuesta = $reto->SEARCH();

	// construimos una tabla html empezando con los titulos de las columnas para mostrar los resultados de la busqueda
	if ($respuesta['ok'] === true){
	// construimos una tabla html empezando con los titulos de las columnas para mostrar los resultados de la busqueda
		new RETOS_SHOWALL_ADMIN($respuesta['resource']);
	}
	else{
		new MESSAGE1($respuesta,'RETOS','buscar');
	}


}


function formularioeditar(){
	// recuperamos el valor que viene por get de la tabla de resultado de búsqueda
		$reto = new RETOS_MODEL();

		$fila = $reto->seek();

		// construimos un formulario con los valores por defecto de la tupla de la usuario que queremos modificar
		new RETOS_EDIT($fila);
}

function formularioeditar2(){
	// recuperamos el valor que viene por get de la tabla de resultado de búsqueda
		$reto = new RETOS_MODEL();

		$fila = $reto->seek();

		// construimos un formulario con los valores por defecto de la tupla de la usuario que queremos modificar
		new MIS_RETOS_ADD($fila);
}



function editar(){

	$reto = new RETOS_MODEL();
	//comprobamos el resultado de la ejecución de la sentencia sql en la bd

	$respuesta = $reto->EDIT();

	new MESSAGE1($respuesta, 'RETOS', 'buscar_retos_admin');


} //end of function editar





function formularioborrar(){
	// recuperamos el valor que viene por get de la tabla de resultado de búsqueda
		$retos_admin = new RETOS_MODEL();

		$fila = $retos_admin->seek();


		// construimos un formulario con los valores por defecto de la tupla de la usuario que queremos modificar

		new RETOS_DELETE($fila);	
}

function formularioborrar_usuario(){
	// recuperamos el valor que viene por get de la tabla de resultado de búsqueda
		$retos_usuario = new RETOS_MODEL();

		$fila = $retos_usuario->seek();


		// construimos un formulario con los valores por defecto de la tupla de la usuario que queremos modificar

		new MIS_RETOS_DELETE($fila);	
}

function borrar(){

		$retos_admin = new RETOS_MODEL();
		//comprobamos el resultado de la ejecución de la sentencia sql en la bd

		$respuesta = $retos_admin->DELETE();

		new MESSAGE1($respuesta, 'RETOS', 'buscar_retos_admin');
		
} //end of function borrar

function borrar_usuario(){

	$retos_usuario = new RETOS_MODEL();
	//comprobamos el resultado de la ejecución de la sentencia sql en la bd

	$respuesta = $retos_usuario->DELETE_MIS_RETOS();

	new MESSAGE1($respuesta, 'RETOS', 'buscar_usuario');
	
} //end of function borrar






	function desconectar(){
		session_destroy();
		header('Location:index.php');
	}

} //FIN DE CLASS
?>
