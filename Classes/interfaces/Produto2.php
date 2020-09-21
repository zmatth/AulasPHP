<?php

class Produto2 implements Orcavel
{
    private $nome;
    private $estoque;
    private $preco;


    public function constuct__($nome, $estoque, $preco)
    {
        $this->nome = $nome;
        $this->estoque = $estoque;
        $this->valor = $preco;

    }



    public function getPreco()
    {
        return $this->preco;
    }

}