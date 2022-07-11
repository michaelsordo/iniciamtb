<?php

include_once './ABSTRACT_CLASS/ABSTRACT_CLASS.php';


class USUARIO_MODEL extends Abstract_Model
{

	//ATRIBUTOS
	var $nombre_usuario;
	var $contrasena;
	var $correo;
	var $es_admin;
	var $erroresdatos = [];
	var $conexion;

	//METODOS

	function __construct()
	{
		$this->fillfields();
		$this->conexion = $this->connection();
	}

	function fillfields()
	{

		$this->nombre_usuario = '';
		$this->contrasena = '';
		$this->correo = '';
		$this->es_admin = '';
		



		if ($_POST) {
			if (isset($_POST['nombre_usuario'])) $this->nombre_usuario = $_POST['nombre_usuario'];
			if (isset($_POST['contrasena'])) $this->contrasena = $_POST['contrasena'];
			if (isset($_POST['correo'])) $this->correo = $_POST['correo'];
			if (isset($_POST['es_admin'])) $this->es_admin = $_POST['es_admin'];
			
		} else {
			if ($_GET) {
				if (isset($_GET['nombre_usuario'])) $this->nombre_usuario = $_GET['nombre_usuario'];
				if (isset($_GET['contrasena'])) $this->contrasena = $_GET['contrasena'];
				if (isset($_GET['correo'])) $this->correo = $_GET['correo'];
				if (isset($_POST['es_admin'])) $this->es_admin = $_GET['es_admin'];
				
				
			}
		}
	}

	function existe_usuario()
	{

		$fila = $this->seek(); // busco en la bd por el login de usuarios.

		if (!empty($fila)) {
			return true; // el usuarios existe
		} else {
			return false; // el usuarios no existe
		}
	}

	function password_correcta()
	{

		$fila = $this->seek();

		if ($this->contrasena === $fila['contrasena']) {
			return true;
		} else {
			return false;
		}
	}

	function existe_email()
	{

		$fila = $this->getById('correo', $this->correo);

		if (empty($fila)) {
			return false;
		} else {
			return true;
		}
	}

	function registrar()
	{

		if (!($this->existe_usuario())) { //no existe el usuarios
			if (!($this->existe_email())) { //no existe el email
				$this->ADD();
				$this->feedback['code'] = '02004'; //registrado correctamente
			} else {
				$this->feedback['code'] = '02104'; // el email ya existe
			}
		} else {
			$this->feedback['code'] = '02105'; // existe el usuarios
		}
		return $this->feedback;
	}

	function login()
	{

		if ($this->existe_usuario()) {
			if (!($this->password_correcta())) {
				$this->feedback['ok'] = false;
				$this->feedback['code'] = '02103'; // password incorrecta
			} else {
				//rellenamos los campos
				$fila = $this->seek();
				$this->nombre_usuario = $fila["nombre_usuario"];
				$this->contrasena = $fila["contrasena"];
				$this->correo = $fila["correo"];
				$this->es_admin = $fila["es_admin"];
				

				$this->feedback['ok'] = true;
				$this->feedback['code'] = '02106'; // login y password correcto
			}
		} else {
			$this->feedback['ok'] = false;
			return '02102'; // no existe el usuarios
		}
		return $this->feedback;
	}

	function validar_atributos()
	{

	
		$this->validar_correo();
		$this->validar_es_admin();



		if ($this->erroresdatos === []) {
			return true;
		} else {
			return $this->erroresdatos;
		}
	}


	

	function validar_correo()
	{

		$validar = new Validar();

		$this->code = '00000';
		$this->ok = true;
		$this->resource = 'usuarios';

		if ($validar->Longitud_maxima($this->correo, 40) === false) {
			$this->code = '02119';
			$this->ok = false;
			$this->resource = 'usuarios';
			$this->construct_response();
			array_push($this->erroresdatos, $this->feedback);
		}

		if ($validar->Formato_email($this->correo) === false) {
			$this->code = '02116';
			$this->ok = false;
			$this->resource = 'usuarios';
			$this->construct_response();
			array_push($this->erroresdatos, $this->feedback);
		}else{
			$this->code = '00000';
			$this->ok = false;
			$this->resource = 'usuarios';
			$this->construct_response();
			array_push($this->erroresdatos, $this->feedback);

		}

		if ($this->ok) {
			return true;
		}

		return $this->erroresdatos;
	}

	function validar_es_admin()
	{

		$validar = new Validar();

		$this->code = '00000';
		$this->ok = true;
		$this->resource = 'usuarios';

		if ($validar->En_valores($this->es_admin, array('SI', 'NO')) === false) {
			$this->code = '02117';
			$this->ok = false;
			$this->resource = 'usuarios';
			$this->construct_response();
			array_push($this->erroresdatos, $this->feedback);
		}else{
			//Si no introducimos esto aqui no funciona los test, porque va con el array vacio, y no lleva el code 0000
			$this->code = '00000';
			$this->ok = false;
			$this->resource = 'usuarios';
			$this->construct_response();
			array_push($this->erroresdatos, $this->feedback);
		}

		if ($this->ok) {
			return true;
		}

		

		return $this->erroresdatos;
	}

	function validar_es_activo()
	{

		$validar = new Validar();

		$this->code = '00000';
		$this->ok = true;
		$this->resource = 'usuarios';

		if ($validar->En_valores($this->es_activo, array('SI', 'NO')) === false) {
			$this->code = '02118';
			$this->ok = false;
			$this->resource = 'usuarios';
			$this->construct_response();
			array_push($this->erroresdatos, $this->feedback);
		}else{
			$this->code = '00000';
			$this->ok = false;
			$this->resource = 'usuarios';
			$this->construct_response();
			array_push($this->erroresdatos, $this->feedback);

		}

		if ($this->ok) {
			return true;
		}

		return $this->erroresdatos;
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
			$this->query = 	"INSERT INTO usuarios

								(nombre_usuario,
								contrasena,
								correo,
								es_admin
								)
							VALUES
								('$this->nombre_usuario',
								'$this->contrasena',
								'$this->correo',
								'$this->es_admin'
								
							)";
			//var_dump($this->query);
			$this->execute_single_query();

			if ($this->feedback['ok']) {
				$this->feedback['code'] = '02001'; //insertado con exito
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
		$this->query = "SELECT * FROM usuarios
					WHERE
					(
						(nombre_usuario LIKE '%$this->nombre_usuario%') and
						(contrasena LIKE '%$this->contrasena%') and
						(correo LIKE '%$this->correo%') and
						(es_admin LIKE '%$this->es_admin%') 
						
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
		$this->query = "SELECT * FROM usuarioS
						WHERE
						(
							(nombre_usuario = '$this->nombre_usuario')
						)";

		$this->get_one_result_from_query();

		// recuperamos la unica fila que viene en el recordset resultado de la consulta
		$fila = $this->rows;

		return $fila;
	}

	function getById($atributo, $valor)
	{

		// construimos la sentencia sql de búsqueda con valor concreto de clave		
		$sql = "SELECT * FROM usuarios
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
		$this->query = "UPDATE usuarios SET
					contrasena = '$this->contrasena',
					nombre_usuario = '$this->nombre_usuario',
					correo = '$this->correo',
					es_admin = '$this->es_admin'
					
					
					WHERE
					(nombre_usuario = '$this->nombre_usuario')
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

	//Para editar solo el perfil de cada usuarios
	function EDIT_PERFIL()
	{


		// construimos la sentencia sql de búsqueda con valor concreto de clave		
		$this->query = "UPDATE usuarios SET
					contrasena = '$this->contrasena',
					nombre_usuario = '$this->nombre_usuario',
					correo = '$this->correo'
	
					
					WHERE
					(nombre_usuario = '$this->nombre_usuario')
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
		$this->query = "DELETE FROM usuarios 
					WHERE
					(nombre_usuario = '$this->nombre_usuario')
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
