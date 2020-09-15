<?php

class Carro
{
    private $nome;
    private $cor;
    private $porta;    


    public function getNome()
    {
        return $this->nome;
    }

    public function setNome($nome)
    {
        $this->nome = $nome;
    }

    public function getCor()
    {
        return $this->cor;
    }

    public function setCor($cor)
    {
        $this->cor = $cor;
    }

    public function getPorta()
    {
        return $this->porta;
    }

    public function setPorta($porta)
    {
        $this->porta = $porta;
    }
}


$carro1 = new Carro;
$carro1->setNome('Mustang');
$carro1->setCor('Preto');
$carro1->setPorta(2);

$carro2 = new Carro;
$carro2->setNome('Lancer');
$carro2->setCor('Ruby');
$carro2->setPorta(4);

echo 'Carro: <br>';
echo $carro1->getNome() . '<br>';
echo 'cor ' .$carro1->getCor() . '<br>';
echo 'com ' . $carro1->getPorta() . ' portas<br>';

echo $carro2->getNome() . '<br>';
echo 'cor ' .$carro2->getCor() . '<br>';
echo 'com ' . $carro2->getPorta() . ' portas<br><br>';

class Cadeira
{
    private $tipo;
    private $encosto;
    private $assento;
    private $perna;

    public function getTipo()
    {
        return $this->tipo;
    }

    public function setTipo($tipo)
    {
        $this->tipo = $tipo;
    }

    public function getEncosto()
    {
        return $this->encosto;
    }

    public function setEncosto($encosto)
    {
        $this->encosto = $encosto;
    }

    public function getAssento()
    {
        return $this->assento;
    }

    public function setAssento($assento)
    {
        $this->assento = $assento;
    }

    public function getPerna()
    {
        return $this->perna;
    }

    public function setPerna($perna)
    {
        $this->perna = $perna;
    }

}

$cadeira1 = new Cadeira;

$cadeira1->setTipo('Escritorio');
$cadeira1->setEncosto('Acolchoado');
$cadeira1->setAssento('Redondo');
$cadeira1->setPerna(5);

$cadeira2 = new Cadeira;

$cadeira2->setTipo('Cozinha');
$cadeira2->setEncosto('Madeira');
$cadeira2->setAssento('Quadrado');
$cadeira2->setPerna(4);


echo 'Cadeira: <br>';
echo $cadeira1->getTipo() . '<br>';
echo $cadeira1->getEncosto() . '<br>';
echo $cadeira1->getAssento() . '<br>';
echo $cadeira1->getPerna() . '<br>';

echo $cadeira2->getTipo() . '<br>';
echo $cadeira2->getEncosto() . '<br>';
echo $cadeira2->getAssento() . '<br>';
echo $cadeira2->getPerna() . '<br>';


class Garrafa
{
    private $capacidade;
    private $cor;
    private $material;


    public function getCapacidade()
    {
        return $this->capacidade;
    }

    public function setCapacidade($capacidade)
    {
        $this->capacidade = $capacidade;
    }

    public function getCor()
    {
        return $this->cor;
    }

    public function setCor($cor)
    {
        $this->cor = $cor;
    }

    public function getMaterial()
    {
        return $this->material;
    }

    public function setMaterial($material)
    {
        $this->material = $material;
    }
}

$garrafa1 = new Garrafa;
$garrafa1->setCapacidade('600ml');
$garrafa1->setCor('Laranja');
$garrafa1->setMaterial('Plastico');

$garrafa2 = new Garrafa;
$garrafa2->setCapacidade('1 litro');
$garrafa2->setCor('Preto');
$garrafa2->setMaterial('Metal');

echo '<br>Garrafa 1 :<br>';
echo $garrafa1->getCapacidade() . '<br>';
echo $garrafa1->getCor() . '<br>';
echo $garrafa1->getMaterial() . '<br>';
echo '<br>Garrafa 2 :<br>';
echo $garrafa2->getCapacidade() . '<br>';
echo $garrafa2->getCor() . '<br>';
echo $garrafa2->getMaterial() . '<br>';