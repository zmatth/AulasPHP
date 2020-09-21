<?php

require_once('Voador.php');
require_once('TorreControle.php');
require_once('Pato.php');
require_once('Aviao.php');
require_once('SuperHomem.php');


$pato = new Pato;
$aviao = new Aviao;
$sH = new SuperHomem;

$torre = new TorreControle;


$torre->adicionarVoador($pato);
$torre->adicionarVoador($aviao);
$torre->adicionarVoador($sH);

$torre->voemTodos();
echo '<br>';
$torre->voemTodos();
echo '<br>';
$torre->voemTodos();