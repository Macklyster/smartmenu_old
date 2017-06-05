<div class="panel panel-primary">
    <div class="panel-heading">
        <h3 class="panel-title">Pedido de Venda</h3>
    </div>
    <div class="panel-body">
        <div class="panel panel-heading">
            <div class="text-right">
                <a href="./admin/mesa/" class="btn btn-item"><i class="glyphicon glyphicon-th-list"></i> Listar</a>
            </div>
        </div>
        <form id="form" action="admin/pedido/save" method="post" data-parsley-validate>
            <input type="hidden" name="id" value="<?php echo $view_dados->id; ?>">
            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-info">
                        <div class="panel-heading">
                            <h3 class="panel-title">Item:</h3>
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="produto_id">Produto:</label>
                                        <input type="text" class="form-control" id="produto" name="produto_id" required=""
                                               value="<?php echo $view_dados->produto_id; ?>" 
                                               placeholder="Informe a descrição do produto">
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <label for="quantidade">Quant.:</label>
                                    <div class="input-group">
                                        <input type="text" class="form-control" id="produto" name="quantidade" required=""
                                               aria-label="Amount (to the nearest dollar)" 
                                               value="<?php echo $view_dados->quantidade; ?>">
                                        <span class="input-group-addon">.00</span>
                                    </div>
                                </div>

                                <div class="col-md-2">
                                    <label for="valorunitario">Vlr Unit.:</label>
                                    <div class="input-group">
                                        <span class="input-group-addon">R$</span>
                                        <input type="text" class="form-control" id="valorunitario" name="valorunitario" required=""
                                               aria-label="Amount (to the nearest dollar)" 
                                               value="<?php echo $view_dados->valorunitario; ?>">
                                        <span class="input-group-addon">.00</span>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <label for="valortotal">Vlr. Uni. Total</label>
                                    <div class="input-group">
                                        <span class="input-group-addon">R$</span>
                                        <input type="text" class="form-control" id="produto" name="valortotal" required=""
                                               aria-label="Amount (to the nearest dollar)"
                                               value="<?php echo $view_dados->valortotal; ?>">
                                        <span class="input-group-addon">.00</span>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="input-group">
                                        <button class="btn btn-warning btn-item" type=""><i class="glyphicon glyphicon-plus"></i> Adicionar</button>
                                    </div>
                                </div>
                            </div><br>

                            <div class="clearfix"></div>

                            <div class="row">
                                <div class="col-md-12">
                                    <div class="panel panel-warning">
                                        <div class="panel-heading">
                                            <h3 class="panel-title">Lista de Itens:</h3>
                                        </div>
                                        <div class="panel-body">
                                            <table class="table table-striped">
                                                <thead>
                                                    <tr>
                                                        <th>#</th>
                                                        <th>Produto</th>
                                                        <th>Quant.</th>
                                                        <th>Vlr. Unit</th>
                                                        <th>Vlr. Total</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php if (count($view_list) > 0): ?>
                                                        <?php foreach ($view_list as $li): ?>
                                                            <tr>
                                                                <td><?php echo $li->produto_id; ?></td>
                                                                <td><?php echo $li->quantidade; ?></td>
                                                                <td><?php echo $li->valorunitario; ?></td>
                                                                <td><?php echo $li->valortotal; ?></td>
                                                            </tr>
                                                        <?php endforeach; ?>
                                                    <?php endif; ?>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <button class="btn btn-success" type="submit"><i class="glyphicon glyphicon-floppy-disk"></i> Gravar</button>
        </form>
    </div>
</div>