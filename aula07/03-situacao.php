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
    $n1 = $_GET["a"];
    $n2 = $_GET["b"];
    $m = ($n1 + $n2) / 2;
    echo "as notas foram $n1 e $n2</br>";
    $sit = ($m >= 7) ? "APROVADO" : "REPROVADO";
    echo "O resultado foi $sit a media foi $m";
    ?>
</body>

</html>