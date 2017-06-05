<div class="panel panel-primary">
    <div class="panel-heading">
        <h3 class="panel-title">Lista de Produto</h3>
    </div>
    <div class="panel-body">
        <div class="panel panel-heading">
            <div class="text-right">
                <a href="./admin/produto/formCadastro" class="btn btn-item"><i class="glyphicon glyphicon-plus"></i> Adicionar</a>
            </div>
        </div>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Categoria</th>
                    <th>Produto</th>
                    <th>Quantidade</th>
                    <th>Valor Custo</th>
                    <th>Valor Venda</th>
                    <th><i class="glyphicon glyphicon-cog"></i></th>
                </tr>
            </thead>
            <tbody>
                <?php if (count($view_list) > 0): ?>
                    <?php foreach ($view_list as $li): ?>
                        <tr>
                            <td><?php echo $li->id; ?></td>
                            <td><?php echo $li->categoria_id; ?></td>
                            <td><?php echo $li->produto; ?></td>
                            <td><?php echo $li->quantidade; ?></td>
                            <td><?php echo $li->valorcusto; ?></td>
                            <td><?php echo $li->valorvenda; ?></td>
                            <td>
                                <a href="./admin/produto/formCadastro/<?php echo $li->id; ?>" title="Editar"><i class="glyphicon glyphicon-pencil text-warning"></i></a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                <?php endif; ?>
            </tbody>
        </table>
    </div>
</div>