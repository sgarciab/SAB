$(document).ready(function(){
    $('#save').button();
    $("#frmCreateSeller").validate({
        onfocusout: false,
        onkeyup: false,
        wrapper: "label",
        rules: {
            document:{
                digits:true,
                required:true,
                maxlength: 20,
                minlength: 5,
                remote: {
                    url: document_root+"admin/rpc/check_selleridentification",
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
            firstname:{
                required:true,
                textOnly:true,
                maxlength: 50
                //minlength: 3
            },
            lastname:{
                required:true,
                textOnly:true,
                maxlength: 50
                //minlength: 3
            },
            address:{
                required:true,
                maxlength: 255
                //minlength: 5
            },                                    
            status:{
                required:true
            },
            phone: {
                maxlength: 20,
                minlength: 6,
                digits:true
                
               
            },
            mobil: {
                maxlength: 20,
                minlength: 6,
                digits:true
            }
        },
        messages: {
            document:{
                //digits: 'Ingrese solo d&iacute;gitos',
                required:'Identificaci&oacute;n obligatoria',
                remote:'Identificaci&oacute;n se encuentra en uso'
            },
            firstname:{
                required:'Nombre obligatorio'
            //textOnly:'Ingrese solo texto'
            },
            lastname:{
                required:'Apellido obligatorio'
            //textOnly:'Ingrese solo texto'
            },
            address: {
                required: 'Direcci&oacute;n obligatoria'
            },
            phone:{
            //maxlength: 'Ingrese m&aacute;ximo 20 d&iacute;gitos'
            //digits: 'Ingrese solo d&iacute;gitos'
            },
            mobil:{
        //digits: 'Ingrese solo d&iacute;gitos',
        //maxlength: 'Ingrese m&aacute;ximo 20 d&iacute;gitos'
        }
        },
            submitHandler: function (form) {
                $('#save').attr('disabled','disabled'); 
                form.submit();
            }
		
    }); 
    
//    $("#save").click(function(){
//        if($("#frmCreateSeller").valid()){
//            $('#save').attr('disabled','disabled'); 
//            $("#frmCreateSeller").submit();
//        }
//    }); 
});

