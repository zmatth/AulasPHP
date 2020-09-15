<?php

class Carro{
    public $nome;
    public $cor;
    public $porta;    

    public function adicionarPorta(int $qtdPorta)
    {      

        if (is_numeric($qtdPorta) && ($qtdPorta >= 0))
        {
            $this->porta += $qtdPorta;
        }
    }

    public function diminuirPorta(int $qtdPorta)
    {
        
        if (is_numeric($qtdPorta) && ($qtdPorta >= 0))
        {
            $this->porta -= $qtdPorta;
        }
    }
}

$carro1 = new Carro;
$carro1->nome   = 'Gol';
$carro1->cor    = 'Preto';
$carro1->porta = 2;

$carro1->adicionarPorta(4);
print_r($carro1);
echo 'O carro '.$carro1->nome.' tem '.$carro1->porta.' portas';
echo '<br>';

$carro1->diminuirPorta(6);
print_r($carro1);


$carro2 = new Carro;
$carro2->nome   = 'Mustang';
$carro2->cor    = 'Azul escuro';
$carro2->porta = 2;

// var_dump($carro1);
// echo '<br>';
// var_dump($carro2);


echo '<br>';

class Cadeira
{
    public $tipo;
    public $encosto;
    public $assento;
    public $pernas;
}

$cadeira1 = new Cadeira;
$cadeira1->tipo     = 'escritorio';
$cadeira1->encosto  = 'Acolchoado';
$cadeira1->assento  = 'Redondo';
$cadeira1->pernas   = '2 Pernas';

$cadeira2 = new Cadeira;
$cadeira2->tipo     = 'cozinha';
$cadeira2->encosto  = 'madeira';
$cadeira2->assento  = 'quadrado';
$cadeira2->pernas   = '4 Pernas';

// var_dump($cadeira1);
// echo '<br>';
// var_dump($cadeira2);

echo '<br>';

class Garrafa
{
    public $capacidade;
    public $cor;
    public $material;
}

$garrafa1 = new Garrafa;
$garrafa1->capacidade   = '600ml';
$garrafa1->cor          = 'laranja';
$garrafa1->material     = 'Plastico';   

$garrafa2 = new Garrafa;
$garrafa2->capacidade   = '1litro';
$garrafa2->cor          = 'Preta';
$garrafa2->material     = 'Aluminio'; 

// var_dump($garrafa1);
// echo '<br>';
// var_dump($garrafa2);