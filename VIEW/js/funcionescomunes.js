
/*function enviaformulario(){
	
	formulario = document.forms['form-asignatura-editar'];

	var input = document.createElement("input");
    input.type = "hidden";
    input.name = "action";
    formulario.appendChild(input);
    formulario.elements.action.value = 'editar';

	formulario.submit();

}*/

function cambiar_color(){
	var tablaitems=document.getElementsByClassName('table table-hover')
	for(var i=0;i<tablaitems.lenght;i++){
		var indice= document.getElementsById(tablaitems[i]);
		indice.style.color="blue";

	} 
	
	
 }

 function cambiacolor(v) {
	console.log(v);
	
		var tr = document.getElementById(v);
		console.log(tr);
		tr.style.background="grey";

	
  }

  function cambiacolor2(v) {
	console.log(v);
	
		var tr = document.getElementById(v);
		console.log(tr);
		tr.style.background="white";

	
  }

  //modal

  $('#exampleModal').on('show.bs.modal', function (event) {
	var button = $(event.relatedTarget) // Button that triggered the modal
	var recipient = button.data('whatever') // Extract info from data-* attributes
	// If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
	// Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
	var modal = $(this)
	modal.find('.modal-title').text('Titulo ' + recipient)
	modal.find('.modal-body input').val(recipient)
  })




function insertacampo(form ,name, value){
	
	formulario = form;
	var input = document.createElement('input');
    input.type = 'hidden';
    input.name = name;
    input.value = value;
    formulario.appendChild(input);
}

function crearform(name, method){
	
	var formu = document.createElement('form');
	document.body.appendChild(formu);
    formu.name = name;
    formu.method = method;
    formu.action = 'index.php';   
}


function enviaform(form){
	
	form.submit();

}

function enviaformcorrecto(form, funcion){
	
	if (funcion){
		form.submit();
	}
	else{
		return false;
	}

}

function saludos(){
	alert('hola');
}