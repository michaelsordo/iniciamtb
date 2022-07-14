<?php

class MIS_RETOS_ADD
{

	//ATRIBUTOS
	var $fila;
 
  
   // var $nombre_reto = $this->fila['nombre'];


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
		<div class="container-flunombre">
	<div class="row">
		<div class="col-md-12">
			<div class="row">
				<div class="col-md-1">
				</div>
				<div class="col-md-10">
				<h2>¿Desea marcar el reto como completado?</h2><BR>


        <center><form name="formretosedit" action="index.php" method="post">


		<form class="form-horizontal" name="formularioinsertar" id="formularioinsertar" action="index.php" method="post">
  <div class="form-group">
    <label class="control-label col-sm-2 nombre" for="nombre">Nombre reto:</label>
    <div class="col-sm-10">
      <input type="text" name="nombre" nombre="nombre" class="form-control" value="<?php echo $this->fila['nombre']; ?>" readonly>
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2 nombre_usuario" for="nombre_usuario">Nombre usuario:</label>
    <div class="col-sm-10">
      <input type="text" name="nombre_usuario" nombre="nombre_usuario" class="form-control"  value="<?php echo $_SESSION['nombre_usuario']; ?>"readonly>
   
    </div>
  </div>
  

 

	


  <center><button type="button" class="btn btn-primary" onclick = "insertacampo(document.formularioinsertar,'action','insertar2'); insertacampo(document.formularioinsertar,'controlador','RETOS'); enviaform(document.formularioinsertar); enviaformcorrecto(document.formularioinsertar);"> Confirmar </button>

            <button type="button" class="btn btn-danger" onclick="crearform('formenviar','post'); insertacampo(document.formenviar,'action','buscar'); insertacampo(document.formenviar,'controlador','RETOS');enviaform(document.formenviar);">Cancelar</button>

        </center>
			<!--<input type='submit' name='action' value='editar'>-->

		</form></center>
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