$(document).ready(function(){
     /*VALIDATIONS*/
    $("#frmCreateOrder").validate({
        onfocusout: false,
        onkeyup: false,
        wrapper: "ol",
        rules: {
            customer_id:{
                required:true
            },
			cloth_id_1:{
                required:true
              
            },
			unit_1 :{
                required:true
            },
            amount_1:{
                required:true,
                number:true
            },
            status:{
                required:true
            },
			delivery_date:{
				required: true,
				date: true
			}
			
        }
    });
	
	var nextinput = $('#hdn_num_inputs').val();
	
	$('#container_new_detail').click(function(){
                
		nextinput++;
		var container = '<div class="prepend-2 span-20 append-2 line last" id="order_detail_plus_'+nextinput+'"></div>';
		$("#order_detail_plus").append(container);
		$('#order_detail_plus_'+nextinput).load(document_root+"admin/order/loadorderinput",{
			input_id:nextinput
		},
		function(){
                        $('#hdn_num_inputs').val(nextinput);
			$("#cloth_id_"+nextinput).combobox();
			$( "#cloth_id_"+nextinput).rules("add",{
				required: true
			});
			$( "#amount_"+nextinput).rules("add",{
				required: true,
				number:true
			});

			$('[id^="remove_reference_"]').each(function(){
                                $(this).unbind('click');
				$(this).bind('click',function(){

                                        nextinput --;
					var id = this.id.replace("remove_reference_","");
					$("#order_detail_plus_"+id).remove();
                                        $('#hdn_num_inputs').val(nextinput);
				});
                                
			});
                        
                        
		});
                
	}); 
	

    //AUTOCOMPLETER COMBOBOX
     $( "#customer_id" ).combobox();
     

     $('[id^="cloth_id_"]').each(function(){
            $(this).combobox();
        });

        $('[id^="remove_reference_"]').each(function(){
                $(this).unbind('click');
                $(this).bind('click',function(){

                        nextinput --;
                        var id = this.id.replace("remove_reference_","");
                        $("#order_detail_plus_"+id).remove();
                        $('#hdn_num_inputs').val(nextinput);
                });

        });

	 
	 $("#delivery_date").datepicker({
        showOn: "button",
        buttonImage: document_root+"media/images/calendar.gif",
        buttonImageOnly: true,
        dateFormat:"dd/mm/yy",
		minDate: new Date()
    });
	 
	 if($("input#id").val()==""){
		 $("input#btncombobox").val('- Seleccione -');
	 }
	 

    //LISTENER
      $("#btnCreate").click(function(){
          
        if($("#frmCreateOrder").valid()){
            $("#frmCreateOrder").submit();
        }else{
            //VALID OR ERROR_VALIDATION CSS TO CLOTH_ID
            if($("#customer_id").hasClass('valid')){
                $("#selectbox_customer_id ol label").removeAttr("style");
                $("#selectbox_customer_id span").removeAttr("style");
            }else{
                $("#selectbox_customer_id ol label").attr("style","display: block;position:relative;top:20px;");
                $("#selectbox_customer_id span").attr("style","position:relative;top:-18px");
                $("#selectbox_customer_id span a span").removeAttr("style");
           
            }
	
            $('[id^="cloth_id_"]').each(function(){
                    var id = this.id.replace("cloth_id_","");
                    if($(this).hasClass('valid')){
                        $("#selectbox_cloth_id_"+id+" ol label").removeAttr("style");
                        $("#selectbox_cloth_id_"+id+" span").removeAttr("style");
                    }
                    else
                    {
                        $("#selectbox_cloth_id_"+id+" ol label").attr("style","display: block;position:relative;top:20px;");
                        $("#selectbox_cloth_id_"+id+" span").attr("style","position:relative;top:-18px");
                        $("#selectbox_cloth_id_"+id+" span a span").removeAttr("style");
                    }

             });
   
        }
    }); 
       
   
});

