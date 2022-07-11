<?php

class USUARIO_EDIT
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


        <center><form name="formusuarioeditar" action="index.php" method="post">


		<form class="form-horizontal" name="formularioeditar" action="index.php" method="post">
  <div class="form-group">
    <label class="control-label col-sm-2 nombre_usuario" for="nombre_usuario">Login usuario:</label>
    <div class="col-sm-10">
      <input type="text" name="nombre_usuario" id="nombre_usuario" class="form-control" value="<?php echo $this->fila['nombre_usuario']; ?>" readonly>
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2 contrasena" for="contrasena">Contraseña:</label>
    <div class="col-sm-10">
      <input type="text" name="contrasena" id="contrasena" class="form-control"  value="<?php echo $this->fila['contrasena']; ?>">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2 correo" for="correo">Correo:</label>
    <div class="col-sm-10">
      <input type="text" name="correo" id="correo" class="form-control" value="<?php echo $this->fila['correo']; ?>" onblur="if (esNoVacio('correo')) comprobarEmail('correo',40);">
    </div>
  </div>

  <div class="form-group">
    <label class="control-label col-sm-2 es_admin" for="es_admin"> Administrador:</label>
    <div class="col-sm-10">
      <select name="es_admin" class="form-control">
      <option value='SI'>SI</option>
      <option value='NO'>NO</option>
    </select><br>
    </div>

	</div>


			<center><button type="button" class="btn btn-primary" height="40" width="40" onclick="insertacampo(document.formusuarioeditar,'action','editar'); insertacampo(document.formusuarioeditar,'controlador','USUARIO'); enviaform(document.formusuarioeditar);">Confirmar</button></center>
			<!--<input type='submit' name='action' value='editar'>-->

		</form></center>
    <img src='./VIEW/icons/volver.png' height="40" width="40" onclick="crearform('formenviar','post'); insertacampo(document.formenviar,'action','buscar'); insertacampo(document.formenviar,'controlador','USUARIO');enviaform(document.formenviar);">
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