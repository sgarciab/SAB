/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 * 
 */

$(document).ready(function(){
        $('.divformBugs').hide();
        $('.menuBugs').hide();
        $('.menuBugs').show('slow');


    
    
    

        
        //Date pickers
        $("#fechaAparicion").datepicker({
            changeMonth: true,
            changeYear: true,
            //minDate: "0",
            yearRange: "-80+0",
            dateFormat: "yy-mm-dd",
            dayNamesMin: [ "Do", "Lu", "Ma", "Mi", "Ju", "Vi", "Sa" ],
            monthNamesShort: [ "Ene", "Feb", "Mar", "Abr", "May", "Jun", "Jul", "Ago", "Sep", "Oct", "Nov", "Dic" ]          
        });
        
        $("#fechaRep").datepicker({
            changeMonth: true,
            changeYear: true,
            //minDate: "0",
            yearRange: "-80+0",
            dateFormat: "yy-mm-dd",
            dayNamesMin: [ "Do", "Lu", "Ma", "Mi", "Ju", "Vi", "Sa" ],
            monthNamesShort: [ "Ene", "Feb", "Mar", "Abr", "May", "Jun", "Jul", "Ago", "Sep", "Oct", "Nov", "Dic" ]          
        });
        
    /*VALIDATIONS*/
    $("#formBugs").validate({
        onfocusout: false,
        onkeyup: false,
		wrapper: "label",
		rules: {
			nombre:{
				required:true,
				textOnly: true,
                                maxlength: 50
			},
			descripcion:{
				required:true,
				textOnly: true,
                                maxlength: 300 
               
			},
			fechaAparicion:{
				required:true
                        },
                        fechaRep:{
				required:true
               							
			},
                        imagen:{
                                required:true
                        }
            
                }
	});
        
        
        $("#save").click(function(){
            
            if($("#formBugs").valid()){
                $('#save').attr('disabled',true);  
                $("#formBugs").submit(); 

            }
        }); 
        
        $('.proyectoMenu').click(function(){
            var id= $(this).attr('id');
            $('#menuAction').hide('slow');

            if ($('input[name=action]:checked').val()=='create') {

                $('#proyectoid').val(id);

                $('.menuBugs').hide('slow', function () {
                    $('.divformBugs').show('slow');
                });
            }
            else{

                $('#chooseBug').load(document_root + 'main/loadbugs', {
                    servicioid: id
                },function (){

                    $('.menuBugs').hide('slow', function () {
                        $('#chooseBug').show('slow');
                    });
                    $('#backButtonE').click(function(){
                        $('#menuAction').show('slow');
                       $('#chooseBug').hide('slow',function(){
                            $('.menuBugs').show('slow');
                        });
                    });

                    $('.bugsMenu').each(function(){
                            $(this).click(function(){
                                var id=$(this).attr('id');

                                $.ajax({
                                    url:  document_root+'main/loadbug',
                                    type: "POST",
                                    data: { id : id },
                                    success:function(data){
                                        data=$.parseJSON(data);
                                        $('#bugid').val(data.id);
                                        $('#nombre').val(data.nombre);
                                        $('#descripcion').val(data.descripcion);
                                        $('#fechaAparicion').val(data.fechaAparicion);
                                        $('#fechaRep').val(data.fechaReporte);
                                        $('#mostrarimagen').attr('src',data.imagen);
                                        $('#mostrarimagen').show();

                                        $('.chooseBug').hide('slow', function () {
                                            $('.divformBugs').show('slow');
                                        });

                                    }
                                });
                            });
                    });

                });

            }


        });
        
        $('#backButton').click(function(){
            $('#menuAction').show('slow');
            $('.divformBugs').hide('slow',function(){
                $('.menuBugs').show('slow');
            });
            $('#bugid').val('');
            $('#nombre').val('');
            $('#descripcion').val('');
            $('#fechaAparicion').val('');
            $('#fechaRep').val('');
            $('#mostrarimagen').attr('src','');
            $('#mostrarimagen').hide();
        });
        
        
        
        
       

});