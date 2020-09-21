<?php
final class Carro extends Veiculo
{
    protected $nome;
    protected $fabricante;

    public function __construct($nome, $cor, $porta,$roda)
    {
        parent::__construct($roda);
        $this->nome = $nome;
        $this->cor = $cor;
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

    public function setFabricante(Fabricante $f1)
    {
        $this->fabricante = $f1;
    }
    public function getFabricante()
    {
        return $this->fabricante;
    }

    public function acelerar($tempoDeAceleracao)
    {
        echo $tempoDeAceleracao;
    }

    public final function freia()
    {
        echo 'Se acelera, ele freia tambem';
    }
}