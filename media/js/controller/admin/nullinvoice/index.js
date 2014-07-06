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
     $("#dialog_wrong_date").hide();
    $('#btnSearch').bind('click', function(){
       
    
        if (Date.parse($('#since_date').val()) > Date.parse($('#to_date').val())) {
//            alert("La fecha 'Final' debe ser mayor a la 'Inicial'")
//            return false;
   $("#dialog_wrong_date").dialog({
                        width: 400,
                        modal: true,
                        autoOpen: true,
                        title: "Facturas Anuladas",
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
            do_search();
        }
    });

    function do_search()
    {
        $('#container_null_invoices').html('');
        
        $('#container_null_invoices').load(document_root + 'admin/rpc/loadnullinvoicelist',{
            from: $("#since_date").val(),
            to: $("#to_date").val()
        },function() {
  
            if($('#table-null-invoices').length>0){
                $('#table-null-invoices').dataTable( {
                     "sDom" : '<"H"Tfr>t<"F"pi>',
                    "oTableTools": {
                        "sSwfPath": document_root+"media/swf/dataTables/copy_cvs_xls_pdf.swf",
                        "aButtons": [
                        {
                            "sExtends": "pdf",
                            "mColumns": [ 0, 1, 2, 3, 4 ],
                            "sFileName":"HistorialFacturasAnuladas.pdf",
                            "sPdfOrientation": "landscape",
                            "sPdfSize": "letter",
                            "sPdfMessage": "Historial de Facturas Anuladas"
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
                    }
                });	
            }
    
        });
    }
    
    
    
    
    
		
	
});