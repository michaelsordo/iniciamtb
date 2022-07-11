<?php

class USUARIO_SHOWALL{

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
                        <h1 class="mt-4 usuarios">Usuarios</h1>
                        <ol class="breadcrumb mb-4">
                            
                            <li class="breadcrumb-item active">Bienvenido a la tabla de muestra de Usuarios</li>
                        </ol>
                        <div class="card mb-4">
                            <div class="card-body">
                                <a class="En_esta_pantalla">En esta pantalla podrás añadir,buscar,editar eliminar y volver atrás,gracias a los botones interactivos.</a>
                                <button type="button" class="btn btn-primary" height="20" width="20" onclick = "crearform('formenviar','post'); insertacampo(document.formenviar,'action','formularioinsertar'); insertacampo(document.formenviar,'controlador','USUARIO');enviaform(document.formenviar);">Añadir nuevo</button>
    &nbsp&nbsp
    <img src='./VIEW/icons/busqueda.png'  style="cursor:pointer" height="20" width="20" onclick = "crearform('formenviar','post'); insertacampo(document.formenviar,'action','formulariobuscar'); insertacampo(document.formenviar,'controlador','USUARIO');enviaform(document.formenviar);">
                            </div>
                        </div>
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table mr-1"></i>
                                <a class="usuarios">Usuarios</a>
                                
                                
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered"  id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                    <th class='nombre_usuario'></th>
                                                    <th class='contrasena'>Contraseña</th>
                                                    <th class='correo'>Correo electrónico</th>
                                                    <th class='es_admin'>Administrador</th>
                                                 
                                                  

                                        </thead>
                                       

<?php

            foreach ($this->datos as $fila)
            {
                // para cada fila que viene en el array la escribimos en una fila de la tabla html y cada atributo en una columna (no es un recordset sino un array asociativo)

?>
               
               <tr>
                    <td> <?php echo $fila['nombre_usuario']; ?> </td>
                    <td> <?php echo $fila['contrasena']; ?> </td>
                    <td> <?php echo $fila['correo']; ?> </td>
                    <td> <?php echo $fila['es_admin']; ?> </td>
                                                
                      

               

                    <td> 

                        <button type="button" class="btn btn-primary" height="40" width="40" onclick = "crearform('formenviar','post'); insertacampo(document.formenviar,'action','formularioeditar'); insertacampo(document.formenviar,'controlador','USUARIO'); insertacampo(document.formenviar,'nombre_usuario','<?php echo $fila['nombre_usuario']; ?>'); enviaform(document.formenviar);">Editar</button>
                        
                    </td>
                    <td> 

                    <button type="button" class="btn btn-danger" height="40" width="40" onclick = "crearform('formenviar','post'); insertacampo(document.formenviar,'action','formularioborrar'); insertacampo(document.formenviar,'controlador','USUARIO'); insertacampo(document.formenviar,'nombre_usuario','<?php echo $fila['nombre_usuario']; ?>'); enviaform(document.formenviar);">Eliminar</button>
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


       