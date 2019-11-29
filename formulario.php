<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <title>My PHP | Home</title>
    <?php require_once("dist/css/css.php"); ?>
</head>

<body class="hold-transition sidebar-mini">
    <div class="wrapper">

        <!-- INICIO Navbar -->
        <?php require_once("layout/navbar.php"); ?>
        <!-- FIM navbar -->

        <!-- INICIO Main Sidebar Container -->
        <?php require_once("layout/mainSideBar.php"); ?>
        <!-- FIM Main Sidebar Container -->

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0 text-dark">Starter Page</h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active">Starter Page</li>
                            </ol>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->

            <!-- Main content -->
            <div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">Trabalhando com formulários</h5>

                                    <p class="card-text">

                                        <form name="nomeFormulario" action="formulario.php"
                                            enctype="application/x-www-form-urlencoded">

                                            <?php
                                            /*
                                            POST os dados são enviados ocultos. É o método
                                            recomendado quando se utiliza formulário.
                                            
                                            GET os dados são enviados de forma aberta, na URL, na forma do
                                            par ‘campo=valor’. Para isso, utiliza-se o símbolo ‘?’ depois do nome do arquivo. 
                                            Os pares ‘campo=valor’ são separados pelo símbolo ‘&’. Essa forma de envio
                                            é utilizada quando temos poucas informações a serem passadas, e elas podem
                                            ser especificadas direto na URL. Utiliza-se principalmente quando queremos passar 
                                            dados através de um link, sem os campos de um formulário
                                            */
                                            ?>

                                            <input name="nome" type="text" class="form-control">
                                            <button type="submit">Enviar</button>
                                        </form>

                                    </p>

                                    <a href="#" class="card-link">Card link</a>
                                    <a href="#" class="card-link">Another link</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->

        <!-- Control Sidebar -->
        <?php require_once("layout/controlSideBar.php"); ?>
        <!-- /.control-sidebar -->

        <!-- #region Footer -->
        <?php require_once("layout/footer.php"); ?>
        <!-- #endregion Footer -->
    </div>
    <!-- ./wrapper -->

    <!-- REQUIRED SCRIPTS -->

    <?php require_once("dist/js/javascript.php"); ?>
</body>

</html>