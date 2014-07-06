$(document).ready(function() {

    $('#btnSearch').button();
    $('#since_date').datepicker({
        dateFormat: "yy/mm/dd",
        showOn: "button",
        changeMonth: true,
        changeYear: true,
        buttonImage: "../../media/images/calendar.gif",
        buttonImageOnly: true,
        maxDate: $("#hdnCurrentDate").val()
    });
    $('#to_date').datepicker({
        dateFormat: "yy/mm/dd",
        showOn: "button",
        changeMonth: true,
        changeYear: true,
        buttonImage: "../../media/images/calendar.gif",
        buttonImageOnly: true,
        maxDate: $("#hdnCurrentDate").val()
    });

    //do_search();
    $('#dialog_wrong_date').hide();
    $('#btnSearch').bind('click', function() {


        if (Date.parse($('#since_date').val()) > Date.parse($('#to_date').val())) {

//            function(){
            $("#dialog_wrong_date").dialog({
                width: 400,
                modal: true,
                autoOpen: true,
                title: "Historial de Movimientos",
                close: function(error, element) {
                    // window.top.location.href = document_root+'sales/sale/index';
                },
                buttons: {
                    'Aceptar': function() {
                        $("#dialog_wrong_date").dialog('close');

                    }
                }
            });



//						}




//            alert("La fecha 'Final' debe ser mayor a la 'Inicial'")
//            return false;
        }
        else
        {
            $('#ajax_loader').show();
            //do_search();
            // $('#movements').html('');
            //$('#ajax_loader').show();


            $('#movements').load(document_root + 'admin/movement/load_movements', {
                from: $("#since_date").val(),
                to: $("#to_date").val()
            })
            $('#movements').show();
            $('#ajax_loader').hide();


        }
    });

});