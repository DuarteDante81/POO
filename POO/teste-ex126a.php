<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teste</title>
</head>
<body>
    <?php 
    include "ex126a.php";

    $quadrado1 = new Quadrado();
    $quadrado1->setlado(8);
    echo'<p> A area do quadrado é: '.$quadrado1->calcula_area().'</p>';
    ?>

</body>
</html>