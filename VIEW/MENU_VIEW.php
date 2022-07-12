<?php

class MENU_VIEW
{

	//ATRIBUTOS
	var $datos;
	

	
	

	//METODOS

	function __construct()
	{

		//$this->datos = $datos;
		
        $this->render();


	}

	function render()
	{
		//include './VIEW/header.php';
?>

<div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
			<div class="row">
				<div class="col-md-2" id="navbar-admin">
					<ul class="nav flex-column">
				
						<br>
						<br>
						<li class="nav-item">
					<center><img width="80" height="80"alt="Bootstrap Image Preview" src="./VIEW/img/icono.PNG" /></center>
					</li>

						<li class="nav-item">
						<h2><a class="nav-link active" style="cursor:pointer" onclick="crearform('formenviar','post'); insertacampo(document.formenviar,'action','buscar'); insertacampo(document.formenviar,'controlador','USUARIO');enviaform(document.formenviar);">Usuarios</a></h2>
						</li>
						<li class="nav-item">
						<h2><a class="nav-link active" style="cursor:pointer" onclick="crearform('formenviar','post'); insertacampo(document.formenviar,'action','buscar_retos_admin'); insertacampo(document.formenviar,'controlador','RETOS');enviaform(document.formenviar);">Retos</a></h2>
						</li>
						<li class="nav-item">
						<h2><a class="nav-link active" style="cursor:pointer" onclick="crearform('formenviar','post'); insertacampo(document.formenviar,'action','buscar_admin'); insertacampo(document.formenviar,'controlador','RUTAS');enviaform(document.formenviar);">Rutas</a></h2>
						</li>
					</ul>
				</div>
				<div class="col-md-10">
					<div class="page-header">
						<?php
						include './VIEW/header.php';
						?>
						<h1>
							Dashboard
						</h1>
					</div>
					<center><img width="250" height="250"alt="Bootstrap Image Preview" src="./VIEW/img/rendimiento2.PNG" /></center>
					<br><br>
					<div class="row">
						<div class="col-md-4">
							<h3 class="text-center">
								
							</h3>
							<center><img alt="Bootstrap Image Preview" width="80" height="80" src="./VIEW/img/usuario.PNG" class="rounded-circle" /></center>
							<center><p>
								Administra todos los usuarios.
							</p></center>
							<center><strong>Busca,crea,edita o elimina</strong>.</center>
						</div>
						<div class="col-md-4">
							<h3 class="text-center">
								
							</h3>
							<center><img alt="Bootstrap Image Preview" width="80" height="80" src="./VIEW/img/retos.PNG" class="rounded-circle" /></center>
							<center><p>
								Administra todos los retos.
							</p></center>
							<center><strong>Busca,crea,edita o elimina</strong>.</center>
						</div>
						<div class="col-md-4">
							<h3 class="text-center">
								
							</h3>
							<center><img alt="Bootstrap Image Preview" width="80" height="80" src="./VIEW/img/foro.PNG" class="rounded-circle" /></center>
							<center><p>
								Administra las rutas
							</p></center>
							<center><strong>Busca,crea,edita o elimina</strong>.</center>
						</div>
					</div>
					<br>
					<br>
					<h3 class="text">
								Tablas de estado
							</h3>
							<br>
							<br>
					<div class="row">
						<div class="col-md-6">
							<h4>Retos</h4>
						<table name="mitabla" class="table table-hover" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr class="table-success">
                                            <th id="0" class='nombre'>Nombre</th>
                                            <th id="1" class='tipo'>Tipo</th>
                                     
                                        </thead>
                                       

<!--Estamos aqui-->
<?php		
			$mysqli = new mysqli("localhost", "root", "", "tfg"); 
			$query = "SELECT * FROM retos";
            //echo var_dump($query);
			
			if ($result = $mysqli->query($query)) {
				while ($row = $result->fetch_assoc()) {
					$nombre = $row["nombre"];
					$tipo = $row["tipo"];

			
					echo '<tr> 
							  <td>'.$nombre.'</td> 
							  <td>'.$tipo.'</td> 

						  </tr>';
				}
				$result->free();
			} 
			
?>


                </table>
						</div>
						<div class="col-md-6">
						<h4>Administradores</h4>
						<table name="mitabla" class="table table-hover" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr class="table-warning">
                                            <th id="0" class='nombre_usuario'>Nombre usuario</th>
                                            <th id="1" class='es_admin'>Administrador</th>
                                     
                                        </thead>
                                       

<!--Estamos aqui-->
<?php		
			$mysqli = new mysqli("localhost", "root", "", "tfg"); 
			$query = "SELECT nombre_usuario,es_admin 
			FROM usuarios";
            //echo var_dump($query);
			
			if ($result = $mysqli->query($query)) {
				while ($row = $result->fetch_assoc()) {
					$nombre_usuario = $row["nombre_usuario"];
					$es_admin = $row["es_admin"];

			
					echo '<tr> 
							  <td>'.$nombre_usuario.'</td> 
							  <td>'.$es_admin.'</td> 

						  </tr>';
				}
				$result->free();
			} 
			
?>


                </table>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<br>
<br>
<br>


<?php
		include './VIEW/footer.php';
	} // fin de render

} //FIN DE CLASE MESSAGE
?>