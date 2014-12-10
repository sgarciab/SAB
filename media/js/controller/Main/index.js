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
            $('#proyectoid').val(id);
            $('.menuBugs').hide('slow',function(){
                $('.divformBugs').show('slow');
            });
        });
        
        $('#backButton').click(function(){
            $('.divformBugs').hide('slow',function(){
                $('.menuBugs').show('slow');
            });
        });
        
        
        
        
       

});