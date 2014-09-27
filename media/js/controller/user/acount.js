$(document).ready(function(){
	$('#save').button();

    /*VALIDATIONS*/
    $("#frmAcountUser").validate({
        onfocusout: false,
        onkeyup: false,
		wrapper: "ol",
		rules: {
			firstname:{
				required:true,
				textOnly: true
			},
			lastname:{
				required:true,
				textOnly: true
			},
			document:{
				required:true,
				digits:true,
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
				minlength: 5
            },
            confirmPassword:{
                required:true,
                equalTo:"#password"
            }

		},
		messages: {
			firstname:{
				required:'El campo es obligatorio.',
				textOnly:'El campo solo acepta caracteres.'
			},
			lastname:{
				required:'El campo es obligatorio.',
				textOnly:'El campo solo acepta caracteres.'
			},
			document:{
                required:'El campo es obligatorio.',
				remote:'La identificaci&oacute;n ya existe.',
                maxlength:'El campo puede contener m&aacute;ximo 10 caracteres.',
                minlength:'El campo puede contener m&iacute;nimo 10 caracteres.',
                cedulaEcuador:'El campo debe contener un n&uacute;mero de identificaci&oacute;n v&aacute;lido.'
			},
            username:{
				required:'El campo es obligatorio.',
                remote: 'El Nombre de Usuario ya existe'
			},
            profile_id:{
				required:'El campo es obligatorio.'
			},
            status:{
                required:'El campo es obligatorio.'
            },
            password:{
                required:'El campo es obligatorio'
            },
            confirmPassword:{
                required:'El campo es obligatorio',
                equalTo:'Las Contrase&ntilde;as no coinciden'
            }
		}
	});

});

