<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teste</title>
</head>
<body>
    <?php 
    include "ex125c.php";
    
    $aeroporto1 = new Aeroporto();
    $aeroporto1->setnome("Aeroporto");
    echo '<p>'. $aeroporto1->getnome().'</p>';      
    $aeroporto1->setcidade("São Paulo");
    echo '<p>'. $aeroporto1->getcidade().'</p>';
    ?>
</body>
</html>