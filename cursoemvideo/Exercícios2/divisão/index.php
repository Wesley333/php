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
    $valor1 = $_GET['v1'] ?? 0;
    $valor2 = $_GET['v2'] ?? 1;
    $dividendo = $valor1;
    $divisor = $valor2;
    ?>
    <main>
        <h1>Anatomia de uma Divisão</h1>
        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">
            <label for="v1">Dividendo</label>
            <input type="number" name="v1" id="v1" value="<?= $valor1 ?>">
            <label for="v2">Divisor</label>
            <input type="number" name="v2" id="v2" value="<?= $valor2 ?>">
            <input type="submit" value="Analisar">
        </form>
    </main>

    <section>
            <h2>Edtrutura da Divisão</h2>
        <?php
            $divisao = intdiv($valor1, $valor2);
            $resto = $valor1 % $valor2;

            echo "O dividendo é: $dividendo";
            echo '<br>';
            echo "O divisor é: $divisor";
            echo '<br>';
            echo "O resto da divisão é igual a: $resto";
            echo '<br>';
            echo "O resultado da Divisão é igual a:$divisao";

            
        ?>
        <table class="divisao">
            <tr>
                <td><?=$dividendo?></td>
                <td><?=$divisor?></td>
            </tr>
            <tr>
                <td><?=$resto?></td>
                <td><?=$divisao?></td>
            </tr>
        </table>
    </section>

</body>

</html>