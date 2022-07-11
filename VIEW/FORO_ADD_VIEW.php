<?php
class FORO_ADD{

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
        <h2>Formulario para añadir nuevos mensajes</h2><BR>

<form class="form-horizontal" name="formularioinsertar" action="index.php" method="post">
<div class="form-group">
    <label class="control-label col-sm-2 id" for="id">ID:</label>
    <div class="col-sm-10">
      <input type="number" id="id" name="id" class="form-control">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2 mensaje" for="mensaje">Mensaje:</label>
    <div class="col-sm-10">
      <input type="text" name="mensaje" id="mensaje" class="form-control" onblur="if (esNoVacio('mensaje')) comprobarLetrasNumeros('mensaje',15)">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2 usuario" for="usuario">Usuario:</label>
    <div class="col-sm-10">
      <input type="text" id="usuario" name="usuario" class="form-control">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2 titulo2" for="titulo2">Titulo:</label>
    <div class="col-sm-10">
      <input type="text" id="titulo" name="titulo" class="form-control">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2 fecha" for="fecha">Fecha:</label>
    <div class="col-sm-10">
      <input type="date" name="fecha"class="form-control">
    </div>
  </div>

      
	<center><button type="button" class="btn btn-primary" onclick = "insertacampo(document.formularioinsertar,'action','insertar'); insertacampo(document.formularioinsertar,'controlador','FORO'); enviaform(document.formularioinsertar); enviaformcorrecto(document.formularioinsertar);"> Añadir </button> 
  <button type="button" class="btn btn-danger" onclick = "crearform('formenviar','post'); insertacampo(document.formenviar,'action','buscar_admin'); insertacampo(document.formenviar,'controlador','FORO');enviaform(document.formenviar);">Cancelar</center>

    </div>
  </div>

</form>

				</div>
				<div class="col-md-1">
				</div>
			</div>
		</div>
	</div>
</div>
	

	


	<!--<a class='volvermenu'>para volver al menú pulsa</a> <a href='index.php'><img src='./VIEW/icons/volver.png' height="40" width="40"></a>
  -->


<br>
<br>
<br>
<br>
<br>


	<?php

	include './VIEW/footer.php';
	} //fin de render
} //fin de clase
?>