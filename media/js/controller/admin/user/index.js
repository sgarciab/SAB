$(document).ready(function(){
    $("#dialog_deactivate").hide();
	if($('#table-users').length>0){        
		$('#table-users').dataTable( {
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
						{"sWidth":"30%", "bSortable":true},
						{"sWidth":"10%", "bSortable":false},
						{"sWidth":"10%", "bSortable":true},
						{"sWidth":"15%", "bSortable":true},
						{"sWidth":"10%", "bSortable":true},
						{"sWidth":"25%", "bSortable":false}
					]
		});	
	}
    
	
	$('[id^="deactivate_"]').live('click',function(){
         var prueba = this.id.split('_');
            count = prueba[1];
        $('#user_namel').text($('#username'+count).text());
        $('#option_user').text($(this).attr('opt'));
        $("#dialog_deactivate").dialog({
            width: 400,
            modal: true,
            autoOpen: true,
            title: $(this).attr('opt')+' Usuario',
            close: function(error, element) {
                window.top.location.href = document_root + 'admin/user/index';
            },
            buttons: {
                'Aceptar': function() {
                    $.ajax({
					url: document_root+'admin/user/deactivate',
					type: "post",
					dataType: 'json',
					data: {						
						id: count
					},
					success: function(data){
						if(data['saved']){
							window.top.location.href = document_root + 'admin/user/index';
						}
					}
                    });
                },
                'Cancelar': function() {
                    window.top.location.href = document_root + 'admin/user/index';
                }
            }
        });
        
        
//			var answer = confirm("Desea "+$(this).attr('opt')+" el Usuario?")
//			if (answer){				
//				$.ajax({
//					url: document_root+'admin/user/deactivate',
//					type: "post",
//					dataType: 'json',
//					data: {						
//						id: this.id.replace("deactivate_","")
//					},
//					success: function(data){
//						if(data['saved']){
//							window.location = document_root+"admin/user/"
//						}
//					}
//				});
//			}
	});	
	
});