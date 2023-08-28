<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>
            Resultado Final
        </h1>
    </header>

    <main>
        <?php
        $num = $_POST['numero'];
        echo "O numero escolhido foi: <strong>$num</strong>";
        echo '<br>';
        $ant = $num - 1;
        echo "O seu antecessor é $ant";
        $suc = $num + 1;
        echo '<br>';
        echo "O seu sucessor é $suc";
        ?>
    </main>

</body>
</html>