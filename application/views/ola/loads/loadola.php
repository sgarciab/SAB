<?php if (count($ola) > 0): ?>
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
            <?php foreach ($ola as $ola): ?>
                <tr>
                    <td><?php echo $ola->id; ?></td>
                    <td><?php echo $ola->criticidad; ?></td>
                    <td><?php echo $ola->tiempoRespuesta; ?></td>
                    <td><?php echo $ola->Descripción; ?></td>
                    <td class="span-2">
                        <?php echo HTML::anchor("ola/create/" . $ola->id, "Actualizar"); ?>                 
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