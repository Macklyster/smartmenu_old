<div class="panel panel-primary">
    <div class="panel-heading">
        <h3 class="panel-title">Lista de Cliente</h3>
    </div>
    <div class="panel-body">
        <div class="panel panel-heading">
            <div class="text-right">
                <a href="./admin/mesa/formCadastro" class="btn btn-item"><i class="glyphicon glyphicon-plus"></i> Adicionar</a>
            </div>
        </div>

        <div class="row">
            <div class="col-md-4">.col-md-4</div>
            <div class="col-md-4">.col-md-4</div>
            <div class="col-md-4">.col-md-4</div>
        </div>

        <table class="table table-striped">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Pedido</th>
                    <th>Produto</th>
                    <th>Quant</th>
                    <th>Data Inclusão</th>
                    <th>Valor Unitário</th>
                    <th><i class="glyphicon glyphicon-cog"></i></th>
                </tr>
            </thead>
            <tbody>
                <?php if (count($view_list) > 0): ?>
                    <?php foreach ($view_list as $li): ?>
                        <tr>
                            <td><?php echo $li->id; ?></td>
                            <td><?php echo $li->pedido_id; ?></td>
                            <td><?php echo $li->produto_id; ?></td>
                            <td><?php echo $li->sexo; ?></td>
                            <td><?php echo $li->cidade_id; ?></td>
                            <td><?php echo $li->endereco; ?></td>
                            <td><?php echo $li->complemento; ?></td>
                            <td><?php echo $li->bairro; ?></td>
                            <td><?php echo $li->cep; ?></td>
                            <td><?php echo $li->telefone; ?></td>
                            <td><?php echo $li->datainclusao; ?></td>
                            <td>
                                <a href="./admin/pessoa/formCadastro/<?php echo $li->id; ?>" title="Editar"><i class="glyphicon glyphicon-pencil text-warning"></i></a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                <?php endif; ?>
            </tbody>
        </table>
    </div>
</div>