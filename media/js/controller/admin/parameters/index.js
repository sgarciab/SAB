$(document).ready(function() {
    $('#save').button();
    $("#form_parameters").validate({
        onfocusout: false,
        onkeyup: false,
        wrapper: "ol",
        rules: {
            iva: {
                required: true,
                digits: true,
                max: 100

            },
            city: {
                //required:true
            },
            autorization_code: {
                required: true,
                maxlength: 15
            }
        },
        submitHandler: function(form) {
            $('#save').attr('disabled', 'disabled');
            form.submit();
        }

    });




});

