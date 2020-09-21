<?php
abstract class Veiculo
{
    protected $roda;


    public function __construct($roda)
    {
        $this->roda = $roda;
    }

    public function getRoda()
    {
        return $this->roda;
    }

    abstract public function acelerar($tempoDeAceleracao);

}