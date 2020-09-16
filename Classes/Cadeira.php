<?php

class Cadeira
{
    private $tipo;
    private $encosto;
    private $assento;
    private $perna;

    public function __construct($tipo, $encosto, $assento, $perna)
    {
        $this->tipo = $tipo;
        $this->encosto = $encosto;
        $this->assento = $assento;
        $this->perna = $perna;
    }

    public function getTipo()
    {
        return $this->tipo;
    }

    public function setTipo($tipo)
    {
        $this->tipo = $tipo;
    }

    public function getEncosto()
    {
        return $this->encosto;
    }

    public function setEncosto($encosto)
    {
        $this->encosto = $encosto;
    }

    public function getAssento()
    {
        return $this->assento;
    }

    public function setAssento($assento)
    {
        $this->assento = $assento;
    }

    public function getPerna()
    {
        return $this->perna;
    }

    public function setPerna($perna)
    {
        $this->perna = $perna;
    }
}