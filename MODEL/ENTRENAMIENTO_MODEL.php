<?php

include_once './ABSTRACT_CLASS/ABSTRACT_CLASS.php';

include_once './COMMON/Validar_Model.php';
//include_once './VIEW/TEST_VIEW.php';



class ENTRENAMIENTO_MODEL extends Abstract_Model
{

	//ATRIBUTOS
	var $distancia;
	
	var $conexion;

	//METODOS

	function __construct()
	{
		$this->fillfields();
		$this->conexion = $this->connection();
	}

	function fillfields()
	{

		$this->distancia = '';
		





		if ($_POST) {
			if (isset($_POST['distancia'])) $this->distancia = $_POST['distancia'];
		

		} else {
			if ($_GET) {
				if (isset($_GET['distancia'])) $this->distancia = $_GET['distancia'];
			

			}
		}
	}

	
	


	

	function ADD(){
		
		
}

	function SEARCH()
	{

		// construimos la sentencia sql de búsqueda con comodines		
		$this->query = "SELECT * FROM entrenamientos
	WHERE
	(
		(distancia LIKE '%$this->distancia%') 
		



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
		$this->query = "SELECT * FROM entrenamientos
					WHERE
					(
						(distancia = '$this->distancia')
					)";

		$this->get_one_result_from_query();

		// recuperamos la unica fila que viene en el recordset resultado de la consulta
		$fila = $this->rows;

		return $fila;
	}

	function getById($atributo, $valor)
	{

		// construimos la sentencia sql de búsqueda con valor concreto de clave		
		$sql = "SELECT * FROM entrenamientos
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

		
	}





}
?>