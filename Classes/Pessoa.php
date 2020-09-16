<?php

class Pessoa
{
    private $nome;
    private $genero;
    private $idade;
    private $garrafa;


    public function __construct($nome, $genero, $idade)
    {
        $this->nome = $nome;
        $this->genero = $genero;
        $this->idade = $idade;
    }

    public function getNome()
    {
        return $this->nome;
    }

    public function setGarrafa(Garrafa $garrafa)
    {
        $this->garrafa = $garrafa;
    }
    public function getGarrafa()
    {
        return $this->garrafa;
    }
}

