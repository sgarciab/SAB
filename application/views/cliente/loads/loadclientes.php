<?php if (count($clientes) > 0): ?>
    <table id="table-clientes">
        <thead>
            <tr>
                <th>RUC</th> 
                <th>Nombre Comercial</th>
                <th>Nombre Legal</th>
                <th>Direccion</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($clientes as $cliente): ?>
                <tr>
                   <td><?php echo $cliente->RUC; ?></td>
                    <td><?php echo $cliente->nombreComercial; ?></td>
                    <td><?php echo $cliente->nombre; ?></td>
                    <td><?php echo $cliente->direccion; ?></td>
                    <td class="span-2">
                        <?php echo HTML::anchor("cliente/create/" . $cliente->id, "Actualizar"); ?>
                 
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