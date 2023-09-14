<?php
require_once ('app/bootstrap.php');
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
      require_once ('templates/navCategorias.php');
      ?>
  </header>

  <body>
    <hr>
    <main>
        <div class="carousel">
            <?php
            require_once('templates/carousel.php');
            ?>
        </div>
        <div class="products">
        <h1 class="tittles">
          Camisas <span>Rock and Roll</span> 
        </h1>
          <?php
            require_once ('templates/cards.php');
          ?>
        <button class="ver-mais">Ver todos os modelos</button>
      </div>
    </main>
    </hr>
    <?php
    require_once ('templates/footer.php');
    require_once ('templates/bottomTemplates/bottom_scripts.php')
    ?>
</body>
</html>