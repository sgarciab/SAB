$(document).ready(function(){
	
    $("#frmSearchRoll").validate({
        onfocusout: false,
        onkeyup: false,
        wrapper: "ol",
        rules: {
            filter:{
                required:true
            }
        }
    });
    
    
    $("#btnFilter").click(function(){
        
        $('.rolls_container').html('');
        
        if($("#frmSearchRoll").valid())
        {

            var id = $('#filter').val();

            $('.rolls_container').load(document_root + 'admin/rpc/loadrolls',{
                id: id
            },function() {

                if($('#table-rolls').length>0){        
                    $('#table-rolls').dataTable( {
                        "bPaginate": false,
                        "bLengthChange": false,
                        "bInfo": false,
                        "bFilter": false,
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
                                    {"sWidth":"10%", "bSortable":false},
                                    {"sWidth":"20%", "bSortable":false},
                                    {"sWidth":"20%", "bSortable":false},
                                    {"sWidth":"10%", "bSortable":false},
                                    {"sWidth":"20%", "bSortable":false},
                                    {"sWidth":"10%", "bSortable":false},
                                    {"sWidth":"10%", "bSortable":false},
                                    {"sWidth":"10%", "bSortable":false},
                                    {"sWidth":"10%", "bSortable":false},
                                    {"sWidth":"30%", "bSortable":false}
                                ]
                    });	
                }

            }); 
        }
    });
});