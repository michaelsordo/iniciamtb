<?php

include_once './ABSTRACT_CLASS/ABSTRACT_CLASS.php';

include_once './COMMON/Validar_Model.php';
//include_once './VIEW/TEST_VIEW.php';



class RUTAS_MODEL extends Abstract_Model
{

	//ATRIBUTOS
	var $id;
	var $nombre;
	var $descripcion;
	var $enlace;
	var $conexion;

	//METODOS

	function __construct()
	{
		$this->fillfields();
		$this->conexion = $this->connection();
	}

	function fillfields()
	{

		$this->id = '';
		$this->nombre = '';
		$this->descripcion = '';
		$this->enlace = '';





		if ($_POST) {
			
			if (isset($_POST['id'])) $this->nombre = $_POST['id'];
			if (isset($_POST['nombre'])) $this->nombre = $_POST['nombre'];
			if (isset($_POST['descripcion'])) $this->descripcion = $_POST['descripcion'];
			if (isset($_POST['enlace'])) $this->descripcion = $_POST['enlace'];

		} else {
			if ($_GET) {
				if (isset($_GET['id'])) $this->nombre = $_GET['id'];
				if (isset($_GET['nombre'])) $this->nombre = $_GET['nombre'];
				if (isset($_GET['descripcion'])) $this->descripcion = $_GET['descripcion'];
				if (isset($_GET['enlace'])) $this->descripcion = $_GET['enlace'];

			}
		}
	}

	
	


	

	function ADD(){
		
		
}

	function SEARCH()
	{

		// construimos la sentencia sql de búsqueda con comodines		
		$this->query = "SELECT * FROM rutas
	WHERE
	(	
		(id LIKE '%$this->id%') and
		(nombre LIKE '%$this->nombre%') and
		(descripcion LIKE '%$this->descripcion%') and
		(enlace LIKE '%$this->enlace%')



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
		$this->query = "SELECT * FROM rutas
					WHERE
					(
						(id = '$this->id')
					)";

		$this->get_one_result_from_query();

		// recuperamos la unica fila que viene en el recordset resultado de la consulta
		$fila = $this->rows;

		return $fila;
	}

	function getById($atributo, $valor)
	{

		// construimos la sentencia sql de búsqueda con valor concreto de clave		
		$sql = "SELECT * FROM rutas
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