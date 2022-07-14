<?php

class ENTRENAMIENTO_25{

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
    <div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
			<div class="page-header">
			<div class="Jumbotron">
				<h1>
					25KM! <span>Entrenamiento de 4 semanas</span>
				</h1>
				</div>
      
		
			
				<button type="button" class="btn btn-primary" height="20" width="20" onclick = "crearform('formenviar','post'); insertacampo(document.formenviar,'action','anadir25'); insertacampo(document.formenviar,'controlador','ENTRENAMIENTO');enviaform(document.formenviar);">Comenzar entramiento</button>
				<br>
				<br>


  <nav>
  <div class="nav nav-tabs" id="nav-tab" role="tablist">
    <a class="nav-link active" id="nav-semana1-tab" data-toggle="tab" href="#semana1" role="tab" aria-controls="semana1" aria-selected="true">Semana 1</a>
    <a class="nav-link" id="nav-semana2-tab" data-toggle="tab" href="#semana2" role="tab" aria-controls="semana2" aria-selected="false">Semana 2</a>
    <a class="nav-link" id="nav-semana3-tab" data-toggle="tab" href="#semana3" role="tab" aria-controls="semana3" aria-selected="false">Semana 3</a>
    <a class="nav-link" id="nav-semana4-tab" data-toggle="tab" href="#semana4" role="tab" aria-controls="semana4" aria-selected="false">Semana 4</a>

  </div>
</nav>
<div class="tab-content" id="nav-tabContent">
  <div class="tab-pane fade show active" id="semana1" role="tabpanel" aria-labelledby="nav-semana1-tab">
      <br>
      <br>




  <table class="table">
				<thead>
					<tr>
						<th class="text-center">
							Lunes
						</th>
						<th class="text-center">
							Martes
						</th>
						<th class="text-center">
							Miercoles
						</th>
						<th class="text-center">
							Jueves
						</th>
            			<th class="text-center">
							Viernes
						</th>
            			<th class="text-center">
							Sábado
						</th>
            			<th class="text-center">
							Domingo
						</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>
							<br>
			        	<center><img src='./VIEW/icons/bici.PNG'  height="80" width="80"><center>
							<br>
							<br>
            			<center><p><strong>30 minutos llano</strong></p><center>
						</td>
						<td>
							<br>
						<center><img src='./VIEW/icons/descanso.PNG'  height="80" width="80"></center>
						<br>
						<br>
            			<center><p><strong>Hoy descansas</strong></p></center>
						</td>
						<td>
							<br>
						<center><img src='./VIEW/icons/descanso.PNG'  height="80" width="80"></center>
						<br>
						<br>
            			<center><p><strong>Hoy descansas</strong></p></center>
						</td>
						<td>
							<br>
						<center><img src='./VIEW/icons/bici.PNG'  height="80" width="80"></center>
						<br>
						<br>
            			<center><p><strong>40 minutos llano</strong></p></center>
						</td>
						<td>
							<br>
						<center><img src='./VIEW/icons/descanso.PNG'  height="80" width="80"></center>
						<br>
						<br>
            			<center><p><strong>Hoy descansas</strong></p></center>
						</td>
						<td>
							<br>
						<center><img src='./VIEW/icons/bici.PNG'  height="80" width="80"></center>
						<br>
						<br>
            			<center><p><strong>40 minutos llano</strong></p></center>
						</td>
						<td>
							<br>
						<center><img src='./VIEW/icons/descanso.PNG'  height="80" width="80"></center>
						<br>
						<br>
            			<center><p><strong>Hoy descanas</strong></p></center>
						</td>
					</tr>
				</tbody>
			</table>

  </div>
  <div class="tab-pane fade" id="semana2" role="tabpanel" aria-labelledby="nav-semana2-tab">

  <br>
      <br>




  <table class="table">
				<thead>
					<tr>
						<th class="text-center">
							Lunes
						</th>
						<th class="text-center">
							Martes
						</th>
						<th class="text-center">
							Miercoles
						</th>
						<th class="text-center">
							Jueves
						</th>
            			<th class="text-center">
							Viernes
						</th>
            			<th class="text-center">
							Sábado
						</th>
            			<th class="text-center">
							Domingo
						</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>
							<br>
			        	<center><img src='./VIEW/icons/bici.PNG'  height="80" width="80"><center>
							<br>
							<br>
            			<center><p><strong>1 hora llano</strong></p><center>
						</td>
						<td>
							<br>
						<center><img src='./VIEW/icons/descanso.PNG'  height="80" width="80"></center>
						<br>
						<br>
            			<center><p><strong>Hoy descansas</strong></p></center>
						</td>
						<td>
							<br>
						<center><img src='./VIEW/icons/bici.PNG'  height="80" width="80"></center>
						<br>
						<br>
            			<center><p><strong>1h15min con alguna subida</strong></p></center>
						</td>
						<td>
							<br>
						<center><img src='./VIEW/icons/descanso.PNG'  height="80" width="80"></center>
						<br>
						<br>
            			<center><p><strong>Hoy descansas</strong></p></center>
						</td>
						<td>
							<br>
						<center><img src='./VIEW/icons/descanso.PNG'  height="80" width="80"></center>
						<br>
						<br>
            			<center><p><strong>Hoy descansas</strong></p></center>
						</td>
						<td>
							<br>
						<center><img src='./VIEW/icons/bici.PNG'  height="80" width="80"></center>
						<br>
						<br>
            			<center><p><strong>1h con subidas cortas</strong></p></center>
						</td>
						<td>
							<br>
						<center><img src='./VIEW/icons/descanso.PNG'  height="80" width="80"></center>
						<br>
						<br>
            			<center><p><strong>Hoy descanas</strong></p></center>
						</td>
					</tr>
				</tbody>
			</table>


  </div>
  <div class="tab-pane fade" id="semana3" role="tabpanel" aria-labelledby="nav-semana3-tab">
		
  <br>
      <br>




  <table class="table">
				<thead>
					<tr>
						<th class="text-center">
							Lunes
						</th>
						<th class="text-center">
							Martes
						</th>
						<th class="text-center">
							Miercoles
						</th>
						<th class="text-center">
							Jueves
						</th>
            			<th class="text-center">
							Viernes
						</th>
            			<th class="text-center">
							Sábado
						</th>
            			<th class="text-center">
							Domingo
						</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>
							<br>
			        	<center><img src='./VIEW/icons/bici.PNG'  height="80" width="80"><center>
							<br>
							<br>
            			<center><p><strong>1 hora llano</strong></p><center>
						</td>
						<td>
							<br>
						<center><img src='./VIEW/icons/descanso.PNG'  height="80" width="80"></center>
						<br>
						<br>
            			<center><p><strong>Hoy descansas</strong></p></center>
						</td>
						<td>
							<br>
						<center><img src='./VIEW/icons/descanso.PNG'  height="80" width="80"></center>
						<br>
						<br>
            			<center><p><strong>Hoy descansas</strong></p></center>
						</td>
						<td>
							<br>
						<center><img src='./VIEW/icons/bici.PNG'  height="80" width="80"></center>
						<br>
						<br>
            			<center><p><strong>1 hora llano</strong></p></center>
						</td>
						<td>
							<br>
						<center><img src='./VIEW/icons/descanso.PNG'  height="80" width="80"></center>
						<br>
						<br>
            			<center><p><strong>Hoy descansas</strong></p></center>
						</td>
						<td>
							<br>
						<center><img src='./VIEW/icons/bici.PNG'  height="80" width="80"></center>
						<br>
						<br>
            			<center><p><strong>45min con subidas</strong></p></center>
						</td>
						<td>
							<br>
						<center><img src='./VIEW/icons/descanso.PNG'  height="80" width="80"></center>
						<br>
						<br>
            			<center><p><strong>Hoy descansas</strong></p></center>
						</td>
					</tr>
				</tbody>
			</table>


  		</div>

		  
  <div class="tab-pane fade" id="semana4" role="tabpanel" aria-labelledby="nav-semana4-tab">
		
  <br>
      <br>




  <table class="table">
				<thead>
					<tr>
						<th class="text-center">
							Lunes
						</th>
						<th class="text-center">
							Martes
						</th>
						<th class="text-center">
							Miercoles
						</th>
						<th class="text-center">
							Jueves
						</th>
            			<th class="text-center">
							Viernes
						</th>
            			<th class="text-center">
							Sábado
						</th>
            			<th class="text-center">
							Domingo
						</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>
							<br>
			        	<center><img src='./VIEW/icons/bici.PNG'  height="80" width="80"><center>
							<br>
							<br>
            			<center><p><strong>1 hora llano</strong></p><center>
						</td>
						<td>
							<br>
						<center><img src='./VIEW/icons/descanso.PNG'  height="80" width="80"></center>
						<br>
						<br>
            			<center><p><strong>Hoy descansas</strong></p></center>
						</td>
						<td>
							<br>
						<center><img src='./VIEW/icons/descanso.PNG'  height="80" width="80"></center>
						<br>
						<br>
            			<center><p><strong>Hoy descansas</strong></p></center>
						</td>
						<td>
							<br>
						<center><img src='./VIEW/icons/bici.PNG'  height="80" width="80"></center>
						<br>
						<br>
            			<center><p><strong>30min con subidas</strong></p></center>
						</td>
						<td>
							<br>
						<center><img src='./VIEW/icons/descanso.PNG'  height="80" width="80"></center>
						<br>
						<br>
            			<center><p><strong>Hoy descansas</strong></p></center>
						</td>
						<td>
							<br>
						<center><img src='./VIEW/icons/descanso.PNG'  height="80" width="80"></center>
						<br>
						<br>
            			<center><p><strong>Hoy descansas</strong></p></center>
						</td>
						<td>
							<br>
						<center><img src='./VIEW/icons/meta.PNG'  height="80" width="80"></center>
						<br>
						<br>
            			<center><p><strong>Hoy compites!</strong></p></center>
						</td>
					</tr>
				</tbody>
			</table>
  </div>





</div>

<img src='./VIEW/icons/volver.png' height="40" width="40" onclick="crearform('formenviar','post'); insertacampo(document.formenviar,'action','buscar'); insertacampo(document.formenviar,'controlador','ENTRENAMIENTO');enviaform(document.formenviar);">
<br></br>
<br></br>
<br></br>
<br></br>
<?php
    
    include './VIEW/footer.php';
    }// fin de render
   
   

} //FIN DE CLASE MESSAGE
?>