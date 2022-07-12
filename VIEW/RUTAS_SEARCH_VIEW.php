<?php

class RUTAS_SEARCH{

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
  <label class="control-label col-sm-2 id" for="id">ID:</label>
  <div class="col-sm-10">
    <input type="text" name="id" class="form-control">
  </div>
</div>
<div class="form-group">
  <label class="control-label col-sm-2 nombre" for="nombre">Nombre:</label>
  <div class="col-sm-10">
    <input type="text" name="nombre" class="form-control">
  </div>
</div>
<div class="form-group">
  <label class="control-label col-sm-2 descripcion" for="descripcion">Descripcion:</label>
  <div class="col-sm-10">
    <input type="text" name="descripcion"class="form-control">
  </div>
</div>
<div class="form-group">
  <label class="control-label col-sm-2 enlace" for="enlace">Enlace:</label>
  <div class="col-sm-10">
    <input type="text" name="enlace"class="form-control">
  </div>
</div>

<input type='hidden' name='controlador' value='RUTAS'>
<center><button type='submit' class="btn btn-primary" name='action'value='buscar_admin'>Buscar</button>
<button type="button" class="btn btn-danger"onclick="crearform('formenviar','post'); insertacampo(document.formenviar,'action','buscar_admin'); insertacampo(document.formenviar,'controlador','RUTAS');enviaform(document.formenviar);">Atrás </button></center>



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