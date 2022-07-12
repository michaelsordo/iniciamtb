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
			
			if (isset($_POST['id'])) $this->id = $_POST['id'];
			if (isset($_POST['nombre'])) $this->nombre = $_POST['nombre'];
			if (isset($_POST['descripcion'])) $this->descripcion = $_POST['descripcion'];
			if (isset($_POST['enlace'])) $this->enlace = $_POST['enlace'];

		} else {
			if ($_GET) {
				if (isset($_GET['id'])) $this->id = $_GET['id'];
				if (isset($_GET['nombre'])) $this->nombre = $_GET['nombre'];
				if (isset($_GET['descripcion'])) $this->descripcion = $_GET['descripcion'];
				if (isset($_GET['enlace'])) $this->enlace = $_GET['enlace'];

			}
		}
	}

	
	
	function ADD()
	{

		$this->seek();
		if (($this->feedback['code']) === '00004') { //existe el usuarios
			$this->feedback['ok'] = false;
			$this->feedback['code'] = '02101'; //usuarios ya existe
			//$this->feedback['code'] = '02104'; //email ya existe
		} else {
			// construimos la sentencia de insercion en la bd
			$this->query = 	"INSERT INTO rutas

								(id,
								nombre,
								descripcion,
								enlace
								
								)
							VALUES
								('$this->id',
								'$this->nombre',
								'$this->descripcion',
								'$this->enlace'
						
								
							)";
			//var_dump($this->query);
			$this->execute_single_query();

			if ($this->feedback['ok']) {
				$this->feedback['code'] = '00004'; //insertado con exito
			} else {
				if ($this->feedback['code'] != '00000') //sino es fallo conexion gestor
					$this->feedback['code'] = '02106'; //insercion fallida
			}
		}

		return $this->feedback;
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


		// construimos la sentencia sql de búsqueda con valor concreto de clave		
		$this->query = "UPDATE rutas SET
					id = '$this->id',
					nombre = '$this->nombre',
					descripcion = '$this->descripcion',
					enlace = '$this->enlace'
					
					
					
					WHERE
					(id = '$this->id')
					";

		$this->execute_single_query();

		if ($this->feedback['ok']) {
			$this->feedback['code'] = '02002'; //modificado con exito
		} else {
			if ($this->feedback['code'] != '00000') //sino es fallo conexion gestor
				$this->feedback['code'] = '02107'; //modificacion fallida
		}

		return $this->feedback;
	}

	function DELETE()
	{

		// construimos la sentencia sql de borrado con el valor concreto de clave a borrar		
		$this->query = "DELETE FROM rutas 
					WHERE
					(id = '$this->id')
					";

		$this->execute_single_query();

		if ($this->feedback['ok']) {
			$this->feedback['code'] = '00007'; //borrado con exito
		} else {
			if ($this->feedback['code'] != '00000') //sino es fallo conexion gestor
				$this->feedback['code'] = '02108'; //borrado fallido
		}

		return $this->feedback;
	}






}
?>