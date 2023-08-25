<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Divisão</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <?php
    $num = $_GET['n1'] ?? 1;
    $raiz_quadrada = sqrt( $num);
    $raiz_cubica = pow($num, 1/3);
    ?>
    <main>
        <h1>Informe um número</h1>
        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">
            <label for="n1">Número</label>
            <input type="number" name="n1" id="n1" value="<?= $num ?>" >
            <input type="submit" value="Calcular Raízes">
        </form>
    </main>

    <section>
        <h2>resultado Final</h2>
        <?php

        echo "<p>Analisando o <strong>número $num</strong>, temos: </p>";

        ?>
        <ul>
            <li><?= "A sua raiz quadrada é <strong>" . number_format($raiz_quadrada, 3, ",", ".").". </strong>" ?></li>
        </ul>
        <ul>
            <li><?= "A sua raiz cúbica é <strong>" . number_format($raiz_cubica, 3, ",", ".").". </strong>" ?></li>
        </ul>
        
    </section>


</body>

</html>