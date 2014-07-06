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
  
    $("#frmConsultCreditNote").validate({
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
            }
                               
        },
        messages:{
            name_hd:{
                //required: "Identificaci&oacute;n/Nombre obligatorio",
                remote: "Identificación o Nombre de Cliente ingresado no existe en el sistema."
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
    
       $("#dialog_wrong_date").hide();
    $('#btnSearch').bind('click', function(){
		
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
                        title: "Administración de Notas de Crédito",
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
    
            if($("#frmConsultCreditNote").valid()){
             
                do_search();
               
            }
            else
            {
                $('#container_credit_notes').html('');
            }    
        }
    });

    function do_search()
    {
        if($("#frmConsultCreditNote").valid()){
        //              alert($('#seller_id').val());
        $('#container_credit_notes').html('');
        
        $('#container_credit_notes').load(document_root + 'sales/return/loadcreditnotes',{
      
            from: $("#since_date").val(),
            to: $("#to_date").val(),
            //seller_id: $('#seller_id').val(),
            document_id: $('#name2').val()
            //,
            //product_code: $('#product_code').val()
            
        },function() {
  
            if($('#table-report-credit_notes').length>0){
                $('#table-report-credit_notes').dataTable( {
                    "sDom" : '<"H"Tfr>t<"F"pi>',
                    "oTableTools": {
                        "sSwfPath": document_root+"media/swf/dataTables/copy_cvs_xls_pdf.swf",
                        "aButtons": [
                        {
                            "sExtends": "pdf",
                            "mColumns": [ 0, 1, 2, 3, 4 ],
                            "sFileName":"ReporteNotasCredito.pdf",
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
                        "sWidth":"20%", 
                        "bSortable":true
                    },

                    {
                        "sWidth":"15%", 
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
                        "sWidth":"10%", 
                        "bSortable":true
                    },

                    {
                        "sWidth":"10%", 
                        "bSortable":true
                    },

                   
                    ]
                });	
                 //$('#total_label').text($('#total_1').val());
                 
            }
            
           
    
        });
        //$('#name2').val(name2_tmp);  
//        $('#name2').val('Todos');
        
			//$('#product_code').val('Todos');
       
    }
}

});