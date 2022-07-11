<?php

class MENU{
	// incluimos los ficheros necesarios
	
	
	function __construct(){
		include './VIEW/RETOS_SHOWALL.php';
		
	}

	function MENU(){
		
		include './VIEW/MENU_VIEW.php';
		
		include './MODEL/RETOS_MODEL.php';
		new MENU_VIEW;

	}


} //FIN DE CLASS
?>
