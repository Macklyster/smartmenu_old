<div class="panel panel-primary">
    <div class="panel-heading">
        <h3 class="panel-title">Cadastro de Mesa</h3>
    </div>
    <div class="panel-body">
        <div class="panel panel-heading">
            <div class="text-right">
                <a href="./admin/mesa/" class="btn btn-item"><i class="glyphicon glyphicon-th-list"></i> Listar</a>
            </div>
        </div>
        <form id="form" action="admin/mesa/save" method="post" data-parsley-validate>
            <input type="hidden" name="id" value="<?php echo $view_dados->id; ?>">
            <div class="form-group">
                <label for="mesa">Mesa:</label>
                <input type="text" class="form-control" id="mesa" name="mesa" 
                       value="<?php echo $view_dados->mesa; ?>" placeholder="Informe a mesa">
            </div>

            <button class="btn btn-success" type="submit"><i class="glyphicon glyphicon-floppy-disk"></i> Gravar</button>
        </form>
    </div>
</div>