<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>calculadora PHP</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <?php

    $n1 = $_GET['n1'] ?? 0;
    $n2 = $_GET['n2'] ?? 0;
    $op = $_GET['op'] ?? '+';

    ?>
    <section>
        <h1>Calculadora</h1>
    </section>
    <main>
        <form action="" method="get">
            <label for="numero1">Digite um número</label>
            <input type="number" name="n1" id="n1" required value="<?= $n1 ?>">
            <label for="op">Escolha a operação</label>
            <input type="text" name="op" id="op" value="<?= $op ?>">
            <label for="numero2">Digite o segundo número</label>
            <input type="number" name="n2" id="n2" value="<?= $n2 ?>">
            <input type="submit" value="Calcular">

        </form>
    </main>

    <section>
        <h2>Resultado da operação</h2>
        <?php

        if ($op) {
            if ($op == '+') {
                $total = $n1 + $n2;
            } else if ($op == '-') {
                $total = $n1 - $n2;
            } else if ($op == '*') {
                $total = $n1 * $n2;
            } else if ($op == '%') {
                $total = $n1 % $n2;
            } else {
                $total = $n1 / $n2;
            }
        }
        echo "O resualtado da operação é: <strong>$total</strong>";
        ?>

    </section>

</body>

</html>
