<?php if (count($servicios) > 0): ?>
    <table id="table-clientes">
        <thead>
            <tr>
                
                <th>Nombre</th>
                <th>Cliente</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($servicios as $servicio): ?>
                <tr>
                   <td><?php echo $servicio->Nombre; ?></td>
                   
                   <td><?php echo $servicio->cliente->nombre ; ?></td>
                    <td class="span-2">
                        <?php echo HTML::anchor("servicio/create/" . $servicio->id, "Actualizar"); ?>
                 
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

<?php else: ?>
    <div class="prepend-5 span-10 append-5 line last center">
        <div class="span-10 line last notice">
            <?php echo Kohana::message('admin', 'servicio:index:empty'); ?>
        </div>
    </div>
<?php endif; ?>

<script>
</script>