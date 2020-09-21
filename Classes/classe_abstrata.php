<?php

require_once('Utensilio.php');
require_once('Garrafa.php');


$garrafa1 = new Garrafa('Hidratação','600ml','Laranja','Plastico');

echo 'na catagoria ' . $garrafa1->getCategoria() . ' tem a garrafa de: ' . $garrafa1->getCapacidade();