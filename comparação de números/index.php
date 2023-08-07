<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teste de PHP</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <?php
    echo '<h1>Observe os números abaixo:</h1>';

    $n1 = 50;
    $n2 = 50;

    echo 'Primeiro número é igual ah: ' . $n1;
    echo '<br />';
    echo 'Segundo número é igual ah: ' . $n2;
    echo '<br />';

    echo '<h2>Agora vamos verificar se é o primeiro é maior ou menor que segundo:</h2>';
    echo '<hr>';
    echo '<h2>Resultado:</h2>';

    if ($n1 > $n2) {
        echo 'O primeiro número que é igual ah: ' . $n1 . ' é maior que o segundo número que é igual ah: ' . $n2;
    } else if ($n1 < $n2) {
        echo 'O segundo número que é igual ah: ' . $n2 . ' é maior que o primeiro número que é igual ah: ' . $n1;
    } else {
        echo 'O primeiro número é igual ah: ' . $n1 . ' e o segundo número também é igual ah: ' . $n2 . ' portanto são iguais.';
    }
    ?>
    <script>
        alert('Verificar se os números são iguais ou se o primeiro é maior que o segundo ou vice-versa')
    </script>
</body>



</html>