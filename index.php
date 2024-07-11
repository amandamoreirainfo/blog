<?php

    require "conn.php";

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="assets/css/global.css">
    <link rel="stylesheet" href="assets/css/home.css">
    <title>Blog</title>
</head>
<body>

    <div class="container">

        <header id="header">
            <div class="menu">
                <h2>Blog</h32>
                <h2><a href="cadastrar.php">Cadastrar</a></h2>
            </div>

            <div class="input-search">

                <i class="bi bi-search"></i>
                <input type="text" name="text" id="text" placeholder="Pesquisar no Blog">

            </div>
        </header>

        <main id="container-post">
            <div class="post">
                <div class="top-post menu">
                    <span>26/11/2024</span>
                    <i class="bi bi-heart"></i>
                </div>
                <div class="content-post">
                    <h3>Título da Notícia</h3>
                    <p>Descrição...</p>
                </div>
            </div>
        </main>

        <?php require "footer.php"; ?>
    </div>

</body>
</html>