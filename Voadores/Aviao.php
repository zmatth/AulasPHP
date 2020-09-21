<?php

class Aviao implements Voador
{

    private $horas = 0;


    public function voar()
    {
        echo 'Estou voando como um aviao <br>';
        echo 'Horas voadas até agora: ' . ($this->horas+= 13) . '<br><br>';
    }
}