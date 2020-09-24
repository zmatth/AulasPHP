<?php

require_once('Imprimivel.php');
require_once('Impressora.php');
require_once('Contrato.php');
require_once('Foto.php');
require_once('Documento.php');


$c1 = new Contrato('Contrato','boca a boca');
$f1 = new Foto('Instagram','Polaroid');
$d1 = new Documento('Capa','Tcc');
$imp1 = new Impressora('HP');


$imp1->adicionarImprimivel($c1);
$imp1->adicionarImprimivel($f1);
$imp1->adicionarImprimivel($d1);

$imp1->imprimirTudo();
