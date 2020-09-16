<?php


require_once('../Classes/Pessoa.php');
require_once('../Classes/Garrafa.php');


$pessoa = new Pessoa('Costa','Masculino','23');
$garrafa1 = new Garrafa('600ml','laranja','Plastico');


$pessoa->setGarrafa($garrafa1);


echo $pessoa->getNome() . ' é dono da garrafa de cor ' .$pessoa->getGarrafa()->getCor();