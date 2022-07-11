<?php

class RUTAS_SHOWALL{

//ATRIBUTOS
var $datos;


//METODOS

    function __construct($datos){
        $this->datos = $datos;
        $this->render();
    }

    function render(){
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
  <li class="nav-item">
  <H2><a class="nav-link" style="cursor:pointer" onclick="crearform('formenviar','post'); insertacampo(document.formenviar,'action','buscar'); insertacampo(document.formenviar,'controlador','FORO');enviaform(document.formenviar);">Foro</a></H2>
  </li>
</ul>
<br>
<br>
<div class="container-fluid">
<div class="row">
		<div class="col-md-12">
			<div class="page-header">
				<h1>
					Rutas! <small>Escoge tu ruta favorita y a entrenar.</small>
				</h1>
			</div>
            <br>
            <br>
	<div class="row">
		<div class="col-md-6">
			<div class="jumbotron">
			<h2>
							La más disfrutona
						</h2>
						<center><img height="300" width="300" alt="Bootstrap Thumbnail Third" src='./VIEW/img/fragua.PNG' class="rounded"/></center>
						<p>
							Esta es una de las rutas mejor valorada por los aficionados al MTB, el término "disfrutona" es muy adecuado, ya que no dejará indiferente a los más experimentados, ya 
							que tiene una dificultad moderada, pero merece la pena en relación a las magníficas vistas.
						</p>
						<p>
							<a class="btn btn-primary btn-large" target="_blank" href="https://es.wikiloc.com/rutas-senderismo/fragas-y-canon-desfiladero-do-eume-ctral-ventureira-mirador-de-teixido-penas-do-crego-ctral-venture-21324094">Ver la ruta</a>
						</p>
			</div>
		</div>
		<div class="col-md-6">
			<div class="jumbotron">
			<h2>
							La bonita y tranquila
						</h2>
						<center><img height="300" width="300" alt="Bootstrap Thumbnail Third" src='./VIEW/img/ruta2.PNG' class="rounded"/></center>
						<p>
						Ruta formada por tramos con tramos de dificultad moderada donde el usuario podrá pasar por la Sierra de Meira y ver
						el nacimiento del río Miño. Ruta maioritariamente de tierra.
						</p>
						<p>
							<a class="btn btn-primary btn-large" target="_blank" href="https://es.wikiloc.com/rutas-mountain-bike/ruta-crecente-serra-de-meira-26129608">Ver la ruta</a>
						</p>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-1">
		</div>
		<div class="col-md-10">
			<div class="row">
				<div class="col-md-4">
					<div class="card">
						<img class="card-img-top" alt="Bootstrap Thumbnail First" src="https://www.layoutit.com/img/people-q-c-600-200-1.jpg" />
						<div class="card-block">
						<h5 class="card-title">
										La cortita
									</h5>
									<p class="card-text">
										Ruta de 18km muy sencilla
									</p>
									<center><p>
										<a class="btn btn-primary" target="_blank" href="https://es.wikiloc.com/rutas-mountain-bike/baltar-pastoriza-baltar-38724410">Ver</a>
									</p></center>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="card">
						<img class="card-img-top" alt="Bootstrap Thumbnail Second" src="https://www.layoutit.com/img/city-q-c-600-200-1.jpg" />
						<div class="card-block">
						<h5 class="card-title">
										Ruta Maeloc
									</h5>
									<p class="card-text">
										Una ruta compuesta por terreno árido y trialeras
									</p>
									<center><p>
										<a class="btn btn-primary" target="_blank" href="https://es.wikiloc.com/rutas-mountain-bike/crecente-bretona-ruta-maeloc-73323246">Ver</a>
									</p></center>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="card">
						<img class="card-img-top" alt="Bootstrap Thumbnail Third" src="https://www.layoutit.com/img/sports-q-c-600-200-1.jpg" />
						<div class="card-block">
							<h5 class="card-title">
								La larga
							</h5>
							<p class="card-text">
								Paso por el camino
							</p>
							<center><p>
								<a class="btn btn-primary" target="_blank" href="https://es.wikiloc.com/rutas-mountain-bike/camino-del-norte-etapa-12-gontan-sobrado-dos-monxes-1888951">Ver</a> 
							</p></center>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-md-1">
		</div>
	</div>

	
<br>
<br>
<br>
</div>


<?php
    
    //include './VIEW/footer.php';
    }// fin de render
   
   

} //FIN DE CLASE MESSAGE
?>

