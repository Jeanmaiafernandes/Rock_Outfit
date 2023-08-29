<?php
    require_once ('app/bootstrap.php');
    require_once ('app/acoes/login.php');

    global $loginError;
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Rock Outfit</title>
    <link rel="stylesheet" href="css/home.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
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
                <?php if ($loginError !== null): ?>
                    <div class="text-bg-danger p-3">
                        <?= $loginError; ?>
                    </div>
                <?php endif; ?>
                <form method="post" action="/login.php">
                    <div class="form-group">
                        <label for="exampleInputEmail1">E-mail</label>
                        <input name="email" type="email" class="form-control" placeholder="E-mail">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Password</label>
                        <input name="senha" type="password" class="form-control" placeholder="Password">
                    </div>
                    <button type="submit" class="btn btn-primary">Login</button>
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
