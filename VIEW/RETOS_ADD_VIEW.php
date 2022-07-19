<?php
class RETOS_ADD{

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
        <h2>Formulario para añadir nuevos retos</h2><BR>

<form class="form-horizontal" name="formularioinsertar" action="index.php" method="post">
  <div class="form-group">
    <label class="control-label col-sm-2 nombre" for="nombre">Nombre del reto:</label>
    <div class="col-sm-10">
      <input type="text" name="nombre" id="nombre" class="form-control" onblur="if (esNoVacio('nombre')) comprobarLetrasNumeros('nombre',15)">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2 tipo" for="tipo">Tipo de reto:</label>
    <div class="col-sm-10">
      <input type="text" id="tipo" name="tipo" class="form-control" onblur="if (esNoVacio('tipo')) comprobarLetrasNumeros('tipo',20)">
    </div>
  </div>
    
  
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      
	<center><button type="button" class="btn btn-primary" onclick = "insertacampo(document.formularioinsertar,'action','insertar'); insertacampo(document.formularioinsertar,'controlador','RETOS'); enviaform(document.formularioinsertar); enviaformcorrecto(document.formularioinsertar);"> Añadir </button> 
  <button type="button" class="btn btn-danger" onclick = "crearform('formenviar','post'); insertacampo(document.formenviar,'action','buscar_retos_admin'); insertacampo(document.formenviar,'controlador','RETOS');enviaform(document.formenviar);">Cancelar</center>

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