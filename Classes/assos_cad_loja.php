<?php

require_once('../Classes/Loja.php');
require_once('../Classes/Cadeira.php');


$loja1 = new Loja('Mobly','Centro de SP','8765766878666');
$cadeira1 = new Cadeira ('Escritorio','Acolchoado','Redondo',5);

$loja1->setCadeira($cadeira1);

echo 'a loja ' . $loja1->getNome() . ' trabalha com cadeiras de ' . $loja1->getCadeira()->getTipo();