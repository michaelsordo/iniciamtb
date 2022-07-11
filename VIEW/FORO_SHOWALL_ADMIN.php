<?php

class FORO_SHOWALL_ADMIN{

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


<div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid">
                        <h1 class="mt-4">Administración del Foro</h1>
                        <ol class="breadcrumb mb-4">
                            
                            <li class="breadcrumb-item active">Bienvenido a la tabla de muestra de mensajes</li>
                        </ol>
                        <div class="card mb-4">
                            <div class="card-body">
                                <a class="En_esta_pantalla">En esta pantalla podrás añadir,buscar,editar eliminar y volver atrás,gracias a los botones interactivos.</a>
                                <button type="button" class="btn btn-primary" height="20" width="20" onclick = "crearform('formenviar','post'); insertacampo(document.formenviar,'action','formularioinsertar'); insertacampo(document.formenviar,'controlador','FORO');enviaform(document.formenviar);">Añadir nuevo</button>
    &nbsp&nbsp
    <img src='./VIEW/icons/busqueda.png'  style="cursor:pointer" height="20" width="20" onclick = "crearform('formenviar','post'); insertacampo(document.formenviar,'action','formulariobuscar'); insertacampo(document.formenviar,'controlador','FORO');enviaform(document.formenviar);">
                            </div>
                        </div>
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table mr-1"></i>
                                <a class="retos">Foro</a>
                                
                                
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered"  id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>    
                                                    <th class='id'>ID</th>
                                                    <th class='mensaje'>Mensaje</th>
                                                    <th class='usuario'>Usuario</th>
                                                    <th class='titulo2'>Titulo</th>
                                                    <th class='fecha'>Fecha</th>
                                                    
                                                 
                                                  

                                        </thead>
                                       

<?php

            foreach ($this->datos as $fila)
            {
                // para cada fila que viene en el array la escribimos en una fila de la tabla html y cada atributo en una columna (no es un recordset sino un array asociativo)

?>
               
               <tr>
                    <td> <?php echo $fila['id']; ?> </td>
                    <td> <?php echo $fila['mensaje']; ?> </td>
                    <td> <?php echo $fila['usuario']; ?> </td>
                    <td> <?php echo $fila['titulo']; ?> </td>
                    <td> <?php echo $fila['fecha']; ?> </td>

         
                                                
                      

               

                    <td> 

                        <button type="button" class="btn btn-primary" height="40" width="40" onclick = "crearform('formenviar','post'); insertacampo(document.formenviar,'action','formularioeditar'); insertacampo(document.formenviar,'controlador','FORO'); insertacampo(document.formenviar,'id','<?php echo $fila['id']; ?>'); enviaform(document.formenviar);">Editar</button>
                        
                    </td>
                    <td> 

                    <button type="button" class="btn btn-danger" height="40" width="40" onclick = "crearform('formenviar','post'); insertacampo(document.formenviar,'action','formularioborrar'); insertacampo(document.formenviar,'controlador','FORO'); insertacampo(document.formenviar,'id','<?php echo $fila['id']; ?>'); enviaform(document.formenviar);">Eliminar</button>
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


       