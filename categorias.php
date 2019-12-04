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

        <?php require_once ("layout/navBar.php"); ?>
        <?php require_once ("layout/mainSidebar.php"); ?>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0 text-dark">Categorias de Eventos</h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active">Categorias de Eventos</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.content-header -->

            <!-- Main content -->
            <div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <button class="btn btn-primary" data-toggle="modal" data-target="#modalExemplo"><i
                                            class="fas fa-plus mr-1"></i>Nova Categoria</button>
                                    <!-- Modal -->
                                    <div class="modal fade" id="modalExemplo" tabindex="-1" role="dialog"
                                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">Nova Categoria</h5>
                                                    <button type="button" class="close" data-dismiss="modal"
                                                        aria-label="Fechar">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <form method="POST">
                                                    <div class="modal-body">
                                                        <input type="hidden" name="acao" value="insert">
                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <div class="form-group">
                                                                    <label>Nova categoria</label>
                                                                    <input class="form-control" type="text"
                                                                        name="txtNomeCategoria" required>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="submit" name="inset" class="btn btn-primary">Salvar</button>
                                                        <button type="button" data-dismiss="modal"
                                                            class="btn btn-secondary">Fechar</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /.card-header -->
                                <div class="card-body p-0">
                                    <table class="table table-striped" method="POST">
                                        <input type="hidden" name="acao" value="update">
                                        <thead>
                                            <tr>
                                                <th style="width: 10px">#</th>
                                                <th>Descrição</th>
                                                <th>Status</th>
                                                <th style="width: 40px">Ações</th>
                                            </tr>
                                        </thead>

                                        <tbody>
                                            <?php                                    
                                      require_once realpath(dirname(__FILE__).'/src/models/categoriaModel.php');
                                      $listaCategorias = categoriaModel::ListarTodos();
                                      
                                      foreach ($listaCategorias as $categoria){
                                        //var_dump($categoria);
                                        echo "<tr>
                                              <td>".$categoria['id_categoria']."</td>
                                              <td>".$categoria['nome']."</td>
                                              <td>".($categoria['status'] == 'ATIVO' ?  "<span class='badge badge-success'>ATIVO</span>" : "<span class='badge badge-danger'>INATIVO</span>" )."</td>
                                              <td><div class='btn-group mr-2' role='group' aria-label='Segundo grupo'>
                                              <button type='submit' class='btn btn-primary' data-toggle='modal' data-target='#updateModal'>Editar</button>
                                              <button type='button' class='btn btn-secondary'>Excluir</button>
                                            </div></td>
                                              </tr>";                                               
                                      }
                                    ?>
                                            <!-- Modal -->
                                            <div class="modal fade" id="updateModal" tabindex="-1" role="dialog"
                                                aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div class="modal-dialog" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="exampleModalLabel">Alterar
                                                                Categoria
                                                                <button type="button" class="close" data-dismiss="modal"
                                                                    aria-label="Fechar">
                                                                    
                                                                </button>
                                                        </div>
                                                        <form method="POST">
                                                            <div class="modal-body">
                                                                <input type="hidden" name="acao" value="update">
                                                                <div class="row">
                                                                    <div class="col-md-12">
                                                                        <div class="form-group">
                                                                            <label>Atualizar</label>
                                                                            <input class="form-control" type="text" name="txtAtualizarCategoria" required>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="submit" name="update" class="btn btn-primary">Salvar</button>
                                                                <button type="button" data-dismiss="modal"
                                                                    class="btn btn-secondary">Fechar</button>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </tbody>
                                    </table>
                                </div>
                                <!-- /.card-body -->
                            </div>
                        </div>
                    </div>
                </div><!-- /.container-fluid -->
            </div>
        </div>

        <?php require_once ("layout/controlsidebar.php"); ?>
        <?php require_once ("layout/footer.php"); ?>


        <?php require_once ("dist/js/javaScript.php"); ?>


</body>

</html>