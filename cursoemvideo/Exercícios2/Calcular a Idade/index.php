<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calcular a Idade</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <?php
    $atual = date("Y");
    $nasc = $_GET['nasc'] ?? '2000';
    $ano = $_GET['ano'] ?? $atual;
    ?>
    <main>
        <h1>Calculando a sua idade</h1>
        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">
            <label for="nasc">Em que ano vc nasceu?</label>
            <input type="number" name="nasc" id="nasc" required value="<?= $nasc ?>">
            <label for="">Quer saber sua idade em que ano? (atualmente estmos em <strong><?= $atual ?></strong>)</label>
            <input type="number" name="ano" id="ano" required value="<?= $ano ?>">
            <input type="submit" value="Qual será minha idade?">
        </form>
    </main>
    <section>
        <?php
        $idade = $ano - $nasc;
        ?>
        <h2>Resultado</h2>
        <p>Quem nasceu em <?= $nasc ?> vai ter <strong><?= $idade ?> anos</strong> em <?= $ano ?>!</p>
    </section>

</body>

</html>