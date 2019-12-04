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

    <title>My PHP | Incluir Fornecedor</title>
    <?php require_once("dist/css/css.php"); ?>
</head>

<body class="hold-transition sidebar-mini">
    <div class="wrapper">

        <?php require_once ("layout/navBar.php"); ?>
        <?php require_once ("layout/mainSidebar.php"); ?>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0 text-dark">Cadastrar Fornecedor</h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                                <li class="breadcrumb-item active"><a href="fornecedor.php">Fornecedor</a></li>
                                <li class="breadcrumb-item active">Cadastrar</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="card">
                                <div class="card-header">
                                    <h5 class="card-title">Dados Cadastrais</h5>
                                </div>
                                <form role="form" name="formCadastrarFornecedor" action="processa_cadastro.php"
                                    method="POST">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-2">
                                                <div class="form-group">
                                                    <label>Estabelecimento</label>
                                                    <div class="form-check">
                                                        <input id="pf" class="form-check-input" type="radio"
                                                            name="radio1">
                                                        <label for="pf" class="form-check-label">Pessoa Física</label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input id="pj" class="form-check-input" type="radio"
                                                            name="radio1">
                                                        <label for="pj" class="form-check-label">Pessoa Jurídica</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-2" id="divTipoDocumento">
                                                <div class="form-group">
                                                    <label></label>
                                                    <input type="text" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-md-3" id="divNomeRazaoSocial" >
                                                <div class="form-group">
                                                    <label></label>
                                                    <input type="text" class="form-control" name="razaoSocial">
                                                </div>
                                            </div>
                                            <div class="col-md-3" id="divNomeFantasia">
                                                <div class="form-group">
                                                    <label></label>
                                                    <input type="text" class="form-control" name="nomeFantasia">
                                                </div>
                                            </div>
                                            <div class="col-md-2" id="divInscricaoEstadual">
                                                <div class="form-group">
                                                    <label></label>
                                                    <input type="text" class="form-control inscricaoEstadual" name="inscricaoEstadual">
                                                </div>
                                            </div>
                                        </div>
                               
                    
                                    <div class="row">
                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <label for="cep">CEP</label>
                                                <input id="cep" name="cep" type="text" class="form-control cep">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="logradouro">Logradouro</label>
                                                <input id="logradouro" name="logradouro" type="text"
                                                    class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="numero">Número</label>
                                                <!-- DATA serve para limitar minha formatação, ex. os dados só podem ser uma letra e três numeros ou a mascara que eu escolher (A00.0)-->
                                                <input id="numero" name="numero" type="text" class="form-control"
                                                    >
                                            </div>
                                        </div>
                                        <div class="col-md-5">
                                            <div class="form-group">
                                                <label for="bairro">Bairro</label>
                                                <input id="bairro" name="bairro" type="text" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="cidade">Cidade</label>
                                                <input id="cidade" name="cidade" type="text" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-md-1">
                                            <div class="form-group">
                                                <label for="uf">UF</label>
                                                <input id="uf" name="uf" type="text" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <label for="ibge">IBGE</label>
                                                <input id="ibge" name="ibge" type="text" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <label for="celular">Celular</label>
                                                <!-- Seunda forma de criar mascara, fazendo minha formatação o meu js e add a classe no input-->
                                                <input id="celular" name="celular" type="text"
                                                    class="form-control celular">
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <label for="telefoneFixo">Telefone Fixo</label>
                                                <!-- segunda forma de mascara com o DATA, criei minha formatação-->
                                                <input id="telefoneFixo" name="telefoneFixo" type="text"
                                                    class="form-control" data-mask="(00) 0000-0000">
                                            </div>
                                        </div>
                                    </div>

                            </div>
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Cadastrar</button>
                                <button type="reset" class="btn btn-link">Limpar</button>
                            </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php require_once ("layout/controlsidebar.php"); ?>
    <?php require_once ("layout/footer.php"); ?>


    <!-- JavaScript -->
    <?php require_once ("dist/js/javaScript.php"); ?>
    <script src="dist/js/MyInputMask.js"></script>

</body>

</html>