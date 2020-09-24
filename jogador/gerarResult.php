<?php

require_once('jogadorDeFutebol.php');
require_once('SessaoDeTreinamento.php');
require_once('Atleta.php');
require_once('Prova.php');


$j1 = new JogadorDeFutebol('Player 1');
$j2 = new JogadorDeFutebol('Player 2');

$ss1 = new SessaoDeTreinamento;

$ss1->treinar($j1);
$ss1->treinar($j2);


$atl1 = new Atleta('Atleta 1',1,100);
$atl2 = new Atleta('Atleta 2',2,80);

$prv1 = new Prova(1,100);
$prv2 = new Prova(2,50);
$prv3 = new Prova(4,30);


$prv1->podeRealizar($atl1);
$prv1->podeRealizar($atl2);


$prv2->podeRealizar($atl1);
$prv2->podeRealizar($atl2);

$prv3->podeRealizar($atl1);
$prv3->podeRealizar($atl2);


