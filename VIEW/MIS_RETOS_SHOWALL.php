<?php

class MIS_RETOS_SHOWALL{

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
  <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <h2>Retos</h2>
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" style="cursor:pointer" onclick="crearform('formenviar','post'); insertacampo(document.formenviar,'action','buscar'); insertacampo(document.formenviar,'controlador','RETOS');enviaform(document.formenviar);">Todos los retos</a>
          <a class="dropdown-item" style="cursor:pointer" onclick="crearform('formenviar','post'); insertacampo(document.formenviar,'action','buscar_usuario'); insertacampo(document.formenviar,'controlador','RETOS');enviaform(document.formenviar);">Mis retos</a>
        
        </div>
      </li>
	  <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <h2>Entrenamientos</h2>
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" style="cursor:pointer" onclick="crearform('formenviar','post'); insertacampo(document.formenviar,'action','buscar'); insertacampo(document.formenviar,'controlador','ENTRENAMIENTO');enviaform(document.formenviar);">Entrenamientos</a>
          <a class="dropdown-item" style="cursor:pointer" onclick="crearform('formenviar','post'); insertacampo(document.formenviar,'action','buscar2'); insertacampo(document.formenviar,'controlador','ENTRENAMIENTO');enviaform(document.formenviar);">Mis entrenamientos</a>
        
        </div>
      </li>
  </div>
</ul>
<br>
<br>
    <div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
			<div class="page-header">
				<h1>
					Historial! <small>Revisa tus retos completados.</small>
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
                                                    <th class='nombre_reto'>Nombre reto</th>
                                                  
                                                   

                                        </thead>
                                       

<?php

            foreach ($this->datos as $fila)
            {
                // para cada fila que viene en el array la escribimos en una fila de la tabla html y cada atributo en una columna (no es un recordset sino un array asociativo)

?>
               
               <tr>
                    <td> <h3><?php echo $fila['nombre_reto']; ?></h3> </td>
        

                    <td> 

                    <button type="button" class="btn btn-danger" height="40" width="40" onclick = "crearform('formenviar','post'); insertacampo(document.formenviar,'action','formularioborrar'); insertacampo(document.formenviar,'controlador','RETOS_USER'); insertacampo(document.formenviar,'nombre_reto','<?php echo $fila['nombre_reto']; ?>'); enviaform(document.formenviar);">Eliminar del historial</button>
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




      <!--pruebas-->
      
      <h3 class="text">
								Total de retos completados
							</h3>
							<br>
					<div class="row">
						<div class="col-md-12">
						<table name="mitabla" class="table table-hover" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr class="table-success">
                                            <th id="0" class='nombre_reto'>Retos totales completados</th>
                                            
                                     
                                        </thead>
                                       

<!--Estamos aqui-->
<?php		
			$mysqli = new mysqli("localhost", "root", "", "tfg"); 
			$query = "SELECT COUNT(*) as Total
                         FROM retos_realizados
                         WHERE nombre_usuario = '$_SESSION[nombre_usuario]'";
            //echo var_dump($query);
			
			if ($result = $mysqli->query($query)) {
				while ($row = $result->fetch_assoc()) {
					$Total = $row["Total"];
				

			
					echo '<tr> 
						<h2><td>'.$Total.'</td></h2>
						

						  </tr>';
				}
				$result->free();
			} 
			
?>


                </table>

<br>
<br>



<br></br>
<br></br>
</div>
<?php
    
    //include './VIEW/footer.php';
    }// fin de render
   
   

} //FIN DE CLASE MESSAGE
?>

