$(document).ready(function() {

    if ($('#table-returns').length > 0) {

        $('#table-returns').dataTable({
            "sDom": '<"H"Tfr>t<"F"pi>',
            "oTableTools": {
                "sSwfPath": document_root + "media/swf/dataTables/copy_cvs_xls_pdf.swf",
                "aButtons": [
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

    $('[id^="return_"]').live('click', function() {
        $('#detailslist').load(document_root + "admin/rpc/loadreturndetails", {
            return_id: $(this).attr('opt')
        },
        function() {

            if ($('#table-details').length > 0) {

                $('#table-details').dataTable({
                    "sDom": '<"H"Tfr>t<"F"pi>',
                    "oTableTools": {
                        "sSwfPath": document_root + "media/swf/dataTables/copy_cvs_xls_pdf.swf",
                        "aButtons": [
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
    });

});