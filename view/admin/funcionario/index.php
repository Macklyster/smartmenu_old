<div class="panel panel-primary">
    <div class="panel-heading">
        <h3 class="panel-title">Lista de Funcionário</h3>
    </div>
    <div class="panel-body">
        <div class="panel panel-heading">
            <div class="text-right">
                <a href="./admin/funcionario/formCadastro" class="btn btn-item"><i class="glyphicon glyphicon-plus"></i> Adicionar</a>
            </div>
        </div>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Pessoa</th>
                    <th>Cargo</th>
                    <th>Login</th>
                    <th>Senha</th>
                    <th>Data Admissão</th>
                    <th>Data Demissão</th>
                    <th>Situação</th>
                    <th><i class="glyphicon glyphicon-cog"></i></th>
                </tr>
            </thead>
            <tbody>
                <?php if (count($view_list) > 0): ?>
                    <?php foreach ($view_list as $li): ?>
                        <tr>
                            <td><?php echo $li->id; ?></td>
                            <td><?php echo $li->nome; ?></td>
                            <td><?php echo $li->cargo; ?></td>
                            <td><?php echo $li->login; ?></td>
                            <td><?php echo $li->senha; ?></td>
                            <td><?php echo $li->dataadmissao; ?></td>
                            <td><?php echo $li->datademissao; ?></td>
                            <td><?php echo $li->situacao; ?></td>
                            <td>
                                <a href="./admin/funcionario/formCadastro/<?php echo $li->id; ?>" title="Editar"><i class="glyphicon glyphicon-pencil text-warning"></i></a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                <?php endif; ?>
            </tbody>
        </table>
    </div>
</div>