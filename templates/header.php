<nav class="navbar navbar-expand-lg navbar-dark bg-dark  shadow-sm ">
    <div class=" container">
        <a class="navbar-brand" href="/"><strong>Rock <span>Outfit</span></strong></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="navbar-collapse collapse">
            <ul class="navbar-nav flex-grow-1">
                <li class="nav-item">
                    <?php
                    require_once ('templates/links.php');
                    ?>
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
                    <?php else: ?>
                        <li class="nav-item">
                            <span class="text-white">Olá <?= $_SESSION['usuarioLogado']['nome']; ?></span>
                        </li>
                    <?php endif; ?>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="#">
                            <svg class="bi" width="24" height="24" fill="currentColor">
                                <use xlink:href="/bi.svg#cart3"/>
                            </svg>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="align-self-end">
                <ul class="navbar-nav">
                    <?php if (!isset($_SESSION['usuarioLogado'])): ?>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="/registrar.php">Registrar</a>
                        </li>
                    <?php else: ?>
                        <li class="nav-item">
                            <span class="text-white">Olá <?= $_SESSION['usuarioLogado']['nome']; ?></span>
                        </li>
                    <?php endif; ?>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="#">
                            <svg class="bi" width="24" height="24" fill="currentColor">
                                <use xlink:href="/bi.svg#cart3"/>
                            </svg>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</nav>