<div class="wrapper">
    <div class="middle">
        <form action="admin/sessao/validar" method="post">
            <img class="img_logo_login" src="content/admin/img/login/login_smartmenu.jpeg" title="Logo Login"/>
            <div class="form-group">
                <label>Usuário</label>
                <input type="text" name="login" class="form-control">
            </div>
            <div class="form-group">
                <label>Senha</label>
                <input type="password" name="senha" class="form-control">
            </div>
            <p>
                <button type="submit" name="logar" class="btn btn-sm btn-primary">LOGAR</button>
            </p>
            <p><strong>Desenvolvido por Macklyster & Rodolfo &COPY; <?= $today = date("Y"); ?> </strong></p>
        </form>
    </div>
</div>