$(document).ready(function() {
		

    
    $( "#tabs" ).tabs({ 
    });
    
    $('#btn_invoice').bind('click',function(){
	
		$('#btn_invoice').hide();
		$('#ajax_loader').show();
		var create_date=$('#create_date').val();
		var status=$('#status').val();
		var number=$('#hdn_number').val();
		var sale_id=$('#sale_id').val();
		var sale_category_value=$('#sale_category_value').val();
		if(confirm('Desea imprimir la factura?')){
			$('#invoice_print_container').load(document_root+"/sales/invoice/print",
				{
					sale_id:sale_id
				},
				function(){
					$('#ajax_loader').hide();
					$('#btn_invoice').show();
					
						var elemento_imprimir=$('#invoice_print_container');
						var ventimp=window.open(' ','popimpr');
						ventimp.document.write(elemento_imprimir.html());
						ventimp.document.close();
						ventimp.print();
						ventimp.close();
                        
                        if(confirm('Desea imprimir el detalle de la factura?')){

                            $('#invoice_print_detail_container').load(document_root+"/sales/invoice/printdetails",
                            {
                                sale_id:sale_id
                            },
                            function(){

                                var elemento_imprimir=$('#invoice_print_detail_container');
                                var ventimp=window.open(' ','popimpr');
                                ventimp.document.write(elemento_imprimir.html());
                                ventimp.document.close();
                                ventimp.print();
                                ventimp.close();
                                window.location = document_root+"admin/invoice/index"

                            });
                        }
                        else
                        {
                            alert('El detalle de la factura no ha sido impresa');
                            $('#ajax_loader').hide();
                            $('#btn_invoice').show();
                            //window.location = document_root+"admin/invoice/index"
                        }

					});
					

			}
			else
				{			
					alert('La factura no ha sido impresa');
                    $('#ajax_loader').hide();
                    $('#btn_invoice').show();
				}
			

		
	});

	
});