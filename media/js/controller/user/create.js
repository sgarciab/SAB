$(document).ready(function(){
	$('#save').button();
    /*VALIDATIONS*/
    $("#frmCreateUser").validate({
        onfocusout: false,
        onkeyup: false,
		wrapper: "label",
		rules: {
			firstname:{
				required:true,
				textOnly: true,
                maxlength: 50
			},
			lastname:{
				required:true,
				textOnly: true,
                maxlength: 50 
               
			},
			document:{
				required:true,
                digits:true,
                minlength: 5,
				remote: {
					url: document_root+"rpc/check_useridentification",
						type: "POST",
						data:{
							document: function(){
								return $('#document').val();
							},
							id: function(){
								return $('#id').val();
							}
					}
				}
			},
            username:{
                maxlength: 50,
                required:true,
                remote: {
						url: document_root+"rpc/check_username",
						type: "POST",
						data:{
							username: function(){
								return $('#username').val();
							},
							id: function(){
								return $('#id').val();
							}
						}
					}
			},
            profile_id:{
                required:true
			},
            status:{
                required:true
            },
            password:{
                required:true,
				maxlength: 50
            },
            confirmPassword:{
                required:true,
                maxlength: 50,
                equalTo:"#password"
            }

		},
		messages: {
			firstname:{
				required:'Nombre obligatorio'
				//textOnly:'Ingrese solo letras'
			},
			lastname:{
				required:'Apellido obligatorio'
				//textOnly:'Ingrese solo letras'
			},
			document:{
                required:'Identificaci&oacute;n obligatoria',
                //digits: "Este campo admite solo d&iacute;gitos",
				remote:'Identificaci&oacute;n se encuentra en uso'
               },
            username:{
				required:'Nombre de usuario obligatorio',
                remote: 'Usuario se encuentra en uso'
			},
            profile_id:{
				required:'Perfil obligatorio'
			},
            status:{
                required:'Estado obligatorio'
            },
            password:{
                required:'Contrase&ntilde;a obligatoria'
            },
            confirmPassword:{
                required:'Confirmar contrase&ntilde;a obligatorio',
                equalTo:'Contrase&ntilde;as no coinciden'
            }
		},
			submitHandler: function (form) {
               $('#save').attr('disabled','disabled'); 
               form.submit();
            }
	});

});

