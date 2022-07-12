<?php

class RUTAS_DELETE{

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

        <h2>¿Está seguro de que desea borrar la ruta siguiente?</h2><BR>


<form class="form-horizontal" name="formularioborrar" action="index.php" method="post">
  <div class="form-group">
    <label class="control-label col-sm-2 id" for="id">ID:</label>
    <div class="col-sm-10">
      <input type='text' name='id' class="form-control" value="<?php echo $this->fila['id']; ?>" readonly >
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2 nombre" for="nombre">Nombre:</label>
    <div class="col-sm-10">
      <input type='text' name='nombre' class="form-control" value="<?php echo $this->fila['nombre']; ?>" readonly>
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2 descripcion" for="descripcion">Descripcion:</label>
    <div class="col-sm-10">
      <input type='text' name='descripcion' class="form-control" value="<?php echo $this->fila['descripcion']; ?>" readonly>
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2 enlace" for="enlace">Enlace:</label>
    <div class="col-sm-10">
      <input type='text' name='enlace' class="form-control" value="<?php echo $this->fila['enlace']; ?>" readonly>
    </div>
  </div>
 

    

  <center><button type="button" class="btn btn-danger" onclick = "insertacampo(document.formularioborrar,'action','borrar'); insertacampo(document.formularioborrar,'controlador','RUTAS'); enviaform(document.formularioborrar);">Confirmar</button>
  <button type="button" class="btn btn-primary"onclick="crearform('formenviar','post'); insertacampo(document.formenviar,'action','buscar_admin'); insertacampo(document.formenviar,'controlador','RUTAS');enviaform(document.formenviar);">Cancelar </button></center>

 

 


</form>


				</div>
				<div class="col-md-1">
				</div>
			</div>
		</div>
	</div>
</div>




<img src='./VIEW/icons/volver.png' height="40" width="40" onclick = "crearform('formenviar','post'); insertacampo(document.formenviar,'action','buscar'); insertacampo(document.formenviar,'controlador','descripcion');enviaform(document.formenviar);">
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
