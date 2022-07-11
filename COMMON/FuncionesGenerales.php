<?php

function conectarBD(){

	$conexion = new mysqli('localhost', 'root', '', 'tfg') or die('fallo conexion');
	return $conexion;

}

function Autenticacion(){

	if ((isset($_SESSION['nombre_usuario'])) && ($_SESSION['nombre_usuario']!='')) {
		return true;
	}
	else{
		return false;
	}
	
}

function AutenticacionAdmin()
{
    if (Autenticacion() == true) {
        if (isset($_SESSION['es_admin']) && $_SESSION['es_admin'] == "SI") {
            return true;
        } else {
            return false;
        }
    } else {
        return null;
    }
}




	
	
	
	

?>