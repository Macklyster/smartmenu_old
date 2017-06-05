<div class="panel panel-primary">
    <div class="panel-heading">
        <h3 class="panel-title">Cadastro de Categoria</h3>
    </div>
    <div class="panel-body">
        <div class="panel panel-heading">
            <div class="text-right">
                <a href="./admin/categoria/" class="btn btn-item"><i class="glyphicon glyphicon-th-list"></i> Listar</a>
            </div>
        </div>
        <form id="form" action="admin/categoria/save" method="post" data-parsley-validate>
            <input type="hidden" name="id" value="<?php echo $view_dados->id; ?>">
            <div class="form-group">
                <label for="categoria">Categoria:</label>
                <input type="text" class="form-control" id="categoria" name="categoria" required=""
                       data-parsley-minlength-message="Por favor preencha o campo, ele é obrigatório!"
                       value="<?php echo $view_dados->categoria; ?>" placeholder="Informe a categoria">
            </div>

            <button class="btn btn-success" type="submit"><i class="glyphicon glyphicon-floppy-disk"></i> Gravar</button>
        </form>
    </div>
</div>