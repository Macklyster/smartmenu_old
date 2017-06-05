<div class="panel panel-primary">
    <div class="panel-heading">
        <h3 class="panel-title">Cadastro de Cargo</h3>
    </div>
    <div class="panel-body">
        <div class="panel panel-heading">
            <div class="text-right">
                <a href="./admin/cargo/" class="btn btn-item"><i class="glyphicon glyphicon-th-list"></i> Listar</a>
            </div>
        </div>
        <form id="form" action="admin/cargo/save" method="post" data-parsley-validate>
            <input type="hidden" name="id" value="<?php echo $view_dados->id; ?>">
            <div class="form-group">
                <label for="cargo">Cargo:</label>
                <input type="text" class="form-control" id="cargo" name="cargo"  required=""
                       value="<?php echo $view_dados->cargo; ?>" placeholder="Informe o cargo">
            </div>

            <button class="btn btn-success" onclick="showConfirm" type="submit"><i class="glyphicon glyphicon-floppy-disk"></i> Gravar</button>

            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <strong>Holy guacamole!</strong> You should check in on some of those fields below.
            </div>

        </form>
    </div>
</div>