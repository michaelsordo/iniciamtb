<?php

include_once './ABSTRACT_CLASS/ABSTRACT_CLASS.php';

include_once './COMMON/Validar_Model.php';
//include_once './VIEW/TEST_VIEW.php';



class RETOS_USER_MODEL extends Abstract_Model
{

	//ATRIBUTOS
	var $nombre_reto;
	var $nombre_usuario;
	
	
	var $conexion;

	//METODOS

	function __construct()
	{
		$this->fillfields();
		$this->conexion = $this->connection();
	}

	function fillfields()
	{

		$this->nombre_reto = '';
		$this->nombre_usuario = '';
	
		





		if ($_POST) {
			if (isset($_POST['nombre_reto'])) $this->nombre_reto = $_POST['nombre_reto'];
			if (isset($_POST['nombre_usuario'])) $this->nombre_reto = $_POST['nombre_usuario'];
		
		

		} else {
			if ($_GET) {
				if (isset($_GET['nombre_reto'])) $this->nombre_reto = $_GET['nombre_reto'];
				if (isset($_GET['nombre_usuario'])) $this->nombre_usuario = $_GET['nombre_usuario'];
			

			}
		}
	}

	
	


	

	function ADD(){
		
		
}

	function SEARCH()
	{

		// construimos la sentencia sql de búsqueda con comodines		
		$this->query = "SELECT * FROM retos_realizados
	WHERE
	(
		(nombre_reto LIKE '%$this->nombre_reto%') and
		(nombre_usuario = '$_SESSION[nombre_usuario]')
		



	)";
		// ejecutamos la consulta y guardamos los resultados en una variable
		$this->get_results_from_query();

		if ($this->feedback['ok'] === true) {
			$this->feedback['resource'] = $this->rows;
		}

		return $this->feedback;
	} //fin de searchall

	function seek()
	{

		// construimos la sentencia sql de búsqueda con valor concreto de clave		
		$this->query = "SELECT * FROM retos_realizados
					WHERE
					(
						(nombre_reto = '$this->nombre_reto')
					)";

		$this->get_one_result_from_query();

		// recuperamos la unica fila que viene en el recordset resultado de la consulta
		$fila = $this->rows;

		return $fila;
	}

	function getById($atributo, $valor)
	{

		// construimos la sentencia sql de búsqueda con valor concreto de clave		
		$sql = "SELECT * FROM retos_realizados
					WHERE
					(
						($atributo = '$valor')
					)";

		$this->get_one_result_from_query();

		// recuperamos la unica fila que viene en el recordset resultado de la consulta
		$fila = $this->rows;

		return $fila;
	}



	function EDIT()
	{

	}

	function DELETE()
	{

		// construimos la sentencia sql de borrado con el valor concreto de clave a borrar		
		$this->query = "DELETE FROM retos_realizados 
					WHERE
					(nombre_reto = '$this->nombre_reto')
					";

		$this->execute_single_query();

		if ($this->feedback['ok']) {
			$this->feedback['code'] = '02003'; //borrado con exito
		} else {
			if ($this->feedback['code'] != '00000') //sino es fallo conexion gestor
				$this->feedback['code'] = '02108'; //borrado fallido
		}

		return $this->feedback;
	}





}
?>