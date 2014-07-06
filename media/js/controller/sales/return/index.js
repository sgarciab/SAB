$(document).ready(function() {

    $('#btn_accept').button();

    autocompleter_sales();

    $("#frmReturn").validate({
        onfocusout: false,
        onkeyup: false,
        wrapper: "ol",
        rules: {
            sale_id: {
               // min: 1,
                //required: true,
                digits: true

            },
                          invoice:{
                            required:true,
                            digits:true,
                            min:1
        }

        },
        messages: {
            sale_id: {
                required: 'Debe digitar y seleccionar un elemento de la lista'
            }
        }

    });
$('#invoice').focus();
    $('#btn_accept').live('click', function() {
          $('#sale_id').val($('#invoice').val());
        $('#return_list').empty();
        if ($("#frmReturn").valid())
        {
            $('#return_list').load(document_root + "sales/return/loadsalesdetail", {
                sale_id: $('#sale_id').val()

            });
        }
        $('#sale_id').val('');
    });

    /* AUTOCOMPLETER  SALES*/
    function autocompleter_sales() {
        $("#invoice").autocomplete(document_root + "sales/return/autocompletersale", {
            max: 16,
            scroll: false,
            matchContains: true,
            minChars: 1,
            formatItem: function(row) {
                if (row[0] != '0') {
                    return row[1];
                }
                else {
                    return 'No existen resultados';
                }
            }
        }).result(function(event, row) {
            if (row[0] != '0') {
                $('#invoice').val(row[1]);
                $('#sale_id').val(row[0]);
            } else
            {
                $('#invoice').val('');
                alert('No existe la factura solicitada');

            }
        });
    }

});


function validate_number2(evt, element) {
    var theEvent = evt || window.event;
    var key = theEvent.keyCode || theEvent.which;
    key = String.fromCharCode(key);
    var regex = /[0-9]|[\b]/;
    if (element.value < 1) {
        element.value = "";
    }
    if (!regex.test(key)) {
        theEvent.returnValue = false;
        if (theEvent.preventDefault)
            theEvent.preventDefault();
    }
}


