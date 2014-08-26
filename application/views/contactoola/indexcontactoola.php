<?php defined('SYSPATH') or die('No direct script access.'); ?>
<?php echo HTML::style('media/css/jquery-ui-1.10.3.custom.min.css'); ?>
<?php echo HTML::style('media/css/controllers/admin/calendar.css'); ?>
<div class="prepend-2 span-20 append-2 last">
    <h2 class="center">Administraci&oacute;n de Contactos </h2><br>


    <?php echo Form::open(NULL, array('id' => 'frmBusquedaContactos')); ?>

    <div class="span-20 line last">
    	
        <div class="prepend-1 span-4">
            <?php echo Form::label("nombre", "Nombre:", array('class' => 'right')); ?>
        </div>	
        <div class="span-5 last">
            <?php echo Form::input("nombre", null, array('id' => 'nombre', 'class' => 'span-4')); ?>
        </div>	
        
        
          <div class="span-4">
            <?php echo Form::label("Ola", "Ola", array('class' => 'right')); ?>
        </div>	
        <div class="span-5 last">
            <div class="span-5 last ">
                <?php echo Form::input("ola", null, array('id' => 'ola', 'class' => 'span-4')); ?>
                <?php echo Form::hidden("olah", null, array('id' => 'olah', 'class' => 'span-5')); ?>
            </div>        
        </div>
        
        
    </div>
    
    <div class="span-20 line last">
    <div class="prepend-1 span-4">
            <?php echo Form::label("documentoLegal", "Documento Legal", array('class' => 'right')); ?>
        </div>	
        <div class="span-5 last">
            <div class="span-5 last ">
                <?php echo Form::input("documentoLegal", null, array('id' => 'documentoLegal', 'class' => 'span-4')); ?>
              
            </div>        
        </div>
    </div>
    

    <div class="span-20 center">    
        <?php echo Form::input('btnSearch', "Buscar", array('id' => 'btnSearch', 'type' => 'button', 'class' => 'custom-button')); ?>
    </div>

    <?php echo Form::close(); ?>

    <div><hr class="separator" /></div>
    
    <div class="span-20 last line" id="container_contactos"></div>
    
    <script>
        $(document).ready(function() {
            
            $("#cliente").autocomplete(document_root+"contactoola/autocompleterola",{
            max: 16,
            scroll: false,
            matchContains:true,
            minChars: 1,
            selectFirst:false,
            formatItem: function(row) {
                if(row[0]!='0'){
                    return row[0]+'  /  '+row[1]+'  /  '+row[2];
                }
                else{
                    return 'No existen resultados';
                }
            }
        }).result(function(event, row) {
            if(row[1]!='0'){
				
                $('#olah').val(row[0]);
                $('#ola').val(row[2]);
            }else
            {
                $('#olah').val('');	
                $('#ola').val('');
            }
        });
            
             $('#btnSearch').click(function(){
                 
                 
                     $('#container_contactos').html('');

                    $('#container_contactos').load(document_root + 'contactoola/loadcontactoola', {
                        documentoLegal: $("#documentoLegal").val(),
                        nombre: $("#nombre").val(),
                        ola: $("#ola").val(),
                        olah: $("#olah").val(),
                        async: false
                    }, function() {

                        if ($('#table-contactos').length > 0) {
                            $('#table-contactos').dataTable({
                                "sDom": '<"H"Tfr>t<"F"pi>',
                                "oTableTools": {
                                    "sSwfPath": document_root + "media/swf/dataTables/copy_cvs_xls_pdf.swf",
                                    "aButtons": [
                                        {
                                            "sExtends": "pdf",
                                            "mColumns": [0, 1, 2, 3],
                                            "sFileName": "ContactosOla.pdf",
                                            "sPdfOrientation": "landscape",
                                            "sPdfSize": "letter",
                                            "sPdfMessage": "Contactos"
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