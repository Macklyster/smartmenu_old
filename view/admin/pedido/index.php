<div class="panel panel-primary">
    <div class="panel-heading">
        <h3 class="panel-title">Lista de Pedido de Venda</h3>
    </div>
    <div class="panel-body">
        <div class="panel panel-heading">
            <div class="text-right">
                <a href="./admin/pedido/formCadastro" class="btn btn-item"><i class="glyphicon glyphicon-plus"></i> Adicionar</a>
            </div>
        </div>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Cliente</th>
                    <th>Atendente</th>
                    <th>Mesa</th>
                    <th>Data Inclusão</th>
                    <th>Status</th>
                    <th><i class="glyphicon glyphicon-cog"></i></th>
                </tr>
            </thead>
            <tbody>
                <?php if (count($view_list) > 0): ?>
                    <?php foreach ($view_list as $li): ?>
                        <tr>
                            <td><?php echo $li->id; ?></td>
                            <td><?php echo $li->nomecliente; ?></td>
                            <td><?php echo $li->nomefuncionario; ?></td>
                            <td><?php echo $li->mesa; ?></td>
                            <td><?php echo $li->data; ?></td>
                            <td><?php echo $li->situacao; ?></td>
                            <td>
                                <a href="./admin/pedido/formCadastro/<?php echo $li->id; ?>" title="Editar"><i class="glyphicon glyphicon-pencil text-warning"></i></a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                <?php endif; ?>
            </tbody>
        </table>
    </div>
</div>