<?php

class MIS_RETOS_DELETE{

//ATRIBUTOS
var $fila;


//METODOS

	function __construct($fila){
		$this->fila = $fila;
		$this->render();
	}

	function render(){

		include './VIEW/header.php';
?>

<div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
			<div class="row">
				<div class="col-md-1">
				</div>
				<div class="col-md-10">

        <h2>¿Desea borrar el siguiente reto completado?</h2><BR>


<form class="form-horizontal" name="formularioborrar2" action="index.php" method="post">
  <div class="form-group">
    <label class="control-label col-sm-2 nombre_reto" for="nombre_reto">Nombre del reto:</label>
    <div class="col-sm-10">
      <input type='text' name='nombre_reto' class="form-control" value="<?php echo $this->fila['nombre_reto']; ?>" readonly >
    </div>
  </div>

    

  <center><button type="button" class="btn btn-danger" onclick = "insertacampo(document.formularioborrar2,'action','borrar2'); insertacampo(document.formularioborrar2,'controlador','RETOS'); enviaform(document.formularioborrar2);">Confirmar</button>
  <button type="button" class="btn btn-primary"onclick="crearform('formenviar','post'); insertacampo(document.formenviar,'action','buscar_usuario'); insertacampo(document.formenviar,'controlador','RETOS');enviaform(document.formenviar);">Cancelar </button></center>

 

 


</form>


				</div>
				<div class="col-md-1">
				</div>
			</div>
		</div>
	</div>
</div>




<img src='./VIEW/icons/volver.png' height="40" width="40" onclick = "crearform('formenviar','post'); insertacampo(document.formenviar,'action','buscar'); insertacampo(document.formenviar,'controlador','USUARIO');enviaform(document.formenviar);">
<br>
<br>
<br>
<br>
<br>
<br>

<?php
	
	include './VIEW/footer.php';

	}// fin de render

} //FIN DE CLASE MESSAGE
?>
