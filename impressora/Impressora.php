<?php

class Impressora
{

    private $nome;
    private $listaImprimiveis;

    public function __construct($nome)
    {
        $this->nome = $nome;
    }

    public function adicionarImprimivel(Imprimivel $umImprimivel)
    {
        $this->listaImprimiveis[] = array($umImprimivel);
    }

    public function imprimirTudo()
    {
        foreach ($this->listaImprimiveis as $imprimivel)
        {
            $imprimivel[0]->imprimir();
        }
    }
   
}