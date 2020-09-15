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

    public function mudarCor($corUser)
    {
        $this->cor = $corUser;
    }
}

$carro1 = new Carro;
$carro1->nome   = 'hb20';
$carro1->cor    = 'Preto';
$carro1->porta  = 3;

$carro2 = new Carro;
$carro2->nome   = 'Mustang';
$carro2->cor    = 'Azul escuro';
$carro2->porta  = 2;


print_r($carro1);
echo '<br>';
$carro1->adicionarPorta(1);
print_r($carro1);
// echo 'O carro '.$carro1->nome.' tem '.$carro1->porta.' portas';
echo '<br>';

print_r($carro2);
echo '<br>';
$carro2->diminuirPorta(1);
print_r($carro2);
echo '<br>';

$carro1->mudarCor('vermelho');
print_r($carro1);
echo '<br>';

echo '<br>';

class Cadeira
{
    public $tipo;
    public $encosto;
    public $assento;
    public $perna;

    public function colocarPernas($qtdPerna)
    {
        if(is_numeric($qtdPerna)&&($qtdPerna >= 0)){
            $this->perna += $qtdPerna;
        }
    }
    public function retirarPernas($qtdPerna)
    {
        if(is_numeric($qtdPerna)&&($qtdPerna >= 0)){
            $this->perna -= $qtdPerna;
        }
    }
    public function mudarEncosto($novoEncosto){
        $this->encosto = $novoEncosto;
    }

}

$cadeira1 = new Cadeira;
$cadeira1->tipo     = 'escritorio';
$cadeira1->encosto  = 'Acolchoado';
$cadeira1->assento  = 'Redondo';
$cadeira1->perna   = 2;

$cadeira2 = new Cadeira;
$cadeira2->tipo     = 'cozinha';
$cadeira2->encosto  = 'madeira';
$cadeira2->assento  = 'quadrado';
$cadeira2->perna   = 4;

print_r($cadeira1);
$cadeira1->colocarPernas(2);
echo '<br>';
print_r($cadeira1);
echo '<br>';
print_r($cadeira2);
echo '<br>';
$cadeira2->retirarPernas(1);
print_r($cadeira2);
echo '<br>';
$cadeira1->mudarEncosto('sem encosto');
print_r($cadeira1);
echo '<br>';





echo '<br>';

class Garrafa
{
    public $capacidade;
    public $cor;
    public $material;

    public function mudarCor($corNova)
    {
        $this->cor = $corNova;
    }

    public function mudarMaterial($tipoMaterial)
    {
        $this->material = $tipoMaterial;
    }
    public function encherGarrafa()
    {
        echo 'A garrafa agora está cheia';
    }


}

$garrafa1 = new Garrafa;
$garrafa1->capacidade   = '600ml';
$garrafa1->cor          = 'laranja';
$garrafa1->material     = 'Plastico';   

$garrafa2 = new Garrafa;
$garrafa2->capacidade   = '1litro';
$garrafa2->cor          = 'Preta';
$garrafa2->material     = 'Aluminio'; 

$garrafa1->mudarCor('cinza');
print_r($garrafa1);
echo '<br>';

$garrafa2->mudarMaterial('Plastico');
print_r($garrafa2);
echo '<br>';

$garrafa1->encherGarrafa();