<?php

class PERFIL_EDIT
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
		Bienvenidos al formulario de edición<BR><BR><BR>


		<form name="formularioeditar_perfil" action="index.php" method="post">


		<form class="form-horizontal" name="formularioeditar_perfil" action="index.php" method="post">
  <div class="form-group">
    <label class="control-label col-sm-2 nombre_usuario" for="nombre_usuario">Nombre usuario:</label>
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
    <label class="control-label col-sm-2 email" for="correo">Email usuario:</label>
    <div class="col-sm-10">
      <input type="text" name="correo" id="correo" class="form-control" value="<?php echo $this->fila['correo']; ?>" onblur="if (esNoVacio('correo')) comprobarEmail('correo',40);">
    </div>
  </div>


			<img src=./VIEW/icons/editar.png height="40" width="40" onclick="insertacampo(document.formularioeditar_perfil,'action','editar_perfil'); insertacampo(document.formularioeditar_perfil,'controlador','USUARIO'); enviaform(document.formularioeditar_perfil,encriptar());">
			<!--<input type='submit' name='action' value='editar'>-->

		</form>
    <?php if($_SESSION['es_admin']=='SI'){
      ?>
      		<br><br><img src='./VIEW/icons/volver.png' height="40" width="40" onclick="crearform('formenviar','post'); insertacampo(document.formenviar,'action','buscar'); insertacampo(document.formenviar,'controlador','USUARIO');enviaform(document.formenviar);">
      <?php
    }else{
      ?>
      <br><br><img src='./VIEW/icons/volver.png' height="40" width="40" onclick="crearform('formenviar','post'); insertacampo(document.formenviar,'action','MENUUSER'); insertacampo(document.formenviar,'controlador','MENUUSER');enviaform(document.formenviar);">
<?php
    }
?>
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