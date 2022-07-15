<?php

include_once './ABSTRACT_CLASS/ABSTRACT_CLASS.php';

include_once './COMMON/Validar_Model.php';
//include_once './VIEW/TEST_VIEW.php';



class ENTRENAMIENTO_MODEL extends Abstract_Model
{

	//ATRIBUTOS
	var $id_entrenamiento;
	var $nombre_usuario;
	var $fecha_inicio;
	
	var $conexion;

	//METODOS

	function __construct()
	{
		$this->fillfields();
		$this->conexion = $this->connection();
	}

	function fillfields()
	{

		$this->id_entrenamiento = '';
		$this->nombre_usuario = '';
		$this->fecha_inicio = '';
		





		if ($_POST) {
			if (isset($_POST['id_entrenamiento'])) $this->id_entrenamiento = $_POST['id_entrenamiento'];
			if (isset($_POST['nombre_usuario'])) $this->id_entrenamiento = $_POST['nombre_usuario'];
			if (isset($_POST['fecha_inicio'])) $this->fecha_inicio = $_POST['fecha_inicio'];
		

		} else {
			if ($_GET) {
				if (isset($_GET['id_entrenamiento'])) $this->id_entrenamiento = $_GET['id_entrenamiento'];
				if (isset($_GET['nombre_usuario'])) $this->nombre_usuario = $_GET['nombre_usuario'];
				if (isset($_GET['fecha_inicio'])) $this->fecha_inicio = $_GET['fecha_inicio'];
			

			}
		}
	}

	
	


	

	function ADD()
	{

	
			// construimos la sentencia de insercion en la bd
			$this->query = 	"INSERT INTO entrenamientos

								(id_entrenamiento,
								nombre_usuario
								
								)
							VALUES
								('$this->id_entrenamiento',
								'$this->nombre_usuario'
						
								
							)";
			
			$this->execute_single_query();

			if ($this->feedback['ok']) {
				$this->feedback['code'] = '00004'; //insertado con exito
			} else {
				if ($this->feedback['code'] != '00000') //sino es fallo conexion gestor
					$this->feedback['code'] = '02106'; //insercion fallida
			}
		

		return $this->feedback;
	}

	function SEARCH()
	{

		// construimos la sentencia sql de búsqueda con comodines		
		$this->query = "SELECT * FROM entrenamientos
	WHERE
	(
		(id_entrenamiento LIKE '%$this->id_entrenamiento%') and
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
		$this->query = "SELECT * FROM entrenamientos
					WHERE
					(
						(id_entrenamiento = '$this->id_entrenamiento')
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

		// construimos la sentencia sql de borrado con el valor concreto de clave a borrar		
		$this->query = "DELETE FROM entrenamientos 
					WHERE
					(id_entrenamiento = '$this->id_entrenamiento')
					";

		$this->execute_single_query();

		if ($this->feedback['ok']) {
			$this->feedback['code'] = '12003'; //borrado con exito
		} else {
			if ($this->feedback['code'] != '00000') //sino es fallo conexion gestor
				$this->feedback['code'] = '02108'; //borrado fallido
		}

		return $this->feedback;
	}





}
?>