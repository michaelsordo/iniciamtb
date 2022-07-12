<?php

class MENUUSER_VIEW
{

	//ATRIBUTOS



	//METODOS

	function __construct()
	{
		$this->render();
	}

	function render()
	{
		include './VIEW/header.php';
?>

<ul class="nav justify-content-center">
<li class="nav-item">
					<H2><a class="nav-link active" href="http://localhost/iniciamtb/index.php">Home</a></H2>
				</li>
  <li class="nav-item">
  <H2><a class="nav-link active" style="cursor:pointer" onclick="crearform('formenviar','post'); insertacampo(document.formenviar,'action','buscar'); insertacampo(document.formenviar,'controlador','RUTAS');enviaform(document.formenviar);">Rutas</a></H2>
  </li>
  <li class="nav-item">
  <H2><a class="nav-link" style="cursor:pointer" onclick="crearform('formenviar','post'); insertacampo(document.formenviar,'action','buscar'); insertacampo(document.formenviar,'controlador','RETOS');enviaform(document.formenviar);">Retos</a></H2>
  </li>
  <li class="nav-item">
  <H2><a class="nav-link" style="cursor:pointer" onclick="crearform('formenviar','post'); insertacampo(document.formenviar,'action','buscar'); insertacampo(document.formenviar,'controlador','ENTRENAMIENTO');enviaform(document.formenviar);">Entrenamientos</a></H2>
  </li>
 <!-- <li class="nav-item">
  <H2><a class="nav-link" style="cursor:pointer" onclick="crearform('formenviar','post'); insertacampo(document.formenviar,'action','buscar'); insertacampo(document.formenviar,'controlador','FORO');enviaform(document.formenviar);">Mis entrenamientos</a></H2>
  </li>
  <li class="nav-item">
  <H2><a class="nav-link" style="cursor:pointer" onclick="crearform('formenviar','post'); insertacampo(document.formenviar,'action','buscar'); insertacampo(document.formenviar,'controlador','FORO');enviaform(document.formenviar);">Mis Retos</a></H2>
  </li>-->
</ul>
<br>
<br>

<div class="carousel slide" id="carousel-399974">
				<ol class="carousel-indicators">
					<li data-slide-to="0" data-target="#carousel-399974"class="active">
					</li>
				
					<li data-slide-to="1" data-target="#carousel-399974">
					</li>
				</ol>
				

				<div class="carousel-inner">
					<div class="carousel-item">
						<img class="d-block w-100" alt="foto1" with="1519.2" height=474.75 src="./VIEW/img/foto1_carrousel.jpeg" />
						<div class="carousel-caption">
						</div>
					</div>

					<div class="carousel-item active">
					<img class="d-block w-100" alt="foto1" with="1519.2" height=474.75 src="./VIEW/img/plan.jpg" />
						<div class="carousel-caption">
						</div>
					</div>
				</div> <a class="carousel-control-prev" href="#carousel-399974" data-slide="prev"><span class="carousel-control-prev-icon"></span> <span class="sr-only">Previous</span></a> <a class="carousel-control-next" href="#carousel-399974" data-slide="next"><span class="carousel-control-next-icon"></span> <span class="sr-only">Next</span></a>
			</div>
			<br>
			<br>

			<h2>
				Los entrenamientos a tu medida
			</h2>
			<p>
				Nuestro principal objetivo es que puedas cumplir tus objetivos con la bicicleta. No todo el mundo es experto, y  
				a veces los que más tiempo llevan sobre la bicicleta tampoco han conseguido o no se han atrevido a completar
				los primeros 100km en una ruta. Gracias a los entramientos específicos que podrás encontrar en una de las secciones 
				del menú podrás hacerlo. 
			</p>
			
		</div>
	</div>

	<br>
	<br>

	<div class="row">
						<div class="col-md-4">
							<h3 class="text-center">
								
							</h3>
							<center><img alt="Bootstrap Image Preview" width="80" height="80" src="./VIEW/img/rutaicon.PNG" class="rounded-circle" /></center>
							<center><p>
								Seccion de rutas.
							</p></center>
							<center><strong>Explora las rutas cercanas</strong>.</center>
						</div>
						<div class="col-md-4">
							<h3 class="text-center">
								
							</h3>
							<center><img alt="Bootstrap Image Preview" width="80" height="80" src="./VIEW/img/retos.PNG" class="rounded-circle" /></center>
							<center><p>
								Cumple tus objetivos.
							</p></center>
							<center><strong>Entrenamientos adaptados</strong>.</center>
						</div>
						<div class="col-md-4">
							<h3 class="text-center">
								
							</h3>
							<center><img alt="Bootstrap Image Preview" width="80" height="80" src="./VIEW/img/foro.PNG" class="rounded-circle" /></center>
							<center><p>
								Debate en el foro
							</p></center>
							<center><strong>Foro de discusión de temas de MTB</strong>.</center>
						</div>
					</div>
</div>

<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>



<?php
	//include './VIEW/footer.php';
		
	} // fin de render

} //FIN DE CLASE MESSAGE
?>
