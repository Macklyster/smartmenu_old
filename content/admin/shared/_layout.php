<!DOCTYPE html>
<html>
    <head>
        <title>Admin - SmartMenu</title>
        <base href="<?php echo APP_ROOT; ?>/admin">
        <link rel="icon" href="content/admin/img/login/login_smartmenu2.ico" type="image/x-icon" />
        <link rel="shortcut icon" href="content/admin/img/login/login_smartmenu2.ico" type="image/x-icon" />
        <link href="content/assets/bootstrap-3.3.7-dist/css/bootstrap.css" type="text/css" rel="stylesheet">
        <link href="content/assets/css/alertify.core.css" type="text/css" rel="stylesheet">
        <link href="content/assets/css/alertify.default.css" type="text/css" rel="stylesheet">
        <link href="content/admin/css/style.css" type="text/css" rel="stylesheet">
        <link href="content/assets/css/parsley.css" type="text/css" rel="stylesheet">
        <link href="content/assets/css/red.css" type="text/css" rel="stylesheet">
        <link href="content/assets/css/jquery-ui.css" type="text/css" rel="stylesheet">
    </head>
    <body>
        <header>
            <nav class="navbar navbar-inverse navbar-fixed-top">
                <div class="container-fluid">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="#">
                            <img class="img_logo_menu" src="content/admin/img/logo/menu_logo.png"/>
                        </a>
                    </div>

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav navbar-right">
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Cadastro <span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="admin/mesa">Mesa</a></li>
                                    <li><a href="admin/pedido/formCadastro">Pedido</a></li>
                                    <li><a href="admin/pessoa/formCadastro">Cliente</a></li>
                                    <li><a href="admin/categoria/formCadastro">Categoria</a></li>
                                    <li><a href="admin/produto/formCadastro">Produto</a></li>
                                    <li><a href="admin/cargo/formCadastro">Cargo</a></li>
                                    <li><a href="admin/funcionario/formCadastro">Funcionário</a></li>
                                </ul>
                            </li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Pesquisas <span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="admin/mesa">Mesa</a></li>
                                    <li><a href="admin/pedido/formCadastro">Pedido</a></li>
                                    <li><a href="admin/pessoa">Cliente</a></li>
                                    <li><a href="admin/categoria">Categoria</a></li>
                                    <li><a href="admin/produto">Produto</a></li>
                                    <li><a href="admin/cargo">Cargo</a></li>
                                    <li><a href="admin/funcionario">Funcionário</a></li>
                                </ul>
                            </li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Relatórios <span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="admin/mesa">Mesa</a></li>
                                    <li><a href="admin/pedido/formCadastro">Pedido</a></li>
                                    <li><a href="admin/pessoa">Cliente</a></li>
                                    <li><a href="admin/categoria">Categoria</a></li>
                                    <li><a href="admin/produto">Produto</a></li>
                                    <li><a href="admin/cargo">Cargo</a></li>
                                    <li><a href="admin/funcionario">Funcionário</a></li>
                                </ul>
                            </li>
                            <li><a href="admin/sessao/logout"><i class="glyphicon glyphicon-log-out"></i></a></li>
                        </ul>
                    </div><!-- /.navbar-collapse -->
                </div><!-- /.container-fluid -->
            </nav>
        </header>
        <main>
            <div class="container content">
                <?php $this->Render(); ?>
            </div>
        </main>
        <footer class="footer panel-primary">
            <div class="container">
                <p class="text-muted text-center text-info"><strong>SmartMenu - Versão 1.1.1 - Beta &REG; <?= $today = date("Y"); ?></strong></p>
            </div>
        </footer>

        <script src="content/assets/js/jquery-3.1.1.min.js"></script>
        <script src="content/assets/bootstrap-3.3.7-dist/js/bootstrap.js"></script>
        <script src="content/assets/js/jquery-ui.js"></script>
        <script src="content/assets/js/alertify.min.js"></script>
        <script src="content/assets/js/inputmask.js"></script>
        <script src="content/assets/js/inputmask.date.extensions.js"></script>
        <script src="content/assets/js/inputmask.numeric.extensions.js"></script>
        <script src="content/assets/js/inputmask.phone.extensions.js"></script>
        <script src="content/assets/js/jquery.inputmask.js"></script>
        <script src="content/assets/js/icheck.js"></script>
        <!--script src="content/assets/js/parsley.js"></script-->
        <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>



        <script>
            $(function () {
                $("#datainclusao").datepicker();
                $("#dataadmissao").datepicker();
                $("#datademissao").datepicker();

                /*$('#form').parsley().on('field:validated', function () {
                 var ok = $('.parsley-error').length === 0;
                 $('.bs-callout-info').toggleClass('hidden', !ok);
                 $('.bs-callout-warning').toggleClass('hidden', ok);
                 })
                 .on('form:submit', function () {
                 return false;
                 });*/

                $("#cpf").inputmask("999.999.999-99");
                $('#datainclusao').inputmask('99/99/9999');
                $('#dataadmissao').inputmask('99/99/9999');
                $('#datademissao').inputmask('99/99/9999');
                $('#telefone').inputmask('(99) 9999[9]-9999');

                $("#dialog-message").dialog({
                    modal: true,
                    buttons: {
                        Ok: function () {
                            $(this).dialog("close");
                        }
                    }
                });

                $('input').iCheck({
                    checkboxClass: 'icheckbox_flat-red',
                    radioClass: 'iradio_flat-red'
                });

                $('#addProduto').on('shown.bs.modal', function () {
                    $('#myInput').focus()
                });

<?php
if (!isset($_SESSION['message-success'])) {
    $_SESSION['message-success'] = array();
}
$alert = $_SESSION['message-success'];
if (isset($alert) && is_array($alert)) {
    foreach ($alert as $alt) {
        echo 'alertify.success("' . $alt . '");';
    }
}
$_SESSION['message-success'] = array();

?>

            });
            google.charts.load('current', {'packages': ['corechart']});
            google.charts.setOnLoadCallback(drawChart);

            function drawChart() {

                var data = google.visualization.arrayToDataTable([
                    ['Genêro', 'Quantidade'],
                    ['Masculino', <?php echo '$cont_masculino'; ?>],
                    ['Feminino', <?php echo '$cont_feminino'; ?>]
                ]);

                var options = {
                    title: '% de Cliente por Genêro'
                };

                var chart = new google.visualization.PieChart(document.getElementById('piechart'));

                chart.draw(data, options);
            }
        </script>
    </body>
</html>