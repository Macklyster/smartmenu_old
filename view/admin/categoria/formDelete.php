<div class="panel panel-primary">
    <div class="panel-heading">
        <h3 class="panel-title">Excluir de Categoria</h3>
    </div>
    <div class="panel-body">
        <div class="panel panel-heading">
            <div class="text-right">
                <a href="./admin/categoria/formDelete" class="btn btn-item"><i class="glyphicon glyphicon-plus"></i> Adicionar</a>
                <a href="./admin/categoria/" class="btn btn-item"><i class="glyphicon glyphicon-th-list"></i> Listar</a>
            </div>
        </div>
        <form id="form" action="./admin/categoria/delet" method="post" data-parsley-validate>
            <input type="hidden" name="id" value="<?php echo $view_dados->id; ?>">
            <div class="form-group">
                <label for="categoria">Categoria:</label>
                <input type="text" class="form-control" id="categoria" name="categoria"  required readonly
                       value="<?php echo $view_dados->categoria; ?>" placeholder="Informe o categoria">
            </div>

            <button class="btn btn-danger" type="submit"><i class="glyphicon glyphicon-trash"></i> Excluir</button>

        </form>
    </div>
</div>