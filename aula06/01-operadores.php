<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $preco = $_GET["p"];
    echo "<br>O preco do produto é R$ " . number_format($preco, 2);
    $preco -= $preco * 10 / 100; // operador usando a mesma variavel += / -=
    echo "<br>O novo preço do produto com 10% de aumento é R$ " . number_format($preco, 2);
    ?>
</body>

</html>