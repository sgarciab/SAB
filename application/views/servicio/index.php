<?php defined('SYSPATH') or die('No direct script access.'); ?>
<?php echo HTML::style('media/css/jquery-ui-1.10.3.custom.min.css'); ?>

<div class="prepend-2 span-20 append-2 last">
    <h2 class="center">Administraci&oacute;n de Servicio</h2><br>


    <?php echo Form::open(NULL, array('id' => 'frmBusquedaServicio')); ?>

    <div class="span-20 line last">
      
        <div class="span-4">
            <?php echo Form::label("nombre", "Nombre:", array('class' => 'right')); ?>
        </div>	
        <div class="span-5 last">
            <?php echo Form::input("nombre", null, array('id' => 'nombre', 'class' => 'span-4')); ?>
        </div>	
        
         <div class="prepend-1 span-4">
        <?php echo Form::label("empresa", "Cliente:", array('class' => 'left')); ?>
        </div>	
        <div class="span-5 last">
            <div class="span-5 last ">
             <?php echo Form::input("empresa",  null, array('id' => 'empresa', 'class' => 'span-5')); ?>
                 <?php echo Form::hidden("empresah", null, array('id' => 'empresah', 'class' => 'span-5')); ?>
            </div>        
        </div>
    </div>

    <div class="span-20 center">    
        <?php echo Form::input('btnSearch', "Buscar", array('id' => 'btnSearch', 'type' => 'button', 'class' => 'custom-button')); ?>
    </div>

    <?php echo Form::close(); ?>

    <div><hr class="separator" /></div>
    
    <div class="span-20 last line" id="container_servicios"></div>
    
    <script>
        $(document).ready(function() {
            
            
             $('#btnSearch').click(function(){
                 
                 
                     $('#container_clientes').html('');

                    $('#container_servicios').load(document_root + 'servicio/loadservicios', {
                        nombre: $("#nombre").val(),
                        empresa: $("#empresa").val(),
                        empresah: $("#empresah").val(),
                        async: false
                    }, function() {

                        if ($('#table-servicios').length > 0) {
                            $('#table-servicios').dataTable({
                                "sDom": '<"H"Tfr>t<"F"pi>',
                                "oTableTools": {
                                    "sSwfPath": document_root + "media/swf/dataTables/copy_cvs_xls_pdf.swf",
                                    "aButtons": [
                                        {
                                            "sExtends": "pdf",
                                            "mColumns": [0, 1, 2],
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
            
            
            $("#empresa").autocomplete(document_root+"generic/autocompletercliente",{
            max: 16,
            scroll: false,
            matchContains:true,
            minChars: 1,
            selectFirst:false,
            delay:1,
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
				
                $('#empresah').val(row[0]);
                $('#empresa').val(row[2]);
            }else
            {
                $('#empresah').val('');	
                $('#empresa').val('');
            }
        });
        
        
          $("#empresa").focusout(function(){
            var temp = $(this).val().trim() ;
      
            if (temp==''){
                $('#empresah').val('');	
            }
          });
          
          
             });
    </script>