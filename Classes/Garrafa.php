<?php
class Garrafa
{
    private $capacidade;
    private $cor;
    private $material;


    public function __construct($capacidade, $cor, $material)
    {
        $this->capacidade = $capacidade;
        $this->cor = $cor;
        $this->material = $material;
    }

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