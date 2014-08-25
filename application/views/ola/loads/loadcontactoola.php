<?php if (count($contactosola) > 0): ?>
    <table id="table-clientes">
        <thead>
            <tr>
                <th>OLA</th> 
                <th>Nombre Contacto</th>
                <th>Documento Legal</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($contactosola as $contactoOla): ?>
                <tr>
                   <td><?php echo $contactoOla->OLA->descripcion; ?></td>
                    <td><?php echo $contactoOla->nombreContacto; ?></td>
                    <td><?php echo $contactoOla->documentoLegal; ?></td>
                   
                    <td class="span-2">
                        <?php echo HTML::anchor("ola/editcontactoola/" . $contacto->id, "Actualizar"); ?>
                 
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

<?php else: ?>
    <div class="prepend-5 span-10 append-5 line last center">
        <div class="span-10 line last notice">
            <?php echo Kohana::message('admin', 'ola:index:empty'); ?>
        </div>
    </div>
<?php endif; ?>

<script>
</script>