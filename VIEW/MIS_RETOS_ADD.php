<?php
class MIS_RETOS_ADD{

	//ATRIBUTOS
	var $fila;


	//METODOS

	function __construct($fila)
	{
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
        <h2>¿Desea marcar este reto como completado?</h2><BR>

<form class="form-horizontal" name="formularioinsertar2" action="index.php" method="post">
  <div class="form-group">
    <label class="control-label col-sm-2 nombre_reto" for="nombre_reto">Nombre reto:</label>
    <div class="col-sm-10">
    <input type="text" name="nombre_reto" class="form-control" value="<?php echo $this->fila['nombre']; ?>">    
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2 tipo" for="nombre_usuario">Nombre usuario:</label>
    <div class="col-sm-10">
    <input type="text" name="nombre_usuario" class="form-control" value="<?php echo $_SESSION['nombre_usuario']; ?>">    
    </div>
  </div>
    
  
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      
	<center><button type="button" class="btn btn-primary" onclick = "insertacampo(document.formularioinsertar,'action','insertar2'); insertacampo(document.formularioinsertar,'controlador','RETOS'); enviaform(document.formularioinsertar); enviaformcorrecto(document.formularioinsertar);"> Añadir </button> 
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