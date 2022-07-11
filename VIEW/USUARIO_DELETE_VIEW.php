<?php

class USUARIO_DELETE{

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

        <h2>¿Está seguro de que desea borrar el siguiente usuario?</h2><BR>


<form class="form-horizontal" name="formularioborrar" action="index.php" method="post">
  <div class="form-group">
    <label class="control-label col-sm-2 nombre_usuario" for="nombre_usuario">Nombre de usuario:</label>
    <div class="col-sm-10">
      <input type='text' name='nombre_usuario' class="form-control" value="<?php echo $this->fila['nombre_usuario']; ?>" readonly >
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2 contrasena" for="contrasena">Contraseña usuario:</label>
    <div class="col-sm-10">
      <input type='text' name='contrasena' class="form-control" value="<?php echo $this->fila['contrasena']; ?>" readonly>
    </div>
  </div>

    <div class="form-group">
    <label class="control-label col-sm-2 correo" for="correo">Correo:</label>
    <div class="col-sm-10">
      <input type='text' name='correo' class="form-control" value="<?php echo $this->fila['correo']; ?>" readonly><br>
    </div>
  </div>

  <center><button type="button" class="btn btn-danger" onclick = "insertacampo(document.formularioborrar,'action','borrar'); insertacampo(document.formularioborrar,'controlador','USUARIO'); enviaform(document.formularioborrar);">Confirmar</button>
  <button type="button" class="btn btn-primary"onclick="crearform('formenviar','post'); insertacampo(document.formenviar,'action','buscar'); insertacampo(document.formenviar,'controlador','USUARIO');enviaform(document.formenviar);">Cancelar </button></center>

 

 


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
