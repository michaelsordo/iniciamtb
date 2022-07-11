<?php

class FORO_EDIT
{

	//ATRIBUTOS
	var $fila;


	//METODOS

	function __construct($fila)
	{
		$this->fila = $fila;
		$this->render();
	}

	function render()
	{

		include './VIEW/header.php';
?>
		<div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
			<div class="row">
				<div class="col-md-1">
				</div>
				<div class="col-md-10">
				<h2>Formulario de edición</h2><BR>


        <center><form name="formforoeditar" action="index.php" method="post">


		<form class="form-horizontal" name="formularioeditar" action="index.php" method="post">
  <div class="form-group">
    <label class="control-label col-sm-2 id" for="id">ID:</label>
    <div class="col-sm-10">
      <input type="text" name="id" id="id" class="form-control" value="<?php echo $this->fila['id']; ?>" readonly>
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2 usuario" for="usuario">Usuario:</label>
    <div class="col-sm-10">
      <input type="text" name="usuario" id="usuario" class="form-control"  value="<?php echo $this->fila['usuario']; ?>">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2 mensaje" for="mensaje">Mensaje:</label>
    <div class="col-sm-10">
      <input type="text" name="mensaje" id="mensaje" class="form-control"  value="<?php echo $this->fila['mensaje']; ?>">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2 titulo2" for="titulo2">Titulo:</label>
    <div class="col-sm-10">
      <input type="text" name="titulo" id="titulo" class="form-control" value="<?php echo $this->fila['titulo']; ?>" onblur="if (esNoVacio('titulo'));">
    </div>
  </div>
  <div class="form-group">
				<label class="control-label col-sm-2 fecha" for="fecha">Fecha:</label>
				<div class="col-sm-10">
					<input type="date" name="fecha" id="fecha" class="form-control" value="<?php echo $this->fila['fecha']; ?>" onblur="if (esNoVacio('fecha'))">
				</div>
			</div>

 
			<center><button type="button" class="btn btn-primary" height="40" width="40" onclick="insertacampo(document.formforoeditar,'action','editar'); insertacampo(document.formforoeditar,'controlador','FORO'); enviaform(document.formforoeditar);">Confirmar</button></center>
			<!--<input type='submit' name='action' value='editar'>-->

		</form></center>
    <img src='./VIEW/icons/volver.png' height="40" width="40" onclick="crearform('formenviar','post'); insertacampo(document.formenviar,'action','buscar_admin'); insertacampo(document.formenviar,'controlador','FORO');enviaform(document.formenviar);">
		<br>
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
<br>

<?php

		include './VIEW/footer.php';
	} // fin de render
	//this.form-asignatura-editar, 'action', 'editar') insertacampo(this.forms['form-asignatura-editar'], 'controlador','pepe');
} //FIN DE CLASE MESSAGE
?>