<div class="panel panel-primary">
    <div class="panel-heading">
        <h3 class="panel-title">Lista de Categoria</h3>
    </div>
    <div class="panel-body">
        <div class="panel panel-heading">
            <div class="text-right">
                <a href="./admin/categoria/formCadastro" class="btn btn-item"><i class="glyphicon glyphicon-plus"></i> Adicionar</a>
            </div>
        </div>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Categoria</th>
                    <th><i class="glyphicon glyphicon-cog"></i></th>
                </tr>
            </thead>
            <tbody>
                <?php if (count($view_list) > 0): ?>
                    <?php foreach ($view_list as $li): ?>
                        <tr>
                            <td><?php echo $li->id; ?></td>
                            <td><?php echo $li->categoria; ?></td>
                            <td>
                                <a href="./admin/categoria/formCadastro/<?php echo $li->id; ?>" title="Editar"><i class="glyphicon glyphicon-pencil text-warning"></i></a>
                                | <a href="./admin/categoria/formDelete/<?php echo $li->id; ?>" title="Excluir"><i class="glyphicon glyphicon-remove text-danger"></i></a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                <?php endif; ?>
            </tbody>
        </table>
    </div>
</div>