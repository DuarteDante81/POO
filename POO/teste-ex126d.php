<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teste</title>
</head>
<body>
    <?php 
    include "ex126d.php";

    $triangulo1 = new Triangulo();
    $triangulo1->setbase(54);
    $triangulo1->setaltura(12);
    echo '<p> A área do triangulo é: '.$triangulo1->calcula_area().'</p>'; 
    ?>

</body>
</html>