<?php

include_once './ABSTRACT_CLASS/ABSTRACT_CLASS.php';

include_once './COMMON/Validar_Model.php';




class RETOS_MODEL extends Abstract_Model
{

	//ATRIBUTOS
	var $nombre;
	var $tipo;
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

		$this->nombre = '';
		$this->tipo = '';
		$this->nombre_usuario = '';
		$this->nombre_reto = '';





		if ($_POST) {
			if (isset($_POST['nombre'])) $this->nombre = $_POST['nombre'];
			if (isset($_POST['tipo'])) $this->tipo = $_POST['tipo'];
			if (isset($_POST['nombre_usuario'])) $this->tipo = $_POST['nombre_usuario'];
			if (isset($_POST['nombre_reto'])) $this->tipo = $_POST['nombre_reto'];

		} else {
			if ($_GET) {
				if (isset($_GET['nombre'])) $this->nombre = $_GET['nombre'];
				if (isset($_GET['tipo'])) $this->tipo = $_GET['tipo'];
				if (isset($_GET['nombre_usuario'])) $this->nombre = $_GET['nombre_usuario'];
				if (isset($_GET['nombre_reto'])) $this->tipo = $_GET['nombre_reto'];

			}
		}
	}

	
	

	function add_retos_usuario()
	{

		$this->seek();
		if (($this->feedback['code']) === '00004') { //existe el usuarios
			$this->feedback['ok'] = false;
			$this->feedback['code'] = '02101'; //usuarios ya existe
			//$this->feedback['code'] = '02104'; //email ya existe
		} else {
			// construimos la sentencia de insercion en la bd
			$this->query = 	"INSERT INTO retos_realizados

								(nombre_reto,
								nombre_usuario
								
								)
							VALUES
								('$this->nombre_reto',
								'$_SESSION[nombre_usuario]'
						
								
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

	function SEARCH_retos_usuario()
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



	

	function ADD()
	{

		$this->seek();
		if (($this->feedback['code']) === '00004') { //existe el usuarios
			$this->feedback['ok'] = false;
			$this->feedback['code'] = '02101'; //usuarios ya existe
			//$this->feedback['code'] = '02104'; //email ya existe
		} else {
			// construimos la sentencia de insercion en la bd
			$this->query = 	"INSERT INTO retos

								(nombre,
								tipo
								
								)
							VALUES
								('$this->nombre',
								'$this->tipo'
						
								
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
		$this->query = "SELECT * FROM retos
	WHERE
	(
		(nombre LIKE '%$this->nombre%') and
		(tipo LIKE '%$this->tipo%')



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
		$this->query = "SELECT * FROM retos
					WHERE
					(
						(nombre = '$this->nombre')
					)";

		$this->get_one_result_from_query();

		// recuperamos la unica fila que viene en el recordset resultado de la consulta
		$fila = $this->rows;

		return $fila;
	}

	function getById($atributo, $valor)
	{

		// construimos la sentencia sql de búsqueda con valor concreto de clave		
		$sql = "SELECT * FROM retos
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
		$this->query = "UPDATE retos SET
					nombre = '$this->nombre',
					tipo = '$this->tipo'
			
		
					WHERE
					(nombre = '$this->nombre')
					";

		$this->execute_single_query();

		if ($this->feedback['ok']) {
			$this->feedback['code'] = '00005'; //modificado con exito
		} else {
			if ($this->feedback['code'] != '00000') //sino es fallo conexion gestor
				$this->feedback['code'] = '02107'; //modificacion fallida
		}

		return $this->feedback;
	}



	function DELETE()
	{

		// construimos la sentencia sql de borrado con el valor concreto de clave a borrar		
		$this->query = "DELETE FROM retos 
					WHERE
					(nombre = '$this->nombre')
					";

		$this->execute_single_query();

		if ($this->feedback['ok']) {
			$this->feedback['code'] = '00006'; //borrado con exito
		} else {
			if ($this->feedback['code'] != '00000') //sino es fallo conexion gestor
				$this->feedback['code'] = '02108'; //borrado fallido
		}

		return $this->feedback;
	}




	





}
?>