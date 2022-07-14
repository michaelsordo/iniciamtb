<?php

class ENTRENAMIENTO_50{

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
					50KM! <span>Entrenamiento de 8 semanas</span>
				</h1>
      </div>
    
	  <button type="button" class="btn btn-primary" height="20" width="20" onclick = "crearform('formenviar','post'); insertacampo(document.formenviar,'action','formularioinsertar'); insertacampo(document.formenviar,'controlador','USUARIO');enviaform(document.formenviar);">Comenzar entramiento</button>
				<br>
				<br>


  <nav>
  <div class="nav nav-tabs" id="nav-tab" role="tablist">
    <a class="nav-link active" id="nav-semana1-tab" data-toggle="tab" href="#semana1" role="tab" aria-controls="semana1" aria-selected="true">Semana 1</a>
    <a class="nav-link" id="nav-semana2-tab" data-toggle="tab" href="#semana2" role="tab" aria-controls="semana2" aria-selected="false">Semana 2</a>
    <a class="nav-link" id="nav-semana3-tab" data-toggle="tab" href="#semana3" role="tab" aria-controls="semana3" aria-selected="false">Semana 3</a>
    <a class="nav-link" id="nav-semana4-tab" data-toggle="tab" href="#semana4" role="tab" aria-controls="semana4" aria-selected="false">Semana 4</a>
    <a class="nav-link" id="nav-semana5-tab" data-toggle="tab" href="#semana5" role="tab" aria-controls="semana5" aria-selected="false">Semana 5</a>
    <a class="nav-link" id="nav-semana6-tab" data-toggle="tab" href="#semana6" role="tab" aria-controls="semana6" aria-selected="false">Semana 6</a>
    <a class="nav-link" id="nav-semana7-tab" data-toggle="tab" href="#semana7" role="tab" aria-controls="semana7" aria-selected="false">Semana 7</a>
    <a class="nav-link" id="nav-semana8-tab" data-toggle="tab" href="#semana8" role="tab" aria-controls="semana8" aria-selected="false">Semana 8</a>

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
            			<center><p><strong>1h30min llano</strong></p><center>
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
            			<center><p><strong>1hora llano</strong></p></center>
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
            			<center><p><strong>1h30min llano</strong></p></center>
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
            			<center><p><strong>1h suave subida</strong></p></center>
                  <center><p><strong>Series 5x20 segundos</strong></p></center>
                  <center><p><strong>Recuperación entre series 3min</strong></p></center>
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
            			<center><p><strong>2h (1 suave 1 moderada)</strong></p></center>
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
            			<center><p><strong>40min suaves</strong></p></center>
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
            			<center><p><strong>1h30min con subidas largas</strong></p><center>
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
            			<center><p><strong>1 hora suave</strong></p></center>
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
            			<center><p><strong>1h45min con series</strong></p></center>
                  <center><p><strong>5*20secs fuerte</strong></p></center>
                  <center><p><strong>Recuperación 3min</strong></p></center>
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
						<center><img src='./VIEW/icons/bici.PNG'  height="80" width="80"></center>
						<br>
						<br>
            			<center><p><strong>1h30min suave</strong></p></center>
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
            			<center><p><strong>1h con subidas pronunciadas</strong></p></center>
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

  <div class="tab-pane fade" id="semana5" role="tabpanel" aria-labelledby="nav-semana5-tab">
		
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
							  <center><p><strong>2h con subidas largas</strong></p><center>
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
							  <center><p><strong>1h30min intensidad media</strong></p></center>
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
							  <center><p><strong>2h30min suave</strong></p></center>
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


    <div class="tab-pane fade" id="semana6" role="tabpanel" aria-labelledby="nav-semana6-tab">
		
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
							  <center><p><strong>1h40min con subidas largas</strong></p><center>
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
							  <center><p><strong>40km en llano</strong></p></center>
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
							  <center><p><strong>2h30min suave y series</strong></p></center>
                <center><p><strong>7x20secs fuerte</strong></p></center>
                <center><p><strong>Recuperacion 3min</strong></p></center>
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


    <div class="tab-pane fade" id="semana7" role="tabpanel" aria-labelledby="nav-semana7-tab">
		
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
							  <center><p><strong>2h en llano</strong></p><center>
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
							  <center><p><strong>2h30min con subidas largas</strong></p></center>
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
							  <center><p><strong>2h35min con 30min fuertes</strong></p></center>
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
							  <center><p><strong>2h20min suave</strong></p></center>
							  </td>
						  </tr>
					  </tbody>
				  </table>
		</div>

    
    <div class="tab-pane fade" id="semana8" role="tabpanel" aria-labelledby="nav-semana8-tab">
		
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
							  <center><p><strong>1h suave</strong></p><center>
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
							  <center><p><strong>50min suaves</strong></p></center>
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
							  <center><p><strong>45min suaves</strong></p></center>
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