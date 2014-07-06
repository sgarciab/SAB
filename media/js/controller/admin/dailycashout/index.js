$(document).ready(function() {
    $('#save').button();
    $('#total_sales').attr('onfocus', 'blur()');
    $('#initial_cash').attr('onfocus', 'blur()');
    $('#total_cash_plus_initial').attr('onfocus', 'blur()');
    $('#total').attr('onfocus', 'blur()');
    $('#calculate').button();
    $("#dialog_null_finalcash").hide();

    $("#form_dailycashout").validate({
        onfocusout: false,
        onkeyup: false,
        wrapper: "ol",
        rules: {
            total_cash: {
                priceNumber: true,
                number: true,
                required: true
                        //min: 0
            },
//            alerts_total_cash: {
//                required: true
//                        //min:0
//            },
            total_pesos: {
                priceNumber: true,
                number: true
                        //min: 0
                        //required:true

            },
            final_cash: {
                priceNumber: true,
                number: true
                        //min: 0
            },
//            alerts_final_cash: {
//                required: true
//            },
            paycheck: {
                priceNumber: true,
                number: true
                        //min: 0
                        //required:true
            },
            voucher: {
                priceNumber: true,
                number: true
                        // min: 0
                        //required:true
            },
            total: {
                priceNumber: true,
                number: true
                        //                ,
                        //                required:true
            },
            observation: {
                //maxlength: 255
                required: true
            }
            //            ,
            //            alerts_observation:{
            //maxlength: 255
            //                required:true
            //            }

        },
        messages: {
            total_cash: {
                required: "Efectivo en D&oacute;lares Obligatorio",
                priceNumber: 'Este campo admite s&oacute;lo dígitos. Usar punto (.) para separar decimales.'
            },
//            alerts_total_cash: {
//                required: "Efectivo en D&oacute;lares Obligatorio"
//                        //priceNumber: 'Este campo admite s&oacute;lo dígitos. Usar punto (.) para separar decimales.'
//            },
            total_pesos: {
                required: "Efectivo en Pesos Obligatorio",
                priceNumber: 'Este campo admite s&oacute;lo dígitos. Usar punto (.) para separar decimales.'
            },
            final_cash: {
//                min: "Caja para el siguiente d&iacute;a obligatorio"
//                        //Caja para el siguiente d&iacute;a obligatorio",
                priceNumber: 'Este campo admite s&oacute;lo dígitos. Usar punto (.) para separar decimales.'
//                        //max: "Valor debe ser menor o igual a Efectivo en Dólares"
            },
//            alerts_final_cash: {
//                required: "Valor debe ser menor o igual a Total en Caja"
//                        //Caja para el siguiente d&iacute;a obligatorio",
//                        //priceNumber: 'Este campo admite s&oacute;lo dígitos. Usar punto (.) para separar decimales.',
//                        //max: "Valor debe ser menor o igual a Efectivo en Dólares"
//            },
            paycheck: {
                priceNumber: 'Este campo admite s&oacute;lo dígitos. Usar punto (.) para separar decimales.'
            },
            voucher: {
                priceNumber: 'Este campo admite s&oacute;lo dígitos. Usar punto (.) para separar decimales.'
            },
            observation: {
                required: 'Justificaci&oacute;n Obligatoria.'
            },
            //            alerts_observation:{
            //                required: 'Cierre de Caja no Cuadró, por favor ingrese una Justificaci&oacute;n.'
            //            },
            total: {
                //required: 'Total en caja debe ser calculado.'
            }

        },
        submitHandler: function(form) {
            $('#save').attr('disabled', 'disabled');


            //dialog_null_finalcash
            if ($('#final_cash').val() == '0.00')
            {
                $("#dialog_null_finalcash").dialog({
                    width: 400,
                    modal: true,
                    autoOpen: true,
                    title: "Cierre de Caja",
                    show: {
                        effect: "size",
                        duration: 1000
                    },
                    close: function(error, element) {
                        //window.top.location.href = document_root+'sales/sale/index';
                        $('#save').attr('disabled', false);
                    },
//												hide: {
//												  effect: "explode",
//												  duration: 1000
//												},
                    buttons: {
                        'Continuar': function() {
                            form.submit();
                        },
                        'Cancelar': function() {
                            $('#save').attr('disabled', false);
                            $("#dialog_null_finalcash").dialog('close');
                        }
                    }
                });

            } else
            {
                form.submit();
            }


        }
    });

});

