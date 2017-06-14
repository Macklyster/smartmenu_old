<div class="panel panel-primary">
    <div class="panel-heading">
        <h3 class="panel-title">Mesas</h3>
    </div>
    <div class="panel-body">
        <div class="panel panel-heading">
            <div class="text-right">
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-link" data-toggle="modal" data-target="#exampleModalLong"><i class="glyphicon glyphicon-plus"></i> Adicionar</button>
                <!-- Modal -->
            </div>
            <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-body">
                            <div class="panel panel-primary">
                                <div class="panel-heading">
                                    <p><h3 class="panel-title">Cadastro de Mesa</h3>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button></p>
                                </div>
                                <div class="panel-body">
                                    <form id="form" action="admin/mesa/save" method="post" data-parsley-validate>
                                        <input type="hidden" name="id" value="<?php echo $view_dados->id; ?>">
                                        <div class="form-group">
                                            <label for="mesa">Mesa:</label>
                                            <input type="text" class="form-control" id="mesa" name="mesa" 
                                                   value="<?php echo $view_dados->mesa; ?>" placeholder="Informe a mesa">
                                        </div>
                                        <div class="form-group">
                                            <label for="local">Local:</label>
                                            <input type="number" class="form-control" id="local" name="local" 
                                                   value="<?php echo $view_dados->local; ?>">
                                        </div>
                                        <div class="form-group">
                                            <label for="datainclusao">Data Inclusão:</label>
                                            <input type="datetime" class="form-control" id="datainclusao" name="datainclusao" 
                                                   value="<?php echo $view_dados->datainclusao; ?>">
                                        </div>
                                        <div class="modal-footer">
                                            <button class="btn btn-success" type="submit"><i class="glyphicon glyphicon-floppy-disk"></i> Gravar</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <?php if (count($view_listitem) > 0): ?>
            <div class="row">
                <?php foreach ($view_listitem as $li): ?>
                    <div class="col-sm-6 col-md-4">
                        <div class="thumbnail">
                            <div class="panel panel-success">
                                <div class="panel-heading">
                                    <h1 class="panel-title text-uppercase text-center"><?php echo $li->mesa; ?></h1>
                                </div>
                            </div>
                            <div class="caption">
                                <p>Local: <?php echo $li->local; ?></p>

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
                                        
                                                <tr>
                                                    <td>Cerveja</td>
                                                    <td>2</td>
                                                    <td>20</td>
                                                    <td>45,00</td>
                                                </tr>
                                        
                                    </tbody>
                                </table>
                                <p>
                                    <a href="./admin/mesa/formItemPedidoMesa" class="btn btn-default" role="button">Prodduto</a>
                                    <a href="./admin/pedido/formCadastro" class="btn btn-default" role="button">Baixar</a>
                                </p>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        <?php endif; ?>
    </div>
</div>