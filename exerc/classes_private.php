<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Private and Construct</title>
</head>

<body style="background-color: black; color:white">




    <?php

    //CARRO
    require_once('../Classes/Carro.php');


    $carro1 = new Carro('Mustang', 'Preto', 2);
    // $carro1->setNome('Mustang');
    // $carro1->setCor('Preto');
    // $carro1->setPorta(2);

    $carro2 = new Carro('Lancer', 'Ruby', 4);
    // $carro2->setNome('Lancer');
    // $carro2->setCor('Ruby');
    // $carro2->setPorta(4);

    echo 'Carro: <br>';
    echo $carro1->getNome() . '<br>';
    echo 'cor ' . $carro1->getCor() . '<br>';
    echo 'com ' . $carro1->getPorta() . ' portas<br>';
    echo '<br>';

    echo $carro2->getNome() . '<br>';
    echo 'cor ' . $carro2->getCor() . '<br>';
    echo 'com ' . $carro2->getPorta() . ' portas<br><br>';


    //CADEIRA
    require_once('../Classes/Cadeira.php');

    $cadeira1 = new Cadeira('Escritorio', 'Acolchoado', 'Redondo', 5);

    // $cadeira1->setTipo('Escritorio');
    // $cadeira1->setEncosto('Acolchoado');
    // $cadeira1->setAssento('Redondo');
    // $cadeira1->setPerna(5);

    $cadeira2 = new Cadeira('Cozinha', 'Madeira', ('Quadrado'), 4);

    // $cadeira2->setTipo('Cozinha');
    // $cadeira2->setEncosto('Madeira');
    // $cadeira2->setAssento('Quadrado');
    // $cadeira2->setPerna(4);


    echo 'Cadeira: <br>';
    echo $cadeira1->getTipo() . '<br>';
    echo $cadeira1->getEncosto() . '<br>';
    echo $cadeira1->getAssento() . '<br>';
    echo $cadeira1->getPerna() . '<br>';
    echo '<br>';
    echo $cadeira2->getTipo() . '<br>';
    echo $cadeira2->getEncosto() . '<br>';
    echo $cadeira2->getAssento() . '<br>';
    echo $cadeira2->getPerna() . '<br>';


    //GARRAFA
    require_once('../Classes/Garrafa.php');

    $garrafa1 = new Garrafa('600ml', 'Laranja', 'Plastico');
    // $garrafa1->setCapacidade('600ml');
    // $garrafa1->setCor('Laranja');
    // $garrafa1->setMaterial('Plastico');

    $garrafa2 = new Garrafa('1 Litro', 'Preto', 'Metal');
    // $garrafa2->setCapacidade('1 litro');
    // $garrafa2->setCor('Preto');
    // $garrafa2->setMaterial('Metal');

    echo '<br>Garrafa 1 :<br>';
    echo $garrafa1->getCapacidade() . '<br>';
    echo $garrafa1->getCor() . '<br>';
    echo $garrafa1->getMaterial() . '<br>';
    echo '<br>Garrafa 2 :<br>';
    echo $garrafa2->getCapacidade() . '<br>';
    echo $garrafa2->getCor() . '<br>';
    echo $garrafa2->getMaterial() . '<br>';


    ?>

</body>

</html>