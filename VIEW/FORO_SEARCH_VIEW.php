<?php

class FORO_SEARCH{

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
  <label class="control-label col-sm-2 mensaje" for="mensaje">Contraseña:</label>
  <div class="col-sm-10">
    <input type="text" name="mensaje" class="form-control">
  </div>
</div>
<div class="form-group">
  <label class="control-label col-sm-2 usuario" for="usuario">usuario:</label>
  <div class="col-sm-10">
    <input type="text" name="usuario"class="form-control">
  </div>
</div>
<div class="form-group">
  <label class="control-label col-sm-2 titulo" for="titulo">Titulo:</label>
  <div class="col-sm-10">
    <input type="text" name="titulo"class="form-control">
  </div>
</div>
<div class="form-group">
    <label class="control-label col-sm-2 fecha" for="fecha">Fecha:</label>
    <div class="col-sm-10">
      <input type="date" name="fecha"class="form-control">
    </div>
  </div>

<input type='hidden' name='controlador' value='FORO'>
<center><button type='submit' class="btn btn-primary" name='action'value='buscar_admin'>Buscar</button>
<button type="button" class="btn btn-danger"onclick="crearform('formenviar','post'); insertacampo(document.formenviar,'action','buscar_admin'); insertacampo(document.formenviar,'controlador','FORO');enviaform(document.formenviar);">Atrás </button></center>



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