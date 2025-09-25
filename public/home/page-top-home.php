<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <a class="navbar-brand d-flex align-items-center" href="#">
            <img src="/css/imgs/logo.png" alt="Ícone" width="48" height="48" class="me-2">
            <span>LeiaTudo</span>
        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarMain">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarMain">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link" href="#">Cadastrar E-Book</a>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="menuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Menu
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="menuLink">
                        <li><a class="dropdown-item" href="#">Hamburger</a></li>
                        <li><a class="dropdown-item" href="#">Pizza</a></li>
                        <li><a class="dropdown-item" href="#">Hot-Dog</a></li>
                        <li><a class="dropdown-item" href="#">Snacks</a></li>
                        <li><a class="dropdown-item" href="#">Batata Recheada</a></li>
                    </ul>
                </li>
            </ul>

            <span class="navbar-text me-3">
                <?php echo $_SESSION['usuario']; ?>
            </span>
            <a href="/logout.php" class="btn btn-outline-danger">Sair</a>
        </div>
    </div>
</nav>
