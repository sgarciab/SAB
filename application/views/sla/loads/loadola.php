<?php if (count($sla) > 0): ?>
    <table id="table-ola">
        <thead>
            <tr>
                <th>id</th> 
                <th>Criticidad</th>
                <th>Tiempo Respuesta</th>
                <th>Descripci&oacute;n</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($sla as $sla): ?>
                <tr>
                    <td><?php echo $sla->id; ?></td>
                    <td><?php echo $sla->criticidad; ?></td>
                    <td><?php echo $sla->tiempoRespuesta; ?></td>
                    <td><?php echo $sla->descripcion; ?></td>
                    <td class="span-2">
                        <?php echo HTML::anchor("ola/edit/" . $sla->id, "Actualizar"); ?>                 
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

<?php else: ?>
    <div class="prepend-5 span-10 append-5 line last center">
        <div class="span-10 line center notice">
            <?php echo Kohana::message('sab', 'ola:index:empty'); ?>
        </div>
    </div>
<?php endif; ?>

<script>
</script>