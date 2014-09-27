$(document).ready(function(){
	if($('#table-profiles').length>0){        
		$('#table-profiles').dataTable( {
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
						{"sWidth":"55%", "bSortable":true},
						{"sWidth":"20%", "bSortable":true},
						{"sWidth":"25%", "bSortable":false}
					]
		});	
	}
	
	$('[id^="deactivate_"]').live('click',function(){
			var answer = confirm("Desea "+$(this).attr('opt')+" el Perfil?")
			if (answer){				
				$.ajax({
					url: document_root+'profile/deactivate',
					type: "post",
					dataType: 'json',
					data: {						
						id: this.id.replace("deactivate_","")
					},
					success: function(data){
						if(data['saved']){
							window.location = document_root+"profile/"
						}
					}
				});
			}
	});	
	
});