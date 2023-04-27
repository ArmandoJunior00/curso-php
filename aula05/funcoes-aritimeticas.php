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
    $v1 = $_GET["x"];
    $v2 = $_GET["y"];
    echo "<h2> Os valores rebecidos $v1 e $v2";
    echo "<br>O valor absoluto de $v2 é " . abs($v2);
    echo "<br>o valor de $v1<sup>$v2</sup> e " . pow($v1, $v2);
    echo "<br> A raiz quadrada de $v1 é " . sqrt($v1);
    echo"<br> o valor de $v2 arredondado é " . round($v2);
    echo "<br>a parte inteira de $v2 é " . intval($v2);


    ?>
</body>

</html>