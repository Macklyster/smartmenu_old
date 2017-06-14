<div class="panel panel-primary">
    <div class="panel-heading">
        <h3 class="panel-title">Cadastro de Produto</h3>
    </div>
    <div class="panel-body">
        <div class="panel panel-heading">
            <div class="text-right">
                <a href="./admin/produto/" class="btn btn-item"><i class="glyphicon glyphicon-th-list"></i> Listar</a>
            </div>
        </div>
        <form id="form" action="admin/produto/save" method="post" data-parsley-validate>
            <input type="hidden" name="id" value="<?php echo $view_dados->id; ?>">
            <div class="row">
                <div class="col-md-5">
                    <div class="form-group">
                        <label for="categoria_id">Cargo:</label>
                        <select class="form-control" id="categoria_id" name="categoria_id">
                            <option>Selecione um Cargo</option>
                            <?php if (count($view_list) > 0): ?>
                                <?php foreach ($view_list as $li): ?>
                                    <option value="<?php echo $li->categoria_id; ?>">
                                        <?php echo $li->categoria; ?>
                                    <?php endforeach; ?>
                                <?php endif; ?>
                            </option>
                        </select>
                    </div>
                </div>
                <div class="col-md-7">
                    <div class="form-group">
                        <label for="produto">Produto:</label>
                        <input type="text" class="form-control" id="produto" name="produto" required=""
                               value="<?php echo $view_dados->produto; ?>" placeholder="Informe a descrição do produto">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <label for="quantidade">Quantidade:</label>
                    <div class="input-group">
                        <input type="text" class="form-control" id="quantidade" name="quantidade" required=""
                               value="<?php echo $view_dados->quantidade; ?>" placeholder="Informe a quantidade">
                        <span class="input-group-addon">.00</span>
                    </div>
                </div>
                <div class="col-md-4">
                    <label for="valorcusto">Valor Custo:</label>
                    <div class="input-group">
                        <span class="input-group-addon">R$</span>
                        <input type="text" class="form-control" id="valorcusto" name="valorcusto" required=""
                               value="<?php echo $view_dados->valorcusto; ?>" placeholder="Informe valor custo">
                        <span class="input-group-addon">.00</span>
                    </div>
                </div>
                <div class="col-md-4">
                    <label for="valorvenda">Valor Venda:</label>
                    <div class="input-group">
                        <span class="input-group-addon">R$</span>
                        <input type="text" class="form-control" id="valorvenda" name="valorvenda" required=""
                               value="<?php echo $view_dados->valorvenda; ?>" placeholder="Informe valor venda">
                        <span class="input-group-addon">.00</span>
                    </div>
                </div>
            </div>
            <br>
            <button class="btn btn-success" type="submit"><i class="glyphicon glyphicon-floppy-disk"></i> Gravar</button>
        </form>
    </div>
</div>