<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tipos primitivos em PHP</title>
</head>

<body>
    <h1>Teste de tipos primitivos</h1>
    <?php
    // 0x = hexadecimal 0b = binario 0 = octal 
    // $num = 010;
    // echo "O valor da varialvel é $num";

    // $v = "Wesley";
    // var_dump($v);

    // $num = 3e2; 3 x 10(2)
    // echo = "O valor é $num";

    // $num = (float) "950"; //ao inves de mostrar que o 950 é uma string vai mostrar que o 950 é do tipo float;
    // var_dump($num);

    // $casado = true;
    // var_dump($casado);
    // echo "O valor para casado é $casado";

    // $vet = [6, 2.5, "Maria", 3, false];
    // var_dump($vet);

    class Pessoa{
        private string $nome;
    }

    $p = new Pessoa;
    var_dump($p);
    ?>
</body>

</html>