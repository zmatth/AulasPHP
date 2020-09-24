<?php

require_once('Cliente.php');
require_once('Conta.php');


$c1 = new Cliente('Matheus','Costa');
$c2 = new Cliente('Fulano','Ciclano');

$conta1 = new Conta('001',1000,$c1);
$conta2 = new Conta('002',500,$c2);


$conta1->deposito(500);
$conta2->saque(100);
$conta2->saque(400);
$conta2->saque(1);
$conta1->saque(1501);