<?php defined('SYSPATH') or die('No direct script access.'); ?>
<?php echo HTML::style('media/css/jquery-ui-1.10.3.custom.min.css'); ?>
<?php echo HTML::style('media/css/controllers/admin/calendar.css'); ?>
<div class="prepend-2 span-20 append-2 last">
    <h2 class="center">Administraci&oacute;n de Proveedores</h2><br>


    <?php echo Form::open(NULL, array('id' => 'frmBusquedaProveedores')); ?>

    <div class="span-20 line last">
        <div class="span-4">
            <?php echo Form::label("nombre", "Nombre:", array('class' => 'right')); ?>
        </div>	
        <div class="span-5 last">
            <div class="span-5 last ">
                <?php echo Form::input("nombre", null, array('id' => 'nombre', 'class' => 'span-4')); ?>
            </div>        
        </div>	
        <div class="prepend-1 span-4">
            <?php echo Form::label("identificacion", "Identificaci&oacute;n:", array('class' => 'right')); ?>
        </div>	
        <div class="span-5 last">
            <?php echo Form::input("identificacion", null, array('id' => 'identificacion', 'class' => 'span-4')); ?>
        </div>	
    </div>	        	        

    <div class="span-24 center">    
        <?php echo Form::input('btnSearch', "Buscar", array('id' => 'btnSearch', 'type' => 'button', 'class' => 'custom-button')); ?>
    </div>

    <?php echo Form::close(); ?>

</div>
    
    <div><hr class="separator" /></div>
    
    <div class="span-24 last line center" id="container_proveedor"></div>
    
    <script>
        $(document).ready(function() {
            
            
            $('#btnSearch').click(function(){
                 
                    $('#container_proveedor').html('');

                    $('#container_proveedor').load(document_root + 'proveedor/loadproveedores', {
                        nombre: $("#nombre").val(),                        
                        identificacion: $("#identificacion").val(),
                        async: false
                    }, function() {

                        if ($('#table-proveedor').length > 0) {
                            $('#table-proveedor').dataTable({
                                "sDom": '<"H"Tfr>t<"F"pi>',
                                "oTableTools": {
                                    "sSwfPath": document_root + "media/swf/dataTables/copy_cvs_xls_pdf.swf",
                                    "aButtons": [
                                        {
                                            "sExtends": "pdf",
                                            "mColumns": [0, 1, 2, 3, 4],
                                            "sFileName": "Proveedor.pdf",
                                            "sPdfOrientation": "landscape",
                                            "sPdfSize": "letter",
                                            "sPdfMessage": "Proveedores"
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