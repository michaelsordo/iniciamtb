<?php

class RUTAS_EDIT
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
    <label class="control-label col-sm-2 nombre" for="nombre">Nombre:</label>
    <div class="col-sm-10">
      <input type="text" name="nombre" id="nombre" class="form-control"  value="<?php echo $this->fila['nombre']; ?>">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2 descripcion" for="descripcion">Descripcion:</label>
    <div class="col-sm-10">
      <input type="text" name="descripcion" id="descripcion" class="form-control"  value="<?php echo $this->fila['descripcion']; ?>">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2 enlace" for="enlace">Enlace:</label>
    <div class="col-sm-10">
      <input type="text" name="enlace" id="enlace" class="form-control" value="<?php echo $this->fila['enlace']; ?>" onblur="if (esNoVacio('enlace'));">
    </div>
  </div>

 
			<center><button type="button" class="btn btn-primary" height="40" width="40" onclick="insertacampo(document.formforoeditar,'action','editar'); insertacampo(document.formforoeditar,'controlador','RUTAS'); enviaform(document.formforoeditar);">Confirmar</button></center>
			<!--<input type='submit' name='action' value='editar'>-->

		</form></center>
    <img src='./VIEW/icons/volver.png' height="40" width="40" onclick="crearform('formenviar','post'); insertacampo(document.formenviar,'action','buscar_admin'); insertacampo(document.formenviar,'controlador','RUTAS');enviaform(document.formenviar);">
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