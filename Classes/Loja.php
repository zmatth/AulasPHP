<?php


Class Loja
{
    private $nome;
    private $endereco;
    private $cnpj;
    private $cadeira;


    public function __construct($nome, $endereco, $cnpj)
    {
        $this->nome = $nome;
        $this->endereco = $endereco;
        $this->cnpj = $cnpj;
    }


    public function getNome()
    {
        return $this->nome;
    }

    public function setCadeira(Cadeira $cadeira)
    {
        $this->cadeira = $cadeira;
    }

    public function getCadeira()
    {
        return $this->cadeira;
    }
}