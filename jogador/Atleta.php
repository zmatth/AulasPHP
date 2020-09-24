<?php

class Atleta
{
    private $nome;
    private $nivel;
    private $energia;


    public function __construct($nome, $nivel, $energia)
    {
    
    $this->nome = $nome;
    $this->nivel = $nivel;
    $this->energia = $energia;

    }

    public function getNome()
    {
        return $this->nome;
    }

    public function getNivel()
    {
        return $this->nivel;
    }

    public function getEnergia()
    {
        return $this->energia;
    }


}