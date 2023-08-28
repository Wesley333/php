<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
    $n1 = $_POST['n1'];
    $n2 = $_POST['n2'];
    $res = $n1 + $n2;
    echo "O resultado da adição é: <strong>$res</strong>";
    ?>
</body>
</html>