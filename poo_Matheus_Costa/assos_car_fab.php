<?php

require_once('../Classes/Carro.php');
require_once('../Classes/Fabricante.php');

//criando

$carro1 = new Carro('Mustang','Preto',2,4);
$fabricante = new Fabricante('Ford','USA','123.456.789-00');

$carro1->setFabricante($fabricante);

echo 'O carro ' . $carro1->getNome();
echo '<br>';
echo 'É fabricado pela: ' . $carro1->getFabricante()->getNome() . '<br>';

$carro2 = new Carro('Lancer','Ruby',2,4);
$fabricante2 = new Fabricante('Mitsubishi','USA','000-111-222-44');

$carro2->setFabricante($fabricante2);

echo 'O carro ' . $carro2->getNome() . ' é fabricado pela ' . $carro2->getFabricante()->getNome();