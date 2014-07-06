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
                        title: "Packing List",
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
         
            if($("#frmReportPackingList").valid()){
             
                do_search();
               
            }
            else
            {
                $('#container_report_packinglist').html('');
            }    
        }
    });

    function do_search()
    {
        if($("#frmReportPackingList").valid()){
        //              alert($('#seller_id').val());
        $('#container_report_packinglist').html('');
        
        $('#container_report_packinglist').load(document_root + 'admin/report/loadreportpackinglist',{
      
            from: $("#since_date").val(),
            to: $("#to_date").val(),
//            seller_id: $('#seller_id').val(),
//            document_id: $('#name2').val(),
//            product_code: $('#product_code').val()
            
        },function() {
//            if($('#table-report-packinglist').length>0 && $("#table-report-packinglist").find("tr:last td").length == 6){
                $('#table-report-packinglist').dataTable( {
                    "sDom" : '<"H"Tfr>t<"F"pi>',
                    "oTableTools": {
                        "sSwfPath": document_root+"media/swf/dataTables/copy_cvs_xls_pdf.swf",
                        "aButtons": [
                        {
                            "sExtends": "pdf",
                            "mColumns": [ 0, 1, 2, 3],
                            "sFileName":"ReportePackingList.pdf",
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
                        "sWidth":"19%", 
                        "bSortable":true
                    },

                    {
                        "sWidth":"25%", 
                        "bSortable":true
                    },

                    {
                        "sWidth":"20%", 
                        "bSortable":true
                    },

                    {
                        "sWidth":"10%", 
                        "bSortable":true
                    },

                    {
                        "sWidth":"26%", 
                        "bSortable":false
                    }
                    ]
                });	
//                 $('#total_label').text($('#total_1').val());
                 
//            }
            
        });
       
    }
}

});