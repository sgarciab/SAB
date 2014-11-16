$(document).ready(function(){
	$('#save').button();
        
        //Date picker
        $("#fecNac").datepicker({
            changeMonth: true,
            changeYear: true,
            //minDate: "0",
            yearRange: "-80+0",
            dateFormat: "yy-mm-dd",
            dayNamesMin: [ "Do", "Lu", "Ma", "Mi", "Ju", "Vi", "Sa" ],
            monthNamesShort: [ "Ene", "Feb", "Mar", "Abr", "May", "Jun", "Jul", "Ago", "Sep", "Oct", "Nov", "Dic" ],          
        });
        
    /*VALIDATIONS*/
    $("#frmCreateUser").validate({
        onfocusout: false,
        onkeyup: false,
		wrapper: "label",
		rules: {
			nombre:{
				required:true,
				textOnly: true,
                maxlength: 50
			},
			apellido:{
				required:true,
				textOnly: true,
                maxlength: 50 
               
			},
			cedula:{
				required:true,
                digits:true,
                minlength: 5,
				remote: {
                                        //Santiago añadirá
					url: document_root+"rpc/check_useridentification",
						type: "POST",
						data:{
							cedula: function(){
								return $('#cedula').val();
							},
							id: function(){
								return $('#id').val();
							}
					}
				}
			},
            nickname:{
                maxlength: 50,
                required:true,
                remote: {
						
                                                url: document_root+"rpc/check_username",
						type: "POST",
						data:{
							nickname: function(){
								return $('#nickname').val();
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
			nombre:{
				required:'Nombre obligatorio'
				//textOnly:'Ingrese solo letras'
			},
			apellido:{
				required:'Apellido obligatorio'
				//textOnly:'Ingrese solo letras'
			},
			cedula:{
                                required:'Identificaci&oacute;n obligatoria',
                                //digits: "Este campo admite solo d&iacute;gitos",
				remote:'Identificaci&oacute;n se encuentra en uso'
                        },
                        nickname:{
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

