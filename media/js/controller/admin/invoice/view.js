$(document).ready(function() {
     $('#dialog_print_bill').hide();
    $( "#tabs" ).tabs({ 
    });
                    $('#btn_invoice_detail').bind('click',function(){
                        // alert('ss'+$('#hdn_number').val());
						$('#invoice_print_container').load(document_root+"sales/sale/print",
						{
                           
                          
							sale_id:$('#hdn_number').val()
						},
						function(){
                             $("#dialog_print_bill").dialog({
                                        width: 400,
                                        modal: true,
                                        autoOpen: true,
                                        title: "Imprimir Factura",
                                        close: function(error, element) {
                                            // window.top.location.href = document_root+'sales/sale/index';
                                        },
                                        buttons: {
                                            'Imprimir': function() {
                                                var elemento_imprimir = $('#invoice_print_container');
                                                var ventimp = window.open(' ', 'popimpr');
                                                ventimp.document.write(elemento_imprimir.html());
                                                ventimp.document.close();
                                                ventimp.print();
                                                ventimp.close();
                                                window.top.location.href = document_root + 'admin/invoice/index';
                                            },
                                            'Cancelar': function() {
                                                 $("#dialog_print_bill").dialog('close');
                                                //window.top.location.href = document_root + 'sales/return/index';
                                                //alert('La factura no ha sido impresa');
                                            }
                                        }
                                    });
                                    
                                    
                         
						});
                    });
});

	
