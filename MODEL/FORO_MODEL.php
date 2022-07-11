<?php

include_once './ABSTRACT_CLASS/ABSTRACT_CLASS.php';

include_once './COMMON/Validar_Model.php';
//include_once './VIEW/TEST_VIEW.php';



class FORO_MODEL extends Abstract_Model
{

	//ATRIBUTOS
	var $id;
    var $usuario;
    var $titulo;
    var $mensaje;
    var $fecha;
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
        $this->usuario = '';
        $this->titulo = '';
        $this->mensaje = '';
        $this->fecha = '';
		





		if ($_POST) {
			if (isset($_POST['id'])) $this->id = $_POST['id'];
            if (isset($_POST['usuario'])) $this->usuario = $_POST['usuario'];
            if (isset($_POST['titulo'])) $this->titulo = $_POST['titulo'];
            if (isset($_POST['mensaje'])) $this->mensaje = $_POST['mensaje'];
            if (isset($_POST['fecha'])) $this->fecha = $_POST['fecha'];
          
      
		

		} else {
			if ($_GET) {
                if (isset($_GET['id'])) $this->id = $_GET['id'];
                if (isset($_GET['usuario'])) $this->usuario = $_GET['usuario'];
                if (isset($_GET['titulo'])) $this->titulo = $_GET['titulo'];
                if (isset($_GET['mensaje'])) $this->mensaje = $_GET['mensaje'];
                if (isset($_GET['fecha'])) $this->fecha = $_GET['fecha'];
			

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
			$this->query = 	"INSERT INTO foro

								(id,
								mensaje,
								usuario,
								titulo,
								fecha
								
								)
							VALUES
								('$this->id',
								'$this->mensaje',
								'$this->usuario',
								'$this->titulo',
								'$this->fecha'

						
								
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
		$this->query = "SELECT * FROM foro
	WHERE
	(
		(id LIKE '%$this->id%')and
		(mensaje LIKE '%$this->mensaje%' ) and
		(usuario LIKE '%$this->usuario%' ) and
		(titulo LIKE '%$this->titulo%' ) and
		(fecha LIKE '%$this->fecha%' )
		



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
		$this->query = "SELECT * FROM foro
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
		$sql = "SELECT * FROM foro
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
		$this->query = "UPDATE foro SET
					id = '$this->id',
					mensaje = '$this->mensaje',
					usuario = '$this->usuario',
					titulo = '$this->titulo',
					fecha = '$this->fecha'
					
					
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
		$this->query = "DELETE FROM foro 
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