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
    $x = "abc";
    $$x = "def";

    echo "O conteudo da variavel X é $x";
    echo "<br>A variavel ABC recebeu $abc";

    $a = "jkl";
    $$a = "xyz";
    echo "<br>O conteudo da variavel A é $a";
    echo "<br> a varival jkl recebeu $jkl";

    ?>
</body>

</html>