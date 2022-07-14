<?php

class MIS_ENTRENOS_SHOWALL{

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
					Historial! <small>Revisa tus entrenamientos en curso.</small>
				</h1>
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
                                                    <th class='id_entrenamiento'>Entrenamiento en curso</th>
                                                    <th class='fecha_inicio'>Fecha de inicio</th>
                                                  
                                                   

                                        </thead>
                                       

<?php

            foreach ($this->datos as $fila)
            {
                // para cada fila que viene en el array la escribimos en una fila de la tabla html y cada atributo en una columna (no es un recordset sino un array asociativo)

?>
               
               <tr>
                    <td> <h3><?php echo $fila['id_entrenamiento']; ?></h3> </td>
                    <td> <h3><?php echo $fila['fecha_inicio']; ?></h3> </td>
        

                    <td> 

                    <button type="button" class="btn btn-danger" height="40" width="40" onclick = "crearform('formenviar','post'); insertacampo(document.formenviar,'action','formularioborrar2'); insertacampo(document.formenviar,'controlador','RETOS'); insertacampo(document.formenviar,'nombre_reto','<?php echo $fila['nombre_reto']; ?>'); enviaform(document.formenviar);">Marcar como finalizado</button>
                    </td>
                 </tr>
  
               
<?php
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

