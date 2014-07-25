<?php if (count($proveedor) > 0): ?>
    <table id="table-proveedor">
        <thead>
            <tr>
                <th>Nombre</th> 
                <th>RUC</th>
                <th>Direccion</th>
                <th>Telefono Comercial</th>
                <th>Telefono Personal</th>
                <th>Movil Trabajo</th>
                <th>Movil Personal</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($proveedor as $proveedor): ?>
                <tr>
                    <td><?php echo $proveedor->nombre; ?></td>
                    <td><?php echo $proveedor->RUC; ?></td>
                    <td><?php echo $proveedor->direccion; ?></td>
                    <td><?php echo $proveedor->telefono1; ?></td>
                    <td><?php echo $proveedor->telefono2; ?></td>
                    <td><?php echo $proveedor->movil1; ?></td>
                    <td><?php echo $proveedor->movil2; ?></td>
                    <td class="span-2">
                        <?php echo HTML::anchor("proveedor/create/" . $proveedor->id, "Actualizar"); ?>
                 
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