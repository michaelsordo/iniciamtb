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
<div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
			<div class="row">
				<div class="col-md-1">
				</div>
				<div class="col-md-10">
        <h2>Edita tu perfil</h2><BR>

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
 

      
	<center><button type="button" class="btn btn-primary" onclick="insertacampo(document.formularioeditar_perfil,'action','editar_perfil'); insertacampo(document.formularioeditar_perfil,'controlador','USUARIO'); enviaform(document.formularioeditar_perfil);"> Editar </button> 
  
  <?php if($_SESSION['es_admin']=='SI'){
      ?>
      		 <button type="button" class="btn btn-danger" onclick="crearform('formenviar','post'); insertacampo(document.formenviar,'action','buscar'); insertacampo(document.formenviar,'controlador','USUARIO');enviaform(document.formenviar);">Cancelar </button>
      <?php
    }else{
      ?>
      <button type="button" class="btn btn-danger" onclick="crearform('formenviar','post'); insertacampo(document.formenviar,'action','MENUUSER'); insertacampo(document.formenviar,'controlador','MENUUSER');enviaform(document.formenviar);"> Cancelar </button>
  
      <?php  
    }
    ?>
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
	} // fin de render
	//this.form-asignatura-editar, 'action', 'editar') insertacampo(this.forms['form-asignatura-editar'], 'controlador','pepe');
} //FIN DE CLASE MESSAGE
?>