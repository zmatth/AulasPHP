<?php

require_once('Veiculo.php');
require_once('Carro.php');
require_once('Fabricante.php');


$carro1 = new Carro('Lancer','Ruby',4,4);

$fabricante1 = new Fabricante('Mitsubishi','USA','123-456-789-00');


$carro1->setFabricante($fabricante1);


print_r($carro1);

echo '<br>' .$carro1->getNome() . ' fabricado pela ' . $carro1->getFabricante()->getNome() . ' e tem ' . $carro1->getRoda() . ' rodas.';
$carro1->acelerar(' 5s para chegar em 100 km/h');
echo '<br>';
$carro1->freia();