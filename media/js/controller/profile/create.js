$(document).ready(function(){
	
	$('#save').button();

    /*VALIDATIONS*/
    $("#frmCreateProfile").validate({
        onfocusout: false,
        onkeyup: false,
        wrapper: "label",
        rules: {
            name:{
                required:true,
                maxlength: 50,
               // minlength: 3,
                remote: {
                    url: document_root+"rpc/check_profilename",
                    type: "POST",
                    data:{
                        username: function(){
                            return $('#name').val();
                        },
                        id: function(){
                            return $('#id').val();
                        }
                    }
                }
            },
            status:{
                required:true
            }
        },
        messages:{
            name:{
				required: "Nombre obligatorio",
                remote:'Perfil se encuentra en uso.'
            }
        },
			submitHandler: function (form) {
               $('#save').attr('disabled','disabled'); 
               form.submit();
            }
    });

    $('[id^="element_"]').each(function(){
        $(this).bind('click',function(){
            var level=$(this).attr('level');
            var id=$(this).attr('id');
            //alert(id);
            if($('#'+id).is(':checked')){
                val = true;
            }else{
                val = false;
            }
                
            if(level=='1'){
                $('[id^="'+id+'_"]').each(function(){
                    $(this).attr('checked',val);
                });
            }
                
            if(level=='2'){
                if($('[id^="'+id+'_"]').size()==0){
                    $(this).attr('checked',val);
                    //alert(id);
                    if(check_clicked_any_action_level_2(id)){
                        $('#'+id.substring(0,10)).attr('checked',true);
                    }else
                        $('#'+id.substring(0,10)).attr('checked',val); 
                }
                    
               
                $('[id^="'+id+'_"]').each(function(){
                    $(this).attr('checked',val);
                    if(check_clicked_any_action_level_2(id)){
                        $('#'+id.substring(0,10)).attr('checked',true);
                    }else
                        $('#'+id.substring(0,10)).attr('checked',val);
                });
            }
                
            if(level=='3'){
                $('#'+id).each(function(){
                    
                    $(this).attr('checked',val);
                    
                    if(check_clicked_any_action_level_3(id)){
                        $('#'+id.substring(0,13)).attr('checked',true);
                        $('#'+id.substring(0,10)).attr('checked',true);
                    }else{
                        $('#'+id.substring(0,13)).attr('checked',val);
                       
                        
                        if(!check_clicked_any_action_level_2(id)){
                            $('#'+id.substring(0,10)).attr('checked',val);
                        }
                    }
                });
            }
        });
    }); 
});

function check_clicked_any_action_level_2(id){
    var confirm = false;
    $('[id^="'+id.substring(0,10)+'_"]').each(function(){
        if($(this).is(':checked')){
            confirm = true;
        }
    })
    return confirm;
}

function check_clicked_any_action_level_3(id){
    var confirm = false;
    $('[id^="'+id.substring(0,13)+'_"]').each(function(){
        if($(this).is(':checked')){
            confirm = true;
        }
    })
    return confirm;
}


