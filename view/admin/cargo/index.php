<div class="panel panel-primary">
    <div class="panel-heading">
        <h3 class="panel-title">Lista de Cargo</h3>
    </div>
    <div class="panel-body">
        <div class="panel panel-heading">
            <div class="text-right">
                <a href="./admin/cargo/formCadastro" class="btn btn-item"><i class="glyphicon glyphicon-plus"></i> Adicionar</a>
            </div>
        </div>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Cargo</th>
                    <th><i class="glyphicon glyphicon-cog"></i></th>
                </tr>
            </thead>
            <tbody>
                <?php if (count($view_list) > 0): ?>
                    <?php foreach ($view_list as $li): ?>
                        <tr>
                            <td><?php echo $li->id; ?></td>
                            <td><?php echo $li->cargo; ?></td>
                            <td>
                                <a href="./admin/cargo/formCadastro/<?php echo $li->id; ?>" title="Editar"><i class="glyphicon glyphicon-pencil text-warning"></i></a>
                                | <a href="./admin/cargo/formDelete/<?php echo $li->id; ?>" title="Excluir"><i class="glyphicon glyphicon-remove text-danger"></i></a>                            
                            </td>
                        </tr>
                    <?php endforeach; ?>
                <?php endif; ?>
            </tbody>
        </table>
    </div>
</div>