$(document).ready(function(){
    $('#btnSearch').button();
    $('#since_date').datepicker({
        dateFormat:"yy/mm/dd",
        showOn: "button",
        changeMonth: true,
        changeYear: true,
        buttonImage: "../../media/images/calendar.gif",
        buttonImageOnly: true,
        maxDate:$("#hdnCurrentDate").val()
    });
    $('#to_date').datepicker({
        dateFormat:"yy/mm/dd",
        showOn: "button",
        changeMonth: true,
        changeYear: true,
        buttonImage: "../../media/images/calendar.gif",
        buttonImageOnly: true,
        maxDate:$("#hdnCurrentDate").val()
    });
    
    
    
    
    $("#frmReportSaleList").validate({
        onfocusout: false,
        onkeyup: false,
        wrapper: "label",
        rules: { 
            name_hd:{
//                required: true,
                remote: {
                    url: document_root+"admin/report/consultcustomer",
                    type: "POST",
                    async: false,
                    data:{
                        document_id: function(){
                            return $('#name_hd').val();
                        }
                    }
                }
            },
                     product_hd:{
                //required: true,
                remote: {
                    url: document_root+"admin/report/check_productid",
                    type: "POST",
                    async: false,
                    data:{
                        product_code: function(){
                            return $('#product_hd').val();
                        }
                    }
                }
            }
                    
        },
        messages:{
            name_hd:{
                //required: "Identificaci&oacute;n/Nombre obligatorio",
                remote: "Identificación o Nombre de Cliente ingresado no existe en el sistema."
            },
                     product_hd:{
                //required: "Identificaci&oacute;n/Nombre obligatorio",
                remote: "Código de producto no existe en el sistema."
            }
        }
    });
    
    autocompleter_customers_document();
    
    
    
    function autocompleter_customers_document(){
        $("#name2").autocomplete(document_root+"admin/customer/autocompletercustomerdocument",{
            max: 16,
            scroll: false,
            matchContains:true,
            minChars: 3,
           
            formatItem: function(row) {
                if(row[0]!='0'){
                    return row[0]+'  /  '+row[2];
                }
                else{
                    return 'No existen resultados';
                }
            }
        }).result(function(event, row) {
            if(row[0]!='0'){
				
                $('#document').val(row[0]);
            }else
            {
                $('#name2').val('');		
            }
        });
    }
    
    autocompleter_products();
       
       
    function autocompleter_products(){
        $("#product_code").autocomplete(document_root+"admin/product/autocompleterproduct",{
            max: 16,
            scroll: false,
            matchContains:true,
            minChars: 3,
              selectFirst: false,
            formatItem: function(row) {
                if(row[0]!='0'){
                    return row[0]+'  /  '+row[1]+'  /  '+row[2];
                }
                else{
                    return 'No existen resultados';
                }
            }
        }).result(function(event, row) {
            if(row[0]!='0'){
				
                $('#product_code').val(row[1]);
            }else
            {
                $('#product_code').val('');		
            }
        });
	}
    
    
    
    
    $("#dialog_wrong_date").hide();
    
    
    $('#btnSearch').bind('click', function(){
		
		if($('#product_code').val()!='Todos'){
			$('#product_hd').val($('#product_code').val());
		}
		else{
			$('#product_hd').val('');
		}
		if($('#name2').val()!='Todos'){
			
			$('#name_hd').val($('#name2').val());
		}
		else{
			$('#name_hd').val('');
		}
         
        if (Date.parse($('#since_date').val()) > Date.parse($('#to_date').val())) {
//            alert("La fecha 'Final' debe ser mayor a la 'Inicial'")
//            return false;
         $("#dialog_wrong_date").dialog({
                        width: 400,
                        modal: true,
                        autoOpen: true,
                        title: "Ventas Anuladas",
                        close: function(error, element) {
                            // window.top.location.href = document_root+'sales/sale/index';
                        },
                        buttons: {
                            'Aceptar': function() {
                                $("#dialog_wrong_date").dialog('close');

                            }
                        }
                    });
        } 
        else
        {
            //name2_tmp=$('#name2').val();
//            if((($('#name2').val()).toUpperCase())=="TODOS")
//            {
//                $('#name2').val('');  
//               
//            }
//            if((($('#product_code').val()).toUpperCase())=="TODOS")
//            {
//                $('#product_code').val('');  
//               
//            }
            if($("#frmReportSaleList").valid()){
             
                do_search();
               
            }
            else
            {
                $('#container_report_sale').html('');
            }    
        }
    });

    function do_search()
    {
        if($("#frmReportSaleList").valid()){
        //              alert($('#seller_id').val());
        $('#container_report_sale').html('');
        
        $('#container_report_sale').load(document_root + 'admin/report/loadreportsales',{
      
            from: $("#since_date").val(),
            to: $("#to_date").val(),
            seller_id: $('#seller_id').val(),
            document_id: $('#name2').val(),
            product_code: $('#product_code').val()
            
        },function() {
            if($('#table-report-sales').length>0 && $("#table-report-sales").find("tr:last td").length == 7){
                $('#table-report-sales').dataTable( {
                    "sDom" : '<"H"Tfr>t<"F"pi>',
                    "oTableTools": {
                        "sSwfPath": document_root+"media/swf/dataTables/copy_cvs_xls_pdf.swf",
                        "aButtons": [
                        {
                            "sExtends": "pdf",
                            "mColumns": [ 0, 1, 2, 3, 4, 5],
                            "sFileName":"ReporteVentas.pdf",
                            "sPdfOrientation": "landscape",
                            "sPdfSize": "letter",
                            "sPdfMessage": $('.report_title').text()
                           
                        }
                        ]
                    },
                    "bPaginate": true,
                    "bLengthChange": false,
                    "bInfo": true,
                    "sPaginationType": "full_numbers",
                    "oLanguage": {
                        "oPaginate": {
                            "sFirst": "Primera",
                            "sLast": "&Uacute;ltima",
                            "sNext": "Siguiente",
                            "sPrevious": "Anterior"
                        },
                        "sZeroRecords": "No se encontraron resultados",
                        "sInfo": "_START_ - _END_ de _TOTAL_",
                        "sInfoEmpty": "0 - 0 de 0",
                        "sInfoFiltered": "(de _MAX_ en total)",
                        "sSearch": "Buscar:",
                        "sProcessing": "Filtrando.."
                    },
                    "aoColumns": [
                    {
                        "sWidth":"24%", 
                        "bSortable":true
                    },

                    {
                        "sWidth":"25%", 
                        "bSortable":true
                    },

                    {
                        "sWidth":"25%", 
                        "bSortable":true
                    },

                    {
                        "sWidth":"13%", 
                        "bSortable":true
                    },

                    {
                        "sWidth":"13%", 
                        "bSortable":true
                    },
                    {
                        "sWidth":"5%", 
                        "bSortable":true
                    },
					
                    {
                        "sWidth":"5%", 
                        "bSortable":true
                    },
                    ]
                });	
                 $('#total_label').text($('#total_1').val());
                 
            }else{
				 if($('#table-report-sales').length>0 && $("#table-report-sales").find("tr:last td").length == 8){
					      $('#table-report-sales').dataTable( {
                    "sDom" : '<"H"Tfr>t<"F"pi>',
                    "oTableTools": {
                        "sSwfPath": document_root+"media/swf/dataTables/copy_cvs_xls_pdf.swf",
                        "aButtons": [
                        {
                            "sExtends": "pdf",
                            "mColumns": [ 0, 1, 2, 3, 4, 5, 6, 7 ],
                            "sFileName":"ReporteVentas.pdf",
                            "sPdfOrientation": "landscape",
                            "sPdfSize": "letter",
                            "sPdfMessage": $('.report_title').text()
                           
                        }
                        ]
                    },
                    "bPaginate": true,
                    "bLengthChange": false,
                    "bInfo": true,
                    "sPaginationType": "full_numbers",
                    "oLanguage": {
                        "oPaginate": {
                            "sFirst": "Primera",
                            "sLast": "&Uacute;ltima",
                            "sNext": "Siguiente",
                            "sPrevious": "Anterior"
                        },
                        "sZeroRecords": "No se encontraron resultados",
                        "sInfo": "_START_ - _END_ de _TOTAL_",
                        "sInfoEmpty": "0 - 0 de 0",
                        "sInfoFiltered": "(de _MAX_ en total)",
                        "sSearch": "Buscar:",
                        "sProcessing": "Filtrando.."
                    },
                    "aoColumns": [
                    {
                        "sWidth":"24%", 
                        "bSortable":true
                    },

                    {
                        "sWidth":"20%", 
                        "bSortable":true
                    },

                    {
                        "sWidth":"25%", 
                        "bSortable":true
                    },

                    {
                        "sWidth":"13%", 
                        "bSortable":true
                    },

                    {
                        "sWidth":"13%", 
                        "bSortable":true
                    },
                    {
                        "sWidth":"13%", 
                        "bSortable":true
                    },

                    {
                        "sWidth":"5%", 
                        "bSortable":true
                    },
					
                    {
                        "sWidth":"5%", 
                        "bSortable":true
                    },
                    ]
                });	
                 $('#total_label').text($('#total_1').val());
				 }
			}             
        });
       
    }
}

});