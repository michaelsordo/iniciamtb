<?php

class FORO_DELETE{

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

        <h2>¿Está seguro de que desea borrar el siguiente comentario?</h2><BR>


<form class="form-horizontal" name="formularioborrar" action="index.php" method="post">
  <div class="form-group">
    <label class="control-label col-sm-2 id" for="id">ID:</label>
    <div class="col-sm-10">
      <input type='text' name='id' class="form-control" value="<?php echo $this->fila['id']; ?>" readonly >
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2 mensaje" for="mensaje">Mensaje:</label>
    <div class="col-sm-10">
      <input type='text' name='mensaje' class="form-control" value="<?php echo $this->fila['mensaje']; ?>" readonly>
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2 usuario" for="usuario">Usuario:</label>
    <div class="col-sm-10">
      <input type='text' name='usuario' class="form-control" value="<?php echo $this->fila['usuario']; ?>" readonly>
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2 titulo" for="titulo">Titulo:</label>
    <div class="col-sm-10">
      <input type='text' name='titulo' class="form-control" value="<?php echo $this->fila['titulo']; ?>" readonly>
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2 fecha" for="fecha">Fecha:</label>
    <div class="col-sm-10">
      <input type='text' name='fecha' class="form-control" value="<?php echo $this->fila['fecha']; ?>" readonly>
    </div>
  </div>

    

  <center><button type="button" class="btn btn-danger" onclick = "insertacampo(document.formularioborrar,'action','borrar'); insertacampo(document.formularioborrar,'controlador','FORO'); enviaform(document.formularioborrar);">Confirmar</button>
  <button type="button" class="btn btn-primary"onclick="crearform('formenviar','post'); insertacampo(document.formenviar,'action','buscar_admin'); insertacampo(document.formenviar,'controlador','FORO');enviaform(document.formenviar);">Cancelar </button></center>

 

 


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
