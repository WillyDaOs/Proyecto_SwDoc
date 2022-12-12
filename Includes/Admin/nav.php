<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
    <div class="position-sticky pt-3">
        <ul class="nav flex-column">
            <li class="nav-item">
                <a class="nav-link <?= $vista == 1 ? 'active' : ''; ?>" aria-current="page" href="../dashboard/index.php">
                    <span data-feather="home"></span>
                    Procesos
                </a>
                <!-- condicion class active para mantener el cambio de pagina
                    <a class="nav-link <?php if ($vista == 1) {
                                            echo "active";
                                        } ?>" aria-current="page" href="../dashboard/index.php">
                    <span data-feather="home"></span>
                    Procesos
                </a> -->
            </li>
            <li class="nav-item">
                <a class="nav-link <?= $vista == 2 ? 'active' : ''; ?>" href="../Usuario/index.php">
                    <span data-feather="users"></span>
                    Usuarios
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link <?= $vista == 3 ? 'active' : ''; ?>" href="../servicios/index.php">
                    <span data-feather="file"></span>
                    Servicios y Contratos
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">
                    <span data-feather="shopping-cart"></span>
                    Productos
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="#">
                    <span data-feather="bar-chart-2"></span>
                    Reportes
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">
                    <span data-feather="layers"></span>
                    Radicación
                </a>
            </li>
        </ul>

        <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
            <span>Digitalización</span>
            <a class="link-secondary" href="#" aria-label="Add a new report">
                <span data-feather="plus-circle"></span>
            </a>
        </h6>
        <ul class="nav flex-column mb-2">
            <li class="nav-item">
                <a class="nav-link" href="#">
                    <span data-feather="file-text"></span>
                    Indexacion
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">
                    <span data-feather="file-text"></span>
                    Reporte
                </a>
            </li>
        </ul>
    </div>
</nav>