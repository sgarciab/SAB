$(document).ready(function(){

    /*VALIDATIONS*/
    $("#frmMovementRoll").validate({
        onfocusout: false,
        onkeyup: false,
		wrapper: "ol",
		rules: {
			destiny_warehouse:{
				required:true
			},
			description:{
				required:true
			}
		},
		messages: {
			destiny_warehouse:{
				required:'El campo es obligatorio.'
			}
		}
	});
	
});