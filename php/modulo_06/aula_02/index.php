<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="bg">
    
<?php
    $nome = 'wesley';
    $idade = 19;
    $cidade = 'Novo Cruzeiro';

    echo $nome;
    echo '<br />';
    echo $idade;
    echo '<br />';
    echo $cidade;
    echo '<hr>';
    echo '<br />';

    echo 'Leia a frase a baixo:';
    echo '<br />';
    echo 'Meu nome é    '.$nome.'   tenho  '.$idade.'  anos  '.'e moro em   '.$cidade;
    echo '<hr>';
    echo '<br />';

    for($i = 0; $i < 10; $i++){
        echo 'Wesley <br />';
    }
    echo '<hr>';

    $a = 1;
    $b = 1;
    if($a < $b){
        echo 'true';
    }else if($a == $b){
        echo 'igual';
    }
    else{
        echo 'false';
    }
    echo '<hr>';

    $n1=0;
    while($n1 < 10){
        echo $n1;
        $n1++;
        echo '<br />';
    }
    echo '<hr>';

    $arr = array('Wesley','Coelho','Santos');

    foreach($arr as $key => $value){
        echo $key;
        echo '=>';
        echo $value;
        echo '<br />';
    }
    echo '<hr>';
?>
</div>
</body>
</html>
