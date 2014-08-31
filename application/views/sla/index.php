<?php defined('SYSPATH') or die('No direct script access.'); ?>
<?php echo HTML::style('media/css/jquery-ui-1.10.3.custom.min.css'); ?>
<?php echo HTML::style('media/css/controllers/admin/calendar.css'); ?>
<div class="prepend-2 span-20 append-2 last">
    <h2 class="center">Administraci&oacute;n de SLA's</h2><br>


    <?php echo Form::open(NULL, array('id' => 'frmBusquedaSlas')); ?>

    <div class="span-20 line last">
       <div class="span-4">
            <?php echo Form::label("tiempoRespuesta", "Tiempo de Respuesta:", array('class' => 'right')); ?>
        </div>	
        <div class="span-5 last">
            <?php echo Form::input("tiempoRespuesta", null, array('id' => 'tiempoRespuesta', 'class' => 'span-4')); ?>
        </div>
        
        <div class="prepend-1 span-4">
            <?php echo Form::label("criticidad", "Criticidad:", array('class' => 'right')); ?>
        </div>	
        <div class="span-5 last">
            <?php echo Form::input("criticidad", null, array('id' => 'criticidad', 'class' => 'span-4')); ?>
        </div>	
    </div>	        

    <div class="span-20 center">    
        <?php echo Form::input('btnSearch', "Buscar", array('id' => 'btnSearch', 'type' => 'button', 'class' => 'custom-button')); ?>
    </div>

    <?php echo Form::close(); ?>

</div>
    
    <div><hr class="separator" /></div>
    
    <div class="span-24 last line center" id="container_ola"></div>
    
    <script>
        $(document).ready(function() {
            
            
            $('#btnSearch').click(function(){
                 
                    $('#container_ola').html('');

                    $('#container_ola').load(document_root + 'ola/loadola', {
                        criticidad: $("#criticidad").val(),                        
                        tiempoRespuesta: $("#tiempoRespuesta").val(),
                        async: false
                    }, function() {

                        if ($('#table-ola').length > 0) {
                            $('#table-ola').dataTable({
                                "sDom": '<"H"Tfr>t<"F"pi>',
                                "oTableTools": {
                                    "sSwfPath": document_root + "media/swf/dataTables/copy_cvs_xls_pdf.swf",
                                    "aButtons": [
                                        {
                                            "sExtends": "pdf",
                                            "mColumns": [0, 1, 2, 3, 4],
                                            "sFileName": "Ola.pdf",
                                            "sPdfOrientation": "landscape",
                                            "sPdfSize": "letter",
                                            "sPdfMessage": "OLA's"
                                        }
                                    ]
                                },
                                "iDisplayLength": 10,
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
    </script>