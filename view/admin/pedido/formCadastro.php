<div class="panel panel-primary">
    <div class="panel-heading">
        <h3 class="panel-title">Pedido de Venda</h3>
    </div>
    <div class="panel-body">
        <div class="panel panel-heading">
            <div class="text-right">
                <a href="./admin/pedido/" class="btn btn-item"><i class="glyphicon glyphicon-th-list"></i> Listar</a>
            </div>
        </div>
        <form id="form" action="admin/pedido/save" method="post" data-parsley-validate>
            <input type="hidden" name="id" value="<?php echo $view_dados->id; ?>">
            <div class="row">
                <div class="col-md-7">
                    <div class="panel panel-info">
                        <div class="panel-heading">
                            <h3 class="panel-title">Item:</h3>
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-9">
                                    <div class="form-group">
                                        <label for="produto_id">Produto:</label>
                                        <input type="text" class="form-control" id="produto" name="produto_id" required=""
                                               value="<?php echo $view_dados->produto_id; ?>" 
                                               placeholder="Informe a descrição do produto">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <label for="quantidade">Quant.:</label>
                                    <div class="input-group">
                                        <input type="text" class="form-control" id="produto" name="quantidade" required=""
                                               aria-label="Amount (to the nearest dollar)" 
                                               value="<?php echo $view_dados->quantidade; ?>">
                                        <span class="input-group-addon">.00</span>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <label for="valorunitario">Vlr Unit.:</label>
                                    <div class="input-group">
                                        <span class="input-group-addon">R$</span>
                                        <input type="text" class="form-control" id="valorunitario" name="valorunitario" required=""
                                               aria-label="Amount (to the nearest dollar)" 
                                               value="<?php echo $view_dados->valorunitario; ?>">
                                        <span class="input-group-addon">.00</span>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <label for="valortotal">Vlr. Uni. Total</label>
                                    <div class="input-group">
                                        <span class="input-group-addon">R$</span>
                                        <input type="text" class="form-control" id="produto" name="valortotal" required=""
                                               aria-label="Amount (to the nearest dollar)"
                                               value="<?php echo $view_dados->valortotal; ?>">
                                        <span class="input-group-addon">.00</span>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="input-group">
                                        <button class="btn btn-primary btn-item" type=""><i class="glyphicon glyphicon-plus"></i> Adicionar</button>
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
                                                                <td><?php echo $li->produto; ?></td>
                                                                <td><?php echo $li->quantidade; ?></td>
                                                                <td><?php echo $li->valorvenda; ?></td>
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

                <div class="col-md-5">
                    <div class="panel panel-danger">
                        <div class="panel-heading">
                            <h3 class="panel-title">Forma de Pagamento:</h3>
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-3">
                                    <label for="quantidade">A vista:</label>
                                    <div class="input-group">
                                        <input type="radio" name="avista" id="avista" class="iradio_flat-red">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <label for="quantidade">A Prazo:</label>
                                    <div class="input-group">
                                        <div class="iradio">
                                            <input type="radio" name="aprazo" id="aprazo">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <label for="quantidade">Débito:</label>
                                    <div class="input-group">
                                        <input type="radio" name="debito" id="debito" class="iradio_flat-red">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <label for="quantidade">Crédito:</label>
                                    <div class="input-group">
                                        <div class="iradio_flat-red">
                                            <input tabindex="42" type="radio" name="credito" id="iCheck">
                                            <ins class="iCheck-helper"></ins>
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