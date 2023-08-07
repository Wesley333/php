<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Programa em PHP</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <form method="post">
        <?php
        echo '<input type="number" id="number1" name="number1" placeholder="Digite o primeiro número" style="width: 300px;height: 25px;margin-bottom: 6px;text-align:center;">';
        echo '<br />';
        echo '<input type="number" id="number2" name="number2" placeholder="Digite o segundo número" style="width: 300px;height: 25px;text-align:center;">';
        echo '<br>';
        echo '<button type="submit" style="width: 115px; cursor: pointer;">Enviar</button> ';
        echo '<h1>Observe os números abaixo:</h1>';
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Programa em PHP</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <form method="post">
        <?php
        echo '<input type="number" id="number1" name="number1" placeholder="Digite o primeiro número" style="width: 300px;height: 25px;margin-bottom: 6px;text-align:center;">';
        echo '<br />';
        echo '<input type="number" id="number2" name="number2" placeholder="Digite o segundo número" style="width: 300px;height: 25px;text-align:center;">';
        echo '<br>';
        echo '<button type="submit" style="width: 115px; cursor: pointer;">Enviar</button> ';
        echo '<h1>Observe os números abaixo:</h1>';

        echo "O Primeiro número é igual ah:  $_POST[number1]";
        echo '<br />';
        echo "O Segundo número é igual ah: $_POST[number2]";
        echo '<br />';
        echo '<hr>';
        echo '<h2>Agora vamos verificar se é o primeiro é maior ou menor que segundo:</h2>';

        if ($_POST['number1'] > $_POST['number2']) {
            $maior_numero = $_POST['number1'];
            $menor_numero = $_POST['number2'];
            echo "O primeiro número que é igual ah: $_POST[number1] é maior que o segundo número que é igual ah:  $_POST[number2]";
        } else if ($_POST['number1'] < $_POST['number2']) {
            $maior_numero = $_POST['number2'];
            $menor_numero = $_POST['number1'];
            echo "O segundo número que é igual ah: $_POST[number2]  é maior que o primeiro número que é igual ah:  $_POST[number1]";
        } else {
            echo "O primeiro número é igual ah: $_POST[number1]  e o segundo número também é igual ah: $_POST[number2] portanto são iguais.";
        }

        echo '<hr>';

        echo '<h2>A soma do Primeiro número mais o Segundo número: </h2>';
        $soma = $_POST['number1'] + $_POST['number2'];
        echo "A soma dos números $_POST[number1]  +  $_POST[number2]  eh igual ah: $soma";
        echo '<br>';

        echo '<hr>';
        echo "<h2>Os números entre $menor_numero e $maior_numero em ordem crescente são:</h2>";
        echo '<br>';

        for ($i = $menor_numero + 1; $i < $maior_numero; $i++) {
            echo $i;
            if ($i < $maior_numero - 1) {
                echo ', ';
            }
        }

        echo '<hr>';
        echo "<h2>Os números pares entre $menor_numero e $maior_numero em ordem crescente são:</h2>";
        echo '<br>';

        for ($i = $menor_numero + 1; $i < $maior_numero; $i++) {
            if ($i % 2 == 0) {
                echo $i;
                if ($i < $maior_numero - 2) {
                    echo ', ';
                }
            }
        }

        echo '<hr>';
        echo "<h2 class='echo'>Os números</h2> <h2 class='fundoImpar';'>impares</h2> e <h2 class='fundoPar'>pares</h2> <h2 class='echo'>entre $menor_numero e $maior_numero em ordem crescente são:</h2>";
        echo '<br>';

        for ($i = $menor_numero + 1; $i < $maior_numero; $i++) {
            if ($i % 2 != 0) {
                echo "<div class='fundoImpar'>" . $i . "</div>";
                if ($i < $maior_numero - 1) {
                    echo ', ';
                }
            }
            if ($i % 2 == 0) {
                echo "<div class='fundoPar'>" . $i . "</div>";
                if ($i < $maior_numero - 1) {
                    echo ', ';
                }
            }
        }

        ?>
    </form>
</body>

</html>

        echo "O Primeiro número é igual ah:  $_POST[number1]";
        echo '<br />';
        echo "O Segundo número é igual ah: $_POST[number2]";
        echo '<br />';
        echo '<hr>';
        echo '<h2>Agora vamos verificar se é o primeiro é maior ou menor que segundo:</h2>';

        if ($_POST['number1'] > $_POST['number2']) {
            $maior_numero = $_POST['number1'];
            $menor_numero = $_POST['number2'];
            echo "O primeiro número que é igual ah: $_POST[number1] é maior que o segundo número que é igual ah:  $_POST[number2]";
        } else if ($_POST['number1'] < $_POST['number2']) {
            $maior_numero = $_POST['number2'];
            $menor_numero = $_POST['number1'];
            echo "O segundo número que é igual ah: $_POST[number2]  é maior que o primeiro número que é igual ah:  $_POST[number1]";
        } else {
            echo "O primeiro número é igual ah: $_POST[number1]  e o segundo número também é igual ah: $_POST[number2] portanto são iguais.";
        }

        echo '<hr>';

        echo '<h2>A soma do Primeiro número mais o Segundo número: </h2>';
        $soma = $_POST['number1'] + $_POST['number2'];
        echo "A soma dos números $_POST[number1]  +  $_POST[number2]  eh igual ah: $soma";
        echo '<br>';

        echo '<hr>';
        echo "<h2>Os números entre $menor_numero e $maior_numero em ordem crescente são:</h2>";
        echo '<br>';

        for ($i = $menor_numero + 1; $i < $maior_numero; $i++) {
            echo $i;
            if ($i < $maior_numero - 1) {
                echo ', ';
            }
        }

        echo '<hr>';
        echo "<h2>Os números pares entre $menor_numero e $maior_numero em ordem crescente são:</h2>";
        echo '<br>';

        for ($i = $menor_numero + 1; $i < $maior_numero; $i++) {
            if ($i % 2 == 0) {
                echo $i;
                if ($i < $maior_numero - 2) {
                    echo ', ';
                }
            }
        }

        echo '<hr>';
        echo "<h2 class='echo'>Os números</h2> <h2 class='fundoImpar';'>impares</h2> e <h2 class='fundoPar'>pares</h2> <h2 class='echo'>entre $menor_numero e $maior_numero em ordem crescente são:</h2>";
        echo '<br>';

        for ($i = $menor_numero + 1; $i < $maior_numero; $i++) {
            if ($i % 2 != 0) {
                echo "<div class='fundoImpar'>" . $i . "</div>";
                if ($i < $maior_numero - 1) {
                    echo ', ';
                }
            }
            if ($i % 2 == 0) {
                echo "<div class='fundoPar'>" . $i . "</div>";
                if ($i < $maior_numero - 1) {
                    echo ', ';
                }
            }
        }

        ?>
    </form>
</body>

</html>
