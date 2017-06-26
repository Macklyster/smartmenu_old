<div class="panel panel-primary">
    <div class="panel-heading">
        <h3 class="panel-title">Lista de Cliente</h3>
    </div>
    <div class="panel-body">
        <div class="panel panel-heading">
            <div class="text-right">
                <a href="./admin/pessoa/formCadastro" class="btn btn-item"><i class="glyphicon glyphicon-plus"></i> Adicionar</a>
            </div>
        </div>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>#</th>
                    <th>CPF</th>
                    <th>Nome</th>
                    <th>sexo</th>
                    <th>Cidade</th>
                    <th>Endereço</th>
                    <th>Complemento</th>
                    <th>Bairro</th>
                    <th>Cep</th>
                    <th>Telefone</th>
                    <th>Data Inclusão</th>
                    <th><i class="glyphicon glyphicon-cog"></i></th>
                </tr>
            </thead>
            <tbody>
                <?php if (count($view_list) > 0): ?>
                    <?php foreach ($view_list as $li): ?>
                        <tr>
                            <td><?php echo $li->id; ?></td>
                            <td><?php echo $li->cpf; ?></td>
                            <td><?php echo $li->nome; ?></td>
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
        <div class="container">
            <div id="piechart" style="width: 500px; height: 300px;"></div>
        </div>
    </div>
</div>