<div class="panel panel-primary">
    <div class="panel-heading">
        <h3 class="panel-title">Cadastro de Funcionário</h3>
    </div>
    <div class="panel-body">
        <div class="panel panel-heading">
            <div class="text-right">
                <a href="./admin/funcionario/" class="btn btn-item"><i class="glyphicon glyphicon-th-list"></i> Listar</a>
            </div>
        </div>
        <form id="form" action="admin/funcionario/save" method="post" data-parsley-validate>
            <input type="hidden" name="id" value="<?php echo $view_dados->id; ?>">
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="pessoa">Pessoa:</label>
                        <div class="input-group">
                            <input type="text" class="form-control" id="pessoa_id" name="pessoa_id" required=""
                                   value="<?php echo $view_dados->pessoa_id; ?>" placeholder="Informe o código da pessoa">
                            <span class="input-group-btn">
                                <button class="btn btn-info" type="button" data-toggle="modal" data-target="#ModalCliente"><i class="glyphicon glyphicon-search"></i></button>
                            </span>
                        </div>

                        <div class="modal fade" id="ModalCliente" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                        <h4 class="modal-title" id="myModalLabel">Selecione o novo Funcionário</h4>
                                    </div>
                                    <div class="modal-body">
                                        <table class="table table-striped">
                                            <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>Pessoa</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php if (count($view_list) > 0): ?>
                                                    <?php foreach ($view_list as $li): ?>
                                                        <tr>
                                                            <td><?php echo $li->id; ?></td>
                                                            <td><?php echo $li->nome; ?></td>                                                            
                                                        </tr>
                                                    <?php endforeach; ?>
                                                <?php endif; ?>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                                        <button type="button" class="btn btn-primary">Confirmar</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="cargo_id">Cargo:</label>
                        <select class="form-control" id="cargo_id" name="cargo_id">
                            <option>Selecione um Cargo</option>
                            <?php if (count($view_list) > 0): ?>
                                <?php foreach ($view_list as $li): ?>
                                    <option value="<?php echo $li->id; ?>">
                                        <?php echo $li->cargo; ?>
                                    <?php endforeach; ?>
                                <?php endif; ?>
                            </option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="login">Login:</label>
                        <input type="text" class="form-control" id="login" name="login" required="" autocomplete="off"
                               value="<?php echo $view_dados->login; ?>" placeholder="Informe o login">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="senha">Senha:</label>
                        <input type="password" class="form-control" id="senha" name="senha" required="" autocomplete="off"
                               value="<?php echo $view_dados->senha; ?>" placeholder="Informe sua senha">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="dataadmissao">Data Admissão:</label>
                        <input type="text" class="form-control" id="dataadmissao" name="dataadmissao" required=""
                               value="<?php echo $view_dados->dataadmissao; ?>" placeholder="Informe a data de Admissão">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="datademissao">Data Demissão:</label>
                        <input type="text" class="form-control" id="datademissao" name="datademissao"
                               value="<?php echo $view_dados->datademissao; ?>" placeholder="Informe a data de Demissão">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="situacao">Situação:</label>
                        <select class="form-control" id="situacao" name="situacao">
                            <option value="1">Ativo</option>
                            <option value="2">Inativo</option>
                        </select>
                    </div>
                </div>
            </div>

            <button class="btn btn-success" type="submit"><i class="glyphicon glyphicon-floppy-disk"></i> Gravar</button>
        </form>
    </div>
</div>