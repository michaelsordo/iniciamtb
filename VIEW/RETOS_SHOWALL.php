<?php

class RETOS_SHOWALL{

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
					Retos! <small>Completa los retos mensuales que te proponemos.</small>
				</h1>
				<p>Escoge el reto que mejor se adapte a ti y que veas que puedes completarlo sin lesionarte, no empieces 
					por los retos más dificiles, recuerda, menos es más.
				</p>
				<div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
		<img alt="Bootstrap Image Preview" with="1500" heigh="200" src='./VIEW/img/reto2_showall.PNG' />
		</div>
	</div>
</div>

<div class="card-body">
                                <div class="table">
                                    <table name="mitabla" class="table table-hover" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                            <th id="0" class='nombre'>Nombre</th>
                                            <th id="1" class='tipo'>Tipo</th>
                                     
                                        </thead>
                                       

<?php
            $contador=0;
            foreach ($this->datos as $fila)
            {
                // para cada fila que viene en el array la escribimos en una fila de la tabla html y cada atributo en una columna (no es un recordset sino un array asociativo)

?>
               
               <tr id="fila<?php echo $contador ?>">
                                                <td id="0"> <h3><?php echo $fila['nombre']; ?></h3> </td>
                                                <td id="1"> <?php echo $fila['tipo']; ?> </td>

                                      
                                                

                 <td id="2"><button type="button" class="btn btn-primary" height="20" width="20" onclick = "crearform('formenviar','post'); insertacampo(document.formenviar,'action','formularioinsertar2'); insertacampo(document.formenviar,'controlador','RETOS');enviaform(document.formenviar);">Añadir nuevo</button></td>  
                 <td id="2"><button type="button" onclick="cambiacolor2('<?php echo'fila'.$contador ?>')" class="btn btn-danger">Sin completar</button></td>  
                 </tr>



  
               
<?php
$contador++;
            }
?>


                </table>
            </div>
        </div>
    </div>
    </div>
</main>
</div>
</div>

<br>




      <!--pruebas-->
      
      <h3 class="text">
								Historial de retos realizados
							</h3>
							<br>
					<div class="row">
						<div class="col-md-12">
						<table name="mitabla" class="table table-hover" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr class="table-success">
                                            <th id="0" class='nombre_reto'>Nombre del reto</th>
                                            
                                     
                                        </thead>
                                       

<!--Estamos aqui-->
<?php		
			$mysqli = new mysqli("localhost", "root", "", "tfg"); 
			$query = "SELECT nombre_reto
                         FROM retos_realizados
                         WHERE nombre_usuario = '$_SESSION[nombre_usuario]'";
            //echo var_dump($query);
			
			if ($result = $mysqli->query($query)) {
				while ($row = $result->fetch_assoc()) {
					$nombre_reto = $row["nombre_reto"];
				

			
					echo '<tr> 
						<td>'.$nombre_reto.'</td>
						

						  </tr>';
				}
				$result->free();
			} 
			
?>


                </table>

<br>
<br>

<img src='./VIEW/icons/volver.png' style="cursor:pointer" height="40" width="40" onclick = "crearform('formenviar','post'); /*insertacampo(document.formenviar,'action',''); insertacampo(document.formenviar,'controlador','');*/enviaform(document.formenviar);">
<br></br>
<br></br>
<br></br>
<br></br>
</div>
<?php
    
    //include './VIEW/footer.php';
    }// fin de render
   
   

} //FIN DE CLASE MESSAGE
?>

