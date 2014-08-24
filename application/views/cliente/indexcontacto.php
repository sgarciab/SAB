<?php defined('SYSPATH') or die('No direct script access.'); ?>
<?php echo HTML::style('media/css/jquery-ui-1.10.3.custom.min.css'); ?>
<?php echo HTML::style('media/css/controllers/admin/calendar.css'); ?>
<div class="prepend-2 span-20 append-2 last">
    <h2 class="center">Administraci&oacute;n de Contactos </h2><br>


    <?php echo Form::open(NULL, array('id' => 'frmBusquedaClientes')); ?>

    <div class="span-20 line last">
        <div class="span-4">
            <?php echo Form::label("documentoLegal", "Documento Legal:", array('class' => 'right')); ?>
        </div>	
        <div class="span-5 last">
            <div class="span-5 last ">
                <?php echo Form::input("documentoLegal", null, array('id' => 'documentoLegal', 'class' => 'span-4')); ?>
            </div>        
        </div>	
        <div class="prepend-1 span-4">
            <?php echo Form::label("nombre", "Nombre:", array('class' => 'right')); ?>
        </div>	
        <div class="span-5 last">
            <?php echo Form::input("nombre", null, array('id' => 'nombre', 'class' => 'span-4')); ?>
        </div>	
    </div>
    
     <div class="span-20 line last">
        <div class="span-4">
            <?php echo Form::label("Cliente", "Cliente", array('class' => 'right')); ?>
        </div>	
        <div class="span-5 last">
            <div class="span-5 last ">
                <?php echo Form::input("CLiente", null, array('id' => 'Cliente', 'class' => 'span-4')); ?>
            </div>        
        </div>	
        	
    </div>


    <div class="span-20 center">    
        <?php echo Form::input('btnSearch', "Buscar", array('id' => 'btnSearch', 'type' => 'button', 'class' => 'custom-button')); ?>
    </div>

    <?php echo Form::close(); ?>

    <div><hr class="separator" /></div>
    
    <div class="span-20 last line" id="container_clientes"></div>
    
    <script>
        $(document).ready(function() {
            
            
             $('#btnSearch').click(function(){
                 
                 
                     $('#container_clientes').html('');

                    $('#container_clientes').load(document_root + 'cliente/loadcontacto', {
                        documentoLegal: $("#documentoLegal").val(),
                        nombre: $("#nombre").val(),
                        cliente: $("#cliente").val(),
                        async: false
                    }, function() {

                        if ($('#table-clientes').length > 0) {
                            $('#table-clientes').dataTable({
                                "sDom": '<"H"Tfr>t<"F"pi>',
                                "oTableTools": {
                                    "sSwfPath": document_root + "media/swf/dataTables/copy_cvs_xls_pdf.swf",
                                    "aButtons": [
                                        {
                                            "sExtends": "pdf",
                                            "mColumns": [0, 1, 2, 3],
                                            "sFileName": "Clientes.pdf",
                                            "sPdfOrientation": "landscape",
                                            "sPdfSize": "letter",
                                            "sPdfMessage": "Clientes"
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