<div class="panel panel-primary">
    <div class="panel-heading">
        <h3 class="panel-title">Cadastro de Cliente</h3>
    </div>
    <div class="panel-body">
        <div class="panel panel-heading">
            <div class="text-right">
                <a href="./admin/pessoa/" class="btn btn-item"><i class="glyphicon glyphicon-th-list"></i> Listar</a>
            </div>
        </div>
        <form id="form" action="admin/pessoa/save" method="post" data-parsley-validate>
            <input type="hidden" name="id" value="<?php echo $view_dados->id; ?>">
            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="cpf">CPF:</label>
                        <input type="text" class="form-control" id="cpf" name="cpf" required=""
                               value="<?php echo $view_dados->cpf; ?>" placeholder="Informe o cpf">
                    </div>
                </div>
                <div class="col-md-8"><div class="form-group">
                        <label for="nome">Nome:</label>
                        <input type="text" class="form-control" id="nome" name="nome" required=""
                               value="<?php echo $view_dados->nome; ?>" placeholder="Informe o nome completo">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="sexo">Sexo:</label>
                        <select class="form-control" id="sexo" name="sexo">
                            <option>Selecione um Sexo</option>
                            <option value="1">Masculino</option>
                            <option value="2">Feminino</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-3"><div class="form-group">
                        <label for="datainclusao">Data Inclusão:</label>
                        <input type="text" class="form-control" id="datainclusao" name="datainclusao" required=""
                               value="<?php echo $view_dados->datainclusao; ?>" placeholder="Informe a data de inclusão">
                    </div>
                </div>
                <div class="col-md-5"><div class="form-group">
                        <label for="email">E-mail:</label>
                        <input type="email" class="form-control" id="email" name="email" required=""
                               data-parsley-type="email" value="<?php echo $view_dados->email; ?>" 
                               placeholder="Informe o e-mail para contato">
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-2">
                    <div class="form-group">
                        <label for="cpf">CEP:</label>
                        <input type="text" class="form-control" id="cep" name="cep" required=""
                               value="<?php echo $view_dados->cep; ?>" placeholder="Informe o cep">
                    </div>
                </div>
                <div class="col-md-6"><div class="form-group">
                        <label for="endereco">Endereço:</label>
                        <input type="text" class="form-control" id="endereco" name="endereco" required=""
                               value="<?php echo $view_dados->endereco; ?>" placeholder="Informe o Endereço">
                    </div>
                </div>
                <div class="col-md-4"><div class="form-group">
                        <label for="bairro">Bairro:</label>
                        <input type="text" class="form-control" id="bairro" name="bairro" required=""
                               value="<?php echo $view_dados->bairro; ?>" placeholder="Informe o bairro">
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-5">
                    <div class="form-group">
                        <label for="complemento">Complemento:</label>
                        <input type="text" class="form-control" id="complemento" name="complemento" required=""
                               value="<?php echo $view_dados->complemento; ?>" placeholder="Informe o complemente">
                    </div>
                </div>
                <div class="col-md-4"><div class="form-group">
                        <label for="cidade">Cidade:</label>
                        <input type="text" class="form-control" id="cidade_id" name="cidade_id" required=""
                               value="<?php echo $view_dados->cidade_id; ?>" placeholder="Informe a Cidade">
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="telefone">Telefone:</label>
                        <input type="text" class="form-control" id="telefone" name="telefone" required=""
                               value="<?php echo $view_dados->telefone; ?>" placeholder="Informe o n° telefone">
                    </div>
                </div>
            </div>

            <button class="btn btn-success" type="submit"><i class="glyphicon glyphicon-floppy-disk"></i> Gravar</button>
        </form>
    </div>
</div>