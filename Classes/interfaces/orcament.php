<?php
require_once('Orcamento.php');
require_once('Orcavel.php');
require_once('Produto2.php');
require_once('Servico.php');



$p1 = new Produto2('Balinha',10,5);

$o1 = new Orcamento($p1, 2);


echo $o1->calculaTotal();
