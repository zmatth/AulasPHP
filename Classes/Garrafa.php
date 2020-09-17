<?php
class Garrafa extends Utensilio
{
    protected $capacidade;
    protected $cor;
    protected $material;


    public function __construct($categoria, $capacidade, $cor, $material)
    {
       parent ::__construct($categoria);
       
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