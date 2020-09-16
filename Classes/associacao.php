<?php

require_once('../Classes/Carro.php');
require_once('../Classes/Fabricante.php');

//criando

$carro1 = new Carro('Mustang','Preto',2);
$fabricante = new Fabricante('Ford','USA','123.456.789-00');

$carro1->setFabricante($fabricante);

echo 'O carro ' . $carro1->getNome();
echo '<br>';
echo 'É fabricado pela: ' . $carro1->getFabricante()->getNome();