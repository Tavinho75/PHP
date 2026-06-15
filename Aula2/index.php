<?php
$titulo = isset($_GET['titulo']) ? trim($_GET['titulo']) : 'Aula 2';
$tituloHtml = htmlspecialchars($titulo, ENT_QUOTES, 'UTF-8');
?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $tituloHtml; ?></title>
    <link rel="stylesheet" href="../style.css">
</head>

<body>

    <header>
        <h1><?php echo $tituloHtml; ?></h1>
    </header>

    <section class="container">

        <div class="card">
            <h2>Exercício 1</h2>
            <a href="exercicio1.php" class="btn">Entrar</a>
        </div>

    </section>
</body>

</html>