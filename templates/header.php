<nav class="navbar navbar-expand-lg navbar-dark bg-dark  shadow-sm ">
    <div class=" container">
        <a class="navbar-brand" href="/"><strong>Rock <span>Outfit</span></strong></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="navbar-collapse collapse">
            <ul class="navbar-nav flex-grow-1">
                <li class="nav-item">
                    <a class="nav-link text-white" href="/categorias.php">Categorias</a>
                </li>
            </ul>
            <form class="form-inline d-flex ">
                <input class="form-control mr-sm-2" type="search" placeholder="Pesquisar" aria-label="Pesquisar">
                <button class="btn btn-outline-warning my-2 my-sm-0" type="submit">Pesquisar</button>
            </form>
            <div class="align-self-end">
                <ul class="navbar-nav">
                    <?php if (!isset($_SESSION['usuarioLogado'])): ?>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="/login.php">Entrar</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="/registrar.php">Cadastro</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="#">
                                <svg class="bi" width="24" height="24" fill="currentColor">
                                    <use xlink:href="/bi.svg#cart3"/>
                                </svg>
                            </a>
                        </li>
                    <?php else: ?>
                        <li class="nav-item">
                            <span class="nav-link text-white">
                                Olá <?= $_SESSION['usuarioLogado']['nome']; ?>
                                <a href="/app/acoes/deslogar.php" class="nav-link text-red">(Sair)</a>
                            </span>
                        </li>
                        <a class="nav-link text-white" href="/perfil.php">
                            <svg class="bi" width="24" height="24" fill="currentColor">
                                <use xlink:href="/bi.svg#person-fill"/>
                            </svg>
                        </a>
                    <?php endif; ?>
                </ul>
            </div>
        </div>
    </div>
</nav>