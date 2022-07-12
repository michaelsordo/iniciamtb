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
</ul>
<br>
<br>
    <div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
			<div class="page-header">
				<h1>
					Rutas! <small>Propuesta mensual.</small>
				</h1>
				<p>Escoge cualquiera de las rutas mensuales que te proponemos para entrenar.
				</p>
				<div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
		<img alt="Bootstrap Image Preview" src='./VIEW/img/perfil_rutaA.PNG' class="rounded" />
		</div>
	</div>
</div>

<div class="card-body">
                                <div class="table">
                                    <table name="mitabla" class="table table-hover" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                            
                                            <th id="1" class='nombre'>Nombre</th>
											<th id="2" class='descripcion'>Descripcion</th>
											
                                     
                                        </thead>
                                       	
	

<?php
            $contador=0;
            foreach ($this->datos as $fila)
            {
                // para cada fila que viene en el array la escribimos en una fila de la tabla html y cada atributo en una columna (no es un recordset sino un array asociativo)

?>
               
               <tr id="fila<?php echo $contador ?>">
                                                <td id="0"> <h3><?php echo $fila['nombre']; ?></h3> </td>
                                              
												
												<td id="1"> <?php echo $fila['descripcion']; ?> </td>
												
                                      
                                                

                 <td><H3><a class="nav-link active" href="<?php echo $fila['enlace']; ?>">Ver ruta</a></H3></td>  
            
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


