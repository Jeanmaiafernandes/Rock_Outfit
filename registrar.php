<?php
    include_once ('app/bootstrap.php');
    require_once ('app/acoes/registrar.php');

    global $registrarError;
    global $registrarSucessoMensagem;
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Rock Outfit</title>
    <link rel="stylesheet" href="css/Home.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark border-bottom shadow-sm mb-3">
    <div class=" container">
        <a class="navbar-brand" href="/"><strong>Rock Outfit</strong></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="navbar-collapse collapse">
            <ul class="navbar-nav flex-grow-1">
                <li class="nav-item">
                    <a class="nav-link text-white" href="/">Home</a>
                </li>
            </ul>
            <div class="align-self-end">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link text-white" href="/login.php">Entrar</a>
                        <a class="nav-link text-white" href="/registrar.php">Registrar</a>
                    </li>
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
<main>
    <div class="container-fluid">
        <div class="row">
            <?php if ($registrarError !== null): ?>
                <div class="text-bg-danger p-3">
                    <?= $registrarError; ?>
                </div>
            <?php endif; ?>

            <?php if ($registrarSucessoMensagem !== null): ?>
                <div class="text-bg-success p-3">
                    <?= $registrarSucessoMensagem; ?>
                </div>
            <?php endif; ?>
            <form method="post" action="/registrar.php">
                <div class="form-group">
                    <label for="exampleInputName">Nome</label>
                    <input name="nome" type="text" class="form-control" placeholder="nome" required>
                </div>

                <div class="form-group">
                    <label for="exampleInputEmail1">E-mail</label>
                    <input name="email" type="email" class="form-control" placeholder="email" required>
                </div>

                <div class="form-group">
                    <label for="exampleInputPassword1">Senha</label>
                    <input name="senha" type="password" class="form-control" placeholder="senha" required>
                </div>

                <div class="form-group">
                    <label for="exampleInputPassword1">Repetir senha</label>
                    <input name="confirmacao_senha" type="password" class="form-control" placeholder="senha" required/>
                </div>

                <button type="submit" class="btn btn-primary">Criar conta</button>
            </form>
        </div>
    </div>
</main>

<?php
require_once ('templates/footer.php');
require_once ('templates/bottomTemplates/bottom_scripts.php')
?>

</body>
</html>

