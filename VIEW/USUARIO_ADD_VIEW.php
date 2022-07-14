<?php
class USUARIO_ADD{

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
        <h2>Formulario para añadir nuevos usuarios</h2><BR>

<form class="form-horizontal" name="formularioinsertar" action="index.php" method="post">
  <div class="form-group">
    <label class="control-label col-sm-2 nombre_usuario" for="nombre_usuario">Login usuario:</label>
    <div class="col-sm-10">
      <input type="text" name="nombre_usuario" id="nombre_usuario" class="form-control" onblur="if (esNoVacio('nombre_usuario')) comprobarLetrasNumeros('nombre_usuario',15)">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2 contrasena" for="contrasena">Contraseña usuario:</label>
    <div class="col-sm-10">
      <input type="password" id="contrasena" name="contrasena" class="form-control">
    </div>
  </div>
    <div class="form-group">
    <label class="control-label col-sm-2 correo" for="correo">Email usuario:</label>
    <div class="col-sm-10">
      <input type="text" name="correo" id="correo" class="form-control" onblur="if (esNoVacio('correo')) comprobarEmail('correo',40);">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2 es_admin" for="es_admin"> Administrador</label>
    <div class="col-sm-10">
      <select name="es_admin" class="form-control">
      <option value='SI'>SI</option>
      <option value='NO'>NO</option>
    </select><br>
    </div>
    
   
 
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      
	<center><button type="button" class="btn btn-primary" onclick = "insertacampo(document.formularioinsertar,'action','insertar'); insertacampo(document.formularioinsertar,'controlador','USUARIO'); enviaform(document.formularioinsertar); enviaformcorrecto(document.formularioinsertar);"> Añadir </button> 
  <button type="button" class="btn btn-danger" onclick = "crearform('formenviar','post'); insertacampo(document.formenviar,'action','buscar'); insertacampo(document.formenviar,'controlador','USUARIO');enviaform(document.formenviar);">Cancelar</center>

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