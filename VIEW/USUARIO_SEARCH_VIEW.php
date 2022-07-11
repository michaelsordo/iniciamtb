<?php

class USUARIO_SEARCH{

function __construct(){
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
        <h2>Formulario de búsqueda</h2><br>

<form class="form-horizontal" name="formulariobuscar" action="index.php" method="post">
<div class="form-group">
  <label class="control-label col-sm-2 nombre_usuario" for="nombre_usuario">Nombre usuario:</label>
  <div class="col-sm-10">
    <input type="text" name="nombre_usuario" class="form-control">
  </div>
</div>
<div class="form-group">
  <label class="control-label col-sm-2 contrasena" for="contrasena">Contraseña:</label>
  <div class="col-sm-10">
    <input type="text" name="contrasena" class="form-control">
  </div>
</div>
<div class="form-group">
  <label class="control-label col-sm-2 correo" for="correo">Correo:</label>
  <div class="col-sm-10">
    <input type="text" name="correo"class="form-control">
  </div>
</div>
<div class="form-group">
<label class='es_admin control-label col-sm-2'>Administrador</label>
                <div class="col-sm-10">
                <select name='es_admin' class="form-control">
                <option value=''>-------</option>
                <option value='SI'>SI</option>
                <option value='NO'>NO</option>
                </select><br>
                </div>

</div>

<input type='hidden' name='controlador' value='USUARIO'>
<center><button type='submit' class="btn btn-primary" name='action'value='buscar'>Buscar</button>
<button type="button" class="btn btn-danger"onclick="crearform('formenviar','post'); insertacampo(document.formenviar,'action','buscar'); insertacampo(document.formenviar,'controlador','USUARIO');enviaform(document.formenviar);">Atrás </button></center>



</form>




</body>
</html>


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
	
	} //fin de render
} //FIN DE CLASS
?>