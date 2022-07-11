<?php

class FORO_SHOWALL{

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
			<div class="jumbotron">
				<h2>
					FORO!
				</h2>
				<p>
                    Bienvenido a la sección social, donde podrás encontrar comentarios de otros usuarios y dejar los tuyos propios. 
                    Mantente al día de las últimas notificaciones en el mundo del MTB. 
				</p>
			</div>
			<div class="card-body">
                                <div class="table">
                                    <table class="table table-hover" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                            <th class='id'>ID</th>
                                            <th class='title'>Titulo</th>
                                            <th class='mensaje'>Mensaje</th>
                                            <th class='fecha'>Fecha</th>
                                        </thead>
                                       

<?php

            foreach ($this->datos as $fila)
            {
                // para cada fila que viene en el array la escribimos en una fila de la tabla html y cada atributo en una columna (no es un recordset sino un array asociativo)

?>
               
               <tr>
                                                <td> <?php echo $fila['id']; ?> </td>
                                                <td> <?php echo $fila['titulo']; ?> </td>
                                                <td> <?php echo $fila['mensaje']; ?> </td>
                                                <td> <?php echo $fila['fecha']; ?> </td>
                                      
                                                

                   
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

<div class="container-fluid">
	<div class="row">
		<div class="col-md-10">
		</div>
		<div class="col-md-2">
			 
		<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">Añade un comentario</button>
		</div>

            <!--Modal para los comentarios -->

        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Comenta!</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form class="form-horizontal" name="formularioinsertar" action="index.php" method="post">
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Titulo:</label>
            <input type="text" class="form-control" id="titulo">
          </div>
          <div class="form-group">
            <label for="message-text" class="col-form-label">Mensaje:</label>
            <textarea class="form-control" id="mensaje"></textarea>
          </div>
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        <!--Para enviar los datos a BD que no deben ser vistos por el usuario-->
        
        <?php $fcha = date("Y-m-d");?>
        <input id="fecha" type="hidden" class="form-control"  value="<?php echo $fcha;?>" >
        <input id="nombre_usuario" name="nombre_usuario" type="hidden" value="<?php echo $_SESSION['nombre_usuario']; ?>">
        <button type="button" class="btn btn-primary" onclick="insertacampo(document.insertar,'action','insertar'); insertacampo(document.formularioinsertar,'controlador','FORO'); enviaform(document.insertar);">Enviar mensaje</button>
        </form>
      </div>
    </div>
  </div>
</div>




<img src='./VIEW/icons/volver.png' height="40" width="40" onclick = "crearform('formenviar','post'); /*insertacampo(document.formenviar,'action',''); insertacampo(document.formenviar,'controlador','');*/enviaform(document.formenviar);">
<br></br>
<br></br>
<br></br>
<br></br>
<?php
    
    include './VIEW/footer.php';
    }// fin de render
   
   

} //FIN DE CLASE MESSAGE
?>