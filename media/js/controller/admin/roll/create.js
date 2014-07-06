$(document).ready(function(){
     /*VALIDATIONS*/
    $("#frmCreateRoll").validate({
        onfocusout: false,
        onkeyup: false,
        wrapper: "ol",
        rules: {
            warehouse_id:{
                required:true
            },
			code:{
                required:true,
                remote: {
                        url: document_root+"admin/rpc/check_rollcode",
                                type: "POST",
                                data:{
                                        code: function(){
                                                return $('#code').val();
                                        },
                                        id: function(){
                                                return $('#id').val();
                                        }
                        }
                }
              
            },
            unit_price:{
                priceNumber: true,
                number:true,
                required:true
              
            },  unit :{
                required:true
            },
            weight:{
                required:true,
                number:true
            },
            status:{
                required:true
            },
            cloth_id:{
                required:true
            },price_a:{
                    priceNumber: true,
                number:true,
                required:true
            },
            price_b:{
                 priceNumber: true,
                number:true,
                required:true
            }
        },
        messages: {
        
                unit_price:{		
                     priceNumber: 'Este campo admite en la parte decimal m&aacute;ximo 2 d&iacute;gitos, y separador de decimales (.). '
                },
                price_a:{		
                     priceNumber: 'Este campo admite en la parte decimal m&aacute;ximo 2 d&iacute;gitos, y separador de decimales (.). '
                },
                price_b:{		
                     priceNumber: 'Este campo admite en la parte decimal m&aacute;ximo 2 d&iacute;gitos, y separador de decimales (.). '
                },
                code:{
                    remote:"El c\xf3digo ya existe"
                }
        }
    });
    
    
    //AUTOCOMPLETER COMBOBOX
     $( "#cloth_id" ).combobox();

    //LISTENER
      $("#btnCreate").click(function(){
          
        if($("#frmCreateRoll").valid()){
            
            $("#frmCreateRoll").submit();
        }else{
            //VALID OR ERROR_VALIDATION CSS TO CLOTH_ID
            if($("#cloth_id").hasClass('valid')){
                $("#selectbox_reference ol label").removeAttr("style");
                $("#selectbox_reference span").removeAttr("style");
            }else{
                $("#selectbox_reference ol label").attr("style","display: block;position:relative;top:20px;");
                $("#selectbox_reference span").attr("style","position:relative;top:-18px");
                $("#selectbox_reference span a span").removeAttr("style");
           
            }
        }
    }); 
    
   
    $("#add_reference").click(function(){
       
         $("#dialog_new_reference").dialog();
           $("#dialog_new_reference").dialog({
            width: 400,
            height: 190,
            modal: true,
            title:"Agregar Nueva Referencia de Tela",
            autoOpen: true,
			buttons:{
				'Guardar': function(){
                                     $("#frmNewReference").validate({
                                        onfocusout: false,
                                        onkeyup: false,
                                        wrapper: "ol",
                                        rules: {
                                            reference:{
                                                required:true
                                            }}
                                        });

                                    
                                    
                                    if($("#frmNewReference").valid()){
                                        new_reference( $("#reference").val());
                                        $('#dialog_new_reference').dialog('close');
                                    }
					
				},
                                'Cancelar': function(){
					$('#dialog_new_reference').dialog('close');
				}
			},
            close: function(error, element) {
                $( "#dlgErrors" ).html("");
            }
        });
        
    });
    
        
   
});


function new_reference( name){
        
        $.ajax({
		url: document_root+"admin/rpc/savereference",
		type: "post",
		dataType: "json",
                async:false,
		data: ({
			name: name
		}),
		success: function(data) {
                     if(data==true){
                         alert("La referencia de tela ha sido creada exitosamente");
                         load_selectbox();
                    }else{
                          alert("Error al guardar la referencia.")
                    }
                    
               
                   
		}
        });
    }
    
    
function load_selectbox(){
        
    $("#selectbox_reference").load(document_root+"admin/rpc/loadselectboxreferencecloth",{

    },
    function(){
         //AUTOCOMPLETER COMBOBOX
     $( "#cloth_id" ).combobox();
        $( "#cloth_id" ).rules("add",{
            required: true
        })
        
    });
}