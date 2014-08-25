<?php if (count($proveedor) > 0): ?>
    <table id="table-proveedor">
        <thead>
            <tr>
                <th>Nombre</th> 
                <th>Identificacion</th>
                <th>Direccion</th>
                <th>Accion</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($proveedor as $proveedor): ?>
                <tr>
                    <td><?php echo $proveedor->nombre; ?></td>
                    <td><?php echo $proveedor->identificacion; ?></td>
                    <td><?php echo $proveedor->direccion; ?></td>
                    <td class="span-2">
                        <?php echo HTML::anchor("proveedor/edit/" . $proveedor->id, "Actualizar"); ?>                 
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

<?php else: ?>
    <div class="prepend-5 span-10 append-5 line last center">
        <div class="span-10 line last notice">
            <?php echo Kohana::message('admin', 'proveedor:index:empty'); ?>
        </div>
    </div>
<?php endif; ?>

<script>
</script>