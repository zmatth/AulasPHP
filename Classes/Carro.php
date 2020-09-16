<?php
class Carro
{
    private $nome;
    private $cor;
    private $porta;

    public function __construct($nome, $cor, $porta)
    {
        $this->nome     = $nome;
        $this->cor      = $cor;
        $this->porta    = $porta;
    }


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