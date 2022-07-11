<?php

class ENTRENAMIENTO_SHOWALL{

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
					Entrenamientos! <small>Escoge tu distancia y a entrenar.</small>
				</h1>
			</div>
			<p>Todos los entranamientos que aparecen a continuación han sido realizados por personal especializado en el mundo
				del deporte y las actividades deportivas.
			</p>
            <br>
            <br>
			<div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
			<div class="row">
				<div class="col-md-6">
					<div align="center">
					<img alt="Bootstrap Image Preview" src='./VIEW/img/veinticincokm.PNG' class="rounded" />
					</div>
					<div class="jumbotron">
					<h2>
							Para empezar!
						</h2>
						<p>
							Si estás empezando en el mundo del MTB y ya te ha picado el gusanillo y quieres completar tu primera distancia
							de 25km, con el sistema de entrenamiento que te proponemos podrás hacerlo sin problema. 
							
							

							 
						</p>
						<p>
							<a class="btn btn-primary btn-large" onclick="crearform('formenviar','post'); insertacampo(document.formenviar,'action','buscar_entrenamiento25'); insertacampo(document.formenviar,'controlador','ENTRENAMIENTO');enviaform(document.formenviar);">Ver entrenamiento</a>
						</p>
					</div>
				</div>
				<div class="col-md-6">
				<div align="center">
					<img src='./VIEW/img/cincuentakm.PNG' class="rounded" width="436" alt="94" />
					</div>
					<div class="jumbotron">
						<h2>
							La distancia media!
						</h2>
						<p>
							 Ya estás metido de lleno en el mundo del MTB y quieres retos más ambiciosos. Para completar tus primeros 50km por 
							 la montaña es necesaria una buena preparación.
						</p>
						<p>
						<a class="btn btn-primary btn-large" onclick="crearform('formenviar','post'); insertacampo(document.formenviar,'action','buscar_entrenamiento50'); insertacampo(document.formenviar,'controlador','ENTRENAMIENTO');enviaform(document.formenviar);">Ver entrenamiento</a>
						</p>
					</div>
				</div>
				<div align="center">
					<img alt="Bootstrap Image Preview" src='./VIEW/img/cienkm.PNG' class="rounded" />
			<div class="jumbotron">
				<h2>
					El nivel avanzado!
				</h2>
				<p>
					Recorrer 100km en bicicleta de montaña y por la montaña no es una tarea sencilla, necesitarás una buena preparación, 
					tanto física como mental para completarlos. A continuación podrás ver un entranamiento de  12 semanas que te ayudará a 
					cumplir con este objetivo.
				</p>
				<p>
				<a class="btn btn-primary btn-large" onclick="crearform('formenviar','post'); insertacampo(document.formenviar,'action','buscar_entrenamiento100'); insertacampo(document.formenviar,'controlador','ENTRENAMIENTO');enviaform(document.formenviar);">Ver entrenamiento</a>
				</p>
			</div>
			<div class="row">
				<div class="col-md-12">
				</div>
			</div>
		</div>
	</div>
</div>
<?php
    
    //include './VIEW/footer.php';
    }// fin de render
   
   

} //FIN DE CLASE MESSAGE
?>

