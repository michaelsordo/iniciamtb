<?php
class RUTAS_ADD{

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
        <h2>Formulario para añadir nuevas rutas</h2><BR>

<form class="form-horizontal" name="formularioinsertar" action="index.php" method="post">
<div class="form-group">
    <label class="control-label col-sm-2 id" for="id">ID:</label>
    <div class="col-sm-10">
      <input type="number" id="id" name="id" class="form-control" onblur="if (esNoVacio('id'))comprobarLetrasNumeros('id',3)">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2 nombre" for="nombre">Nombre:</label>
    <div class="col-sm-10">
      <input type="text" name="nombre" id="nombre" class="form-control" onblur="if (esNoVacio('nombre'))">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2 descripcion" for="descripcion">Descripcion:</label>
    <div class="col-sm-10">
      <input type="text" id="descripcion" name="descripcion" class="form-control" onblur="if (esNoVacio('descripcion')) comprobarLetrasNumeros('descripcion',200)">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2 enlace" for="enlace">Enlace:</label>
    <div class="col-sm-10">
      <input type="text" id="enlace" name="enlace" class="form-control" onblur="if (esNoVacio('enlace'))">
    </div>
  </div>

      
	<center><button type="button" class="btn btn-primary" onclick = "insertacampo(document.formularioinsertar,'action','insertar'); insertacampo(document.formularioinsertar,'controlador','RUTAS'); enviaform(document.formularioinsertar); enviaformcorrecto(document.formularioinsertar);"> Añadir </button> 
  <button type="button" class="btn btn-danger" onclick = "crearform('formenviar','post'); insertacampo(document.formenviar,'action','buscar_admin'); insertacampo(document.formenviar,'controlador','RUTAS');enviaform(document.formenviar);">Cancelar</center>

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