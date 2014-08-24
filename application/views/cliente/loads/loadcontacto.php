<?php if (count($contactos) > 0): ?>
    <table id="table-clientes">
        <thead>
            <tr>
                <th>Cliente</th> 
                <th>Nombre Contacto</th>
                <th>Documento Legal</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($contactos as $contacto): ?>
                <tr>
                   <td><?php echo $contacto->cliente->nombre; ?></td>
                    <td><?php echo $contacto->nombreContacto; ?></td>
                    <td><?php echo $contacto->documentoLegal; ?></td>
                   
                    <td class="span-2">
                        <?php echo HTML::anchor("cliente/editcontacto/" . $contacto->id, "Actualizar"); ?>
                 
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

<?php else: ?>
    <div class="prepend-5 span-10 append-5 line last center">
        <div class="span-10 line last notice">
            <?php echo Kohana::message('admin', 'cliente:index:empty'); ?>
        </div>
    </div>
<?php endif; ?>

<script>
</script>