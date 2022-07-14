<?php

class MIS_ENTRENOS_DELETE{

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

        <h2>¿Desea marcar como completado el entrenamiento?</h2><BR>


<form class="form-horizontal" name="formularioborrar" action="index.php" method="post">
  <div class="form-group">
    <label class="control-label col-sm-2 id_entrenamiento" for="id_entrenamiento">Nombre de usuario:</label>
    <div class="col-sm-10">
      <input type='text' name='id_entrenamiento' class="form-control" value="<?php echo $this->fila['id_entrenamiento']; ?>" readonly >
    </div>
  </div>

  <center><button type="button" class="btn btn-danger" onclick = "insertacampo(document.formularioborrar,'action','borrar'); insertacampo(document.formularioborrar,'controlador','ENTRENAMIENTO'); enviaform(document.formularioborrar);">Confirmar</button>
  <button type="button" class="btn btn-primary"onclick="crearform('formenviar','post'); insertacampo(document.formenviar,'action','buscar2'); insertacampo(document.formenviar,'controlador','ENTRENAMIENTO');enviaform(document.formenviar);">Cancelar </button></center>

 

 


</form>


				</div>
				<div class="col-md-1">
				</div>
			</div>
		</div>
	</div>
</div>






<br>
<br>
<br>
<br>

<?php
	
	include './VIEW/footer.php';

	}// fin de render

} //FIN DE CLASE MESSAGE
?>
