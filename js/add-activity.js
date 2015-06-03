$("#add").on("click",addActivity);

function addActivity(){
	var newElement = $("<input name='activities[]' type='text' class='form-control input-sm' maxlength='100' placeholder='Actividad' value='' required/>");
	newElement.appendTo($("#activities"));
}