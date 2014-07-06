$(document).ready(function() {
    /*VALIDATIONS*/
    $("#frmReportCustomers").validate({
        onfocusout: false,
        onkeyup: false,
        wrapper: "ol",
        rules: {
        }
    });
    var cont = 0;
    $("#seller option").each(function() {
        cont++;
    });

    if (cont > 1) {
        //AUTOCOMPLETER COMBOBOX
        $("#seller").combobox();
        //$("#btncombobox").val('Todos');
    } else {
        $("#selectbox_seller").html("No existen vendedores registrados.");
        $("#btnLoad").attr("disabled", "disabled");
    }

    //LISTENER
    $("#btnLoad").click(function() {
        if ($("#frmReportCustomers").valid()) {
            $("#selectbox_seller ol label").removeAttr("style");
            $("#selectbox_seller span").removeAttr("style");
            $("#container_results").html("");
            $('#btnLoad').hide();
            $('#ajax_loader').show();
            load_content($("#seller").val(), $("#status_v").val());
        } else {
            //VALID OR ERROR_VALIDATION CSS TO CLOTH_ID
            if ($("#seller").hasClass('valid')) {
                $("#selectbox_seller ol label").removeAttr("style");
                $("#selectbox_seller span").removeAttr("style");
            } else {
                $("#selectbox_seller ol label").attr("style", "display: block;position:relative;top:20px;");
                $("#selectbox_seller span").attr("style", "position:relative;top:-18px");
                $("#selectbox_seller span a span").removeAttr("style");

            }
        }
    });






});



function load_content(value, status) {

    $("#container_results").load(document_root + "admin/report/loadreportcustomers", {
        value: value,
        status: status
    },
    function() {
        $('#btnLoad').show();
        $('#ajax_loader').hide();
        if ($('#table-results').length > 0) {
            $('#table-results').dataTable({
                "sDom": '<"H"Tfr>t<"F"pi>',
                "oTableTools": {
                    "sSwfPath": document_root + "media/swf/dataTables/copy_cvs_xls_pdf.swf",
                    "aButtons": [
                        {
                            "sExtends": "xls",
                            "sFileName": "ReporteClientes.xls"
                        },
                        {
                            "sExtends": "pdf",
                            "sFileName": "ReporteClientes.pdf",
                            "sPdfOrientation": "landscape",
                            "sPdfSize": "letter",
                            "sPdfMessage": "Reporte de Clientes"
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
                    {"sWidth": "10%", "bSortable": true},
                    {"sWidth": "20%", "bSortable": true},
                    {"sWidth": "20%", "bSortable": true},
                    {"sWidth": "10%", "bSortable": true},
                    {"sWidth": "10%", "bSortable": true},
                    {"sWidth": "20%", "bSortable": true}

                ]
            });
        }

    });
}