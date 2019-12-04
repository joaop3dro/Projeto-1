<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
        <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
            style="opacity: .8">
        <span class="brand-text font-weight-light">AdminLTE 3</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="dist/img/sparrow.jpg" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="index.php" class="d-block">Events</a>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                <li class="nav-item">
                    <a href="cliente.php" class="nav-link <?php echo((basename($_SERVER['SCRIPT_NAME']) == 'cliente.php' ? 'active' : '' ));?>">
                        <i class="fas fa-users nav-icon"></i>
                        <p>Clientes</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="evento.php" class="nav-link <?php echo((basename($_SERVER['SCRIPT_NAME']) == 'evento.php' ? 'active' : '' ));?>">
                        <i class="fas fa-calendar-day nav-icon"></i>
                        <p>Eventos</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="fornecedor.php" class="nav-link <?php echo((basename($_SERVER['SCRIPT_NAME']) == 'fornecedor.php' ? 'active' : '' ));?>">
                        <i class="fas fa-building nav-icon"></i>
                        <p>Fornecedores</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="fas fa-user-tie nav-icon"></i>
                        <p>Parceiros</p>
                    </a>
                </li>
                
                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-cogs"></i>
                        <p>
                            Cadastros auxiliares
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="categorias.php" class="nav-link <?php echo((basename($_SERVER['SCRIPT_NAME']) == 'categorias.php' ? 'active' : '' ));?>">
                                <i class="far fa-bookmark nav-icon"></i>
                                
                                <p>Categorias</p>     
                            </a>
                        </li>
                    </ul>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="subcategoria.php" class="nav-link <?php echo((basename($_SERVER['SCRIPT_NAME']) == 'subcategoria.php' ? 'active' : '' ));?>">
                                <i class="far fa-bookmark nav-icon"></i>
                                
                                <p>Subcategorias</p>     
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-sign-out-alt"></i>
                        <p>
                            Sair                            
                        </p>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>