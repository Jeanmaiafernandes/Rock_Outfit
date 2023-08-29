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
    <link rel="stylesheet" href="css/home.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css"
          rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>

<header>
    <?php
        require_once('templates/header.php');
    ?>
</header>

<body>
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

