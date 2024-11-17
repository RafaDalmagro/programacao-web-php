<aside>
    <div class="d-flex flex-column flex-shrink-0 p-3 text-white bg-dark" style="width: 280px;">
        <div class="user">
            <div class="img-user">
                <img src="../../../img/Avatar.png" alt="User image">
            </div>
            <span class="fs-4">Rafael</span>
        </div>
        <hr>
        <ul class="nav nav-pills flex-column mb-auto">
            <li class="nav-item">
                <a href="../../../index.php" class="nav-link <?php echo (basename($_SERVER['PHP_SELF']) == 'index.php') ? 'active' : ''; ?>" aria-current="page">
                    <span>Inicio</span>
                </a>
            </li>
            <li>
                <a href="../produto/listarProduto.php" class="nav-link <?php echo (basename($_SERVER['PHP_SELF']) == 'listarProduto.php') ? 'active' : ''; ?>">
                    <span>Produto</span>
                </a>
            </li>
            <li>
                <a href="../categoria/listarCategoria.php" class="nav-link <?php echo (basename($_SERVER['PHP_SELF']) == 'listarCategoria.php') ? 'active' : ''; ?>">
                    <span>Categoria</span>
                </a>
            </li>
            <li>
                <a href="../cliente/listarCliente.php" class="nav-link <?php echo (basename($_SERVER['PHP_SELF']) == 'listarCliente.php') ? 'active' : ''; ?>">
                    <span>Clientes</span>
                </a>
            </li>
        </ul>
        <hr class="line">
        <div class="last-item">
            <a href="#" class="nav-link text-white">
                <i class="bi bi-box-arrow-left"></i>
                <span>Sair</span>
            </a>
        </div>
    </div>
</aside>
